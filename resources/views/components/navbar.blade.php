<nav x-data="{ open: false }" class="bg-triatek-primary shadow-lg">
  <div class="container mx-auto px-10 py-6"> 
    <div class="flex items-center justify-between">
      
      <div>
        <a href="#" class="flex items-center gap-3">
          <img class="h-8 w-auto" src="images/logo_a.png" alt="Triatek Logo">
          <span class="text-white text-2xl font-bold tracking-wider">TRIATEK</span>
        </a>
      </div>

      <div class="hidden md:flex items-center space-x-8">
        <a href="#layanan" class="relative text-white transition-colors duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white after:scale-x-0 after:transition-transform after:duration-300 after:origin-center hover:text-triatek-white hover:after:scale-x-100">Services</a>
        <a href="#proses" class="relative text-white transition-colors duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white after:scale-x-0 after:transition-transform after:duration-300 after:origin-center hover:text-triatek-white hover:after:scale-x-100">Procedure</a>
        <a href="#tentang" class="relative text-white transition-colors duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white after:scale-x-0 after:transition-transform after:duration-300 after:origin-center hover:text-triatek-white hover:after:scale-x-100">About</a>
        <a href="#portofolio" class="relative text-white transition-colors duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white after:scale-x-0 after:transition-transform after:duration-300 after:origin-center hover:text-triatek-white hover:after:scale-x-100">Why Us</a>
      </div>

      <div class="hidden md:block">
        <a href="#kontak" class="bg-triatek-red text-white font-bold py-2 px-6 rounded-full hover:opacity-90 transition-opacity duration-300">
          Contact
        </a>
      </div>

      <div class="md:hidden flex items-center">
        <button @click="open = !open" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>

    </div>
  </div>

  <div x-show="open" @click.away="open = false" class="md:hidden bg-triatek-dark border-t border-gray-700">
    <a href="#layanan" class="block py-3 px-6 text-sm text-white hover:bg-gray-700 hover:text-triatek-white">Services</a>
    <a href="#proses" class="block py-3 px-6 text-sm text-white hover:bg-gray-700 hover:text-triatek-white">Procedure</a>
    <a href="#tentang" class="block py-3 px-6 text-sm text-white hover:bg-gray-700 hover:text-triatek-white">About</a>
    <a href="#portofolio" class="block py-3 px-6 text-sm text-white hover:bg-gray-700 hover:text-triatek-white">Why Us</a>
    <a href="#portofolio" class="block py-3 px-6 text-sm text-white hover:bg-gray-700 hover:text-triatek-white">Contact</a>
    
  </div>
</nav>