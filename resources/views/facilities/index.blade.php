@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">@lang('messages.facilities')</h1>

        @if ($facilities->isEmpty())
            <p class="text-gray-600">@lang('messages.no_facilities')</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($facilities as $facility)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        {{-- Gambar --}}
                        @if ($facility->image)
                            <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->name }}"
                                class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 flex items-center justify-center bg-gray-200 text-gray-500">
                                No Image
                            </div>
                        @endif

                        {{-- Konten --}}
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">
                                {{ $facility->getTranslation('name', app()->getLocale()) }}
                            </h2>
                            <p class="text-sm text-gray-600 mb-2">
                                {{ $facility->getTranslation('type', app()->getLocale()) }}
                            </p>
                            <p class="text-gray-700 text-sm">
                                {{ $facility->getTranslation('description', app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
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
@endpush
