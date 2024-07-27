<div id="sidebar" class="active bg-white">
    <!-- ======= Sidebar Wrapper ======= -->
    <div
        class="sidebar-wrapper active bg-white md:block hidden transition-transform transform -translate-x-full md:translate-x-0">
        <div id="sidebar" class="bg-white h-full md:block hidden">
            <!-- Sidebar Header -->
            <div class="mx-auto p-4 flex justify-between items-center">
                <div class="logo pl-4 pt-2 flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-12 h-12">
                        <span class="uppercase font-bold text-color4 m-6">Portal Berita</span>
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <div class="p-4">
                <ul>
                    <li class="text-color4 uppercase mb-2 font-bold">Menu</li>
                    {{-- @if($userRole == 'admin' || $userRole == 'editor') --}}
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-house mr-3 text-color3"></i>
                            <span class="text-color4">Dashboard</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="{{ route('admin.berita.index') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-newspaper mr-3 text-color3"></i>
                            <span class="text-color4">Berita</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="{{ route('admin.kategori.index') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-list-ul mr-3 text-color3"></i>
                            <span class="text-color4">Kategori Berita</span>
                        </a>
                    </li>
                    {{-- @endif --}}

                    {{-- @if($userRole == 'admin') --}}
                    <li class="rounded mb-2">
                        <a href="{{ route('admin.user.index') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-user-group mr-3 text-color3"></i>
                            <span class="text-color4">Pengguna</span>
                        </a>
                    </li>
                    {{-- @endif --}}

                    <li class="rounded mb-2">
                        <form action="{{ route('logout') }}" method="POST" class="flex items-center p-2">
                            @csrf
                            <button type="submit" class="flex items-center w-full text-left bg-transparent border-0">
                                <i class="fa-solid fa-power-off mr-3 text-color3"></i>
                                <span class="text-color4">Log Out</span>
                            </button>
                        </form>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>
</div>
