<!-- Navbar di atas gambar -->
<div class="fixed top-0 w-full h-fit bg-white shadow z-50 py-4">
    <div class="relative flex items-center px-6 md:px-1 py-4 max-w-screen-xl mx-auto">
        <!-- Logo di kiri -->
<div class="absolute left-0 flex items-center gap-6">
    <!-- Logo Arjasa -->
    <img src="images/logo-arjasa.svg" alt="Logo" class="h-20 md:h-20" loading="lazy" decoding="async" />

    <!-- Logo Polije -->
    <img src="images/logo-polije.png" alt="Logo Polije" class="h-20 md:h-20" loading="lazy" decoding="async" />
</div>


        <!-- Desktop Navbar di tengah -->
        <div class="hidden md:flex flex-col items-center justify-center w-full text-lg font-semibold">
            <nav class="flex gap-6">
                <a href="#profile" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.profile')</a>
                <a href="#vision" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.vision')</a>
                <a href="#culture" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.culture')</a>
                <a href="#gallery" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.gallery')</a>
                <a href="#packages" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.packages')</a>
                <a href="#facility" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.facility')</a>
                <a href="#products" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.products')</a>
                <a href="#social" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.social')</a>
                <a href="https://carbon.atourin.com/" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.carbon')</a>
            </nav>
        </div>

        <!-- Language Selector -->
        <div id="google_translate_element" class="absolute right-20 font-medium mt-1 hidden md:flex">
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
                <!-- Icon burger default -->
                <svg id="burger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <!-- Icon silang (akan disembunyikan pada awalnya) -->
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
    <a href="#profile" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.profile')</a>
    <a href="#vision" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.vision')</a>
    <a href="#culture" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.culture')</a>
    <a href="#gallery" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.gallery')</a>
    <a href="#packages" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.packages')</a>
    <a href="#facility" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.facility')</a>
    <a href="#products" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.products')</a>
    <a href="#social" class="hover:text-orange-500 transition-colors menu-link">@lang('messages.social')</a>
    <a href="https://carbon.atourin.com/" class="nav-link hover:text-orange-500 transition-colors">@lang('messages.carbon')</a>
    <div class="flex items-center gap-2 font-medium mt-4">
        <a href="locale/id">@lang('messages.language_selector_id')</a>
        <span class="text-gray-300">|</span>
        <a href="locale/en">@lang('messages.language_selector_en')</a>
        <span class="text-gray-300">|</span>
        <a href="locale/zh">@lang('messages.language_selector_cn')</a>
        <span class="text-gray-300">|</span>
        <a href="locale/es">@lang('messages.language_selector_es')</a>
    </div>
</div>
