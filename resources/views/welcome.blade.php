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

        .souvenir-item:hover {
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
                    GREAT ART OF ARJASA
                </h1>

                <div class="w-96 h-1 bg-white mx-auto mt-5 mb-8"></div>
                <h1 class="text-2xl sm:text-5xl mt-4 font-robotoSlab font-light text-white leading-snug text-center"
                    style="letter-spacing: 0.2rem; lin">
                    ANUGERAH DESA WISATA INDONESIA (ADWI) 2024:<br>
                    <span class="text-white">ARJASA</span>
                    <span class="text-transparent" style="-webkit-text-stroke: 1px white;">VILLAGE'S</span>
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
                        <a href="#profile" class="nav-link hover:text-orange-500 transition-colors">PROFILE</a>
                        <a href="#vision" class="nav-link hover:text-orange-500 transition-colors">VISI & MISI</a>
                        <a href="#culture" class="nav-link hover:text-orange-500 transition-colors">CULTURE</a>
                        <a href="#gallery" class="nav-link hover:text-orange-500 transition-colors">GALLERY</a>
                        <a href="#packages" class="nav-link hover:text-orange-500 transition-colors">PACKAGES</a>
                        <a href="#facility" class="nav-link hover:text-orange-500 transition-colors">FACILITY</a>
                        <a href="#souvenir" class="nav-link hover:text-orange-500 transition-colors">SOUVENIR</a>
                        <a href="#social" class="nav-link hover:text-orange-500 transition-colors">SOCIAL</a>
                    </nav>
                </div>

                <!-- Language Selector -->
                <div class="absolute right-20 font-medium mt-1">
                    <span>ID</span>
                    <span class="text-gray-300">|</span>
                    <span>EN</span>
                    <span class="text-gray-300">|</span>
                    <span>CN</span>
                    <span class="text-gray-300">|</span>
                    <span>ES</span>
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
            <a href="#profile" class="hover:text-orange-500 transition-colors">PROFILE</a>
            <a href="#vision" class="hover:text-orange-500 transition-colors">VISI & MISI</a>
            <a href="#culture" class="hover:text-orange-500 transition-colors">CULTURE</a>
            <a href="#gallery" class="hover:text-orange-500 transition-colors">GALLERY</a>
            <a href="#packages" class="hover:text-orange-500 transition-colors">PACKAGES</a>
            <a href="#facility" class="hover:text-orange-500 transition-colors">FACILITY</a>
            <a href="#souvenir" class="hover:text-orange-500 transition-colors">SOUVENIR</a>
            <a href="#social" class="hover:text-orange-500 transition-colors">SOCIAL</a>
            <div class="flex items-center gap-2 font-medium mt-4">
                <span>ID</span>
                <span class="text-gray-300">|</span>
                <span>EN</span>
                <span class="text-gray-300">|</span>
                <span>CN</span>
                <span class="text-gray-300">|</span>
                <span>ES</span>
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
                    <h3 class="text-lg font-semibold mb-1">Cleanliness and Beauty</h3>
                    <p class="text-sm text-gray-600">Experience the clean and beauty of Arjasa village</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/temple.svg" alt="Icon 2" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">Cultural Preservation</h3>
                    <p class="text-sm text-gray-600">Explore the cultural preservation efforts in Arjasa</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-start gap-4 bg-white p-4 card-hover">
                <img src="images/puzzle.png" alt="Icon 3" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">Engaging Activities</h3>
                    <p class="text-sm text-gray-600">Experience activities in Arjasa that showcase the culture</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <section id="profile" class="py-10 px-6 md:px-16 text-center bg-white">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-4 font-josefinSlab">Profile Of Arjasa</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Desa Arjasa merupakan desa tertua di Kabupaten Jember dengan warisan budaya dan sejarah yang kaya dari zaman Megalitikum hingga modern.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-klasik.svg" alt="Jejak Megalitikum" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">Jejak Megalitikum & Klasik</h3>
                <p class="text-gray-600 text-sm">
                    Desa Arjasa menjadi saksi hidup perjalanan peradaban sejak zaman Batu Tengah (Mesolitikum) sekitar 400 SM, dengan bukti nyata yang tertanam di empat dusun berupa peninggalan megalitik seperti batu kenong, menhir, dolmen, batu dakon, hingga kubur batu yang masih terawat.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-pasraman.svg" alt="Jejak Islam" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">Jejak Islam & Pasraman</h3>
                <p class="text-gray-600 text-sm">
                    Sejak masa pasraman hingga masuknya Islam, Desa Arjasa dikenal sebagai pusat spiritual yang menyatukan jejak Hindu-Buddha dan peradaban Islam.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow card-hover">
                <img src="images/profile-harmoni.svg" alt="Harmoni Tradisi" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">Harmoni Tradisi</h3>
                <p class="text-gray-600 text-sm">
                    Kekayaan budaya Desa Arjasa terus hidup melalui kesenian ta’bhuta-an yang menjadi ikon tradisi khas Jember, serta Batik Silabango dengan motif peninggalan megalitik.
                </p>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section id="vision" class="relative py-16 px-6 md:px-16 text-white text-center bg-cover bg-center" style="background-image: url('images/visi-bg.svg');">
        <div class="relative z-10 max-w-4xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-6 font-josefinSlab">Visi & Misi</h2>

            <p class="text-lg sm:text-xl md:text-2xl leading-relaxed mb-8 italic">
                “Menuju Desa Arjasa yang agamis, berbudaya, dan berwawasan lingkungan.”
            </p>

            <div class="text-left">
                <p class="text-lg sm:text-xl font-semibold mb-4">Misi Desa Arjasa sebagai berikut:</p>
                <ul class="list-decimal list-inside pl-5 space-y-4 text-base sm:text-lg leading-relaxed">
                    <li>Menyelenggarakan pemerintahan yang bersih, amanah dan terbuka berorientasi pada optimalisasi pelayanan kepada masyarakat.</li>
                    <li>Mendorong berkembangnya kualitas sumber daya manusia yang dilandasi nilai-nilai agama dan budaya.</li>
                    <li>Peningkatan sarana dan prasarana dasar untuk menunjang kesejahteraan dan pelayanan publik dengan slogan: senyum, cepat dan tepat.</li>
                    <li>Memanfaatkan potensi sumber daya alam yang berwawasan lingkungan.</li>
                    <li>Memberdayakan lembaga keuangan mikro berbasis masyarakat untuk mendorong usaha ekonomi.</li>
                    <li>Memberdayakan masyarakat melalui partisipasi aktif dalam pembangunan.</li>
                    <li>Mewujudkan lingkungan yang bersih, aman, tertib, dan nyaman.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-16 px-6 md:px-16 bg-white text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4 font-josefinSlab">Culture of Arjasa</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Arjasa yang dapat anda jelajahi
        </p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="culture-item relative overflow-hidden rounded-lg shadow">
                <img src="images/culture-1.svg" alt="Kesenian Gendung" class="w-full h-64 object-cover" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Gendung</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>

            <div class="culture-item relative overflow-hidden rounded-lg shadow">
                <img src="images/culture-2.svg" alt="Kesenian Barongan" class="w-full h-64 object-cover" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Barongan</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>

            <div class="culture-item relative overflow-hidden rounded-lg shadow">
                <img src="images/culture-3.svg" alt="Kesenian Can Macanan Kaduk" class="w-full h-64 object-cover" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Can Macanan Kaduk</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>

            <div class="culture-item relative overflow-hidden rounded-lg shadow">
                <img src="images/culture-4.svg" alt="Kesenian Tari Bedhoyo" class="w-full h-64 object-cover" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Tari Bedhoyo</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination Gallery -->
    <section id="gallery" class="py-16 px-6 md:px-16 bg-gray-50 text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4 font-josefinSlab">Destination Gallery</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Potret indahnya kenampakan Arjasa yang tidak boleh anda lewatkan
        </p>

        <div class="flex flex-wrap justify-center gap-8 mb-16 text-gray-700 font-semibold text-lg">
            <a href="#" class="filter-link hover:text-orange-500" data-filter="all">ALL</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="calok">Situs Calok</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="punden">Punden Berundak</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="sendang">Sendang Tirta Amertha Rajasa</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="waterpark">Citra Wisata Mandiri Waterpark</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="flex flex-col gap-6">
                <div id="main-display" class="w-full aspect-[16/9] rounded-lg shadow-lg">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/zHBb5RIztBQ" frameborder="0" allowfullscreen></iframe>
                </div>
                <div id="gallery-carousel" class="flex overflow-x-auto gap-4 hidden">
                    <!-- Carousel items -->
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <img src="images/gallery-1.svg" data-filter="calok" class="gallery-thumb rounded-lg shadow-md w-full h-full object-cover cursor-pointer" />
                <img src="images/gallery-2.svg" data-filter="waterpark" class="gallery-thumb rounded-lg shadow-md w-full h-full object-cover cursor-pointer" />
                <img src="images/gallery-3.svg" data-filter="punden" class="gallery-thumb rounded-lg shadow-md w-full h-full object-cover cursor-pointer" />
                <img src="images/gallery-4.svg" data-filter="sendang" class="gallery-thumb rounded-lg shadow-md w-full h-full object-cover cursor-pointer" />
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="py-16 px-6 md:px-16 bg-white text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2 font-josefinSlab">5 Recommended Packages Travel</h2>
        <p class="text-lg text-gray-600 mb-12">
            Wisata terbaik berdasarkan tingkat ketertarikan wisatawan Arjasa dan kepopuleran wisata tersebut
        </p>

        <div class="flex flex-wrap justify-center gap-6 mb-6">
            <div class="w-full md:w-[48%] h-96 rounded-2xl overflow-hidden shadow-md relative package-card">
                <img src="images/packages-1.svg" alt="Hyang Argopuro Festival" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                <div class="relative z-20 flex items-end justify-between px-6 py-4 text-white">
                    <div>
                        <h3 class="text-xl font-semibold">Hyang Argopuro Festival</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 5.000</p>
                    </div>
                    <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" data-title="Hyang Argopuro Festival" data-price="Rp. 5.000" data-description="Festival Hyang Argopuro adalah acara budaya tahunan..." data-map="https://www.google.com/maps/embed?pb=..." onclick="openModal(this)">
                        See Details
                    </button>
                </div>
            </div>

            <div class="w-full md:w-[48%] h-96 rounded-2xl overflow-hidden shadow-md relative package-card">
                <img src="images/packages-2.svg" alt="One Day Tour" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                <div class="relative z-20 flex items-end justify-between px-6 py-4 text-white">
                    <div>
                        <h3 class="text-xl font-semibold">One Day Tour Arjasa Village - Educational Tour</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 10.000</p>
                    </div>
                    <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" data-title="One Day Tour Arjasa Village" data-price="Rp. 10.000" data-description="..." data-map="..." onclick="openModal(this)">
                        See Details
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative package-card">
                <img src="images/packages-3.svg" alt="Package 3" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10 flex items-end justify-between px-6 py-4 text-white">
                    <div>
                        <h3 class="text-xl font-semibold">One Day Tour Arjasa Village - Educational Tour</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 25.000</p>
                    </div>
                    <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" onclick="openModal(this)">
                        See Details
                    </button>
                </div>
            </div>

            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative package-card">
                <img src="images/packages-4.svg" alt="Heritage & Art Camp" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10 flex items-end justify-between px-6 py-4 text-white">
                    <div>
                        <h3 class="text-xl font-semibold">Heritage & Art Camp Arjasa Village</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 25.000</p>
                    </div>
                    <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" onclick="openModal(this)">
                        See Details
                    </button>
                </div>
            </div>

            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative package-card">
                <img src="images/packages-5.svg" alt="Hyang Argopuro Festival" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10 flex items-end justify-between px-6 py-4 text-white">
                    <div>
                        <h3 class="text-xl font-semibold">Hyang Argopuro Festival</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 25.000</p>
                    </div>
                    <button class="bg-white text-blue-600 px-3 py-1 rounded-lg" onclick="openModal(this)">
                        See Details
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Packages -->
    <div id="destinationModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-xl p-6 w-[90%] max-w-3xl relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 text-xl font-bold">&times;</button>
            <h3 id="modalTitle" class="text-2xl font-bold mb-2"></h3>
            <p id="modalPrice" class="text-orange-500 font-semibold mb-4"></p>
            <p id="modalDescription" class="text-gray-700 mb-4"></p>
            <iframe id="modalMap" class="w-full h-64 rounded-lg border" loading="lazy" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Facility Section -->
    <section id="facility" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">Facility</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            Fasilitas pendukung wisata di Desa Arjasa yang siap memanjakan pengunjung.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="relative h-[36rem] rounded-lg overflow-hidden facility-card" style="background-image: url('images/facility-1.svg'); background-size: cover;">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-3">Unlock the hidden gem of Arjasa</h3>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        View All Facility
                    </button>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="relative h-[17rem] rounded-lg overflow-hidden facility-card" style="background-image: url('images/facility-2.svg'); background-size: cover;">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Explore Local Life</h4>
                    </div>
                </div>
                <div class="relative h-[17rem] rounded-lg overflow-hidden facility-card" style="background-image: url('images/facility-3.svg'); background-size: cover;">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Cultural Experience</h4>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="p-6 bg-gray-100 rounded-lg shadow facility-card">
                    <h3 class="text-xl font-bold mb-2">ACOMODATION</h3>
                    <p class="text-gray-600 mb-4 text-sm">
                        Beragam penginapan dari homestay lokal hingga resort alami yang menyatu dengan alam Arjasa.
                    </p>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        View More
                    </button>
                </div>

                <div class="p-6 bg-gray-100 rounded-lg shadow facility-card">
                    <h3 class="text-xl font-bold mb-2">TRANSPORTATION</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-4 text-sm">
                        <li>Ojek Tradisional</li>
                        <li>Mobil Wisata</li>
                        <li>Sepeda Gunung</li>
                        <li>Jasa Antar Lokal</li>
                    </ul>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        View More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Souvenir Section -->
    <section id="souvenir" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">Souvenir</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            Oleh-oleh khas Arjasa yang wajib dibawa pulang sebagai kenang-kenangan.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="souvenir-item relative h-[36rem] rounded-lg overflow-hidden shadow" style="background-image: url('images/souvenir-1.jpg'); background-size: cover;">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-3">Batik Silabango</h3>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        View All Souvenir
                    </button>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="souvenir-item relative h-[17rem] rounded-lg overflow-hidden shadow" style="background-image: url('images/souvenir-2.jpg'); background-size: cover;">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Anyaman Bambu</h4>
                    </div>
                </div>
                <div class="souvenir-item relative h-[17rem] rounded-lg overflow-hidden shadow" style="background-image: url('images/souvenir-3.jpg'); background-size: cover;">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Kerajinan Kayu</h4>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="p-6 bg-gray-100 rounded-lg shadow souvenir-item">
                    <h3 class="text-xl font-bold mb-2">CULINARY</h3>
                    <p class="text-gray-600 mb-4 text-sm">
                        Makanan khas seperti tape, jenang, dan makanan tradisional lainnya.
                    </p>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        View More
                    </button>
                </div>

                <div class="p-6 bg-gray-100 rounded-lg shadow souvenir-item">
                    <h3 class="text-xl font-bold mb-2">MERCHANDISE</h3>
                    <p class="text-gray-600 mb-4 text-sm">
                        Kaos, topi, dan aksesoris bertema Desa Arjasa.
                    </p>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        View More
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="souvenir-item rounded-lg shadow overflow-hidden">
                <img src="images/souvenir-batik.jpg" alt="Batik Silabango" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-bold">Batik Silabango</h4>
                    <p class="text-sm text-gray-600">Motif peninggalan megalitik dengan warna alami.</p>
                </div>
            </div>

            <div class="souvenir-item rounded-lg shadow overflow-hidden">
                <img src="images/souvenir-anyaman.jpg" alt="Anyaman Bambu" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-bold">Anyaman Bambu</h4>
                    <p class="text-sm text-gray-600">Produk kerajinan tangan dari bambu lokal.</p>
                </div>
            </div>

            <div class="souvenir-item rounded-lg shadow overflow-hidden">
                <img src="images/souvenir-makanan.jpg" alt="Makanan Khas" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-bold">Makanan Khas</h4>
                    <p class="text-sm text-gray-600">Tape Arjasa dan jenang tradisional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Section -->
    <section id="social" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">@DesaWisataArjasaOfficial</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
            <div class="h-80 rounded-2xl overflow-hidden shadow-md relative insta-image">
                <img src="images/insta-1.jpg" alt="Parade" class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden shadow-md relative insta-image">
                <img src="images/insta-2.jpg" alt="Situs Batu" class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden shadow-md relative insta-image">
                <img src="images/insta-3.jpg" alt="Gerbang Calok" class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden shadow-md relative insta-image">
                <img src="images/insta-4.jpg" alt="Anyaman" class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden shadow-md relative insta-image">
                <img src="images/insta-5.jpg" alt="Hidangan" class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden shadow-md relative insta-image">
                <img src="images/insta-6.jpg" alt="Gerbang Wisata" class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
        </div>
    </section>

<section id="reviews" class="py-16 px-6 md:px-16 bg-white text-gray-800">
    <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
    <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">WHAT OUR CUSTOMERS SAY</h2>
    <p class="text-center text-lg max-w-2xl mx-auto mb-12">
        Read reviews, testimonials, and feedback to learn more about this unique destination.
    </p>

    <div class="flex flex-wrap justify-center gap-6">
        <!-- Village Info Card -->
        <div class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center gap-2 mb-2">
                <img src="images/arjasa-logo.png" alt="Arjasa Logo" class="w-10 h-10">
                <h3 class="font-bold text-lg">Desa Wisata Arjasa</h3>
            </div>
            <div class="text-yellow-400 text-xl">★★★★★</div>
            <p class="text-sm text-gray-600">150 Google reviews</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600 transition">Write a review</button>
        </div>

        <!-- Review Cards -->
        <div class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition duration-300">
            <div class="flex items-center gap-2 mb-2">
                <img src="images/user1.png" alt="User" class="w-8 h-8 rounded-full">
                <h4 class="font-bold">Budi Santoso</h4>
                <img src="images/google-logo.png" alt="Google" class="w-4 h-4">
            </div>
            <p class="text-xs text-gray-500">2025-07-15</p>
            <div class="text-yellow-400 text-xl">★★★★★</div>
            <p class="text-sm text-gray-600">Desa yang asri dan budaya yang kaya. Sangat direkomendasikan!</p>
        </div>

        <div class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition duration-300">
            <div class="flex items-center gap-2 mb-2">
                <img src="images/user2.png" alt="User" class="w-8 h-8 rounded-full">
                <h4 class="font-bold">Siti Aisyah</h4>
                <img src="images/google-logo.png" alt="Google" class="w-4 h-4">
            </div>
            <p class="text-xs text-gray-500">2025-06-20</p>
            <div class="text-yellow-400 text-xl">★★★★☆</div>
            <p class="text-sm text-gray-600">Bagus... banyak spot foto, tapi ramai di akhir pekan.</p>
        </div>

        <div class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition duration-300">
            <div class="flex items-center gap-2 mb-2">
                <img src="images/user3.png" alt="User" class="w-8 h-8 rounded-full">
                <h4 class="font-bold">John Doe</h4>
                <img src="images/google-logo.png" alt="Google" class="w-4 h-4">
            </div>
            <p class="text-xs text-gray-500">2025-05-10</p>
            <div class="text-yellow-400 text-xl">★★★★★</div>
            <p class="text-sm text-gray-600">Beautiful village, rich culture. Worth visiting!</p>
        </div>
    </div>
</section>

    <!-- What's Happening Section -->
    <section id="happening" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2 font-josefinSlab">What's Happening</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di Arjasa
        </p>

        <div class="flex justify-center">
            <div class="w-full md:w-[90%] h-[450px] rounded-lg overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.857847011082!2d113.73451588487477!3d-8.115953060346706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6953f62ed30bb%3A0xeda68b0d4c733f41!2sKantor%20Desa%20Arjasa!5e0!3m2!1sid!2sid!4v1754348200377!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-8 px-6 md:px-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h4 class="font-bold mb-4">Arjasa</h4>
                <p class="text-sm">Desa Wisata Arjasa<br>Kabupaten Jember<br>Jawa Timur, Indonesia</p>
            </div>

            <div>
                <h4 class="font-bold mb-4">Information</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:text-orange-500">About Us</a></li>
                    <li><a href="#" class="hover:text-orange-500">Contact</a></li>
                    <li><a href="#" class="hover:text-orange-500">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="#profile" class="hover:text-orange-500">Profile</a></li>
                    <li><a href="#culture" class="hover:text-orange-500">Culture</a></li>
                    <li><a href="#gallery" class="hover:text-orange-500">Gallery</a></li>
                    <li><a href="#packages" class="hover:text-orange-500">Packages</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">Social Media</h4>
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

    const galleryData = {
        calok: { image: 'images/gallery-1.svg', gallery: ['images/calok-1.jpg', 'images/calok-2.jpg'] },
        punden: { image: 'images/gallery-3.svg', gallery: ['images/punden-1.jpg', 'images/punden-2.jpg'] },
        sendang: { image: 'images/gallery-4.svg', gallery: ['images/sendang-1.jpg'] },
        waterpark: { image: 'images/gallery-2.svg', gallery: ['images/waterpark-1.jpg', 'images/waterpark-2.jpg'] }
    };

    function resetGallery() {
        mainDisplay.innerHTML = '<iframe class="w-full h-full rounded-lg shadow-lg" src="https://www.youtube.com/embed/zHBb5RIztBQ" frameborder="0" allowfullscreen></iframe>';
        carousel.classList.add('hidden');
        carouselInner.innerHTML = '';
    }

    filterLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const filter = link.dataset.filter;
            if (filter === 'all') return resetGallery();

            const data = galleryData[filter];
            mainDisplay.innerHTML = `<img src="${data.image}" alt="${filter}" class="w-full h-full object-cover rounded-lg shadow-lg" />`;
            carousel.classList.remove('hidden');
            carouselInner.innerHTML = data.gallery.map(img => `<img src="${img}" class="h-32 rounded-lg shadow-md object-cover" />`).join('');
        });
    });
</script>

</html>
```
