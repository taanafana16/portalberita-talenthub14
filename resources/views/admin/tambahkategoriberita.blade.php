@extends('admin.main')
@section('title', 'Tambah Kategori Berita')
@section('stylesheet')

@endsection

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-custom-dark-green">Tambah Data Kategori Berita</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                        class="text-custom-footer hover:underline">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.kategori.index') }}"
                        class="text-custom-footer hover:underline">Data Kategori Berita</a></li>
                <li class="breadcrumb-item active text-custom-dark-green font-semibold" aria-current="page">Tambah Kategori
                    Berita</li>
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
                <h4 class="text-lg font-semibold text-custom-dark-green">Tambah Data Kategori Berita</h4>
            </div>
            <!-- ======= End Card Header ======= -->
            <!-- ======= End Card Header ======= -->
            <!-- ======= Form Tambah Data Berita ======= -->
            <!-- ======= Card body ======= -->
            <div class="card-body">
                <!-- ======= Row ======= -->
                <div class="container mx-auto p-4">
                    <!-- ======= Form Tambah Data Berita ======= -->
                    <form class="bg-white rounded-lg" action="" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- ======= Grid Container ======= -->
                        <div class="grid grid-cols-1">
                            <!-- ======= Nama Kategori Berita ======= -->
                            <div class="form-group">
                                <label for="namakategoriberita" class="block text-custom-color-text-table">Nama Kategori
                                    Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-custom-footer sm:text-sm">
                                        <i class="fa-solid fas fa-heading"></i>
                                    </span>
                                    <input type="text" id="namakategoriberita"
                                        class="placeholder-green block w-full inline-flex px-3 border rounded-none rounded-r-md text-custom-footer"
                                        placeholder="Masukkan Nama Kategori Berita" name="namakategoriberita">
                                </div>
                            </div>

                            <!-- ======= Deskripsi Kategori Berita ======= -->
                            <div class="form-group">
                                <label for="kolomdeskripsikategoriberita"
                                    class="block text-custom-color-text-table">Deskripsi Kategori Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-custom-footer sm:text-sm">
                                        <i class="fa-solid fas fa-file-alt"></i>
                                    </span>
                                    <textarea id="kolomdeskripsikategoriberita"
                                        class="form-input block w-full px-3 rounded-none rounded-r-md placeholder-green block w-full border text-custom-footer"
                                        name="deskripsikategoriberita" rows="3" placeholder="Masukkan Deskripsi Kategori Berita"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- ======= End Grid Container ======= -->
                        <!-- ======= End Row ======= -->

                        <!-- ======= Button ======= -->
                        <!-- ======= Button ======= -->
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="btn icon btn-outline-info text-blue-500 border border-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white">Submit</button>
                            <button type="reset"
                                class="btn icon btn-outline-gray text-gray-700 border border-gray-700 px-4 py-2 rounded hover:bg-gray-700 hover:text-white ml-2">Reset</button>
                        </div>
                        <!-- ======= End Button ======= -->
                        <!-- ======= End Button ======= -->
                    </form>
                    <!-- ======= End Form Tambah Data Berita ======= -->
                </div>
                <!-- ======= End Card body ======= -->
            </div>
            <!-- ======= End Card ======= -->
            <!-- ======= End Form Tambah Data Berita ======= -->
            <!-- ======= End Card Body ======= -->
        </div>
    </section>

@endsection
