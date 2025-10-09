<x-guest-layout>
    {{-- Container utama dengan background abu-abu muda, sama seperti login --}}
    <div class="min-h-screen flex flex-col items-center justify-center p-4 bg-gray-100">

        {{-- Card Registrasi --}}
        <div class="relative z-10 w-full max-w-md bg-white rounded-xl shadow-2xl overflow-hidden">
            
            {{-- Header Kartu dengan logo --}}
            <div class="bg-triatek-primary p-8">
                <div class="flex justify-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/companylogo.png') }}" alt="Company Logo" class="w-40 h-auto">
                    </a>
                </div>
            </div>

            {{-- Body Kartu untuk form registrasi --}}
            <div class="p-8 sm:p-10">
                <div class="animate-fadeInUp mb-8 text-center">
                      <h2 class="text-3xl font-bold text-[#363b41]">Create Account</h2>
                      <p class="mt-2 text-gray-500">Join us by filling out the form below.</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="animate-fadeInUp delay-1">
                        <x-input-label for="name" value="Name" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="name" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4 animate-fadeInUp delay-2">
                        <x-input-label for="email" value="Email" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="email" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4 animate-fadeInUp delay-3">
                        <x-input-label for="password" value="Password" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="password" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4 animate-fadeInUp delay-4">
                        <x-input-label for="password_confirmation" value="Confirm Password" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-6 animate-fadeInUp delay-5">
                        {{-- Tautan "Already registered?" telah dihapus dari sini --}}

                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4c1920] hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4c1920] transition-transform transform hover:scale-[1.02]">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- CSS untuk Animasi (tidak berubah) --}}
    <style>
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeInUp { opacity: 0; animation: fadeInUp 0.8s ease forwards; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
        .delay-5 { animation-delay: 1.0s; }
    </style>
</x-guest-layout>