```blade
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Great Art of Arjasa</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        robotoSlab: ['"Roboto Slab"', 'serif'],
                        josefinSlab: ['"Josefin Slab"', 'serif'],
                    },
                },
            },
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&family=Sanchez:ital@0;1&display=swap"
        rel="stylesheet">

    <!-- Elfsight Script untuk Google Reviews dan Instagram Feed -->
    <script src="https://elfsightcdn.com/platform.js" async></script>

    <style>
        @keyframes imageFade {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            25% {
                opacity: 1;
                transform: scale(1.05);
            }

            33.33% {
                opacity: 0;
                transform: scale(1.1);
            }

            91.66% {
                opacity: 0;
                transform: scale(1);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .fade-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .fade-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            animation: imageFade 12s infinite;
            animation-fill-mode: both;
            transform-origin: center center;
            will-change: transform, opacity;
        }

        .fade-image:nth-child(1) {
            animation-delay: 0s;
        }

        .fade-image:nth-child(2) {
            animation-delay: -8s;
        }

        .fade-image:nth-child(3) {
            animation-delay: -4s;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f97316;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .culture-item:hover img {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .package-card:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }

        .facility-card:hover {
            background-color: #f3f4f6;
            transition: background-color 0.3s ease;
        }

        .products-item:hover {
            transform: rotate(2deg);
            transition: transform 0.3s ease;
        }

        .insta-image:hover {
            filter: brightness(1.1);
            transition: filter 0.3s ease;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar Wrapper -->
    <div class="relative w-full min-h-screen md:h-screen">
        <div
            class="absolute top-0 left-0 w-full flex flex-col justify-center items-center text-center py-52 px-6 sm:px-12 z-10">

            <div class="w-full">
                <h1 class="text-base sm:text-2xl font-extralight text-white" style="letter-spacing: 0.3em;">
                    @lang('messages.great_art_of_arjasa')
                </h1>

                <div class="w-96 h-1 bg-white mx-auto mt-5 mb-8"></div>
                <h1 class="text-2xl sm:text-5xl mt-4 font-robotoSlab font-light text-white leading-snug text-center"
                    style="letter-spacing: 0.2rem; lin">
                    @lang('messages.award')<br>
                    <span class="text-white">@lang('messages.village_name')</span>
                    <span class="text-transparent" style="-webkit-text-stroke: 1px white;">@lang('messages.village_thing')</span>
                </h1>
            </div>
        </div>

        <!-- Navbar di atas gambar -->
        <div class="fixed top-0 w-full h-fit bg-white shadow z-50 py-4">
            <div class="relative flex items-center px-6 md:px-1 py-4 max-w-screen-xl mx-auto">
                <!-- Logo di kiri -->
                <div class="absolute left-0">
                    <img src="images/logo-arjasa.svg" alt="Logo" class="h-20 md:h-20" />
                </div>

                <!-- Desktop Navbar di tengah -->
                <div class="hidden md:flex flex-col items-center justify-center w-full text-lg font-semibold">
                    <nav class="flex gap-6">
                        <a href="#profile"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.profile')</a>
                        <a href="#vision" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.vision')</a>
                        <a href="#culture"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.culture')</a>
                        <a href="#gallery"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.gallery')</a>
                        <a href="#packages"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.packages')</a>
                        <a href="#facility"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.facility')</a>
                        <a href="#products"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.products')</a>
                        <a href="#social"
                            class="nav-link hover:text-orange-500 transition-colors">@lang('messages.social')</a>
                    </nav>
                </div>

                <!-- Language Selector -->
                <div class="absolute right-20 font-medium mt-1">
                    <a href="locale/id">@lang('messages.language_selector_id')</a>
                    <span class="text-gray-300">|</span>
                    <a href="locale/en">@lang('messages.language_selector_en')</a>
                    <span class="text-gray-300">|</span>
                    <a href="locale/zh">@lang('messages.language_selector_cn')</a>
                    <span class="text-gray-300">|</span>
                    <a href="locale/es">@lang('messages.language_selector_es')</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="absolute right-0 md:hidden">
                    <button id="mobile-menu-button" class="text-gray-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden fixed inset-0 bg-white z-40 flex flex-col items-center justify-center space-y-8 text-2xl">
            <button id="close-menu" class="absolute top-4 right-4 text-gray-800">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <a href="#profile" class="hover:text-orange-500 transition-colors">@lang('messages.profile')</a>
            <a href="#vision" class="hover:text-orange-500 transition-colors">@lang('messages.vision')</a>
            <a href="#culture" class="hover:text-orange-500 transition-colors">@lang('messages.culture')</a>
            <a href="#gallery" class="hover:text-orange-500 transition-colors">@lang('messages.gallery')</a>
            <a href="#packages" class="hover:text-orange-500 transition-colors">@lang('messages.packages')</a>
            <a href="#facility" class="hover:text-orange-500 transition-colors">@lang('messages.facility')</a>
            <a href="#products" class="hover:text-orange-500 transition-colors">@lang('messages.products')</a>
            <a href="#social" class="hover:text-orange-500 transition-colors">@lang('messages.social')</a>
            <div class="flex items-center gap-2 font-medium mt-4">
                <a>@lang('messages.language_selector_id')</a>
                <span class="text-gray-300">|</span>
                <a>@lang('messages.language_selector_en')</a>
                <span class="text-gray-300">|</span>
                <a>@lang('messages.language_selector_cn')</a>
                <span class="text-gray-300">|</span>
                <a>@lang('messages.language_selector_es')</a>
            </div>
        </div>

        <!-- Background Slideshow -->
        <div class="absolute top-0 left-0 w-full h-5/6 z-0 overflow-hidden">
            <div class="fade-container">
                <img src="images/hero-bg2.jpeg" class="fade-image" />
                <img src="images/hero-bg3 (1).jpg" class="fade-image" />
                <img src="images/hero-bg4.jpg" class="fade-image" />
                <div class="overlay"></div>
            </div>
        </div>
    </div>

    <div class="relative -mt-56 z-20 flex justify-center">
        <div
            class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6 py-10 bg-white rounded-xl shadow-lg">
            <!-- Card 1 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/clean-hands.svg" alt="Icon 1" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">@lang('messages.cleanliness_and_beauty')</h3>
                    <p class="text-sm text-gray-600">@lang('messages.cleanliness_description')</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/temple.svg" alt="Icon 2" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">@lang('messages.cultural_preservation')</h3>
                    <p class="text-sm text-gray-600">@lang('messages.cultural_description')</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/puzzle.png" alt="Icon 3" class="w-20 h-20 object-contain">
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
                <img src="images/profile-klasik.svg" alt="Jejak Megalitikum" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">@lang('messages.megalithic_and_classic')</h3>
                <p class="text-gray-600 text-sm">
                    @lang('messages.megalithic_description')
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-pasraman.svg" alt="Jejak Islam" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">@lang('messages.islamic_heritage')</h3>
                <p class="text-gray-600 text-sm">
                    @lang('messages.islamic_description')
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-harmoni.svg" alt="Harmoni Tradisi" class="w-auto h-24 mx-auto mb-4" />
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
            <h2 class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-6 font-josefinSlab">@lang('messages.vision_and_mission')</h2>

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
                        class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" />

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

        <!-- Filter -->
        <div class="flex flex-wrap justify-center gap-8 mb-16 text-gray-700 font-semibold text-lg">
            <a href="#" class="filter-link hover:text-orange-500" data-filter="all">ALL</a>
            @foreach ($categories as $category)
                <a href="#" class="filter-link hover:text-orange-500"
                    data-filter="category-{{ $category->id }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="flex flex-col gap-6">
                <div id="main-display" class="w-full aspect-[16/9] rounded-lg shadow-lg">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/zHBb5RIztBQ" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <div id="gallery-carousel" class="flex overflow-x-auto gap-4 hidden">
                    <div class="flex gap-4"></div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                @foreach ($categories as $category)
                    @foreach ($category->images as $image)
                        <img src="{{ asset('storage/' . $image->image) }}" data-filter="category-{{ $category->id }}"
                            class="gallery-thumb rounded-lg shadow-md w-full h-full object-cover cursor-pointer" />
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

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
                                data-carousel="{{ $package->id }}">
                        @endforeach
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                    <div class="relative z-20 flex items-end justify-between px-6 py-4 text-white">
                        <div>
                            <h3 class="text-xl font-semibold">{{ $package->name }}</h3>
                            <div class="text-yellow-400">★★★☆☆</div>
                            <p class="text-orange-300 font-bold">Rp. {{ number_format($package->price, 0, ',', '.') }}
                            </p>
                        </div>
                        <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" data-title="{{ $package->name }}"
                            data-price="Rp. {{ number_format($package->price, 0, ',', '.') }}"
                            data-description="{{ $package->description }}" data-images='@json($package->images->pluck('image'))'
                            onclick="openModal(this)">
                            @lang('messages.see_details')
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Modal for Packages -->
    <div id="destinationModal"
        class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-xl p-6 w-[90%] max-w-3xl relative">
            <button onclick="closeModal()"
                class="absolute top-2 right-2 text-gray-500 text-xl font-bold">&times;</button>
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
                        <a href="{{ route('facilities.index') }}"
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
                @foreach ($textFacilities as $facility)
                    <div class="p-6 bg-gray-100 rounded-lg shadow facility-card">
                        <h3 class="text-xl font-bold mb-2">{{ strtoupper($facility->name) }}</h3>
                        <p class="text-gray-600 mb-4 text-sm">{{ $facility->description }}</p>
                        <a href="{{ route('facilities.show', $facility->id) }}"
                            class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                            @lang('messages.view_more')
                        </a>
                    </div>
                @endforeach
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
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@DesaWisataArjasaOfficial
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
            <div class="w-full md:w-[90%] h-[450px] rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.857847011082!2d113.73451588487477!3d-8.115953060346706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6953f62ed30bb%3A0xeda68b0d4c733f41!2sKantor%20Desa%20Arjasa!5e0!3m2!1sid!2sid!4v1754348200377!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

</body>

<script>
    // Mobile Menu Script
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    mobileMenuButton.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
    closeMenu.addEventListener('click', () => mobileMenu.classList.add('hidden'));

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
            '<iframe class="w-full h-full rounded-lg shadow-lg" src="https://www.youtube.com/embed/zHBb5RIztBQ" frameborder="0" allowfullscreen></iframe>';
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
                    `<img src="${thumbs[0].src}" class="w-full h-full object-cover rounded-lg shadow-lg" />`;
                carousel.classList.remove('hidden');
                carouselInner.innerHTML = Array.from(thumbs).map(img =>
                    `<img src="${img.src}" class="h-32 rounded-lg shadow-md object-cover" />`
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
                 class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 ${i === 0 ? 'opacity-100' : 'opacity-0'}"
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


</html>
