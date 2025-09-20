{{-- resources/views/layouts/partials/hero-navbar.blade.php --}}

<nav class="bg-black bg-opacity-70 text-white fixed top-0 inset-x-0 z-50">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ url('/') }}" class="text-2xl font-bold text-orange-500">
            Great Art of Arjasa
        </a>

        {{-- Menu Desktop --}}
        <ul class="hidden md:flex space-x-8 font-josefinSlab">
            <li><a href="{{ url('/') }}" class="nav-link hover:text-orange-400">Home</a></li>
            <li><a href="{{ route('facilities.index') }}" class="nav-link hover:text-orange-400">Facilities</a></li>
            <li><a href="{{ url('/culture') }}" class="nav-link hover:text-orange-400">Culture</a></li>
            <li><a href="{{ url('/packages') }}" class="nav-link hover:text-orange-400">Packages</a></li>
            <li><a href="{{ url('/products') }}" class="nav-link hover:text-orange-400">Products</a></li>
        </ul>

        {{-- Tombol Mobile --}}
        <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    {{-- Menu Mobile --}}
    <div id="mobile-menu" class="md:hidden bg-black bg-opacity-90 text-white px-6 py-4 space-y-4 hidden">
        <a href="{{ url('/') }}" class="block hover:text-orange-400">Home</a>
        <a href="{{ route('facilities.index') }}" class="block hover:text-orange-400">Facilities</a>
        <a href="{{ url('/culture') }}" class="block hover:text-orange-400">Culture</a>
        <a href="{{ url('/packages') }}" class="block hover:text-orange-400">Packages</a>
        <a href="{{ url('/products') }}" class="block hover:text-orange-400">Products</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('open');
        });
    });
</script>
