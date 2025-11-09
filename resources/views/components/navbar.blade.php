{{-- resources/views/partials/navbar.blade.php --}}
<nav x-data="{ open: false, dropdownOpen: false }" class="bg-triatek-primary fixed top-0 left-0 w-full z-50 shadow-lg">
  <style>
    /* === ANIMASI NAVBAR (Dihapus dari .animate-navbarFade) === */
    /* Animasi @keyframes navbarFade masih ada di sini, 
      tetapi kelas .animate-navbarFade telah dihapus dari <nav> 
      untuk memperbaiki bug clipping. 
    */
    @keyframes navbarFade {
      0% { transform: translateY(-100%); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }
    .animate-navbarFade {
      animation: navbarFade 0.9s ease-out forwards;
    }
    /* ... Sisa CSS Anda ... */
    .nav-link {
      position: relative;
      color: white;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #b6dff0;
      transform: scaleX(0);
      transform-origin: center;
      transition: transform 0.3s ease;
    }
    .nav-link:hover { color: #b6dff0; }
    .nav-link:hover::after { transform: scaleX(1); }
    button.nav-link::after { content: none; }
    button.nav-link:hover { color: #b6dff0; }
    button.nav-link:hover::after { transform: scaleX(0); }
    .btn-contact {
      background: linear-gradient(90deg, #b77d87, #b6dff0);
      color: #08131a;
      border-radius: 9999px;
      font-weight: 600;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-contact:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(182, 223, 240, 0.3);
    }
    [x-cloak] { display: none !important; }
  </style>

  <div class="container mx-auto px-6 md:px-10 py-5 flex items-center justify-between">
    {{-- LOGO --}}
    <a href="/" class="flex items-center gap-3">
      <img class="h-9 w-auto" src="{{ asset('images/logo_a.png') }}" alt="Triatek Logo">
      <span class="text-white text-2xl font-bold tracking-wider">TRIATEK</span>
    </a>

    {{-- DESKTOP MENU --}}
    <div class="hidden md:flex items-center space-x-10">
      <a href="/" class="nav-link">Home</a>
      
      {{-- === MODIFIKASI: x-data dipindah ke nav, class="static" === --}}
      <div @mouseenter="dropdownOpen = true" 
           @mouseleave="dropdownOpen = false" 
           class="static"> {{-- 'relative' diubah menjadi 'static' untuk positioning dropdown --}}
        
        <button class="nav-link flex items-center gap-1 focus:outline-none"
                :class="{ 'text-[#b6dff0]': dropdownOpen }">
          {{ __('navbar.services') }}
          <svg class="w-4 h-4 transition-transform duration-200" :class="{'rotate-180': dropdownOpen}" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        
        <div x-show="dropdownOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             {{-- MODIFIKASI: Posisi diubah ke 'left-0' agar pas --}}
             class="absolute left-0 mt-4 w-screen shadow-xl overflow-hidden z-20 bg-white">
          
          <div class="container mx-auto px-6 md:px-10 py-8">
            
            <div class="mb-5">
                <span class="text-sm font-semibold uppercase text-gray-500 tracking-wider">{{ __('navbar.services') }}</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <a href="{{ route('service.software') }}" class="group p-4 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="w-12 h-12 rounded-lg bg-triatek-primary/10 flex items-center justify-center mb-3 transition-all duration-200 group-hover:bg-triatek-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-triatek-primary"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" /></svg>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-900 block mb-1">Software Development</span>
                        <p class="text-sm text-gray-600">Develop custom digital solutions for your business.</p>
                    </div>
                </a>

                <a href="{{ route('services.erp') }}" class="group p-4 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="w-12 h-12 rounded-lg bg-triatek-primary/10 flex items-center justify-center mb-3 transition-all duration-200 group-hover:bg-triatek-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-triatek-primary"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-900 block mb-1">Enterprise Resource Planning</span>
                        <p class="text-sm text-gray-600">Integrate and manage your core business processes efficiently.</p>
                    </div>
                </a>

                <a href="{{ route('services.pr') }}" class="group p-4 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="w-12 h-12 rounded-lg bg-triatek-primary/10 flex items-center justify-center mb-3 transition-all duration-200 group-hover:bg-triatek-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-triatek-primary"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-900 block mb-1">PR Agency</span>
                        <p class="text-sm text-gray-600">Build a positive reputation and strong media connections.</p>
                    </div>
                </a>
            
                <a href="{{ route('services.pr') }}" class="group p-4 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="w-12 h-12 rounded-lg bg-triatek-primary/10 flex items-center justify-center mb-3 transition-all duration-200 group-hover:bg-triatek-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-triatek-primary"><path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.056 3 12s4.03 8.25 9 8.25z" /></svg>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-900 block mb-1">WA Blast Service</span>
                        <p class="text-sm text-gray-600">Reach your audience directly via our broadcast service.</p>
                    </div>
                </a>
            </div>

            <div class="mt-8 border-t border-gray-200 pt-6">
                <a href="/#services" class="font-semibold text-triatek-primary hover:underline">
                    Lihat semua layanan <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

          </div>
        </div>
      </div>
      {{-- === AKHIR MODIFIKASI === --}}

      <a href="/#proses" class="nav-link">{{ __('navbar.procedure') }}</a>
      <a href="/#tentang" class="nav-link">{{ __('navbar.about') }}</a>
      <a href="/#portofolio" class="nav-link">{{ __('navbar.why_us') }}</a>
    </div>

    {{-- SISA KODE (Language Switcher, Mobile Menu, dll.) --}}
    <div class="hidden md:flex items-center gap-6">
      <a href="{{ route('language.switch', app()->getLocale() == 'id' ? 'en' : 'id') }}" 
         class="relative flex items-center w-24 h-10 rounded-full bg-gray-800/50 cursor-pointer"
         aria-label="Language Switcher">
        <div class="absolute h-10 w-12 rounded-full bg-white shadow-md transition-transform duration-300 ease-in-out transform 
                    {{ app()->getLocale() == 'id' ? 'translate-x-full' : 'translate-x-0' }}">
        </div>
        <div class="relative flex w-full justify-around z-10">
            <span class="text-sm font-semibold transition-colors duration-300 {{ app()->getLocale() == 'en' ? 'text-gray-800' : 'text-white' }}">EN</span>
            <span class="text-sm font-semibold transition-colors duration-300 {{ app()->getLocale() == 'id' ? 'text-gray-800' : 'text-white' }}">ID</span>
        </div>
      </a>
      <a href="#kontak" class="btn-contact py-2.5 px-7 text-sm">{{ __('navbar.contact') }}</a>
    </div>
    <div class="md:hidden flex items-center">
      <button @click="open = !open" class="text-white focus:outline-none transition-transform duration-300" :class="{ 'rotate-90': open }">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>

  {{-- MOBILE MENU --}}
  <div x-show="open" x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-3"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-3"
    @click.away="open = false"
    class="md:hidden bg-[#2B0B0B]/95 backdrop-blur-md border-t border-[#b6dff0]/30">
    
    <div class="px-6 pt-4 pb-2">
        <span class="text-gray-400 text-sm font-semibold uppercase">{{ __('navbar.services') }}</span>
    </div>
    <a href="{{ route('service.software') }}" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition pl-10">Software Development</a>
    <a href="{{ route('services.erp') }}" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition pl-10">Enterprise Resource Planning</a>
    <a href="{{ route('services.pr') }}" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition pl-10">PR Agency</a>
    <a href="#proses" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">{{ __('navbar.procedure') }}</a>
    <a href="#tentang" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">{{ __('navbar.about') }}</a>
    <a href="#portofolio" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">{{ __('navbar.why_us') }}</a>
    <a href="#kontak" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">{{ __('navbar.contact') }}</a>
  </div>
</nav>