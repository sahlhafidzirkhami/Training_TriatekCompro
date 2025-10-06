<section id="kontak" class="bg-gray-50 pt-20 pb-10">
  <div class="container mx-auto px-6">

    @if(session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8 max-w-4xl mx-auto" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
      <div class="space-y-6">
        <h2 class="text-4xl font-bold text-triatek-dark">Contact Us</h2>
        <p class="text-gray-600">Kami siap memproses informasi untuk berdiskusi lebih lanjut mengenai proyek Anda.</p>
        
        <div class="space-y-4">
          <div class="flex items-center gap-3">
            <svg class="w-6 h-6 text-triatek-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <a href="mailto:info@triatek.id" class="text-gray-700 hover:text-triatek-primary">info@triatek.id</a>
          </div>
          <div class="flex items-center gap-3">
            <svg class="w-6 h-6 text-triatek-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span class="text-gray-700">BRI Tower, Bandung</span>
          </div>
          <div class="flex items-center gap-3">
            <svg class="w-6 h-6 text-triatek-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <span class="text-gray-700">+62 851-7695-7686</span>
          </div>
        </div>
      </div>

      <div>
        <form action="{{ route('messages.store') }}" method="POST" class="space-y-4">
          @csrf
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name*</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-triatek-primary focus:border-triatek-primary">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
            <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-triatek-primary focus:border-triatek-primary">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
          <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Subject*</label>
            <input type="text" name="subject" id="subject" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-triatek-primary focus:border-triatek-primary">
            @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Message*</label>
            <textarea name="message" id="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-triatek-primary focus:border-triatek-primary"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
          <div>
            <button type="submit" class="w-full text-white font-bold py-3 px-6 rounded-lg bg-triatek-red hover:opacity-90 transition-opacity">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section>
  <div>
    
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2109.173616869555!2d107.60653607273629!3d-6.922068017763766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e625ab8dab4f%3A0xef1ba9e9f456d050!2sMenara%20BRI%20Bandung!5e0!3m2!1sid!2sid!4v1759714826154!5m2!1sid!2sid" 
      width="100%" 
      height="450" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>