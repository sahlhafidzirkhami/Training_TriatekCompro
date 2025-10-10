<!-- <x-guest-layout>
    {{-- Container utama dengan background abu-abu muda --}}
    <div class="min-h-screen flex flex-col items-center justify-center p-4 bg-gray-100">

        {{-- Card --}}
        <div class="relative z-10 w-full max-w-md bg-white rounded-xl shadow-2xl overflow-hidden">
            
            {{-- Header Kartu dengan logo --}}
            <div class="bg-triatek-primary p-8">
                <div class="flex justify-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/companylogo.png') }}" alt="Company Logo" class="w-40 h-auto">
                    </a>
                </div>
            </div>

            {{-- Body Kartu untuk form --}}
            <div class="p-8 sm:p-10">
                <div class="animate-fadeInUp mb-6 text-center">
                      <h2 class="text-3xl font-bold text-[#363b41]">Forgot Password?</h2>
                      <p class="mt-2 text-gray-500">
                          No problem. We'll send a password reset link to your email.
                      </p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="animate-fadeInUp delay-1">
                        <x-input-label for="email" value="Email" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="email" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-8 animate-fadeInUp delay-2">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4c1920] hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4c1920] transition-transform transform hover:scale-[1.02]">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>

                {{-- TOMBOL KEMBALI DITAMBAHKAN DI SINI --}}
                <div class="mt-6 text-center animate-fadeInUp delay-3">
                    <a href="{{ route('login') }}" class="text-sm font-medium text-[#4c1920] hover:underline">
                        ← Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- CSS untuk Animasi --}}
    <style>
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeInUp { opacity: 0; animation: fadeInUp 0.8s ease forwards; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; } {{-- Delay ditambahkan untuk tombol kembali --}}
    </style>
</x-guest-layout>