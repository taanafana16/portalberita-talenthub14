<nav class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between p-4">
        <a href="#" class="text-gray-700">
            <i class="bi bi-justify text-3xl"></i>
        </a>

        <button class="md:hidden text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <div class="relative">
            <button class="flex items-center focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <div class="text-right mr-3">
                    <h6 class="mb-0 text-custom-dark-green font-normal">Admin</h6>
                    <p class="text-sm text-custom-green">Admin</p>
                </div>
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img src="" alt="User Image" class="w-full h-full object-cover">
                </div>
            </button>
            <div class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg" id="user-menu">
                <div class="py-2">
                    <h6 class="block px-4 py-2 text-custom-dark-green font-bold">Hello, </h6>
                    <a href="#" class="block px-4 text-custom-dark-green hover:bg-custom-light"><i class="fa-solid fa-user mr-2 text-custom-green"></i> Profil Akun</a>
                    <a href="#" class="block px-4 text-custom-dark-green hover:bg-custom-light"><i class="fa-solid fa-gear mr-2 text-custom-green"></i> Pengaturan</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('user-menu').classList.toggle('hidden');
    });
</script>
