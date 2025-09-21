@extends('layouts.app')

@section('content')
    <div class="relative w-full min-h-[60vh] md:h-[80vh] overflow-hidden">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center z-10 px-6">
            <h1 class="text-base sm:text-2xl font-extralight text-white tracking-widest">
                @lang('messages.great_art_of_arjasa')
            </h1>
            <div class="w-24 md:w-96 h-1 bg-white mx-auto mt-5 mb-8"></div>
            <h1 class="text-2xl sm:text-5xl mt-4 font-robotoSlab font-light text-white leading-snug">
                @lang('messages.award')<br>
                <span class="text-white">@lang('messages.village_name')</span>
                <span class="text-transparent" style="-webkit-text-stroke: 1px white;">
                    @lang('messages.village_thing')
                </span>
            </h1>
        </div>

        {{-- Background Slideshow --}}
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="fade-container">
                <img src="{{ asset('images/hero-bg2.jpeg') }}" class="fade-image" loading="eager" decoding="async"
                    fetchpriority="high" />
                <img src="{{ asset('images/hero-bg3 (1).jpg') }}" class="fade-image" loading="lazy" decoding="async" />
                <img src="{{ asset('images/hero-bg4.jpg') }}" class="fade-image" loading="lazy" decoding="async" />
                <div class="overlay"></div>
            </div>
        </div>
    </div>

    <div class="relative z-20 flex justify-center -mt-10">
        <div
            class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6 py-10 bg-white rounded-xl shadow-lg">
            <!-- Card 1 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/clean-hands.svg" alt="Icon 1" class="w-20 h-20 object-contain" ... loading="lazy"
                    decoding="async">
                <div>
                    <h3 class="text-lg font-semibold mb-1">@lang('messages.cleanliness_and_beauty')</h3>
                    <p class="text-sm text-gray-600">@lang('messages.cleanliness_description')</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/temple.svg" alt="Icon 2" class="w-20 h-20 object-contain" ... loading="lazy"
                    decoding="async">
                <div>
                    <h3 class="text-lg font-semibold mb-1">@lang('messages.cultural_preservation')</h3>
                    <p class="text-sm text-gray-600">@lang('messages.cultural_description')</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/puzzle.png" alt="Icon 3" class="w-20 h-20 object-contain" ... loading="lazy"
                    decoding="async">
                <div>
                    <h3 class="text-lg font-semibold mb-1">@lang('messages.engaging_activities')</h3>
                    <p class="text-sm text-gray-600">@lang('messages.activities_description')</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <section id="profile" class="py-10 px-6 md:px-16 text-center bg-white">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-4 font-josefinSlab">@lang('messages.profile_of_arjasa')</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            @lang('messages.profile_description')
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-klasik.svg" alt="Jejak Megalitikum" class="w-auto h-24 mx-auto mb-4" ...
                    loading="lazy" decoding="async" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">@lang('messages.megalithic_and_classic')</h3>
                <p class="text-gray-600 text-sm">
                    @lang('messages.megalithic_description')
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-pasraman.svg" alt="Jejak Islam" class="w-auto h-24 mx-auto mb-4" ... loading="lazy"
                    decoding="async" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">@lang('messages.islamic_heritage')</h3>
                <p class="text-gray-600 text-sm">
                    @lang('messages.islamic_description')
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-harmoni.svg" alt="Harmoni Tradisi" class="w-auto h-24 mx-auto mb-4" ...
                    loading="lazy" decoding="async" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">@lang('messages.tradition_harmony')</h3>
                <p class="text-gray-600 text-sm">
                    @lang('messages.tradition_description')
                </p>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section id="vision" class="relative py-16 px-6 md:px-16 text-white text-center bg-cover bg-center"
        style="background-image: url('images/visi-bg.svg');">
        <div class="relative z-10 max-w-4xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-6 font-josefinSlab">@lang('messages.vision_and_mission')
            </h2>

            <p class="text-lg sm:text-xl md:text-2xl leading-relaxed mb-8 italic">
                @lang('messages.vision_description')
            </p>

            <div class="text-left">
                {{-- <p class="text-lg sm:text-xl font-semibold mb-4">Misi Desa Arjasa sebagai berikut:</p> --}}
                <ul class="list-decimal list-inside pl-5 space-y-4 text-base sm:text-lg leading-relaxed">
                    <li>@lang('messages.mission_list.0')</li>
                    <li>@lang('messages.mission_list.1')</li>
                    <li>@lang('messages.mission_list.2')</li>
                    <li>@lang('messages.mission_list.3')</li>
                    <li>@lang('messages.mission_list.4')</li>
                    <li>@lang('messages.mission_list.5')</li>
                    <li>@lang('messages.mission_list.6')</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-16 px-6 md:px-16 bg-white text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4 font-josefinSlab">
            @lang('messages.culture_of_arjasa')
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            @lang('messages.culture_description')
        </p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach ($cultures as $culture)
                <div class="culture-item relative overflow-hidden rounded-lg shadow group">
                    <!-- Gambar -->
                    <img src="{{ asset('storage/' . $culture->image) }}" alt="{{ $culture->name }}"
                        class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" ...
                        loading="lazy" decoding="async" />

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 h-[30%] bg-black bg-opacity-60 
                                transition-all duration-700 ease-in-out group-hover:h-full 
                                flex flex-col justify-center items-center text-white p-4">

                        <!-- Nama -->
                        <h3
                            class="text-xl font-semibold transform transition-all duration-700 
                                   group-hover:-translate-y-6">
                            {{ $culture->name }}
                        </h3>

                        <!-- Deskripsi -->
                        <p
                            class="mt-2 opacity-0 translate-y-6 transition-all duration-700 delay-200 
                                  group-hover:opacity-100 group-hover:translate-y-0 text-sm">
                            {{ $culture->description }}
                        </p>

                        <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>



    <!-- Destination Gallery -->
    <section id="gallery" class="py-16 px-6 md:px-16 bg-gray-50 text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4 font-josefinSlab">
            @lang('messages.destination_gallery')
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            @lang('messages.destination_description')
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- LEFT: Main --}}
            <div class="flex flex-col gap-6">
                {{-- MAIN DISPLAY --}}
                <div class="flex flex-col gap-6">
                    {{-- MAIN DISPLAY --}}
                    <div id="main-display"
                        class="relative w-full aspect-video rounded-xl shadow-lg overflow-hidden bg-gray-200">
                        @php
                            $first = $uploadLinks->first();
                        @endphp

                        @if ($first)
                            @if ($first->embed_link && str_contains($first->embed_link, 'youtube.com/embed'))
                                @php
                                    preg_match('/embed\/([a-zA-Z0-9_-]+)/', $first->embed_link, $m);
                                    $ytId = $m[1] ?? null;
                                @endphp
                                @if ($ytId)
                                    <div class="relative w-full h-full group" data-type="youtube"
                                        data-embed="{{ $first->embed_link }}">
                                        <img src="https://img.youtube.com/vi/{{ $ytId }}/hqdefault.jpg"
                                            alt="YouTube thumbnail" class="absolute inset-0 w-full h-full object-cover">
                                        {{-- Overlay play button --}}
                                        <div
                                            class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition-colors">
                                            <span class="text-white text-6xl">▶</span>
                                        </div>
                                    </div>
                                @endif
                            @elseif ($first->embed_link && str_contains($first->embed_link, 'instagram.com'))
                                <iframe src="{{ $first->embed_link }}" class="absolute inset-0 w-full h-full"
                                    frameborder="0" allowfullscreen data-type="instagram"
                                    data-embed="{{ $first->embed_link }}">
                                </iframe>
                            @elseif ($first->image)
                                <img src="{{ asset('storage/' . $first->image) }}" alt="{{ $first->title }}"
                                    class="absolute inset-0 w-full h-full object-cover" data-type="image"
                                    data-embed="{{ asset('storage/' . $first->image) }}">
                            @else
                                <div class="flex items-center justify-center h-full text-gray-500">No media</div>
                            @endif
                        @else
                            <div class="flex items-center justify-center h-full text-gray-500">No media</div>
                        @endif

                        {{-- MAIN CONTROLS --}}
                        @if ($uploadLinks->count() > 0)
                            <div class="pointer-events-none absolute bottom-3 right-3">
                                <span id="counter" class="px-2 py-1 text-xs rounded bg-black/50 text-white">
                                    1 / {{ $uploadLinks->count() }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- RIGHT: 2x2 Grid dengan pagination sederhana --}}
            <div class="relative">
                @php
                    $chunks = $uploadLinks->chunk(4);
                @endphp

                <div id="grid-slides" class="relative">
                    @foreach ($chunks as $pageIndex => $chunk)
                        <div class="grid grid-cols-2 gap-4 {{ $pageIndex === 0 ? '' : 'hidden' }}"
                            data-page="{{ $pageIndex }}">
                            @foreach ($chunk as $item)
                                @php
                                    $type = null;
                                    $thumbSrc = null;
                                    $embed = null;
                                    $title = $item->title ?? 'Media';

                                    if ($item->embed_link && str_contains($item->embed_link, 'youtube.com/embed')) {
                                        preg_match('/embed\/([a-zA-Z0-9_-]+)/', $item->embed_link, $m);
                                        $ytId = $m[1] ?? null;
                                        if ($ytId) {
                                            $type = 'youtube';
                                            $thumbSrc = "https://img.youtube.com/vi/{$ytId}/hqdefault.jpg";
                                            $embed = $item->embed_link;
                                        }
                                    } elseif ($item->embed_link && str_contains($item->embed_link, 'instagram.com')) {
                                        $type = 'instagram';
                                        $embed = $item->embed_link;
                                        $thumbSrc = $item->image ? asset('storage/' . $item->image) : null;
                                    } elseif ($item->image) {
                                        $type = 'image';
                                        $thumbSrc = asset('storage/' . $item->image);
                                        $embed = $thumbSrc;
                                    }
                                @endphp

                                <button
                                    class="grid-thumb relative w-full aspect-video overflow-hidden rounded-lg group cursor-pointer"
                                    @if ($type === 'instagram')  @endif data-type="{{ $type }}"
                                    data-embed="{{ $embed }}">
                                    @if ($thumbSrc)
                                        <img src="{{ $thumbSrc }}" alt="{{ $title }}"
                                            class="absolute inset-0 w-full h-full object-cover" loading="lazy"
                                            decoding="async">
                                    @endif

                                    {{-- Overlay --}}
                                    @if ($type === 'youtube')
                                        <div
                                            class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition-colors">
                                            <span class="text-white text-5xl">▶</span>
                                        </div>
                                    @elseif ($type === 'instagram')
                                        <div
                                            class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition-colors">
                                            <i class="fab fa-instagram text-white text-3xl"></i>
                                        </div>
                                    @endif
                                </button>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center items-center gap-4 mt-4">
                    <button id="prevGrid" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm">‹
                        Prev</button>
                    <span id="gridCounter" class="text-sm text-gray-600">
                        1 / {{ $chunks->count() }}
                    </span>
                    <button id="nextGrid"
                        class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm">Next
                        ›</button>
                </div>
            </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll("#grid-slides > div");
            const counter = document.getElementById("gridCounter");
            let currentPage = 0;

            function showPage(index) {
                slides.forEach((s, i) => {
                    s.classList.toggle("hidden", i !== index);
                });
                counter.textContent = `${index + 1} / ${slides.length}`;
            }

            document.getElementById("prevGrid").addEventListener("click", () => {
                currentPage = (currentPage - 1 + slides.length) % slides.length;
                showPage(currentPage);
            });

            document.getElementById("nextGrid").addEventListener("click", () => {
                currentPage = (currentPage + 1) % slides.length;
                showPage(currentPage);
            });

            showPage(currentPage); // init
        });
    </script>

    <!-- Packages Section -->
    <section id="packages" class="py-16 px-6 md:px-16 bg-white text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2 font-josefinSlab">
            @lang('messages.packages_title')
        </h2>
        <p class="text-lg text-gray-600 mb-12">
            @lang('messages.packages_description')
        </p>

        <div class="flex flex-wrap justify-center gap-6">
            @foreach ($packages as $package)
                <div class="w-full md:w-[48%] rounded-2xl overflow-hidden shadow-md relative package-card">
                    <!-- Carousel -->
                    <div id="carousel-{{ $package->id }}" class="relative h-96 overflow-hidden">
                        @foreach ($package->images as $index => $img)
                            <img src="{{ asset('storage/' . $img->image) }}"
                                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}"
                                data-carousel="{{ $package->id }}" ... loading="lazy" decoding="async">
                        @endforeach
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                    <div class="relative z-20 flex items-end justify-between px-6 py-4 text-white">
                        <div>
                            <h3 class="text-xl font-semibold">{{ $package->name }}</h3>
                            <div class="text-yellow-400">★★★☆☆</div>
                            <p class="text-orange-300 font-bold">
                                {{ $package->formatted_price }}
                            </p>
                        </div>
                        <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" data-title="{{ $package->name }}"
                            data-price="{{ $package->formatted_price }}" data-description="{{ $package->description }}"
                            data-images='@json($package->images->pluck('image'))' onclick="openModal(this)">
                            @lang('messages.see_details')
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Modal for Packages -->
    <div id="destinationModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-xl p-6 w-[90%] max-w-3xl relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 text-xl font-bold">&times;</button>
            <h3 id="modalTitle" class="text-2xl font-bold mb-2"></h3>
            <p id="modalPrice" class="text-orange-500 font-semibold mb-4"></p>
            <p id="modalDescription" class="text-gray-700 mb-4"></p>

            <!-- Ganti iframe jadi div kosong untuk isi carousel -->
            <div id="modalCarouselContainer" class="relative w-full h-64 overflow-hidden rounded-lg"></div>
        </div>
    </div>


    <!-- Facility Section -->
    <section id="facility" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@lang('messages.facility')</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            @lang('messages.facility_description')
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Kolom Besar 1 Gambar --}}
            @if ($imageFacilities->isNotEmpty())
                <div class="relative h-[36rem] rounded-lg overflow-hidden facility-card"
                    style="background-image: url('{{ asset('storage/' . $imageFacilities[0]->image) }}'); background-size: cover;">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-end p-6">
                        <h3 class="text-white text-2xl font-bold mb-3">{{ $imageFacilities[0]->name }}</h3>
                        <a href="{{ route('facilities.katalog') }}"
                            class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                            @lang('messages.view_facility')
                        </a>
                    </div>
                </div>
            @endif

            {{-- Kolom Tengah 2 Gambar --}}
            <div class="flex flex-col gap-6">
                @foreach ($imageFacilities->skip(1) as $facility)
                    <div class="relative h-[17rem] rounded-lg overflow-hidden facility-card"
                        style="background-image: url('{{ asset('storage/' . $facility->image) }}'); background-size: cover;">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <h4 class="text-white font-bold text-lg">{{ $facility->name }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Kolom Kanan 2 Deskripsi --}}
            <div class="flex flex-col gap-6">
                @forelse ($facilitiesByType as $type => $items)
                    @php
                        // Ambil satu deskripsi yang tidak null untuk dijadikan ringkasan type
                        $desc = optional($items->firstWhere('description', '!=', null))->description;
                    @endphp

                    <div class="p-6 bg-gray-100 rounded-lg shadow facility-card">
                        <h3 class="text-xl font-bold mb-2">{{ mb_strtoupper($type, 'UTF-8') }}</h3>

                        @if ($desc)
                            <p class="text-gray-600 mb-4 text-sm">{{ \Illuminate\Support\Str::limit($desc, 200) }}
                            </p>
                        @endif

                        <ul class="list-disc list-inside text-sm text-gray-700 space-y-1 mb-4">
                            @foreach ($items as $f)
                                <li>{{ $f->name }}</li>
                            @endforeach
                        </ul>

                        {{-- Opsional: link ke halaman index terfilter type --}}
                        <a href="{{ route('facilities.katalog') }}"
                            class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                            @lang('messages.view_more')
                        </a>
                    </div>
                @empty
                    <div class="p-6 bg-gray-50 rounded-lg text-gray-500 text-sm">
                        @lang('messages.no_facility_text')
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- products Section -->
    <section id="products" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@lang('messages.products')</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            @lang('messages.products_description')
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <div class="products-item relative h-[20rem] rounded-lg overflow-hidden shadow"
                    style="background-image: url('{{ asset('storage/' . $product->image) }}'); background-size: cover;">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-end p-6">
                        <h3 class="text-white text-2xl font-bold mb-3">{{ $product->name }}</h3>
                        <p class="text-gray-200 text-sm mb-3">{{ Str::limit($product->description, 80) }}</p>
                        <span
                            class="bg-orange-500 text-white px-3 py-1 rounded text-xs">{{ strtoupper($product->type) }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Social Section -->
    <!-- Social Section dengan Elfsight Instagram Widget dan fade-in -->
    <section id="social" class="py-16 px-6 md:px-16 bg-white text-gray-800 fade-in">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-2xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@DesaWisataArjasaOfficial
        </h2>

        <!-- Elfsight Instagram Feed Widget -->
        <div class="elfsight-app-7148802b-a989-44c0-bc48-4b53fbc340c2" data-elfsight-app-lazy></div>
    </section>

    <!-- Reviews Section dengan Elfsight Widget dan fade-in -->
    <section id="reviews" class="py-16 px-6 md:px-16 bg-white text-gray-800 fade-in">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@lang('messages.what_customers_say')</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            @lang('messages.reviews_description')
        </p>

        <!-- Elfsight Google Reviews Widget -->
        <div class="elfsight-app-e9e89592-b352-42d7-914e-f13a74838102" data-elfsight-app-lazy></div>
    </section>

    <!-- What's Happening Section -->
    <section id="happening" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@lang('messages.what_is_happening')</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            @lang('messages.happening_description')
        </p>

        <div class="flex justify-center">
            <div class="w-full md:w-[90%] h-[450px] rounded-lg overflow-hidden shadow-lg relative">
                <a id="gmaps-lite" href="#"
                    class="absolute inset-0 z-10 flex items-center justify-center text-white text-3xl bg-black/20">▶</a>
                <img alt="Lokasi Desa Arjasa" loading="lazy" decoding="async" class="w-full h-full object-cover"
                    src="https://maps.googleapis.com/maps/api/staticmap?center=-8.115953060346706,113.73451588487477&zoom=15&size=1200x450&markers=color:orange|-8.115953060346706,113.73451588487477&key=YOUR_API_KEY">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-8 px-6 md:px-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h4 class="font-bold mb-4">@lang('messages.footer.arjasa')</h4>
                <p class="text-sm">{!! __('messages.footer.address') !!}</p>
            </div>

            <div>
                <h4 class="font-bold mb-4">@lang('messages.footer.information')</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:text-orange-500">@lang('messages.footer_info.about_us')</a></li>
                    <li><a href="#" class="hover:text-orange-500">@lang('messages.footer_info.contact')</a></li>
                    <li><a href="#" class="hover:text-orange-500">@lang('messages.footer_info.privacy_policy')</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">@lang('messages.footer.quick_links')</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="#profile" class="hover:text-orange-500">@lang('messages.profile')</a></li>
                    <li><a href="#culture" class="hover:text-orange-500">@lang('messages.culture')</a></li>
                    <li><a href="#gallery" class="hover:text-orange-500">@lang('messages.gallery')</a></li>
                    <li><a href="#packages" class="hover:text-orange-500">@lang('messages.packages')</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">@lang('messages.social_media')</h4>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-orange-500">Facebook</a>
                    <a href="#" class="hover:text-orange-500">Twitter</a>
                    <a href="#" class="hover:text-orange-500">Instagram</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-8 text-sm">
            © 2024 Desa Wisata Arjasa. All Rights Reserved.
        </div>
    </footer>
@endsection

@push('scripts')
    <script>
        (function() {
            // 1) Tunggu Tailwind CDN siap (via onload), window load, dan (opsional) font
            const waitTailwind = new Promise(r => {
                if (window.__twReady) r();
                else {
                    const t = setInterval(() => {
                        if (window.__twReady) {
                            clearInterval(t);
                            r();
                        }
                    }, 30);
                    // fallback jika onload tidak terpanggil:
                    setTimeout(() => {
                        clearInterval(t);
                        r();
                    }, 3000);
                }
            });

            const waitWindowLoad = new Promise(r => {
                if (document.readyState === 'complete') r();
                else window.addEventListener('load', r, {
                    once: true
                });
            });

            const waitFonts = ('fonts' in document) ?
                document.fonts.ready.catch(() => {}) :
                Promise.resolve();

            // 2) Race + timeout global agar tidak “terkunci” jika ada yang gagal
            const timeout = new Promise(r => setTimeout(r, 4000));

            Promise.race([
                Promise.all([waitTailwind, waitWindowLoad, waitFonts]),
                timeout
            ]).then(() => {
                document.documentElement.classList.add('app-ready');
            });
        })();
    </script>

    <!-- (Opsional) Fallback jika JS mati -->
    <noscript>
        <style>
            #app-loader {
                display: none !important
            }

            [data-app] {
                visibility: visible !important
            }
        </style>
    </noscript>
    </body>

    <script>
        (function() {
            const lazyElfsight = [{
                    sel: '.elfsight-app-7148802b-a989-44c0-bc48-4b53fbc340c2'
                }, // Instagram
                {
                    sel: '.elfsight-app-e9e89592-b352-42d7-914e-f13a74838102'
                } // Reviews
            ];
            const loadPlatform = () => {
                if (window.__elf_loaded) return;
                window.__elf_loaded = true;
                const s = document.createElement('script');
                s.src = 'https://elfsightcdn.com/platform.js';
                s.async = true;
                document.head.appendChild(s);
            };
            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) loadPlatform();
                });
            }, {
                rootMargin: '400px'
            });
            lazyElfsight.forEach(({
                sel
            }) => {
                const el = document.querySelector(sel);
                if (el) io.observe(el);
            });
        })();
    </script>


    <script>
        document.getElementById('yt-lite')?.addEventListener('click', function() {
            const wrap = document.getElementById('main-display');
            wrap.innerHTML = `<iframe class="w-full h-full" loading="lazy"
        src="https://www.youtube.com/embed/zHBb5RIztBQ?autoplay=1"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>`;
        });
    </script>


    <script>
        document.getElementById('gmaps-lite')?.addEventListener('click', function(e) {
            e.preventDefault();
            const wrap = this.parentElement;
            wrap.innerHTML = `<iframe loading="lazy" style="border:0" allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.857847011082!2d113.73451588487477!3d-8.115953060346706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6953f62ed30bb%3A0xeda68b0d4c733f41!2sKantor%20Desa%20Arjasa!5e0!3m2!1sid!2sid!4v1754348200377!5m2!1sid!2sid"
        width="100%" height="100%"></iframe>`;
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const iframe = document.getElementById("yt-iframe");
            const fallback = document.getElementById("yt-fallback");

            // Kalau iframe gagal load (blocked / error), ganti dengan thumbnail
            iframe.addEventListener("error", function() {
                iframe.classList.add("hidden");
                fallback.classList.remove("hidden");
            });

            // Tambahan: kalau 3 detik iframe tidak bisa render, fallback juga dipakai
            setTimeout(() => {
                if (iframe.contentWindow === null || iframe.clientHeight === 0) {
                    iframe.classList.add("hidden");
                    fallback.classList.remove("hidden");
                }
            }, 3000);
        });
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id'
                includedLanguage: 'id, en, zh, es'
            }, 'google_translate_element');
        }
    </script>

    <script>
        // Menampilkan Spinner saat halaman dimuat
        window.addEventListener('load', () => {
            const spinner = document.getElementById('loading-spinner');
            spinner.classList.add('hidden'); // Sembunyikan spinner setelah halaman dimuat
        });

        // Menampilkan Spinner ketika ada event tertentu
        function showLoading() {
            const spinner = document.getElementById('loading-spinner');
            spinner.classList.remove('hidden'); // Menampilkan spinner
        }

        // Menyembunyikan Spinner setelah proses selesai
        function hideLoading() {
            const spinner = document.getElementById('loading-spinner');
            spinner.classList.add('hidden'); // Menyembunyikan spinner
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const mainDisplay = document.getElementById("main-display");
            const counterEl = document.getElementById("counter");
            const carousel = document.getElementById("gallery-carousel");
            const thumbs = Array.from(carousel?.querySelectorAll(".thumb") || []);
            const gridThumbs = Array.from(document.querySelectorAll(".grid-thumb"));
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            let currentIndex = 0;
            const total = thumbs.length;
            if (counterEl) counterEl.textContent = `${total ? 1 : 0} / ${total}`;

            function renderMain(type, embed) {
                if (!mainDisplay) return;
                if (type === "youtube" || type === "instagram") {
                    mainDisplay.innerHTML = `
            <iframe src="${embed}" title="${type} embed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen class="absolute inset-0 w-full h-full rounded-xl"></iframe>`;
                } else if (type === "image") {
                    mainDisplay.innerHTML = `
            <img src="${embed}" alt="Gallery image" class="absolute inset-0 w-full h-full object-cover rounded-xl">`;
                }
            }

            function setActive(i) {
                thumbs.forEach((t, idx) => {
                    t.classList.toggle("ring-2", idx === i);
                    t.classList.toggle("ring-orange-500", idx === i);
                    t.setAttribute("aria-selected", idx === i ? "true" : "false");
                });
                currentIndex = i;
                if (counterEl) counterEl.textContent = `${i + 1} / ${total}`;
                // Snap to active
                const el = thumbs[i];
                if (el && carousel) {
                    const left = el.offsetLeft - (carousel.clientWidth - el.clientWidth) / 2;
                    carousel.scrollTo({
                        left,
                        behavior: "smooth"
                    });
                }
            }

            function handleThumbClick(el) {
                const type = el.dataset.type;
                const embed = el.dataset.embed;
                const idx = parseInt(el.dataset.index ?? currentIndex, 10) || 0;
                renderMain(type, embed);
                if (el.classList.contains("thumb")) setActive(idx);
            }

            // Init: attach listeners
            thumbs.forEach((t) => t.addEventListener("click", () => handleThumbClick(t)));
            gridThumbs.forEach((g) => g.addEventListener("click", () => handleThumbClick(g)));

            // Prev/Next
            function go(delta) {
                if (!total) return;
                let ni = currentIndex + delta;
                if (ni < 0) ni = 0;
                if (ni >= total) ni = total - 1;
                const el = thumbs[ni];
                if (el) {
                    renderMain(el.dataset.type, el.dataset.embed);
                    setActive(ni);
                }
            }
            prevBtn?.addEventListener("click", () => go(-1));
            nextBtn?.addEventListener("click", () => go(1));

            // Keyboard navigation on carousel focus
            carousel?.addEventListener("keydown", (e) => {
                if (e.key === "ArrowRight") {
                    e.preventDefault();
                    go(1);
                }
                if (e.key === "ArrowLeft") {
                    e.preventDefault();
                    go(-1);
                }
            });

            // Click on main display when it's a YouTube thumb to convert to iframe
            // (in case initial state is an image/overlay)
            mainDisplay?.addEventListener("click", (e) => {
                const holder = mainDisplay.querySelector("[data-type][data-embed]");
                if (holder) {
                    renderMain(holder.dataset.type, holder.dataset.embed);
                }
            });

            // If there is at least one thumb, ensure main matches first thumb for consistency
            if (thumbs[0]) {
                renderMain(thumbs[0].dataset.type, thumbs[0].dataset.embed);
                setActive(0);
            }
        });
    </script>

    <script>
        // Mobile Menu Script
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');

        // Ikon burger dan silang
        const burgerIcon = document.getElementById('burger-icon');
        const closeIcon = document.getElementById('close-icon');

        // Untuk membuka menu dan mengganti ikon
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden'); // Toggle visibility of the mobile menu
            burgerIcon.classList.toggle('hidden'); // Sembunyikan ikon burger
            closeIcon.classList.toggle('hidden'); // Tampilkan ikon silang
        });

        // Untuk menutup menu dan mengganti ikon
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden'); // Menyembunyikan menu
            burgerIcon.classList.toggle('hidden'); // Tampilkan ikon burger
            closeIcon.classList.toggle('hidden'); // Sembunyikan ikon silang
        });

        // Menutup menu saat salah satu menu item diklik
        const menuLinks = document.querySelectorAll('.menu-link');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden'); // Menyembunyikan menu
                burgerIcon.classList.remove('hidden'); // Tampilkan ikon burger
                closeIcon.classList.add('hidden'); // Sembunyikan ikon silang
            });
        });



        // Modal Script
        function openModal(button) {
            document.getElementById('modalTitle').innerText = button.dataset.title;
            document.getElementById('modalPrice').innerText = button.dataset.price;
            document.getElementById('modalDescription').innerText = button.dataset.description;
            document.getElementById('modalMap').src = button.dataset.map;
            document.getElementById('destinationModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('destinationModal').classList.add('hidden');
            document.getElementById('modalMap').src = '';
        }

        // Gallery Script
        const mainDisplay = document.getElementById('main-display');
        const filterLinks = document.querySelectorAll('.filter-link');
        const carousel = document.getElementById('gallery-carousel');
        const carouselInner = carousel.querySelector('div');

        function resetGallery() {
            mainDisplay.innerHTML =
                '<iframe class="w-full h-full rounded-lg shadow-lg" src="https://www.youtube.com/embed/zHBb5RIztBQ" frameborder="0" allowfullscreen ... loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            carousel.classList.add('hidden');
            carouselInner.innerHTML = '';
        }

        filterLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const filter = link.dataset.filter;

                if (filter === 'all') {
                    resetGallery();
                    return;
                }

                const thumbs = document.querySelectorAll(`img[data-filter="${filter}"]`);
                if (thumbs.length > 0) {
                    mainDisplay.innerHTML =
                        `<img src="${thumbs[0].src}" class="w-full h-full object-cover rounded-lg shadow-lg" ... loading="lazy" decoding="async" />`;
                    carousel.classList.remove('hidden');
                    carouselInner.innerHTML = Array.from(thumbs).map(img =>
                        `<img src="${img.src}" class="h-32 rounded-lg shadow-md object-cover" ... loading="lazy" decoding="async" />`
                    ).join('');
                }
            });
        });
    </script>

    <script>
        // === Auto carousel di card package ===
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-carousel]').forEach(img => {
                const packageId = img.dataset.carousel;
                let index = 0;
                const images = document.querySelectorAll(`[data-carousel="${packageId}"]`);
                setInterval(() => {
                    images[index].classList.remove('opacity-100');
                    images[index].classList.add('opacity-0');
                    index = (index + 1) % images.length;
                    images[index].classList.remove('opacity-0');
                    images[index].classList.add('opacity-100');
                }, 3000);
            });
        });

        // === Modal Carousel ===
        let modalInterval = null; // simpan interval agar bisa dibersihkan

        function openModal(button) {
            const title = button.dataset.title;
            const price = button.dataset.price;
            const description = button.dataset.description;
            const images = JSON.parse(button.dataset.images);

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalPrice').innerText = price;
            document.getElementById('modalDescription').innerText = description;

            // Isi ulang carousel container
            const modalContainer = document.getElementById('modalCarouselContainer');
            modalContainer.innerHTML = images.map((img, i) => `
            <img src="/storage/${img}" 
                 class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 ${i === 0 ? 'opacity-100' : 'opacity-0'}" ... loading="lazy" decoding="async"
                 data-modal-carousel>
        `).join('');

            // Hapus interval lama
            if (modalInterval) clearInterval(modalInterval);

            // Buat slideshow baru
            let idx = 0;
            const modalImages = document.querySelectorAll('[data-modal-carousel]');
            modalInterval = setInterval(() => {
                modalImages[idx].classList.remove('opacity-100');
                modalImages[idx].classList.add('opacity-0');
                idx = (idx + 1) % modalImages.length;
                modalImages[idx].classList.remove('opacity-0');
                modalImages[idx].classList.add('opacity-100');
            }, 3000);

            document.getElementById('destinationModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('destinationModal').classList.add('hidden');
            if (modalInterval) clearInterval(modalInterval); // stop slideshow saat modal ditutup
        }
    </script>
@endpush
