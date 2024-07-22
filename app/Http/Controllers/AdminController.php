<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Logic untuk mengambil data dashboard
        return view('admin.dashboard');
    }

    public function mengelolaBerita()
    {
        // Logic untuk mengambil data berita
        return view('admin.berita');
    }

    public function mengelolaKategori()
    {
        // Logic untuk mengambil data kategori
        return view('admin.kategori');
    }

    public function pengaturan()
    {
        // Logic untuk mengambil data pengaturan
        return view('admin.pengaturan');
    }
}
