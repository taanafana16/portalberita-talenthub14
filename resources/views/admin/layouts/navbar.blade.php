<nav class="">
    <div class="container mx-auto flex items-center justify-between">
        <div class="">
            <a href="#" id="sidebar-toggle" class="text-gray-700 cursor-pointer pl-6 pt-6">
                <i class="fa-solid fa-align-justify text-2xl text-color4"></i>
            </a>
        </div>

        <div class="relative pr-6 pt-6">
            <button class="flex items-center focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <div class="text-right mr-3">
                    <h6 class="mb-0 text-color4 font-normal">{{ Auth::user()->nama }}</h6>
                    <p class="text-sm text-color3 capitalize">{{ Auth::user()->role->nama }}</p>
                </div>
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img src="{{ asset(Auth::user()->foto) }}" alt="User Image" class="w-full h-full object-cover">
                </div>
            </button>
            <div class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg m-6" id="user-menu">
                <div class="py-2">
                    <h6 class="block px-4 py-2 text-color4 font-bold">Hello, {{ Auth::user()->nama }}</h6>
                    <a href="{{ route('admin.profil.index') }}" class="block px-4 text-color4 hover:bg-color2"><i class="fa-solid fa-user mr-2 text-color3"></i> Profil Akun</a>
                    <a href="{{ route('admin.profil.edit', ['profil' => Auth::user()->id]) }}" class="block px-4 text-color4 hover:bg-color2"><i class="fa-solid fa-gear mr-2 text-color3"></i> Pengaturan</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('user-menu').classList.toggle('hidden');
    });

    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
        console.log('Sidebar toggle clicked. Sidebar visibility:', sidebar.classList.contains('hidden'));
    });
</script>

