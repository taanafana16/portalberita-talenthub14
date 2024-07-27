<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('user/landingpage');
    }

    public function tentang()
    {
        return view('user/tentang');
    }

    public function kontak()
    {
        return view('user/kontak');
    }
}
