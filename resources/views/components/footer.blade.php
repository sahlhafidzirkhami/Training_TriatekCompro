{{-- resources/views/layouts/footer.blade.php --}}
<footer class="bg-triatek-primary shadow-lg text-white pt-16 border-t border-[#3C0D0D]/60">
    <div class="max-w-7xl mx-auto px-6 md:px-12">

        {{-- Grid Utama --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 border-b border-white/10 pb-12">

            {{-- Logo & Deskripsi --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/logo_a.png') }}" alt="Triatek Logo" class="h-9 w-auto">
                    <span class="text-2xl font-bold tracking-wider">TRIATEK</span>
                </div>
                <p class="text-sm text-[#b6dff0] font-medium mb-2">From Insights to Impact</p>
                <p class="text-gray-300 text-sm leading-relaxed max-w-xs">
                    A technology-driven company that blends creativity, strategy, and digital solutions to empower brands in the modern era.
                </p>

                {{-- Social Icons --}}
                <div class="flex space-x-4 mt-5">
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-[#b6dff0] hover:text-[#2B0B0B] transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-[#b6dff0] hover:text-[#2B0B0B] transition">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-[#b6dff0] hover:text-[#2B0B0B] transition">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-[#b6dff0] hover:text-[#2B0B0B] transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            {{-- About Section --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-[#b6dff0] mb-4">About</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#b6dff0] transition">Planning</a></li>
                    <li><a href="#" class="hover:text-[#b6dff0] transition">Research</a></li>
                    <li><a href="#" class="hover:text-[#b6dff0] transition">Consulting</a></li>
                    <li><a href="#" class="hover:text-[#b6dff0] transition">Analysis</a></li>
                </ul>
            </div>

            {{-- Services Section --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-[#b6dff0] mb-4">Services</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#b6dff0] transition">Software Development</a></li>
                    <li><a href="#" class="hover:text-[#b6dff0] transition">ERP</a></li>
                    <li><a href="#" class="hover:text-[#b6dff0] transition">PR Agency</a></li>
                    <li><a href="#" class="hover:text-[#b6dff0] transition">UI/UX Design</a></li>
                </ul>
            </div>

            {{-- Contact Section --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-[#b6dff0] mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li><span class="font-medium text-white">Call:</span> +62 851-7695-7686</li>
                    <li><span class="font-medium text-white">Email:</span> info@triatek.id</li>
                    <li><span class="font-medium text-white">Location:</span> Menara BRI Bandung<br>Jl. Asia Afrika No.57, Kota Bandung</li>
                </ul>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="mt-8 py-4 border-t border-white/10 text-center text-gray-400 text-sm">
            © {{ date('Y') }} <span class="font-semibold text-white">TRIATEK</span>. All rights reserved.
        </div>
    </div>
</footer>
