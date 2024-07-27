@extends('admin.main')
@section('title', 'Detail Kategori Berita')
@section('stylesheet')

@endsection

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-color4">Detail Kategori Berita</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="text-color6 hover:underline">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.kategori.index') }}" class="text-color6 hover:underline">Data Kategori
                        Berita</a>
                </li>
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Detail Kategori Berita</li>
            </ol>
        </nav>
        <!-- ======= End Breadcrumb ======= -->
    </div>

    <!-- ======= Data Table ======= -->
    <section class="section pl-6 pr-6">
        <!-- ======= Card ======= -->
        <div class="card bg-white shadow-md rounded-lg p-2">
            <!-- ======= Card Header ======= -->
            <div class="card-header px-4 py-2 border-b">
                <h4 class="text-lg font-semibold text-color4">Detail Kategori Berita</h4>
            </div>
            <div class="container mx-auto p-4">
                <!-- ======= Form Detail Kategori Berita ======= -->
                <form class="bg-white rounded-lg" action="" enctype="multipart/form-data">
                    @csrf

                    <!-- ======= Grid Container ======= -->
                    <div class="grid grid-cols-1">
                        <!-- ======= Nama Kategori Berita ======= -->
                        <div class="form-group">
                            <label for="nama" class="block text-color4">Nama Kategori
                                Berita</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fas fa-heading"></i>
                                </span>
                                <input type="text" id="nama"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $kategori->nama }}" readonly name="nama">
                            </div>
                        </div>

                        <!-- ======= Deskripsi Kategori Berita ======= -->
                        <div class="form-group">
                            <label for="deskripsi" class="block text-color4">Deskripsi Kategori
                                Berita</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fas fa-file-alt"></i>
                                </span>
                                <textarea id="deskripsi"
                                    class="form-input block w-full px-3 rounded-none rounded-r-md placeholder-green block w-full border border-color1 text-color3 focus:ring-color3 focus:border-color3"
                                    name="deskripsi" rows="3" readonly>{{ $kategori->deskripsi }}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- ======= End Grid Container ======= -->
                    <!-- ======= End Row ======= -->
                </form>
                <!-- ======= End Form Detail Kategori Berita ======= -->
            </div>
        </div>
    </section>

@endsection
