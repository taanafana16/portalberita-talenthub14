@extends('user.main')
@section('title', 'Kontak | Portal Berita')

@section('content')
<section class="relative h-screen bg-gray-300">
    <div class="absolute inset-0 flex items-end justify-start">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded-lg shadow-md w-full max-w-4xl mx-auto mb-10">
            <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ALAMAT</h2>
                <p class="mt-1">Kabupaten Garut, Provinsi Jawa Barat, Negara Indonesia</p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                <a class="text-indigo-500 leading-relaxed">dummyemail@gmail.com</a>
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">NO HANDPHONE</h2>
                <p class="leading-relaxed">083-456-7890</p>
            </div>
        </div>
    </div>
</section>
@endsection