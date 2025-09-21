<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Great Art of Arjasa')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        @font-face {
            font-family: "Roboto Slab";
            font-display: swap;
        }

        @font-face {
            font-family: "Josefin Slab";
            font-display: swap;
        }
    </style>

    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&family=Sanchez:ital@0;1&display=swap"
        rel="stylesheet">

    {{-- CSS Animasi, Navbar Hover, Loader, dsb --}}
    <style>
        /* === Responsive hero & animasi === */
        @media (max-width: 768px) {
            .fade-image {
                animation: none !important;
                opacity: 1 !important;
                transform: none !important;
            }

            .h-5\/6 {
                height: 60vh;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .fade-image {
                animation: none !important;
            }
        }

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

        #mobile-menu {
            transition: transform 0.3s ease-in-out;
        }

        #mobile-menu.hidden {
            transform: translateX(-100%);
        }

        #mobile-menu.open {
            transform: translateX(0);
        }

        #social .elfsight-app-7148802b-a989-44c0-bc48-4b53fbc340c2 {
            max-height: 700px;
            overflow-y: hidden;
        }

        #reviews .elfsight-app-e9e89592-b352-42d7-914e-f13a74838102 {
            max-height: 400px;
            overflow-y: hidden;
        }

        @media (max-width:768px) {

            .shadow-lg,
            .shadow-md {
                box-shadow: 0 4px 10px rgba(0, 0, 0, .08) !important;
            }
        }

        /* === Loader full screen === */
        .loader {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            position: relative;
            animation: rotate 1s linear infinite;
        }

        .loader::before,
        .loader::after {
            content: "";
            box-sizing: border-box;
            position: absolute;
            inset: 0;
            border-radius: 50%;
            border: 5px solid #FFF;
            animation: prixClipFix 2s linear infinite;
        }

        .loader::after {
            inset: 8px;
            transform: rotate3d(90, 90, 0, 180deg);
            border-color: #FF3D00;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes prixClipFix {
            0% {
                clip-path: polygon(50% 50%, 0 0, 0 0, 0 0, 0 0, 0 0)
            }

            50% {
                clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 0, 100% 0, 100% 0)
            }

            75%,
            100% {
                clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 100%, 100% 100%, 100% 100%)
            }
        }

        /* === Loader overlay === */
        #app-loader {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0b0b0b;
            z-index: 9999;
        }

        [data-app] {
            visibility: hidden
        }

        .app-ready #app-loader {
            display: none
        }

        .app-ready [data-app] {
            visibility: visible
        }
    </style>

    <!-- Tailwind CDN -->
    <script defer src="https://cdn.tailwindcss.com" onload="window.__twReady = true"></script>
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
</head>

<body class="antialiased">
    {{-- Loader --}}
    <div id="app-loader" role="status" aria-live="polite">
        <div class="loader" aria-label="Loading"></div>
    </div>

    <div data-app>
        {{-- Hero + Navbar + Slideshow (isi sama seperti jawaban sebelumnya) --}}
        @include('layouts.partials.hero-navbar')
    </div>

    {{-- Konten Halaman --}}
    <main class="relative z-20">
        @yield('content')
    </main>

    {{-- Script optimisasi mobile background --}}
    <script>
        (function() {
            const isMobile = matchMedia('(max-width:768px)').matches;
            if (!isMobile) return;
            const imgs = document.querySelectorAll('.fade-container .fade-image');
            imgs.forEach((img, i) => {
                if (i > 0) {
                    img.dataset.src = img.getAttribute('src');
                    img.removeAttribute('src');
                    img.style.display = 'none';
                }
            });
        })();
    </script>

    @stack('scripts')
</body>

</html>
