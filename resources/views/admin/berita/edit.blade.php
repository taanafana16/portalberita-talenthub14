@extends('admin.main')
@section('title', 'Edit Berita')
@section('content')
    @if (session('error'))
        <div id="toast-danger"
            class="fixed right-0 top-0 m-6 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 z-50"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('error') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-color4">Edit Berita</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                        class="text-color6 hover:underline">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}"
                        class="text-color6 hover:underline">Data Berita</a></li>
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Edit Berita</li>
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
                <h4 class="text-lg text-color4 font-semibold">Edit Berita</h4>
            </div>
            <!-- ======= End Card Header ======= -->
            <div class="card-body">
                <!-- ======= Row ======= -->
                <div class="container mx-auto p-4">
                    <!-- ======= Form Edit Data Berita ======= -->
                    <form class="bg-white rounded-lg" action="{{ route('admin.berita.update', $berita->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <!-- ======= Grid Container ======= -->
                        <div class="grid grid-cols-1 gap-2">
                            <!-- ======= Judul Berita ======= -->
                            <div class="form-group">
                                <label for="kolomjudulberita" class="block text-color4">Judul Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fas fa-heading"></i>
                                    </span>
                                    <input type="text" id="kolomjudulberita"
                                        class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->judulberita }}" name="judulberita">
                                </div>
                            </div>

                            <!-- ======= Tanggal Publish ======= -->
                            <div class="form-group">
                                <label for="tanggalpublish" class="block text-color4">Tanggal Publish</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-regular fa-calendar-days"></i>
                                    </span>
                                    <input type="date" id="tanggalpublish"
                                        class="form-input flex-1 px-3 block w-full rounded-none  border-color1 rounded-r-md text-color3 border focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->tanggalpublish }}" name="tanggalpublish">
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
                                    <select id="kategori_id"
                                        class="form-select flex-1 block w-full inline-flex px-3 border-color1 rounded-none rounded-r-md text-color3 border focus:ring-color3 focus:border-color3"
                                        name="kategori_id">
                                        <option value="" disabled>Pilih Kategori Berita</option>
                                        @foreach ($kategori as $kelompok)
                                            <option value="{{ $kelompok->id }}"
                                                {{ $kelompok->id == old('kategori_id', $berita->kategori_id) ? 'selected' : '' }}>
                                                {{ $kelompok->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- ======= Deskripsi Berita ======= -->
                            <div class="form-group">
                                <label for="kolomdeskripsiberita" class="block text-color4">Deskripsi Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fas fa-file-alt"></i>
                                    </span>
                                    <textarea id="kolomdeskripsiberita"
                                        class="form-input block w-full px-3 rounded-none rounded-r-md placeholder-green block w-full border  border-color1 text-color3 focus:ring-color3 focus:border-color3"
                                        name="deskripsiberita" rows="3">{{ $berita->deskripsiberita }}</textarea>
                                </div>
                            </div>

                            <!-- ======= Foto 1 ======= -->
                            <div class="form-group">
                                <label for="kolomfoto1" class="block text-color4">Foto 1</label>
                                <div class="col-md-3">
                                    <img src="{{ $berita->foto1_url }}" alt="Foto 1" width="200px" align="center">
                                </div>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-upload"></i>
                                    </span>
                                    <input type="file" id="kolomfoto1"
                                        class="form-input flex-1 block w-full rounded-none rounded-r-md sm:text-sm text-color3 border  border-color1 focus:ring-color3 focus:border-color3"
                                        name="foto1" accept="image/jpeg, image/png, image/jpg">
                                </div>
                                <small class="text-red-500 text-xs">* Maximal Ukuran File Sebesar 2 MB dan Tipe File yang
                                    diupload berupa png, jpeg, atau jpg</small>
                            </div>

                            <!-- ======= Caption Foto 1 ======= -->
                            <div class="form-group">
                                <label for="captionfoto1" class="block text-color4">Keterangan Foto 1</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-closed-captioning"></i>
                                    </span>
                                    <input type="text" id="captionfoto1"
                                        class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->captionfoto1 }}" name="captionfoto1">
                                </div>
                            </div>

                            <!-- ======= Foto 2 ======= -->
                            <div class="form-group">
                                <label for="kolomfoto2" class="block text-color4">Foto 2</label>
                                <div class="col-md-3">
                                    <img src="{{ $berita->foto2_url }}" alt="Foto 1" width="200px" align="center">
                                </div>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-upload"></i>
                                    </span>
                                    <input type="file" id="kolomfoto2"
                                        class="form-input flex-1 block w-full rounded-none rounded-r-md sm:text-sm text-color3 border  border-color1 focus:ring-color3 focus:border-color3"
                                        name="foto2" accept="image/jpeg, image/png, image/jpg">
                                </div>
                                <small class="text-red-500 text-xs">* Maximal Ukuran File Sebesar 2 MB dan Tipe File yang
                                    diupload berupa png, jpeg, atau jpg</small>
                            </div>

                            <!-- ======= Caption Foto 2 ======= -->
                            <div class="form-group">
                                <label for="captionfoto2" class="block text-color4">Keterangan Foto 2</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-closed-captioning"></i>
                                    </span>
                                    <input type="text" id="captionfoto2"
                                        class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->captionfoto2 }}" name="captionfoto2">
                                </div>
                            </div>

                            <!-- ======= Foto 3 ======= -->
                            <div class="form-group">
                                <label for="kolomfoto3" class="block text-color4">Foto 3</label>
                                <div class="col-md-3">
                                    <img src="{{ $berita->foto3_url }}" alt="Foto 1" width="200px" align="center">
                                </div>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-upload"></i>
                                    </span>
                                    <input type="file" id="kolomfoto3"
                                        class="form-input flex-1 block w-full rounded-none rounded-r-md sm:text-sm text-color3 border  border-color1 focus:ring-color3 focus:border-color3"
                                        name="foto3" accept="image/jpeg, image/png, image/jpg">
                                </div>
                                <small class="text-red-500 text-xs">* Maximal Ukuran File Sebesar 2 MB dan Tipe File yang
                                    diupload berupa png, jpeg, atau jpg</small>
                            </div>

                            <!-- ======= Caption Foto 3 ======= -->
                            <div class="form-group">
                                <label for="captionfoto3" class="block text-color4">Keterangan Foto 3</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-closed-captioning"></i>
                                    </span>
                                    <input type="text" id="captionfoto3"
                                        class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                        value="{{ $berita->captionfoto3 }}" name="captionfoto3">
                                </div>
                            </div>

                            <!-- ======= Penulis Berita ======= -->
                            <div class="form-group">
                                <label for="user_id" class="block text-color4">Penulis Berita</label>
                                <div class="flex mt-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                        <i class="fa-solid fa-list-ul"></i>
                                    </span>
                                    <select id="user_id"
                                        class="form-select flex-1 block w-full inline-flex px-3 border-color1 rounded-none rounded-r-md text-color3 border focus:ring-color3 focus:border-color3"
                                        name="user_id">
                                        <option value="" disabled>Pilih Penulis Berita</option>
                                        @foreach ($user as $penulis)
                                            <option value="{{ $penulis->id }}"
                                                {{ $penulis->id == old('user_id', $berita->user_id) ? 'selected' : '' }}>
                                                {{ $penulis->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- ======= End Grid Container ======= -->

                        <!-- ======= Button ======= -->
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="btn icon btn-outline-info text-blue-500 border border-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white">Submit</button>
                            <button type="reset"
                                class="btn icon btn-outline-gray text-gray-700 border border-gray-700 px-4 py-2 rounded hover:bg-gray-700 hover:text-white ml-2">Reset</button>
                        </div>
                        <!-- ======= End Button ======= -->
                    </form>
                    <!-- ======= End Form Edit Data Berita ======= -->
                </div>
                <!-- ======= End Card body ======= -->
            </div>
        </div>
    </section>
@endsection
