{{-- ===== BAGIAN ABOUT US (VERSI FINAL - DENGAN ANIMASI PULSE PADA GAMBAR) - MULAI ===== --}}
<section id="about" class="bg-[#070707] py-20 lg:py-28 overflow-hidden relative">
    
    {{-- Gambar Abstrak di Latar Belakang (Absolute Position) --}}
    {{-- ANIMASI DITAMBAHKAN DI SINI --}}
    <div class="absolute top-0 right-0 h-full w-full lg:w-1/2 animate-subtle-pulse">
        {{-- Efek Glow di Belakang Gambar --}}
        <div class="absolute -inset-12 bg-red-600 opacity-50 blur-3xl rounded-full"></div>
        
        {{-- Gambar dengan object-cover untuk mengisi ruang --}}
        <img src="/images/splash.jpg" 
             alt="Abstract Lines Illustration" 
             class="w-full h-full object-cover relative">
    </div>

    {{-- Konten Teks di Dalam Container --}}
    <div class="container mx-auto px-6 relative">
        {{-- Grid hanya untuk kolom teks, agar tidak tumpang tindih dengan gambar di layar besar --}}
        <div class="grid grid-cols-1 lg:grid-cols-2">
            
            {{-- Kolom Kiri: Teks dengan Animasi --}}
            <div class="text-white max-w-lg">
                <p class="animate-slide-in-up font-semibold uppercase tracking-widest text-triatek-red text-sm">
                    About Us
                </p>
                <h2 class="animate-slide-in-up delay-300 text-4xl lg:text-5xl font-bold mt-4 text-white leading-tight">
                    We Design and Build Solutions That Empower Businesses
                </h2>
                <p class="animate-slide-in-up delay-500 mt-6 text-triatek-secondary text-lg leading-relaxed">
                    Triatek is a multinational team of passionate innovators who love technology and communication. We design and build solutions to help you grow, protect, and amplify your brand.
                </p>
                <a href="#getintouch" class="animate-slide-in-up delay-700 inline-flex items-center mt-10 px-8 py-3 border-2 border-triatek-red text-triatek-red font-bold hover:bg-triatek-red hover:text-[#0A192F] transition-all duration-300 text-sm tracking-widest">
                    <span class="mr-2 text-xl">+</span> GET IN TOUCH
                </a>
            </div>

            {{-- Kolom Kanan dibiarkan kosong, karena gambar sudah diposisikan secara absolute --}}
            <div></div>

        </div>
    </div>
</section>
{{-- ===== BAGIAN ABOUT US (VERSI FINAL - DENGAN ANIMASI PULSE PADA GAMBAR) - SELESAI ===== --}}