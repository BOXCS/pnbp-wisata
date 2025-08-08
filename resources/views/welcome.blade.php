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
                /* Sedikit zoom in */
            }

            33.33% {
                opacity: 0;
                transform: scale(1.1);
                /* Zoom in lebih jauh saat fade out */
            }

            91.66% {
                opacity: 0;
                transform: scale(1);
                /* Kembali ke ukuran normal */
            }

            100% {
                opacity: 1;
                transform: scale(1);
                /* Siap untuk siklus berikutnya */
            }
        }

        .fade-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            /* Untuk memastikan zoom tidak keluar container */
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
            /* Zoom dari tengah gambar */
            will-change: transform, opacity;
            /* Optimasi performa */
        }

        /* Gambar pertama (bg2) - aktif di 0-4s dan 8-12s */
        .fade-image:nth-child(1) {
            animation-delay: 0s;
        }

        /* Gambar kedua (bg3) - aktif di 4-8s */
        .fade-image:nth-child(2) {
            animation-delay: -8s;
        }

        /* Gambar ketiga (bg4) - aktif di 8-12s */
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
    </style>

    <style>
        /* Tambahkan di CSS */
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

        /* Untuk card hover */
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
                <h2 class="text-lg sm:text-6xl mt-4 font-robotoSlab font-light text-white leading-snug text-center"
                    style="letter-spacing: 0.2rem; lin">
                    ANUGERAH DESA WISATA INDONESIA (ADWI) 2024:<br>
                    <span class="text-white">ARJASA</span>
                    <span class="text-transparent" style="-webkit-text-stroke: 1px white;">VILLAGE'S</span>
                </h2>
            </div>
        </div>

        <!-- Navbar di atas gambar - Mobile Menu Button -->
        <div class="md:hidden absolute top-4 right-4 z-30">
            <button id="mobile-menu-button" class="text-gray-800">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Navbar Wrapper -->
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
                        <a href="#budaya" class="nav-link hover:text-orange-500 transition-colors">CULTURE</a>
                        <a href="#gallery" class="nav-link hover:text-orange-500 transition-colors">GALLERY</a>
                        <a href="#packages" class="nav-link hover:text-orange-500 transition-colors">PACKAGES</a>
                        <a href="#facility" class="nav-link hover:text-orange-500 transition-colors">FACILITY</a>
                        <a href="#souvenir" class="nav-link hover:text-orange-500 transition-colors">PRODUCT</a>
                        <a href="#igpics" class="nav-link hover:text-orange-500 transition-colors">IGPICS</a>
                    </nav>
                </div>
                <div class="absolute right-20 font-medium mt-1">
                    <span>ID</span>
                    <span class="text-gray-300">|</span>
                    <span>EN</span>
                    <span class="text-gray-300">|</span>
                    <span>CN</span>
                </div>

                <!-- Mobile Menu Button di kanan -->
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

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu"
            class="hidden fixed inset-0 bg-white z-40 flex flex-col items-center justify-center space-y-8 text-2xl">
            <button id="close-menu" class="absolute top-4 right-4 text-gray-800">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <a href="#profile" class="hover:text-orange-500 transition-colors">PROFILE</a>
            <a href="#budaya" class="hover:text-orange-500 transition-colors">BUDAYA</a>
            <a href="#gallery" class="hover:text-orange-500 transition-colors">GALLERY</a>
            <a href="#packages" class="hover:text-orange-500 transition-colors">PACKAGES</a>
            <a href="#facility" class="hover:text-orange-500 transition-colors">FACILITY</a>
            <a href="#souvenir" class="hover:text-orange-500 transition-colors">SOUVENIR</a>
            <a href="#igpics" class="hover:text-orange-500 transition-colors">IGPICS</a>
            <div class="flex items-center gap-2 font-medium mt-4">
                <span>ID</span>
                <span class="text-gray-300">|</span>
                <span>EN</span>
            </div>
        </div>

        <!-- Background Slideshow Container -->
        <div class="absolute top-0 left-0 w-full h-5/6 z-0 overflow-hidden">
            <div class="fade-container">
                <div class="image-loader"></div>
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
            <!-- Bagian 1 -->
            <div class="flex items-start gap-4 bg-white p-4">
                <img src="images/clean-hands.svg" alt="Icon 1" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">Cleanliness and Beauty</h3>
                    <p class="text-sm text-gray-600">Experience the clean and beauty of Penglipuran village</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-start gap-4 bg-white p-4">
                <img src="images/temple.svg" alt="Icon 2" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">Cultural Preservation</h3>
                    <p class="text-sm text-gray-600">Explore the cultural preservation efforts in the picturesque
                        Penglipuran

                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-start gap-4 bg-white p-4">
                <img src="images/puzzle.png" alt="Icon 3" class="w-20 h-20 object-contain">
                <div>
                    <h3 class="text-lg font-semibold mb-1">Engaging Activities</h3>
                    <p class="text-sm text-gray-600">Experience activities in Penglipuran that showcase the culture of
                        Bali</p>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="relative w-full h-16 md:h-24">
        <img src="images/barongan.svg" alt="Transition"
            class="absolute top-1/2 left-20 md:left-40 w-24 md:w-40 h-auto -translate-x-1/2 -translate-y-3/4 z-20" />
    </div> --}}


    <!-- Section: Profile of Arjasa -->
    <section id="profile" class=" py-10 px-6 md:px-16 text-center">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Profile of Arjasa</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Arjasa merupakan wilayah dengan warisan budaya yang kaya dari zaman Megalitikum hingga modern. Berikut
            adalah tiga aspek sejarah dan budaya yang membentuk identitas Arjasa.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 content-center items-center">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <img src="images/profile-klasik.svg" alt="Logo" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">Jejak Megalitikum & Klasik</h3>
                <p class="text-gray-600">
                    Desa Arjasa menjadi saksi hidup perjalanan peradaban sejak zaman Batu Tengah (Mesolitikum) sekitar
                    400 SM, dengan bukti
                    nyata yang tertanam di empat dusun berupa peninggalan megalitik seperti batu kenong, menhir, dolmen,
                    batu dakon,
                    hingga kubur batu yang masih terawat. Tak berhenti di masa prasejarah, Arjasa juga menyimpan jejak
                    era klasik melalui
                    reruntuhan Kedaton Panjilaras di Dusun Tegalbago, bangunan kuno berukuran 60 x 40 meter yang
                    diyakini berdiri pada abad ke-11
                    sebagai pusat pemerintahan masa lampau. Warisan megalitik dan klasik inilah yang menjadi pondasi
                    kokoh identitas Desa Arjasa—bukan
                    sekadar desa tertua, melainkan gudang cerita peradaban lintas zaman.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <img src="images/profile-pasraman.svg" alt="Logo" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">Jejak Islam & Pasraman</h3>
                <p class="text-gray-600">
                    Sejak masa pasraman hingga masuknya Islam, Desa Arjasa dikenal sebagai pusat spiritual yang
                    menyatukan jejak Hindu-Buddha
                    dan peradaban Islam. Situs Calok di Dusun Calok dan Sendang Tirta Amertha Rajasa di Dusun Bendelan
                    menjadi saksi bisu aktivitas
                    ritual para resi pada masanya, sementara keberadaan makam-makam Islam yang diperkirakan berasal dari
                    abad ke-17 di Dusun Calok
                    dan Dusun Krajan menegaskan pergeseran keyakinan masyarakat. Kehadiran warisan pasraman dan makam
                    Islam ini mengukuhkan Arjasa
                    sebagai ruang sakral lintas zaman yang terus hidup di hati warganya.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <img src="images/profile-harmoni.svg" alt="Logo" class="w-auto h-24 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2 text-orange-600">Harmoni Tradisi</h3>
                <p class="text-gray-600">
                    Kekayaan budaya Desa Arjasa terus hidup melalui kesenian ta’bhuta-an yang menjadi ikon tradisi khas
                    Jember, serta
                    Batik Silabango dengan motif peninggalan megalitik dan nuansa klasiknya. Di sisi lain, Stasiun
                    Arjoso yang berdiri sejak
                    era kolonial menjadi saksi transformasi Arjasa di masa penjajahan hingga kemerdekaan. Perpaduan
                    kearifan lokal, warisan seni,
                    dan bangunan kolonial inilah yang membentuk jati diri Desa Wisata Adat Arjasa: harmoni masa lalu dan
                    masa kini yang tak lekang oleh waktu.
                </p>
            </div>
        </div>
    </section>

    <section id="vision" class="relative py-16 px-6 md:px-16 text-white text-center">
        <!-- Background -->
        <div class="image-loader"></div>
        <img src="images/visi-bg.svg" alt="Background Visi"
            class="absolute top-0 left-0 w-full h-full object-cover z-0 pointer-events-none" />

        <!-- Konten -->
        <div class="relative z-10 max-w-4xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-6">Visi & Misi</h2>

            <p class="text-lg sm:text-xl md:text-2xl leading-relaxed mb-8">
                Visi Desa Arjasa adalah <br class="sm:hidden" />
                <span class="italic">“menuju Desa Arjasa yang agamis, berbudaya, dan berwawasan lingkungan.”</span>
            </p>

            <div class="text-left">
                <p class="text-lg sm:text-xl font-semibold mb-4">Misi Desa Arjasa sebagai berikut:</p>
                <ul class="list-disc list-outside pl-5 space-y-4 text-base sm:text-lg leading-relaxed">
                    <li>
                        Menyelenggarakan pemerintahan yang bersih, amanah dan terbuka berorientasi pada optimalisasi
                        pelayanan kepada masyarakat.
                    </li>
                    <li>
                        Mendorong berkembangnya kualitas sumber daya manusia yang dilandasi nilai-nilai agama dan budaya
                        (saling asih, asah, asuh) demi masyarakat yang modern dan peduli lingkungan.
                    </li>
                    <li>
                        Peningkatan sarana dan prasarana dasar untuk menunjang kesejahteraan dan pelayanan publik dengan
                        slogan:
                        <strong>senyum, cepat dan tepat</strong>.
                    </li>
                    <li>
                        Memanfaatkan potensi sumber daya alam yang berwawasan lingkungan.
                    </li>
                    <li>
                        Memberdayakan lembaga keuangan mikro berbasis masyarakat untuk mendorong usaha ekonomi.
                    </li>
                    <li>
                        Memberdayakan masyarakat melalui partisipasi aktif dalam pembangunan.
                    </li>
                    <li>
                        Mewujudkan lingkungan yang bersih, aman, tertib, dan nyaman.
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <div class="w-16 h-1 bg-orange-500 mx-auto mt-24 mb-8"></div>

    <section id="culture" class="py-1 px-6 md:px-16 bg-white text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">CULTURE OF ARJASA</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Arjasa yang dapat anda jelajahi
        </p>

        <!-- Baris gambar dengan judul dan garis pendek di bawahnya -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Item 1 -->
            <div class="relative">
                <img src="images/culture-1.svg" alt="Culture 1" class="w-full h-64 object-cover rounded-lg shadow" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Gendung</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="relative">
                <img src="images/culture-2.svg" alt="Culture 2" class="w-full h-64 object-cover rounded-lg shadow" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Gendung</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="relative">
                <img src="images/culture-2.svg" alt="Culture 3" class="w-full h-64 object-cover rounded-lg shadow" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Can Macanan Kaduk</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>

            <div class="relative">
                <img src="images/culture-2.svg" alt="Culture 4" class="w-full h-64 object-cover rounded-lg shadow" />
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white text-center">
                    <h3 class="text-xl font-semibold">Kesenian Tari Bedhoyo</h3>
                    <div class="w-10 h-1 bg-orange-500 mx-auto mt-2"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-16 h-1 bg-orange-500 mx-auto mt-24 mb-8"></div>

    <!-- Section: Destination Gallery -->
    <section id="gallery" class="py-16 px-6 md:px-16 bg-gray-50 text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">DESTINATION GALLERY</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Potret indahnya kenampakan Arjasa yang tidak boleh anda lewatkan
        </p>

        <!-- Filter Menu -->
        <div
            class="flex flex-wrap justify-center items-center gap-x-8 md:gap-x-16 gap-y-4 mb-16 text-gray-700 font-semibold text-lg">
            <a href="#" class="filter-link hover:text-orange-500" data-filter="all">ALL</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="calok">Situs Calok</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="punden">Punden Berundak</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="sendang">Sendang Tirta Amertha
                Rajasa</a>
            <a href="#" class="filter-link hover:text-orange-500" data-filter="waterpark">Citra Wisata Mandiri
                Waterpark</a>
        </div>

        <!-- Layout: Video/Gambar + Carousel di Kiri | Grid Gambar di Kanan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-12 text-left">

            <!-- KIRI: Video/Gambar Utama + Carousel -->
            <div class="flex flex-col items-center lg:items-start gap-6">
                <!-- Main Display -->
                <div id="main-display" class="w-full transition-all duration-700">
                    <div class="aspect-[16/9] w-full">
                        <iframe class="w-full h-full rounded-lg shadow-lg"
                            src="https://www.youtube.com/embed/zHBb5RIztBQ" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <!-- Carousel -->
                <div id="gallery-carousel" class="w-full hidden">
                    <div class="flex overflow-x-auto gap-4">
                        <!-- Carousel content injected by JS -->
                    </div>
                </div>
            </div>

            <!-- KANAN: Grid Gambar -->
            <div id="gallery-grid" class="gallery-item">
                <div class="grid grid-cols-2 gap-4">
                    <img src="images/gallery-1.svg" data-filter="calok"
                        class="gallery-thumb cursor-pointer rounded-lg shadow-md w-full h-full object-cover transition-all duration-500" />
                    <img src="images/gallery-2.svg" data-filter="waterpark"
                        class="gallery-thumb cursor-pointer rounded-lg shadow-md w-full h-full object-cover transition-all duration-500" />
                    <img src="images/gallery-3.svg" data-filter="punden"
                        class="gallery-thumb cursor-pointer rounded-lg shadow-md w-full h-full object-cover transition-all duration-500" />
                    <img src="images/gallery-4.svg" data-filter="sendang"
                        class="gallery-thumb cursor-pointer rounded-lg shadow-md w-full h-full object-cover transition-all duration-500" />
                </div>
            </div>

        </div>
    </section>

    <section id="packages" class="py-16 px-6 md:px-16 bg-white text-center">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2">5 RECOMMENDED PACKAGES Travel</h2>
        <p class="text-lg text-gray-600 mb-12">
            Wisata terbaik berdasarkan tingkat ketertarikan wisatawan Arjasa dan kepopuleran wisata tersebut
        </p>

        <!-- Baris Pertama: 2 Card -->
        <div class="flex flex-wrap justify-center gap-6 mb-6">
            <!-- Card 1 -->
            <div class="w-full md:w-[48%] h-96 rounded-2xl overflow-hidden shadow-md relative">
                <!-- Using img tag instead of background image for better reliability -->
                <img src="images/packages-1.svg" alt="Package 1"
                    class="absolute inset-0 w-full h-full object-cover z-0">

                <!-- Overlay layer -->
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>

                <!-- Content -->
                <div class="relative z-20 flex items-end justify-between px-6 py-4 h-80 text-white">
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Hyang Argopuro Festival</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 5.000</p>
                    </div>
                    <button
                        class="bg-white text-blue-600 font-semibold px-3 py-1 rounded-lg hover:bg-gray-100 transition"
                        data-title="Hyang Argopuro Festival" data-price="Rp. 5.000"
                        data-description="Festival Hyang Argopuro adalah acara budaya tahunan yang diselenggarakan oleh Desa Wisata Adat Arjasa, menampilkan upacara tradisional Mendhak Tirta Manggala Hyang yang dilaksanakan di Sendang Tirtha Amertha Rajasa."
                        data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.8620543286847!2d113.73803847589068!3d-8.115525081210887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b0276ac7bf%3A0x94113b9cbef1eb5e!2sSendang%20Tirtha%20Amertha%20Rajasa!5e0!3m2!1sid!2sid!4v1754316982817!5m2!1sid!2sid"
                        onclick="openModal(this)">
                        See Details
                    </button>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="w-full md:w-[48%] h-96 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-2.svg" alt="Package 2"
                    class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                <div class="relative z-20 flex items-end justify-between px-6 py-4 h-80 text-white">
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">One Day Tour Arjasa Village - Educational Tour</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 10.000</p>
                    </div>
                    <button
                        class="bg-white text-blue-600 font-semibold px-3 py-1 rounded-lg hover:bg-gray-100 transition">
                        See Details
                    </button>
                </div>
            </div>
        </div>

        <!-- Baris Kedua: 3 Card -->
        <div class="flex flex-wrap justify-center gap-6">
            <!-- Card 3 -->
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-3.svg" alt="Package 3"
                    class="absolute inset-0 w-full h-full object-cover z-0">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 z-10 flex items-end justify-between px-6 py-4 text-white">
                    <div class="text-left h-72">
                        <h3 class="text-xl font-semibold">One Day Tour Arjasa Village - Educational Tour</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 25.000</p>
                    </div>
                    <button
                        class="bg-white text-blue-600 font-semibold px-3 py-1 rounded-lg hover:bg-gray-100 transition">
                        See Details
                    </button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-4.svg" alt="Package 4"
                    class="absolute inset-0 w-full h-full object-cover z-0">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 z-10 flex items-end justify-between px-6 py-4 text-white">
                    <div class="text-left h-72">
                        <h3 class="text-xl font-semibold">Heritage & Art Camp Arjasa Village</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 25.000</p>
                    </div>
                    <button
                        class="bg-white text-blue-600 font-semibold px-3 py-1 rounded-lg hover:bg-gray-100 transition">
                        See Details
                    </button>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-5.svg" alt="Package 5"
                    class="absolute inset-0 w-full h-full object-cover z-0">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 z-10 flex items-end justify-between px-6 py-4 text-white">
                    <div class="text-left h-72">
                        <h3 class="text-xl font-semibold">Hyang Argopuro Festival</h3>
                        <div class="text-yellow-400">★★★☆☆</div>
                        <p class="text-orange-300 font-bold">Rp. 25.000</p>
                    </div>
                    <button
                        class="bg-white text-blue-600 font-semibold px-3 py-1 rounded-lg hover:bg-gray-100 transition">
                        See Details
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="destinationModal"
        class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-xl p-6 w-[90%] max-w-3xl relative">
            <button onclick="closeModal()"
                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

            <h3 id="modalTitle" class="text-2xl font-bold mb-2"></h3>
            <p id="modalPrice" class="text-orange-500 font-semibold mb-4"></p>
            <p id="modalDescription" class="text-gray-700 mb-4"></p>

            <div class="aspect-w-16 aspect-h-9">
                <iframe id="modalMap" class="w-full h-64 rounded-lg border" loading="lazy" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <section id="facility" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2">FACILITY</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Arjasa yang dapat anda jelajahi
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Column -->
            <div class="relative h-[36rem] bg-cover bg-center rounded-lg overflow-hidden"
                style="background-image: url('images/facility-1.svg')">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-3">Unlock the hidden gem of Arjasa</h3>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        View All Facility
                    </button>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="flex flex-col gap-6">
                <div class="relative h-[17rem] bg-cover bg-center rounded-lg overflow-hidden"
                    style="background-image: url('images/facility-2.svg')">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Explore Local Life</h4>
                    </div>
                </div>
                <div class="relative h-[17rem] bg-cover bg-center rounded-lg overflow-hidden"
                    style="background-image: url('images/facility-3.svg')">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Cultural Experience</h4>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="flex flex-col gap-6">
                <!-- ACOMODATION -->
                <div class="p-6 bg-gray-100 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">ACOMODATION</h3>
                    <p class="text-gray-600 mb-4">
                        Beragam penginapan dari homestay lokal hingga resort alami yang menyatu dengan alam Arjasa.
                    </p>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        View More
                    </button>
                </div>

                <!-- TRANSPORTATION -->
                <div class="p-6 bg-gray-100 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">TRANSPORTATION</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-4">
                        <li>Ojek Tradisional</li>
                        <li>Mobil Wisata</li>
                        <li>Sepeda Gunung</li>
                        <li>Jasa Antar Lokal</li>
                    </ul>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        View More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="souvenir" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2">SOUVENIR</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Arjasa yang dapot anda jelajahi
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Column -->
            <div class="relative h-[36rem] bg-cover bg-center rounded-lg overflow-hidden"
                style="background-image: url('images/facility-1.svg')">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-3">Unlock the hidden gem of Arjasa</h3>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        View All Facility
                    </button>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="flex flex-col gap-6">
                <div class="relative h-[17rem] bg-cover bg-center rounded-lg overflow-hidden"
                    style="background-image: url('images/facility-2.svg')">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Explore Local Life</h4>
                    </div>
                </div>
                <div class="relative h-[17rem] bg-cover bg-center rounded-lg overflow-hidden"
                    style="background-image: url('images/facility-3.svg')">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h4 class="text-white font-bold text-lg">Cultural Experience</h4>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="flex flex-col gap-6">
                <!-- CULINARY -->
                <div class="p-6 bg-gray-100 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">CULINARY</h3>
                    <p class="text-gray-600 mb-4">
                        Beragam penginapan dari homestay lokal hingga resort alami yang menyatu dengan alam Arjasa.
                    </p>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        View More
                    </button>
                </div>

                <!-- MERCHANDISE -->
                <div class="p-6 bg-gray-100 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">MERCHANDISE</h3>
                    <p class="text-gray-600 mb-4">
                        Beragam penginapan dari homestay lokal hingga resort alami yang menyatu dengan alam Arjasa.
                    </p>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        View More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="social" class="py-16 px-6 md-px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2">DesaWisataArjasaOfficial</h2>

        <div class="flex flex-wrap justify-center gap-6 px-10">
            <!-- Card 3 -->
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-3.svg" alt="Package 3"
                    class="absolute inset-0 w-full h-full object-cover z-0">
            </div>

            <!-- Card 4 -->
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-4.svg" alt="Package 4"
                    class="absolute inset-0 w-full h-full object-cover z-0">
            </div>

            <!-- Card 5 -->
            <div class="w-full md:w-[31%] h-80 rounded-2xl overflow-hidden shadow-md relative">
                <img src="images/packages-5.svg" alt="Package 5"
                    class="absolute inset-0 w-full h-full object-cover z-0">
            </div>
        </div>
    </section>

    <section id="social" class="py-16 px-6 md:px-16 bg-white text-gray-800">
        <div class="w-16 h-1 bg-orange-500 mx-auto mb-4"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-2">WHAT'S HAPPENING</h2>
        <p class="text-center text-lg max-w-2xl mx-auto mb-12">
            Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di Arjasa
        </p>

        <!-- Google Maps Embed -->
        <div class="flex justify-center">
            <div class="w-full md:w-[90%] h-[450px] rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.857847011082!2d113.73451588487477!3d-8.115953060346706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6953f62ed30bb%3A0xeda68b0d4c733f41!2sKantor%20Desa%20Arjasa!5e0!3m2!1sid!2sid!4v1754348200377!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


</body>

<script>
    function openModal(button) {
        document.getElementById('modalTitle').innerText = button.dataset.title;
        document.getElementById('modalPrice').innerText = button.dataset.price;
        document.getElementById('modalDescription').innerText = button.dataset.description;
        document.getElementById('modalMap').src = button.dataset.map;

        document.getElementById('destinationModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('destinationModal').classList.add('hidden');
        document.getElementById('modalMap').src = ''; // Reset iframe agar tidak autoplay
    }
</script>

<script>
    // Mobile menu toggle functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuButton = document.getElementById('close-menu');
    const navbar = document.getElementById('navbar');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
        navbar.classList.add('hidden');
    });

    closeMenuButton.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        navbar.classList.remove('show');
    });
</script>

<script>
    const mainDisplay = document.getElementById('main-display');
    const filterLinks = document.querySelectorAll('.filter-link');
    const carousel = document.getElementById('gallery-carousel');
    const carouselInner = carousel.querySelector('div');

    const data = {
        calok: {
            image: 'images/gallery-1.svg',
            gallery: ['images/gallery-1.svg', 'images/calok-2.jpg']
        },
        punden: {
            image: 'images/gallery-3.svg',
            gallery: ['images/gallery-3.svg', 'images/punden-2.jpg']
        },
        sendang: {
            image: 'images/gallery-4.svg',
            gallery: ['images/gallery-4.svg']
        },
        waterpark: {
            image: 'images/gallery-2.svg',
            gallery: ['images/gallery-2.svg', 'images/waterpark-2.jpg']
        }
    };

    function resetToDefault() {
        mainDisplay.innerHTML = `
        <div class="aspect-[16/9] w-full fade-in">
          <iframe class="w-full h-full rounded-lg shadow-lg"
            src="https://www.youtube.com/embed/zHBb5RIztBQ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>
      `;
        carousel.classList.add('hidden');
        carouselInner.innerHTML = '';
    }

    filterLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const filter = link.dataset.filter;

            if (filter === 'all') {
                resetToDefault();
                return;
            }

            const selected = data[filter];
            mainDisplay.innerHTML = `
          <div class="aspect-[16/9] w-full fade-in">
            <img src="${selected.image}" alt="${filter}" class="w-full h-full object-cover rounded-lg shadow-lg" />
          </div>
        `;

            // Carousel
            carousel.classList.remove('hidden');
            carouselInner.innerHTML = selected.gallery.map(img =>
                `<img src="${img}" class="h-32 rounded-lg shadow-md object-cover" />`
            ).join('');
        });
    });
</script>


</html>
