<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dari model
        $berita = Berita::all();
        $kategori = Kategori::all();
        return view('admin/berita/index', compact('berita', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua kategori dari database
        $kategori = Kategori::all();
        $user = User::all();
        return view('admin/berita/tambah', compact('kategori', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judulberita' => 'required',
            'tanggalpublish' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'deskripsiberita' => 'required',
            'foto1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'captionfoto1' => 'required',
            'foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'captionfoto2' => 'nullable',
            'foto3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'captionfoto3' => 'nullable',
            'user_id' => 'nullable|exists:users,id',
        ]);

        // Simpan gambar dengan path khusus
        $imagePath1 = $request->file('foto1')->storeAs('public/uploads/images/fotoberita', 'foto1_' . time() . '.' . $request->file('foto1')->getClientOriginalExtension());

        $imagePath2 = $request->hasFile('foto2')
            ? $request->file('foto2')->storeAs('public/uploads/images/fotoberita', 'foto2_' . time() . '.' . $request->file('foto2')->getClientOriginalExtension())
            : null;

        $imagePath3 = $request->hasFile('foto3')
            ? $request->file('foto3')->storeAs('public/uploads/images/fotoberita', 'foto3_' . time() . '.' . $request->file('foto3')->getClientOriginalExtension())
            : null;
        // Simpan data berita
        Berita::create([
            'judulberita' => $request->judulberita,
            'tanggalpublish' => $request->tanggalpublish,
            'kategori_id' => $request->kategori_id,
            'deskripsiberita' => $request->deskripsiberita,
            'foto1' => $imagePath1,
            'captionfoto1' => $request->captionfoto1,
            'foto2' => $imagePath2,
            'captionfoto2' => $request->captionfoto2,
            'foto3' => $imagePath3,
            'captionfoto3' => $request->captionfoto3,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Metode yang digunakan untuk menampilkan detail data produk
        $berita = Berita::find($id);

        // Mengubah path file menjadi URL akses publik
        $berita->foto1_url = Storage::url($berita->foto1);
        $berita->foto2_url = $berita->foto2 ? Storage::url($berita->foto2) : null;
        $berita->foto3_url = $berita->foto3 ? Storage::url($berita->foto3) : null;

        return view('admin/berita/detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();
        $user = User::all();
        // Metode yang digunakan untuk menampilkan detail data produk
        $berita = Berita::find($id);

        // Mengubah path file menjadi URL akses publik
        $berita->foto1_url = Storage::url($berita->foto1);
        $berita->foto2_url = $berita->foto2 ? Storage::url($berita->foto2) : null;
        $berita->foto3_url = $berita->foto3 ? Storage::url($berita->foto3) : null;

        return view('admin.berita.edit', [
            'berita' => $berita,
            'kategori' => $kategori,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judulberita' => 'nullable|string',
            'tanggalpublish' => 'nullable|date',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'deskripsiberita' => 'nullable|string',
            'foto1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'captionfoto1' => 'nullable|string',
            'foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'captionfoto2' => 'nullable|string',
            'foto3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'captionfoto3' => 'nullable|string',
            'user_id' => 'nullable|exists:users,id',
        ]);

        // Ambil data berita yang akan diperbarui
        $berita = Berita::findOrFail($id);

        // Perbarui data yang diubah
        $berita->judulberita = $request->input('judulberita', $berita->judulberita);
        $berita->tanggalpublish = $request->input('tanggalpublish', $berita->tanggalpublish);
        $berita->kategori_id = $request->input('kategori_id', $berita->kategori_id);
        $berita->deskripsiberita = $request->input('deskripsiberita', $berita->deskripsiberita);
        $berita->user_id = $request->input('user_id', $berita->user_id);

        // Periksa dan simpan foto baru jika ada
        if ($request->hasFile('foto1')) {
            $imagePath1 = $request->file('foto1')->storeAs('public/uploads/images/fotoberita', 'foto1_' . time() . '.' . $request->file('foto1')->getClientOriginalExtension());
            $berita->foto1 = $imagePath1;
        }
        $berita->captionfoto1 = $request->input('captionfoto1', $berita->captionfoto1);

        if ($request->hasFile('foto2')) {
            $imagePath2 = $request->file('foto2')->storeAs('public/uploads/images/fotoberita', 'foto2_' . time() . '.' . $request->file('foto2')->getClientOriginalExtension());
            $berita->foto2 = $imagePath2;
        }
        $berita->captionfoto2 = $request->input('captionfoto2', $berita->captionfoto2);

        if ($request->hasFile('foto3')) {
            $imagePath3 = $request->file('foto3')->storeAs('public/uploads/images/fotoberita', 'foto3_' . time() . '.' . $request->file('foto3')->getClientOriginalExtension());
            $berita->foto3 = $imagePath3;
        }
        $berita->captionfoto3 = $request->input('captionfoto3', $berita->captionfoto3);

        // Simpan perubahan ke database
        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Metode yang digunakan untuk menghapus data berita
        $berita = Berita::findOrFail($id); // Berita adalah model 
        $berita->delete();

        // Set pesan sukses
        session()->flash('success', 'Data Berita Berhasil Dihapus.');

        return redirect(route('admin.berita.index'));
    }
}
