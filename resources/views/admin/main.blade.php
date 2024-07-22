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

<body class="bg-custom-light">
    <div id="app" class="flex min-h-screen">
        <!-- Sidebar -->
        @include('admin.sidebar')
        <div id="main" class="flex-1 flex flex-col">
            <!-- Navbar -->
            @include('admin.navbar')
            <main id="main-content" class="flex-1 p-4">
                <!-- Content -->
                @yield('content')
            </main>
            <!-- Footer -->
            @include('admin.footer')

        </div>
    </div>
    @yield('script')
</body>

</html>
