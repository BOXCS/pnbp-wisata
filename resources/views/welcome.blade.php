<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Great Art of Arjasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Definsi kelas .wave-mask untuk membuat lengkungan */
        .wave-mask {
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 C60,33 60,66 0,100 L100,100 L100,0 Z" fill="white"/></svg>');
            -webkit-mask-size: 100% 100%;
            -webkit-mask-repeat: no-repeat;
            mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 C60,33 60,66 0,100 L100,100 L100,0 Z" fill="white"/></svg>');
            mask-size: 100% 100%;
            mask-repeat: no-repeat;
        }
    </style>

<style>
    .fade-in {
      animation: fadeInUp 0.6s ease forwards;
    }
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px) scale(0.95);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }
    </style>
    
</head>

<body class="font-sans bg-white">
    <div class="relative w-full min-h-screen md:h-screen">

        <!-- Logo di pojok kiri atas -->
        <div class="absolute top-4 left-4 md:top-6 md:left-6 z-30">
            <img src="images/logo-arjasa.svg" alt="Logo" class="w-50 md:w-60 h-auto" />
        </div>

        <!-- Konten kiri -->
        <div
            class="absolute md:absolute top-0 left-0 w-full md:w-1/2 h-screen md:h-full flex flex-col justify-center items-center md:items-start text-center md:text-left py-12 px-6 sm:px-12 md:px-16 lg:px-32 z-10">

            <div class="max-w-md">
                <h1 class="text-5xl sm:text-6xl md:text-6xl font-black leading-tight text-gray-800">
                    <div>GREAT</div>
                    <div>ART</div>
                    <div>OF</div>
                    <div>ARJASA</div>
                </h1>
                <h2
                    class="text-lg sm:text-2xl md:text-2xl mt-4 md:mt-6 text-gray-600 bg-amber-50/70 sm:bg-amber-50/70 lg:text-gray-600">
                    Telusuri Keindahan Arjasa Yang Belum Pernah Anda Temui Sebelumnya
                </h2>
                <button
                    class="mt-6 md:mt-8 bg-orange-500 hover:bg-orange-600 text-white font-bold px-10 py-4 md:px-8 md:py-3 rounded-b-3xl shadow-lg transition-transform transform hover:scale-105">
                    BOOK NOW!
                </button>
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

        <!-- Navbar di atas gambar - Desktop -->
        <div id="navbar" class="hidden md:flex absolute top-6 right-8 items-center gap-6 text-xl font-semibold z-20">
            <nav class="flex flex-col md:flex-row gap-4 md:gap-10">
                <a href="#profile" class="hover:text-orange-500 transition-colors">PROFILE</a>
                <a href="#budaya" class="hover:text-orange-500 transition-colors">BUDAYA</a>
                <a href="#gallery" class="hover:text-orange-500 transition-colors">GALLERY</a>
                <a href="#packages" class="hover:text-orange-500 transition-colors">PACKAGES</a>
                <a href="#facility" class="hover:text-orange-500 transition-colors">FACILITY</a>
                <a href="#souvenir" class="hover:text-orange-500 transition-colors">SOUVENIR</a>
                <a href="#igpics" class="hover:text-orange-500 transition-colors">IGPICS</a>
            </nav>
            <div class="flex items-center gap-2 font-medium">
                <span>ID</span>
                <span class="text-gray-300">|</span>
                <span>EN</span>
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

        <!-- Gambar cover bergelombang -->
        <div class="absolute top-0 right-0 h-full w-full md:w-auto z-0">
            <img src="images/hero-images.png" alt="Arjasa" class="h-full w-full object-cover" />
        </div>

    </div>

    <div class="relative w-full h-16 md:h-24">
        <img src="images/barongan.svg" alt="Transition"
            class="absolute top-1/2 left-20 md:left-40 w-24 md:w-40 h-auto -translate-x-1/2 -translate-y-3/4 z-20" />
    </div>


    <!-- Section: Profile of Arjasa -->
    <section id="profile" class=" py-5 px-6 md:px-16 text-center">
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
                            src="https://www.youtube.com/embed/qxrWYrmujGM" title="YouTube video player"
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



</body>

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
            src="https://www.youtube.com/embed/qxrWYrmujGM"
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
