<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil data dashboard
        $totalBerita = Berita::count();
        $totalKategori = Kategori::count();
        $totalUser = User::count();
        
        // // Mendapatkan data pengguna yang sedang login dengan eager loading role
        // $user = User::with('role')->find(Auth::id());
        // $userRole = $user->role->nama; // Ambil nama role sebagai string
        
        // Mengirimkan data ke view
        return view('admin.dashboard', compact('totalBerita', 'totalKategori', 'totalUser'));
    }
}
