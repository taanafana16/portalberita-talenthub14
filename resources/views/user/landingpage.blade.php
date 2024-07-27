@extends('user.main')
@section('title', 'Beranda | Portal Berita')

@section('content')

    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($berita as $item)
            <div id="default-carousel" class="relative w-full mb-8 z-0" data-carousel="slide">
                <!-- Carousel wrapper -->

                <div class="relative h-64 overflow-hidden md:h-80 lg:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ $item->foto1_url }}" class="absolute block w-full h-full object-cover" alt="...">
                        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 w-full p-4">
                            <h2 class="text-white text-lg md:text-xl lg:text-2xl font-bold"></h2>
                        </div>
                    </div>
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-2 h-2 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>

                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        @endforeach
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="title-font text-lg font-bold text-3xl text-color7 m-4">Berita Terkini</h1>
            <div class="flex flex-wrap -m-4">
                @foreach ($berita as $news)
                    <div class="p-4 md:w-1/3">
                        <div class="h-full rounded-lg shadow bg-white shadow border-opacity-60 rounded-lg overflow-hidden">
                            @foreach ($berita as $item)
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center" alt="blog"
                                    src="{{ $item->foto1_url }}">
                            @endforeach
                            <p class="flex text-xs mt-1 items-center justify-center block text-color4">
                                {{ $news->captionfoto1 }}</p>

                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $news['tanggalpublish'] }} - <span
                                        class="text-color3 font-bold">{{ $news->user ? $news->user->nama : 'Tidak ada penulis' }}</span>
                                </h2>
                                <h1 class="title-font text-lg font-bold text-color7 mb-3">{{ $news['judulberita'] }}</h1>
                                @php
                                    $description = $news['deskripsiberita'];
                                    $limit = 150; // batas karakter
                                @endphp
                                <p class="leading-relaxed mb-3">
                                    {{ Str::limit($description, $limit, '...') }}
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('berita.detail', $news->id) }}"
                                        class="text-color5 font-semibold inline-flex items-center md:mb-2 lg:mb-0">Baca
                                        Selengkapnya
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container px-5">
            <section class="text-gray-600 body-font">
                <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
                    <div
                        class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-color7">Kategori Berita</h1>
                        <p class="leading-relaxed text-base">Kategori berita adalah cara untuk mengelompokkan berita
                            berdasarkan topik atau jenis informasi yang disajikan. Setiap kategori biasanya mencakup
                            berbagai artikel dan laporan yang berkaitan dengan topik tersebut, memberikan pandangan yang
                            lebih mendalam dan terfokus. </p>
                    </div>
                    <div class="flex flex-col md:w-1/2 md:pl-12">
                        <h2 class="title-font font-bold text-color7 tracking-wider text-sm mb-3">Berita berdasarkan
                            Kategori</h2>
                        <nav class="flex flex-wrap list-none -mb-1">
                            @foreach ($kategori as $kelompok)
                                <li class="lg:w-1/3 mb-1 w-1/2">
                                    <a href="{{ route('kategori.detailkat', $kelompok->id) }}"
                                        class="text-color3 hover:text-color4">{{ $kelompok->nama }}</a>
                                </li>
                            @endforeach
                        </nav>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

@section('aside')
@endsection
