<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kategori;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Mengambil data dari model
        $kategori = Kategori::all(); // pastikan 'Category' adalah model yang benar
        return view('admin/kategori/index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/kategori/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect dengan pesan sukses atau error
        if ($kategori) {
            return redirect()->route('admin.kategori.index')->with('success', 'Data Kategori Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.kategori.create')->with('error', 'Data Kategori Tidak Berhasil Ditambahkan');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        // Kembalikan tampilan dengan data kategori
        return view('admin/kategori/detail', compact('kategori'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        $kategori->update($request->all());
        return redirect()->route('admin.kategori.index')->with('success', 'Data Kategori Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori,)
    {
        $kategori->delete();
        return redirect()->route('admin.kategori.index')->with('success', 'Data Kategori Berhasil Di Hapus');
    }
}
