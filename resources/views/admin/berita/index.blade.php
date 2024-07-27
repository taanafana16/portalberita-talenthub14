@extends('admin.main')
@section('title', 'Berita')

@section('content')

    @if (session('success'))
        <div id="toast-success"
            class="fixed right-0 top-0 m-6 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 z-50"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
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
            <h3 class="text-2xl font-semibold text-color4">Data Berita</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end"">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="text-color6 hover:underline">Dashboard</a>
                </li>
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Data Berita</li>
            </ol>
        </nav>
        <!-- ======= End Breadcrumb ======= -->
    </div>

    <div class="page-content">
        <section class="section pl-6 pr-6 pb-6">
            <div class="card bg-white shadow-md rounded-lg p-6">
                <div class="card-body">
                    <a href="{{ route('admin.berita.create') }}"
                        class="btn btn-outline-success text-green-500 border border-green-500 px-4 py-2 rounded-md hover:bg-green-500 hover:text-white transition">
                        <i class="fa-solid fa-user-plus"></i> Tambah Data Berita
                    </a>
                </div>
            </div>
        </section>

        <!-- ======= Data Table ======= -->
        <section class="section pl-6 pr-6">

            <!-- ======= Card ======= -->
            <div class="card bg-white shadow-md rounded-lg p-2">

                <!-- ======= Card Header ======= -->
                <div class="card-header px-4 py-2 border-b">
                    <h4 class="text-lg text-color4 font-semibold">Data Berita</h4>
                </div>
                <!-- ======= End Card Header ======= -->

                <!-- ======= Card Body======= -->
                <div class="card px-4 py-2 pt-4 pb-4">

                    <!-- ======= Tabel Data Berita ======= -->
                    <div
                        class="flex items-center justify-end flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white text-color4 pb-4">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="text" id="table-search-users"
                                class="block p-2 ps-10 text-sm text-color4 border border-color4 rounded-lg w-80 bg-gray-50 focus:ring-color4 focus:border-color4"
                                placeholder="Cari">
                        </div>
                    </div>

                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-color7 border-b">
                            <thead class="text-xs text-color7 font-bold uppercase bg-color6 text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3">No</th>
                                    <th scope="col" class="px-6 py-3">Judul Berita</th>
                                    <th scope="col" class="px-6 py-3">Tanggal Publish</th>
                                    <th scope="col" class="px-6 py-3">Kategori Berita</th>
                                    <th scope="col" class="px-6 py-3">Penulis Berita</th>
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($berita as $news)
                                    <tr class="bg-white border-b">
                                        <td scope="row" class="px-6 py-4 font-medium text-color4">{{ $no++ }}
                                        </td>
                                        <td class="px-6 py-4">{{ $news->judulberita }}</td>
                                        <td class="px-6 py-4">{{ $news->tanggalpublish }}</td>
                                        <td class="px-6 py-4">{{ $news->kategori->nama }}</td>
                                        <td class="px-6 py-4">{{ $news->user->nama }}</td>
                                        <td class="px-6 py-4">
                                            <!-- ======= Button ======= -->
                                            <div class="buttons space-x-2 flex justify-center">
                                                <form action="" method="POST" id="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="flex space-x-2">
                                                        <a href="{{ route('admin.berita.show', $news->id) }}"
                                                            class="btn icon btn-sm btn-outline-info text-blue-500 border border-blue-500 px-2 py-1 rounded hover:bg-blue-500 hover:text-white"
                                                            title="Detail Berita">
                                                            <i class="fa-solid fa-info"></i>
                                                        </a>
                                                        <a href="{{ route('admin.berita.edit', $news->id) }}"
                                                            class="btn icon btn-sm btn-outline-primary text-green-500 border border-green-500 px-2 py-1 rounded hover:bg-green-500 hover:text-white"
                                                            title="Edit Berita">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn icon btn-sm btn-outline-danger text-red-500 border border-red-500 px-2 py-1 rounded hover:bg-red-500 hover:text-white btn-delete"
                                                            title="Hapus Kategori Berita">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>

                                                        <!-- Modal Konfirmasi -->
                                                        <div id="confirmation-modal"
                                                            class="fixed inset-0 z-50 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
                                                            <div class="bg-white rounded-lg shadow-lg max-w-sm w-full p-6">
                                                                <h3 class="text-lg font-semibold text-gray-900">Konfirmasi
                                                                    Penghapusan</h3>
                                                                <p class="text-gray-600 mt-2">Apakah Anda yakin ingin
                                                                    menghapus Berita ini ?</p>
                                                                <div class="mt-4 flex justify-center space-x-4">
                                                                    <button id="confirm-delete" type="button"
                                                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Hapus</button>
                                                                    <button id="cancel-delete" type="button"
                                                                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">Batal</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- ======= End Button ======= -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <!-- ======= End Tabel Data Berita ======= -->
                    </div>

                </div>
                <!-- ======= End Card Body ======= -->

            </div>
            <!-- ======= End Card ======= -->
        </section>
        <!-- ======= End Data Table ======= -->
    </div>
    <!-- ======= End Content ======= -->

@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Event listener untuk tombol close
            document.querySelectorAll('[aria-label="Close"]').forEach(button => {
                button.addEventListener('click', function() {
                    // Menghapus toast yang paling dekat dengan tombol yang diklik
                    this.closest('div[role="alert"]').remove();
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen modal dan tombol
            const modal = document.getElementById('confirmation-modal');
            const confirmButton = document.getElementById('confirm-delete');
            const cancelButton = document.getElementById('cancel-delete');

            // Tombol hapus yang memicu modal
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah form dari submit
                    const form = this.closest('form');
                    modal.classList.remove('hidden'); // Tampilkan modal
                    confirmButton.onclick = () => {
                        form.submit(); // Kirim form jika dikonfirmasi
                    };
                    cancelButton.onclick = () => {
                        modal.classList.add('hidden'); // Sembunyikan modal jika dibatalkan
                    };
                });
            });

            // Menyembunyikan modal saat klik di luar modal
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    </script>

@endsection
