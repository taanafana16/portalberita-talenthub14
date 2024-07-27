@extends('admin.main')
@section('title', 'Tambah Kategori Berita')

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
            <h3 class="text-2xl font-semibold text-color4">Tambah Data Kategori Berita</h3>
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
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Tambah Kategori Berita</li>
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
                <h4 class="text-lg font-semibold text-color4">Tambah Data Kategori Berita</h4>
            </div>
            <!-- ======= End Card Header ======= -->

            <!-- ======= Card body ======= -->
            <div class="container mx-auto p-4">
                <!-- ======= Form Tambah Data Kategori Berita ======= -->
                <form class="bg-white rounded-lg" action="{{ route('admin.kategori.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- ======= Grid Container ======= -->
                    <div class="grid grid-cols-1">
                        <!-- ======= Nama Kategori Berita ======= -->
                        <div class="form-group">
                            <label for="nama" class="block text-color4">Nama Kategori
                                Berita</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1 border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fas fa-heading"></i>
                                </span>
                                <input type="text" id="nama"
                                    class="placeholder-green block w-full inline-flex px-3 border border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    placeholder="Masukkan Nama Kategori Berita" name="nama">
                            </div>
                        </div>

                        <!-- ======= Deskripsi Kategori Berita ======= -->
                        <div class="form-group">
                            <label for="deskripsi" class="block text-color4">Deskripsi Kategori Berita</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1 border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fas fa-file-alt"></i>
                                </span>
                                <textarea id="deskripsi"
                                    class="form-input block w-full px-3 rounded-none rounded-r-md placeholder-green block w-full border border-color1 text-color3 focus:ring-color3 focus:border-color3"
                                    name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Kategori Berita"></textarea>
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
                <!-- ======= End Form Tambah Data Kategori Berita ======= -->

            </div>
        </div>
        <!-- ======= End Card body ======= -->

        <!-- ======= End Card ======= -->
    </section>

@endsection
