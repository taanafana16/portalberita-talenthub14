@extends('admin.main')
@section('title', 'Detail Pengguna')
@section('stylesheet')

@endsection

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-color4">Detail Pengguna</h3>
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
                <li class="breadcrumb-item active text-color4 font-semibold" aria-current="page">Detail Pengguna</li>
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
                <h4 class="text-lg font-semibold text-color4">Detail Pengguna</h4>
            </div>
            <div class="container mx-auto p-4">
                <!-- ======= Form Detail Pengguna ======= -->
                <form class="bg-white rounded-lg" action="" enctype="multipart/form-data">
                    @csrf

                    <!-- ======= Grid Container ======= -->
                    <div class="grid grid-cols-1">

                        <div align="center" class="mt-8">
                            <img src="{{ asset('storage/' . $user->foto) }}" alt="User Image" height="100" width="100" style="border-radius: 50%;"><br><br>
                        </div>

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
                                    value="{{ $user->nama }}" readonly name="nama">
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
                                    value="{{ $user->email }}" readonly name="email">
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
                                    value="{{ $user->username }}" readonly name="username">
                            </div>
                        </div>

                        <!-- ======= Password Pengguna ======= -->
                        {{-- <div class="form-group">
                            <label for="password" class="block text-color4">Password</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-user-lock"></i>
                                </span>
                                <input type="password" id="password"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->password }}" readonly name="password">
                            </div>
                        </div> --}}

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
                                    value="{{ $user->nohp }}" readonly name="nohp">
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
                                    name="alamat" rows="3" readonly>{{ $user->alamat }}</textarea>
                            </div>
                        </div>

                        <!-- ======= Role Pengguna ======= -->
                        <div class="form-group">
                            <label for="role_id" class="block text-color4">Role Pengguna</label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-1  border-color1 text-color3 sm:text-sm focus:ring-color3 focus:border-color3">
                                    <i class="fa-solid fa-list-ul"></i>
                                </span>
                                <input type="text" id="role_id"
                                    class="placeholder-green block w-full inline-flex px-3 border  border-color1 rounded-none rounded-r-md text-color3 focus:ring-color3 focus:border-color3"
                                    value="{{ $user->role ? $user->role->nama : 'Tidak ada role' }}" name="role_id">
                            </div>
                        </div>
                    </div>
                    <!-- ======= End Grid Container ======= -->
                    <!-- ======= End Row ======= -->
                </form>
                <!-- ======= End Form Detail Pengguna ======= -->
            </div>
        </div>
    </section>

@endsection
