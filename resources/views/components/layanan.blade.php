{{-- ===== BAGIAN SERVICES (DESAIN BARU & LEBIH RAMPING) - MULAI ===== --}}
<section id="layanan" class="bg-triatek-primary pb-20">

    {{-- Bagian Header dengan Gambar Latar --}}
    <div class="relative h-72 bg-cover bg-center" style="background-image: url('/images/hero.png');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h2 class="text-white text-4xl font-bold tracking-widest">{{ __('Layanan.title') }}</h2>
        </div>
    </div>

    {{-- DIUBAH: Kontainer diberi max-width agar tidak terlalu lebar di layar besar --}}
    <div class="container mx-auto px-6 max-w-7xl">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 -mt-24 relative z-10">

            {{-- Kartu 1: Software Development --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                    {{-- Ikon --}}
                    <svg xmlns="http://www.w.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">{{ __('Layanan.card1') }}</h3>

                {{-- DIUBAH: Hapus 'flex-grow' dari <p> --}}
                <p class="text-sm text-gray-600 mt-4">
                    {{ __('Layanan.card1Desc') }}
                </p>
    
                {{-- DIUBAH: Ganti 'mt-6' menjadi 'mt-auto pt-6' pada <a> --}}
                <a href="{{ route('service.software') }}" class="mt-auto pt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">{{ __('Layanan.button') }}</a>
            </div>

            {{-- Kartu 2 : Enterprise Resource Planning --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                    {{-- Ikon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">{{ __('Layanan.card2') }}</h3>
                {{-- DIUBAH: Hapus 'flex-grow' dari <p> --}}
                <p class="text-sm text-gray-600 mt-4">
                    {{ __('Layanan.card2Desc') }}
                </p>
                {{-- DIUBAH: Ganti 'mt-6' menjadi 'mt-auto pt-6' pada <a> --}}
                <a href="{{ route('services.erp') }}" class="mt-auto pt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">{{ __('Layanan.button') }}</a>
            </div>

            {{-- Kartu 3 : PR Agency --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                    {{-- Ikon --}}
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">{{ __('Layanan.card3') }}</h3>
                {{-- DIUBAH: Hapus 'flex-grow' dari <p> --}}
                <p class="text-sm text-gray-600 mt-4">
                    {{ __('Layanan.card3Desc') }}
                </p>
                {{-- DIUBAH: Ganti 'mt-6' menjadi 'mt-auto pt-6' pada <a> --}}
                <a href="{{ route('services.pr') }}" class="mt-auto pt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">{{ __('Layanan.button') }}</a>
            </div>
            
            {{-- Kartu 4 : Wa Blast --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                    {{-- Ikon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 432 432" fill="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                        <path d="M364.5 65Q427 127 427 214.5T364.5 364T214 426q-54 0-101-26L0 429l30-109Q2 271 2 214q0-87 62-149T214 3t150.5 62zM214 390q73 0 125-51.5T391 214T339 89.5T214 38T89.5 89.5T38 214q0 51 27 94l4 6l-18 65l67-17l6 3q42 25 90 25zm97-132q9 5 10 7q4 6-3 25q-3 8-15 15.5t-21 9.5q-18 2-33-2q-17-6-30-11q-8-4-15.5-8.5t-14.5-9t-13-9.5t-11.5-10t-10.5-10.5t-8.5-9.5t-7-8.5t-5.5-7t-3.5-5L128 222q-22-29-22-55q0-24 19-44q6-7 14-7q6 0 10 1q8 0 12 9q2 3 6 13l7 17.5l3 8.5q3 5 1 9q-3 7-5 9l-3 3l-3 3.5l-2 2.5q-6 6-3 11q13 22 30 37q13 11 43 26q7 3 11-1q12-15 17-21q4-6 12-3q6 3 36 17z"/>
                    </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">{{ __('Layanan.card4') }}</h3>
                {{-- DIUBAH: Hapus 'flex-grow' dari <p> --}}
                <p class="text-sm text-gray-600 mt-4">
                    {{ __('Layanan.card4Desc') }}
                </p>
                {{-- DIUBAH: Ganti 'mt-6' menjadi 'mt-auto pt-6' pada <a> --}}
                <a href="{{ route('services.pr') }}" class="mt-auto pt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">{{ __('Layanan.button') }}</a>
            </div>
        </div>
    </div>
</section>
