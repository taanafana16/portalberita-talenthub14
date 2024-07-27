@extends('admin.main')
@section('title', 'Detail Berita')

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-color4">Detail Berita</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                        class="text-color6 hover:underline">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}"
                        class="text-color6 hover:underline">Data Berita</a></li>
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Detail Berita</li>
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
                <h4 class="text-lg text-color4 font-semibold">Detail Berita</h4>
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
                        <div class="grid grid-cols-1 gap-2">
                            <!-- ======= Judul Berita ======= -->
                            <div class="form-group">
                                <label for="judulberita" class="block text-color4">Judul Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-color6 sm:text-sm border-color1 focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fas fa-heading"></i>
                                    </span>
                                    <input type="text" id="judulberita"
                                        class="placeholder-green block w-full inline-flex px-3 border rounded-none rounded-r-md text-color3 border-color1 focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->judulberita }}" name="judulberita" readonly>
                                </div>
                            </div>

                            <!-- ======= Tanggal Publish ======= -->
                            <div class="form-group">
                                <label for="tanggalpublish" class="block text-color4">Tanggal
                                    Publish</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-color3 sm:text-sm border-color1 focus:ring-color3 focus:border-color3">
                                        <i class="fa-regular fa-calendar-days"></i>
                                    </span>
                                    <input type="date" id="tanggalpublish"
                                        class="form-input flex-1 px-3 block w-full rounded-none rounded-r-md text-color3 border border-color1 focus:ring-color3 focus:border-color3"
                                        name="tanggalpublish" value="{{ $berita->tanggalpublish }}" readonly>
                                </div>
                            </div>

                            <!-- ======= Kategori Berita ======= -->
                            <div class="form-group">
                                <label for="kategori_id" class="block text-color4">Kategori Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-list-ul"></i>
                                    </span>
                                    <input type="text" id="kategori_id"
                                        class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->kategori ? $berita->kategori->nama : 'Tidak ada kategori' }}"
                                        name="kategori_id">
                                </div>
                            </div>

                            <!-- ======= Deskripsi Berita ======= -->
                            <div class="form-group">
                                <label for="deskripsiberita" class="block text-color4">Deskripsi Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1 text-color3 sm:text-sm border-color1 focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fas fa-file-alt"></i>
                                    </span>
                                    <textarea id="deskripsiberita"
                                        class="form-input block w-full px-3 rounded-none rounded-r-md placeholder-green block w-full border text-color3 border-color1 focus:ring-color3 focus:border-color3"
                                        name="deskripsiberita" rows="3" readonly>{{ $berita->deskripsiberita }}</textarea>
                                </div>
                            </div>

                            <!-- ======= Foto 1 ======= -->
                            @if ($berita->foto1_url)
                                <div class="form-group">
                                    <label for="foto1" class="block text-color4">Foto 1</label>
                                    <div class="flex mt-1 items-center justify-center">
                                        <div class="col-md-3">
                                            <img src="{{ $berita->foto1_url }}" alt="Foto 1" width="200px"
                                                align="center">
                                            <p class="flex mt-1 items-center justify-center block text-color4">
                                                {{ $berita->captionfoto1 }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- ======= Foto 2 ======= -->
                            @if ($berita->foto2_url)
                                <div class="form-group">
                                    <label for="foto2" class="block text-color4">Foto 2</label>
                                    <div class="flex mt-1 items-center justify-center">
                                        <div class="col-md-3">
                                            <img src="{{ $berita->foto2_url }}" alt="Foto 2" width="200px"
                                                align="center">
                                            <p class="flex mt-1 items-center justify-center block text-color4">
                                                {{ $berita->captionfoto2 }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- ======= Foto 3 ======= -->
                            @if ($berita->foto3_url)
                                <div class="form-group">
                                    <label for="foto3" class="block text-color4">Foto 3</label>
                                    <div class="flex mt-1 items-center justify-center">
                                        <div class="col-md-3">
                                            <img src="{{ $berita->foto3_url }}" alt="Foto 3" width="200px"
                                                align="center">
                                            <p class="flex mt-1 items-center justify-center block text-color4">
                                                {{ $berita->captionfoto3 }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <!-- ======= End Grid Container ======= -->

                    </form>
                    <!-- ======= End Form Tambah Data Berita ======= -->

                </div>
                <!-- ======= End Card body ======= -->
            </div>
        </div>
    </section>

@endsection
