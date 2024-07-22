<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('stylesheet')
    @vite(['resources/css/app.css', 'resource/js/app.js'])
    <title>@yield('title') | Portal Berita</title>
</head>

<body class="bg-custom-light-green">
        <div class="min-h-screen flex flex-col">
            <!-- Navbar -->
            @include('user.navbar')
            <div class="flex flex-1">
                <main class="flex-1 p-4">
                    @yield('content')
                </main>
            </div>
            <!-- Footer -->
            @include('user.footer')
        </div>
</body>

</html>
