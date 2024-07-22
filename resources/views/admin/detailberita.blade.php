@extends('admin.main')
@section('title', 'Detail Berita')
@section('stylesheet')

@endsection

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-custom-dark-green">Detail Berita</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                        class="text-custom-footer hover:underline">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}"
                        class="text-custom-footer hover:underline">Data Berita</a></li>
                <li class="breadcrumb-item active text-custom-dark-green font-semibold" aria-current="page">Detail Berita
                </li>
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
                <h4 class="text-lg text-custom-dark-green font-semibold">Detail Berita</h4>
            </div>
            <!-- ======= End Card Header ======= -->
            <!-- Your table and content here -->
            <div class="card-body">
                <!-- ======= Row ======= -->
                <div class="container mx-auto p-4">
                    <!-- ======= Form Tambah Data Berita ======= -->
                    <form class="bg-white rounded-lg" action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- ======= Grid Container ======= -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <!-- ======= Judul Berita ======= -->
                            <div class="form-group">
                                <label for="kolomjudulberita" class="block text-custom-color-text-table">Judul
                                    Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-custom-footer sm:text-sm">
                                        <i class="fa-solid fas fa-heading"></i>
                                    </span>
                                    <input type="text" id="kolomjudulberita"
                                        class="placeholder-green block w-full inline-flex px-3 border rounded-none rounded-r-md text-custom-footer"
                                        value="#" name="judulberita" readonly>
                                </div>
                            </div>

                            <!-- ======= Foto 1 ======= -->
                            <div class="form-group">
                                <label for="kolomfoto1" class="block text-custom-color-text-table">Foto 1</label>
                                <div class="flex mt-1">
                                    <div class="col-md-3">
                                        <img src="#"
                                            alt="Foto 1" width="100px" align="center" readonly>
                                    </div>
                                </div>
                            </div>

                            <!-- ======= Kategori Berita ======= -->
                            <div class="form-group">
                                <label for="kategoriberita" class="block text-custom-color-text-table">Kategori
                                    Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-custom-footer sm:text-sm">
                                        <i class="fa-solid fa-list-ul"></i>
                                    </span>
                                    <select id="kategoriberita"
                                        class="form-select flex-1 block w-full inline-flex px-3 rounded-none rounded-r-md text-custom-footer border"
                                        name="kategoriberita" readonly>
                                        <option disabled selected>Pilih Kategori Berita</option>
                                        <option value="kategori1">Kategori 1</option>
                                        <option value="kategori2">Kategori 2</option>
                                    </select>
                                </div>
                            </div>

                            <!-- ======= Foto 3 ======= -->
                            <div class="form-group">
                                <label for="kolomfoto2" class="block text-custom-color-text-table">Foto 2</label>
                                <div class="flex mt-1">
                                    <div class="col-md-3">
                                        <img src="#"
                                            alt="Foto 2" width="100px" align="center" readonly>
                                    </div>
                                </div>
                            </div>

                            <!-- ======= Tanggal Publish ======= -->
                            <div class="form-group">
                                <label for="tanggalpublish" class="block text-custom-color-text-table">Tanggal
                                    Publish</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-custom-footer sm:text-sm">
                                        <i class="fa-regular fa-calendar-days"></i>
                                    </span>
                                    <input type="date" id="tanggalpublish"
                                        class="form-input flex-1 px-3 block w-full rounded-none rounded-r-md text-custom-footer border"
                                        name="tanggalpublish" value="#" readonly>
                                </div>
                            </div>

                            <!-- ======= Foto 2 ======= -->
                            <div class="form-group">
                                <label for="kolomfoto3" class="block text-custom-color-text-table">Foto 3</label>
                                <div class="flex mt-1">
                                    <div class="col-md-3">
                                        <img src="#"
                                            alt="Foto 3" width="100px" align="center" readonly>
                                    </div>
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
        </div>
    </section>

@endsection
