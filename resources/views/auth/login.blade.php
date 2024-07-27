<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">
    @vite('resources/css/app.css')
    <title>Login | Portal Berita</title>
</head>
<body>
    <section class="bg-color1">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <a href="#" class="flex items-center justify-center mb-6 text-2xl font-semibold text-color4">
                        <img class="w-8 h-8 mr-2" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        Portal Berita    
                    </a>
                    <h1 class="text-xl items-center flex justify-center font-bold leading-tight tracking-tight text-color6 md:text-2xl">
                        Log in
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-color4 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" class="placeholder-green bg-gray-50 border border-gray-300 text-color3 rounded-lg focus:ring-color3 focus:border-color3 block w-full p-2.5" placeholder="Masukkan Username" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-color4 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" class="placeholder-green bg-gray-50 border border-gray-300 text-color3 rounded-lg focus:ring-color3 focus:border-color3 block w-full p-2.5" placeholder="Masukkan Password" required>
                        </div>
                        <button type="submit" class="w-full text-white bg-color4 hover:bg-color6 focus:ring-4 focus:outline-none focus:ring-color6 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
        </div>
      </section>
</body>
</html>