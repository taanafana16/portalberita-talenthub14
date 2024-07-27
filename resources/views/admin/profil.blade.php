@extends('admin.main')
@section('title', 'Profil Akun')

@section('content')

    <!-- ======= Content ======= -->
    <div class="page-heading p-6">
        <div class="page-title">
            <h3 class="text-2xl font-semibold text-color4">Profil Akun</h3>
        </div>
    </div>

    <!-- ======= Data Table ======= -->
    <section class="section pl-6 pr-6">
        <!-- ======= Card ======= -->
        <div class="card bg-white shadow-md rounded-lg p-2">
            <!-- ======= Card Header ======= -->
            <div class="card-header px-4 py-2 border-b">
                <h4 class="text-lg font-semibold text-color4">Informasi Akun</h4>
            </div>
            <div class="container mx-auto p-4">
                <!-- ======= Form Detail Pengguna ======= -->
                <form class="bg-white rounded-lg" action="" enctype="multipart/form-data">
                    @csrf

                    <!-- ======= Grid Container ======= -->
                    <div class="grid grid-cols-1">

                        <div align="center">
                            <img src="{{ asset('assets/images/defaultprofil.png') }}" alt="User Image" height="100" width="100" style="border-radius: 50%;"><br><br>
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
                                    value="{{ Auth::user()->nama }}" readonly name="nama">
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
                                    value="{{ Auth::user()->email }}" readonly name="email">
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
                                    value="{{ Auth::user()->username }}" readonly name="username">
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
                                    value="{{ Auth::user()->password }}" readonly name="password">
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
                                    value="{{ Auth::user()->nohp }}" readonly name="nohp">
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
                                    name="alamat" rows="3" readonly>{{ Auth::user()->alamat }}</textarea>
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
