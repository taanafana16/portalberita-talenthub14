<div id="sidebar" class="active bg-white shadow-md">
    <!-- ======= Sidebar Wrapper ======= -->
    <div class="sidebar-wrapper active">
        <div id="sidebar" class="bg-white h-full md:block hidden">
            <!-- Sidebar Header -->
            <div class="mx-auto p-4 flex justify-between items-center border-b">
                <div class="logo">
                    <a href="#"><img src="" alt="Logo"></a>
                </div>
                <div class="flex gap-2 items-center">
                    <!-- Sidebar Toggler -->
                    <a href="#" class="md:hidden block">
                        <i class="bi bi-x text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <div class="p-4">
                <ul>
                    <li class="text-custom-dark-green uppercase mb-2 font-bold">Menu</li>
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-house mr-3 text-custom-green"></i>
                            <span class="text-custom-dark-green">Dashboard</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="{{ route('admin.berita.index') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-newspaper mr-3 text-custom-green"></i>
                            <span class="text-custom-dark-green">Berita</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="{{ route('admin.kategori.index') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-list-ul mr-3 text-custom-green"></i>
                            <span class="text-custom-dark-green">Kategori Berita</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="#" class="flex items-center p-2">
                            <i class="fa-solid fa-user mr-3 text-custom-green"></i>
                            <span class="text-custom-dark-green">Pengguna</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="{{ route('admin.pengaturan') }}" class="flex items-center p-2">
                            <i class="fa-solid fa-gear mr-3 text-custom-green"></i>
                            <span class="text-custom-dark-green">Pengaturan</span>
                        </a>
                    </li>
                    <li class="rounded mb-2">
                        <a href="" class="flex items-center p-2">
                            <i class="fa-solid fa-power-off mr-3 text-custom-green"></i>
                            <span class="text-custom-dark-green">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
