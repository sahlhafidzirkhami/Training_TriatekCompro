<section id="kontak" class="relative bg-white py-20 overflow-hidden">
    <div class="container mx-auto px-6">
        {{-- Success Alert --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-sm mb-8 max-w-4xl mx-auto flex items-center justify-between" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" /></svg>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start max-w-6xl mx-auto">
            {{-- === Contact Info (DIUBAH: Tampilan lebih modern & profesional) === --}}
            <div class="space-y-8 animate-fadeIn">
                <h2 class="text-4xl font-bold text-gray-800">{{ __('kontak.title') }}</h2>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('kontak.desc') }}
                </p>

                <div class="space-y-6">
                    {{-- Email --}}
                    <div class="flex items-center gap-4 group">
                        <div class="bg-slate-100 p-3 rounded-full group-hover:bg-slate-200 transition-all duration-300">
                            <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <a href="mailto:info@triatek.id" class="text-gray-700 font-medium hover:text-gray-900 transition-colors">
                            info@triatek.id
                        </a>
                    </div>
                    
                    {{-- Alamat --}}
                    <div class="flex items-center gap-4 group">
                        <div class="bg-slate-100 p-3 rounded-full group-hover:bg-slate-200 transition-all duration-300">
                            <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <span class="text-gray-700 font-medium">Menara BRI Bandung
Jl. Asia Afrika No.57, Kota Bandung</span>
                    </div>

                    {{-- Telepon --}}
                    <div class="flex items-center gap-4 group">
                        <div class="bg-slate-100 p-3 rounded-full group-hover:bg-slate-200 transition-all duration-300">
                             <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </div>
                        <span class="text-gray-700 font-medium">(+62)851 7695 7686</span>
                    </div>
                </div>
            </div>

            {{-- === Contact Form (DIUBAH: Tampilan lebih modern) === --}}
            <div class="bg-slate-50/70 rounded-2xl shadow-lg p-8 border border-slate-200 animate-fadeInUp">
                <form action="{{ route('messages.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name*</label>
                        {{-- DIUBAH: Focus state color disesuaikan dengan tombol --}}
                        <input type="text" name="name" id="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#4c1920] focus:border-transparent transition">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                        {{-- DIUBAH: Focus state color disesuaikan dengan tombol --}}
                        <input type="email" name="email" id="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#4c1920] focus:border-transparent transition">
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject*</label>
                        {{-- DIUBAH: Focus state color disesuaikan dengan tombol --}}
                        <input type="text" name="subject" id="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#4c1920] focus:border-transparent transition">
                        @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message*</label>
                        {{-- DIUBAH: Focus state color disesuaikan dengan tombol --}}
                        <textarea name="message" id="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#4c1920] focus:border-transparent transition"></textarea>
                        @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        {{-- DIUBAH: Warna tombol diganti menjadi #4c1920 dengan hover effect --}}
                        <button type="submit" class="w-full text-white font-semibold py-3 px-6 rounded-lg bg-[#4c1920] hover:bg-opacity-90 shadow-lg transition-all transform hover:scale-[1.02]">
                            {{ __('kontak.button') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ANIMATIONS (Tetap sama) --}}
    <style>
        @keyframes fadeIn { from {opacity: 0; transform: translateY(30px);} to {opacity: 1; transform: translateY(0);} }
        @keyframes fadeInUp { from {opacity: 0; transform: translateY(40px);} to {opacity: 1; transform: translateY(0);} }

        .animate-fadeIn { animation: fadeIn 1s ease forwards; }
        .animate-fadeInUp { animation: fadeInUp 1s ease forwards; animation-delay: 0.2s; }
    </style>
</section>

{{-- === MAP SECTION (Tetap sama) === --}}
<section class="relative">
    <div class="h-[450px] overflow-hidden border-t border-gray-200">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2109.173616869555!2d107.60653607273629!3d-6.922068017763766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e625ab8dab4f%3A0xef1ba9e9f456d050!2sMenara%20BRI%20Bandung!5e0!3m2!1sid!2sid!4v1759714826154!5m2!1sid!2sid" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>