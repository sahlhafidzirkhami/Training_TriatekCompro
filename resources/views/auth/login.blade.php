<x-guest-layout>
    {{-- Container utama diubah untuk background putih --}}
    <div class="min-h-screen flex flex-col items-center justify-center p-4 bg-gray-100">

        {{-- Card Login --}}
        <div class="relative z-10 w-full max-w-md bg-white rounded-xl shadow-2xl overflow-hidden">
            
            <div class="bg-triatek-primary p-8">
                <div class="flex justify-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/companylogo.png') }}" alt="Company Logo" class="w-40 h-auto">
                    </a>
                </div>
            </div>

            <div class="p-8 sm:p-10">
                <div class="animate-fadeInUp mb-8 text-center">
                      <h2 class="text-3xl font-bold text-[#363b41]">Welcome Back</h2>
                      <p class="mt-2 text-gray-500">Please sign in to continue.</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="animate-fadeInUp delay-1">
                        <x-input-label for="email" value="Email" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="email" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-6 animate-fadeInUp delay-2">
                        <x-input-label for="password" value="Password" class="text-sm font-medium text-[#363b41]" />
                        <x-text-input id="password" class="block mt-1 w-full border-gray-200 focus:border-[#4c1920] focus:ring focus:ring-[#4c1920] focus:ring-opacity-50 rounded-lg shadow-sm" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-6 animate-fadeInUp delay-3">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#4c1920] shadow-sm focus:ring-[#4c1920]" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="mt-8 animate-fadeInUp delay-4">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4c1920] hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4c1920] transition-transform transform hover:scale-[1.02]">
                            {{ __('Log in') }}
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