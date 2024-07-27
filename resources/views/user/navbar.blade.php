<nav class="bg-white rounded-lg shadow m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse text-2xl font-semibold text-color4">
                <img class="w-8 h-8 mr-2" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                Portal Berita
            </a>
    
            <div class="flex md:order-2">
              <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <i class="fa-solid fa-code-compare text-gray-500 dark:text-gray-400"></i>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
              </div>
    
              <button type="submit" class="p-2 ms-2 text-sm font-medium text-white rounded-lg border bg-color4 hover:bg-color6 focus:ring-4 focus:outline-none focus:ring-color6">
                <i class="fa-solid fa-magnifying-glass w-4 h-4 "></i>
                <span class="sr-only">Search</span>
            </button>
            </div>
    
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white text-2xl bg-color4 hover:bg-color6 focus:ring-4 focus:outline-none focus:ring-color6 font-medium rounded-lg text-sm px-4 py-2 text-center">
                    <a href="{{ route('login') }}">Log in</a>
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            
            
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="items-center justify-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-2 md:p-0 mt-2 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ url('/') }}" 
                        class="block py-2 px-3 {{ request()->is('/') ? 'text-color3' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-color4' }} rounded md:p-0"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('tentang') }}" 
                        class="block py-2 px-3 {{ request()->routeIs('tentang') ? 'text-color3' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-color4' }} rounded md:p-0"
                        aria-current="page">Tentang</a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}" 
                        class="block py-2 px-3 {{ request()->routeIs('kontak') ? 'text-color3' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-color4' }} rounded md:p-0"
                        aria-current="page">Kontak</a>
                </li>
            </ul>
        </div>        
    </div>
</nav>
