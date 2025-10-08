{{-- ===== BAGIAN SERVICES (DESAIN BARU & LEBIH RAMPING) - MULAI ===== --}}
<section id="layanan" class="bg-triatek-primary pb-20">

    {{-- Bagian Header dengan Gambar Latar --}}
    <div class="relative h-72 bg-cover bg-center" style="background-image: url('/images/hero.png');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h2 class="text-white text-4xl font-bold tracking-widest">Our Services</h2>
        </div>
    </div>

    {{-- DIUBAH: Kontainer diberi max-width agar tidak terlalu lebar di layar besar --}}
    <div class="container mx-auto px-6 max-w-5xl">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-24 relative z-10">

            {{-- Kartu 1: Software Development --}}
            {{-- DIUBAH: Sudut kartu dibuat lebih tumpul dengan rounded-2xl --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                {{-- DIUBAH: Ikon baru yang lebih sesuai --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">Software Development</h3>
                <p class="text-sm text-gray-600 mt-4 flex-grow">
                    We design and build tailored software solutions that combine innovation, functionality, and scalability—empowering businesses to operate more efficiently and grow sustainably.
                </p>
                <a href="{{ route('service.software') }}" class="mt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">More</a>
            </div>

            {{-- Kartu 2: ERP --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                {{-- DIUBAH: Ikon baru yang lebih sesuai --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">Enterprise Resource Planning</h3>
                <p class="text-sm text-gray-600 mt-4 flex-grow">
                    We start by understanding your business goals, current challenges, and operational workflow. Our team conducts a thorough analysis to design an ERP strategy that fits your specific industry requirements.
                </p>
                <a href="#" class="mt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">More</a>
            </div>

            {{-- Kartu 3: PR Agency --}}
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                {{-- DIUBAH: Ikon baru yang lebih sesuai --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-6 text-triatek-primary">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-lg font-bold uppercase tracking-wider text-triatek-primary">PR Agency</h3>
                <p class="text-sm text-gray-600 mt-4 flex-grow">
                    We craft strategic communication campaigns that strengthen brand image, build trust, and connect companies with their audiences through impactful storytelling.
                </p>
                <a href="#" class="mt-6 text-sm font-semibold uppercase tracking-wider text-gray-500 hover:text-triatek-primary">More</a>
            </div>

        </div>
    </div>
</section>
