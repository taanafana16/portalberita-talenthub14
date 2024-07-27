<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dari model
        $user = User::all(); // pastikan 'Category' adalah model yang benar
        return view('admin/pengguna/index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil data dari model
        $role = Role::all(); // pastikan 'Category' adalah model yang benar
        return view('admin/pengguna/tambah', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nohp' => 'nullable',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto tidak lagi wajib
            'role_id' => 'required|exists:roles,id',
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('user', 'public');
        } else {
            $fotoPath = 'user/defaultprofil.png'; // Path ke foto default
        }

        // Create user
        $user = User::create([
            'nama' => $validatedData['nama'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'nohp' => $validatedData['nohp'],
            'alamat' => $validatedData['alamat'],
            'foto' => $fotoPath,
            'role_id' => $validatedData['role_id'],
        ]);

        // Redirect dengan pesan sukses atau error
        if ($user) {
            return redirect()->route('admin.user.index')->with('success', 'Data User Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.user.create')->with('error', 'Data User Tidak Berhasil Ditambahkan');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Kembalikan tampilan dengan data pengguna
        return view('admin/pengguna/detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Mengambil data dari model
        $role = Role::all(); // pastikan 'Category' adalah model yang benar
        return view('admin/pengguna/edit', compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'nullable',
            'username' => 'nullable',
            'email' => 'nullable|email',
            'password' => 'nullable', // Password tidak wajib diupdate
            'nohp' => 'nullable',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto tidak wajib
            'role_id' => 'nullable|exists:roles,id',
        ]);

        // Temukan pengguna yang akan diupdate
        $user = User::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto && $user->foto !== 'user/defaultprofil.png') {
                Storage::disk('public')->delete($user->foto);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('user', 'public');
        } else {
            // Jika tidak ada foto baru, gunakan foto yang sudah ada
            $fotoPath = $user->foto ?: 'user/defaultprofil.png';
        }

        // Update data pengguna
        $user->update(array_filter([
            'nama' => $validatedData['nama'] ?? $user->nama,
            'username' => $validatedData['username'] ?? $user->username,
            'email' => $validatedData['email'] ?? $user->email,
            'password' => $validatedData['password'] ? bcrypt($validatedData['password']) : $user->password,
            'nohp' => $validatedData['nohp'] ?? $user->nohp,
            'alamat' => $validatedData['alamat'] ?? $user->alamat,
            'foto' => $fotoPath,
            'role_id' => $validatedData['role_id'] ?? $user->role_id,
        ]));

        // Redirect dengan pesan sukses
        return redirect()->route('admin.user.index')->with('success', 'Data User Berhasil Diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user,)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'Data User Berhasil Di Hapus');
    }
}
