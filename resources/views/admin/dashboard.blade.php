@extends('admin.main')
@section('title', 'Dashboard')
@section('stylesheet')

@endsection

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-color4">Dashboard</h3>
        </div>
    </div>

    <!-- ======= End Navbar ======= -->
    <section class="section pl-6 pr-6 pb-6">
        <div class="card bg-white shadow-md rounded-lg p-6">
            <div class="card-body">
                <h3 class="text-2xl font-bold text-color4 card-title" align="center" >Selamat Datang, {{ Auth::user()->nama }}</h3>
            </div>
        </div>
    </section>
    <!-- ======= End Navbar ======= -->

    <div class="page-content">

        {{-- @if($userRole == 'admin') --}}
        <section class="section pl-6 pr-6 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    {{-- <i class="fa-solid fa-newspaper mr-3 text-color3"></i> --}}
                    <h2 class="text-lg font-semibold text-color4"><a href="{{ route('admin.berita.index') }}">Total Berita</a></h2>
                    <p class="text-2xl text-color4 font-bold">{{ $totalBerita }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    {{-- <i class="fa-solid fa-list-ul mr-3 text-color3"></i> --}}
                    <h2 class="text-lg font-semibold text-color4"><a href="{{ route('admin.kategori.index') }}">Total Kategori</a></h2>
                    <p class="text-2xl text-color4 font-bold">{{ $totalKategori }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    {{-- <i class="fa-solid fa-user mr-2 text-color3"></i> --}}
                    <h2 class="text-lg font-semibold text-color4"><a href="#">Total Pengguna</a></h2>
                    <p class="text-2xl text-color4 font-bold">{{ $totalUser }}</p>
                </div>
            </div>
        </section>
        {{-- @endif --}}

        {{-- @if($userRole == 'editor') --}}
        {{-- <section class="section pl-6 pr-6 pb-6">
            <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md"> --}}
                    {{-- <i class="fa-solid fa-newspaper mr-3 text-color3"></i> --}}
                    {{-- <h2 class="text-lg font-semibold text-color4"><a href="{{ route('admin.berita.index') }}">Total Berita</a></h2>
                    <p class="text-2xl text-color4 font-bold">{{ $totalBerita }}</p>
                </div> --}}
                {{-- <div class="bg-white p-6 rounded-lg shadow-md"> --}}
                    {{-- <i class="fa-solid fa-list-ul mr-3 text-color3"></i> --}}
                    {{-- <h2 class="text-lg font-semibold text-color4"><a href="{{ route('admin.kategori.index') }}">Total Kategori</a></h2>
                    <p class="text-2xl text-color4 font-bold">{{ $totalKategori }}</p>
                </div>
            </div> --}}
        {{-- </section> --}}
        {{-- @endif --}}
        
        <!-- ======= End Content ======= -->
    </div>
    @endsection


@section('script')

@endsection