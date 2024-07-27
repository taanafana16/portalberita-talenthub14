<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">
    @vite('resources/css/app.css') 
    <title>@yield('title') | Portal Berita</title>
</head>

<body class="bg-color1">
    <div id="app" class="flex min-h-screen">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <div id="main" class="flex-1 flex flex-col">
            <!-- Navbar -->
            @include('admin.layouts.navbar')
            <main id="main-content" class="flex-1 p-4">
                <!-- Content -->
                @yield('content')
            </main>
            <!-- Footer -->
            @include('admin.layouts.footer')
        </div>
    </div>
    @vite('resources/js/app.js')
    @yield('script')
</body>

</html>