@extends('admin.main')
@section('title', 'Edit Data Pengguna')

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
            <h3 class="text-2xl font-semibold text-color4">Edit Data Pengguna</h3>
        </div>

        <!-- ======= Breadcrumb ======= -->
        <nav aria-label="breadcrumb" class="mt-4 flex justify-end">
            <ol class="breadcrumb flex text-sm">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="text-color6 hover:underline">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.user.index') }}" class="text-color6 hover:underline">Data Pengguna
                        Berita</a>
                </li>
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Edit Data Pengguna</li>
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
                <h4 class="text-lg font-semibold text-color4">Edit Pengguna</h4>
            </div>
            <div class="container mx-auto p-4">
                <!-- ======= Form Edit Pengguna ======= -->
                <form class="bg-white rounded-lg" action="{{ route('admin.user.update', $user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <!-- ======= Grid Container ======= -->
                    <div class="grid grid-cols-1">
                        <!-- ======= Nama Pengguna ======= -->
                        <div class="form-group">
                            <label for="nama" class="block text-color4">Nama</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" id="nama"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->nama }}" name="nama">
                            </div>
                        </div>

                        <!-- ======= Email Pengguna ======= -->
                        <div class="form-group">
                            <label for="email" class="block text-color4">Email</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" id="email"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->email }}" name="email">
                            </div>
                        </div>

                        <!-- ======= Username Pengguna ======= -->
                        <div class="form-group">
                            <label for="username" class="block text-color4">Username</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-user-plus"></i>
                                </span>
                                <input type="text" id="username"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->username }}" name="username">
                            </div>
                        </div>

                        <!-- ======= Password Pengguna ======= -->
                        <div class="form-group">
                            <label for="password" class="block text-color4">Password</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-user-lock"></i>
                                </span>
                                <input type="password" id="password"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->password }}" name="password">
                            </div>
                        </div>

                        <!-- ======= Nohp Pengguna ======= -->
                        <div class="form-group">
                            <label for="nohp" class="block text-color4">No Handphone</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </span>
                                <input type="text" id="nohp"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->nohp }}" name="nohp">
                            </div>
                        </div>

                        <!-- ======= Alamat Pengguna ======= -->
                        <div class="form-group">
                            <label for="alamat" class="block text-color4">Alamat</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-house-user"></i>
                                </span>
                                <textarea id="alamat"
                                    class="form-input block w-full px-3 rounded-none rounded-r-md placeholder-green block w-full border border-color1 text-color3 focus:ring-color3 focus:border-color3"
                                    name="alamat" rows="3">{{ $user->alamat }}</textarea>
                            </div>
                        </div>

                        <!-- ======= Foto ======= -->
                        <div class="form-group">
                            <label for="foto" class="block text-color4">Foto Profil</label>
                            <img src="{{ asset('storage/' . $user->foto) }}" alt="User Image" height="100" width="100" style="border-radius: 50%;"><br><br>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-upload"></i>
                                </span>
                                <input type="file" id="foto"
                                    class="form-input flex-1 block w-full rounded-none rounded-r-md sm:text-sm text-color3 border  border-color1 focus:ring-color3 focus:border-color3"
                                    name="foto" accept="image/jpeg, image/png, image/jpg">
                            </div>
                            <small class="text-red-500 text-xs">* Maximal Ukuran File Sebesar 2 MB dan Tipe File yang
                                diupload berupa png, jpeg, atau jpg</small>
                        </div>

                        <!-- ======= Role Pengguna ======= -->
                        <div class="form-group">
                            <label for="role_id" class="block text-color4">Role Pengguna</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1 border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-list-ul"></i>
                                </span>
                                <select id="role_id"
                                    class="form-select flex-1 block w-full inline-flex px-3 border-color1 rounded-none rounded-r-md text-color3 border focus:ring-color3 focus:border-color3"
                                    name="role_id">
                                    <option value="" disabled>Pilih Role Pengguna</option>
                                    @foreach ($role as $levelakses)
                                        <option value="{{ $levelakses->id }}"
                                            {{ $levelakses->id == old('role_id', $user->role_id) ? 'selected' : '' }}>
                                            {{ $levelakses->nama }}
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
                <!-- ======= End Form Edit Pengguna ======= -->
            </div>
        </div>
    </section>

@endsection
