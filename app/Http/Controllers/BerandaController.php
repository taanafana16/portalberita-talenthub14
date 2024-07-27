<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil semua kategori dan pengguna
        $kategori = Kategori::all();
        $user = User::all();
        $berita = Berita::all(); // Ambil semua berita

        // Mengubah path file menjadi URL akses publik untuk semua berita
        foreach ($berita as $item) {
            $item->foto1_url = Storage::url($item->foto1);
            $item->foto2_url = $item->foto2 ? Storage::url($item->foto2) : null;
            $item->foto3_url = $item->foto3 ? Storage::url($item->foto3) : null;
        }

        // Kembalikan view dengan data yang diperlukan
        return view('user/landingpage', compact('kategori', 'user', 'berita'));
    }

    public function tentang()
    {
        return view('user/tentang');
    }

    public function kontak()
    {
        return view('user/kontak');
    }

    public function detail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user/detailberita', compact('berita'));
    }

    public function detailkat($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user/detailkat', compact('berita'));
    }
}
