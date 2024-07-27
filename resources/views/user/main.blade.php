<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">
    @yield('stylesheet')
    @vite(['resources/css/app.css', 'resources/js/app.js'])'
    <title>@yield('title')</title>
</head>

<body class="bg-color1">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        @include('user.navbar')
        <div class="flex flex-1">
            <main class="flex-1 p-4">
                @yield('content')
                @yield('aside')
            </main>
        </div>
        <!-- Footer -->
        @include('user.footer')
    </div>
</body>

</html>
