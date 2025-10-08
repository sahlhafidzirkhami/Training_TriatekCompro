{{-- resources/views/partials/navbar.blade.php --}}
<nav x-data="{ open: false }" class="bg-triatek-primary fixed top-0 left-0 w-full z-50 shadow-lg animate-navbarFade">
  <style>
    /* === ANIMASI NAVBAR === */
    @keyframes navbarFade {
      0% {
        transform: translateY(-100%);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .animate-navbarFade {
      animation: navbarFade 0.9s ease-out forwards;
    }

    /* Hover underline animation */
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
      background-color: white;
      transform: scaleX(0);
      transform-origin: center;
      transition: transform 0.3s ease;
    }

    /* .nav-link:hover {
      color: #b6dff0;
    } */

    .nav-link:hover::after {
      transform: scaleX(1);
    }

    /* Button hover */
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

    /* Responsive dropdown animation */
    [x-cloak] { display: none !important; }
  </style>

  <div class="container mx-auto px-6 md:px-10 py-5 flex items-center justify-between">
    {{-- LOGO --}}
    <a href="#" class="flex items-center gap-3">
      <img class="h-9 w-auto" src="{{ asset('images/logo_a.png') }}" alt="Triatek Logo">
      <span class="text-white text-2xl font-bold tracking-wider">TRIATEK</span>
    </a>

    {{-- DESKTOP MENU --}}
    <div class="hidden md:flex items-center space-x-10">
      <a href="#layanan" class="nav-link">{{ __('navbar.services') }}</a>
      <a href="#proses" class="nav-link">{{ __('navbar.procedure') }}</a>
      <a href="#tentang" class="nav-link">{{ __('navbar.about') }}</a>
      <a href="#portofolio" class="nav-link">{{ __('navbar.why_us') }}</a>
    </div>
       <div class="hidden md:flex items-center gap-6">
        {{-- === LANGUAGE SWITCHER BARU (Handle Diperbesar) === --}}
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

        {{-- CONTACT BUTTON --}}
        <a href="#kontak" class="btn-contact py-2.5 px-7 text-sm">{{ __('navbar.contact') }}</a>
    </div>

    {{-- MOBILE MENU TOGGLE --}}
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
    
    <a href="#layanan" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">Services</a>
    <a href="#proses" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">Procedure</a>
    <a href="#tentang" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">About</a>
    <a href="#portofolio" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">Why Us</a>
    <a href="#kontak" class="block py-3 px-6 text-white hover:bg-[#4D9DE0]/10 transition">Contact</a>
  </div>
</nav>
