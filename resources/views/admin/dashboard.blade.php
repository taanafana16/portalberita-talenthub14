@extends('admin.main')
@section('title', 'Dashboard Admin')
@section('stylesheet')

@endsection

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-custom-dark-green">Dashboard</h3>
        </div>
    </div>

    <!-- ======= End Navbar ======= -->
    <section class="section pl-6 pr-6 pb-6">
        <div class="card bg-white shadow-md rounded-lg p-6">
            <div class="card-body">
                <h3 class="text-2xl font-bold text-custom-dark-green card-title" align="center" >Selamat Datang,</h3>
            </div>
        </div>
    </section>
    <!-- ======= End Navbar ======= -->

    <div class="page-content">

        <section class="section pl-6 pr-6 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    {{-- <i class="fa-solid fa-newspaper mr-3 text-custom-green"></i> --}}
                    <h2 class="text-lg font-semibold text-custom-dark-green"><a href="{{ route('admin.berita.index') }}">Total Berita</a></h2>
                    <p class="text-2xl text-custom-dark-green font-bold">160</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    {{-- <i class="fa-solid fa-list-ul mr-3 text-custom-green"></i> --}}
                    <h2 class="text-lg font-semibold text-custom-dark-green"><a href="{{ route('admin.kategori.index') }}">Total Kategori</a></h2>
                    <p class="text-2xl text-custom-dark-green font-bold">10</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    {{-- <i class="fa-solid fa-user mr-2 text-custom-green"></i> --}}
                    <h2 class="text-lg font-semibold text-custom-dark-green"><a href="#">Total Pengguna</a></h2>
                    <p class="text-2xl text-custom-dark-green font-bold">6</p>
                </div>
            </div>
                    <!-- ======= End Card ======= -->
        </section>
        <!-- ======= End Content ======= -->
    </div>
    @endsection


@section('script')

@endsection