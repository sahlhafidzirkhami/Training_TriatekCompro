{{-- resources/views/partials/hero.blade.php --}}
<section class="hero-section">
    <style>
        /* === ANIMASI === */
        @keyframes zoomFade {
            0% { opacity: 0; transform: scale(1.05) translateY(40px); filter: blur(4px); }
            100% { opacity: 1; transform: scale(1) translateY(0); filter: blur(0); }
        }

        @keyframes slideUpScale {
            0% { opacity: 0; transform: translateY(40px) scale(0.98); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        @keyframes parallaxFade {
            0% { background-position: center 60%; opacity: 0; }
            100% { background-position: center center; opacity: 0.25; }
        }

        @keyframes staggerCard {
            0% { opacity: 0; transform: translateY(50px) scale(0.96); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(60px); filter: blur(3px); }
            100% { opacity: 1; transform: translateY(0); filter: blur(0); }
        }

        /* === HERO SECTION === */
        .hero-section {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #3C0D0D 0%, #4D9DE0 100%);
            overflow: hidden;
            color: #fff;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url('{{ asset("images/building.jpg") }}') center/cover no-repeat;
            opacity: 0.25;
            z-index: 0;
            animation: parallaxFade 1.8s ease forwards;
        }

        .hero-section::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem;
            max-width: 900px;
            animation: zoomFade 1.5s ease forwards;
        }

        .hero-tagline {
            background: rgba(255, 255, 255, 0.12);
            display: inline-block;
            padding: 8px 18px;
            border-radius: 150px;
            color: #b6dff0;
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            opacity: 0;
            animation: slideUpScale 1s ease forwards;
            animation-delay: 0.3s;
        }

        .hero-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.3;
            color: #fff;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            opacity: 0;
            animation: slideUpScale 1s ease forwards;
            animation-delay: 0.5s;
        }

        .hero-text {
            margin-top: 1rem;
            color: #e1e1e1;
            font-size: 1.05rem;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            animation: slideUpScale 1s ease forwards;
            animation-delay: 0.7s;
        }

        .hero-buttons {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            opacity: 0;
            animation: slideUpScale 1s ease forwards;
            animation-delay: 1s;
        }

        .btn-main {
            background: linear-gradient(90deg, #b77d87, #b6dff0);
            color: #08131a;
            border: none;
            border-radius: 12px;
            padding: 12px 26px;
            font-weight: 600;
            text-decoration: none;
            transition: all .3s ease;
        }

        .btn-main:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.15);
        }

        .btn-outline {
            border: 1px solid #b6dff0;
            color: #b6dff0;
            border-radius: 12px;
            padding: 12px 26px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background: rgba(182, 223, 240, 0.12);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-title { font-size: 2.2rem; }
        }

        /* === FEATURE CARDS SECTION === */
        #services {
            background-color: #4c1920;
            position: relative;
            z-index: 10;
            overflow: hidden;
        }

        #services .group {
            opacity: 0;
            animation: staggerCard 1s ease forwards;
        }

        #services .group:nth-child(1) { animation-delay: 0.3s; }
        #services .group:nth-child(2) { animation-delay: 0.5s; }
        #services .group:nth-child(3) { animation-delay: 0.7s; }
        #services .group:nth-child(4) { animation-delay: 0.9s; }

        .card-icon {
            font-size: 2.5rem;
            color: #b6dff0;
            margin-bottom: 1rem;
        }

        /* === OUR CORE EXPERTISE ANIMATION === */
        .expertise-header {
            opacity: 0;
            animation: fadeSlideUp 1.2s ease forwards;
            animation-delay: 0.2s;
        }

        .expertise-subtext {
            opacity: 0;
            animation: fadeSlideUp 1.2s ease forwards;
            animation-delay: 0.5s;
        }
    </style>

    {{-- === HERO CONTENT === --}}
    <div class="hero-content">
        <div class="hero-tagline">Innovate • Communicate • Grow</div>
        <h1 class="hero-title">
            {{ __('hero.tagline1') }}<br>
            {{ __('hero.tagline2') }}
        </h1>
        <p class="hero-text">
            {{ __('hero.desc') }}
        </p>

        <div class="hero-buttons">
            <a href="#contact" class="btn-main">{{ __('hero.contact') }}</a>
            <a href="#services" class="btn-outline">{{ __('hero.services') }}</a>
        </div>
    </div>
</section>

{{-- === FEATURE CARDS SECTION === --}}
<section id="services" class="text-white py-20 px-6 md:px-12 border-t border-[#4c1920]/30">
    <div class="max-w-7xl mx-auto text-center mb-12">
        <h2 class="expertise-header text-3xl md:text-4xl font-bold mb-4 text-[#b6dff0]">Our Core Expertise</h2>
        <p class="expertise-subtext text-gray-300 text-base md:text-lg max-w-2xl mx-auto">
            Delivering technology and communication solutions that drive measurable results and brand impact.
        </p>
    </div>

    {{-- === CARD GRID === --}}
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">

        {{-- Kartu 1: Software Development --}}
        <div class="group bg-[#4D9DE0]/10 border border-[#b6dff0]/20 rounded-2xl p-6 hover:bg-[#4D9DE0]/15 hover:shadow-lg hover:shadow-[#4D9DE0]/20 hover:scale-[1.03] transform transition-all duration-500 text-left backdrop-blur-sm w-full max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-[#b6dff0] mb-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h3 class="text-lg font-semibold text-[#b6dff0] mb-2">Software Development</h3>
            <p class="text-gray-300 text-sm leading-relaxed">
                Custom web, mobile, and enterprise systems built for scale and reliability.
            </p>
        </div>

        {{-- Kartu 2: PR Agency --}}
        <div class="group bg-[#4D9DE0]/10 border border-[#b6dff0]/20 rounded-2xl p-6 hover:bg-[#4D9DE0]/15 hover:shadow-lg hover:shadow-[#4D9DE0]/20 hover:scale-[1.03] transform transition-all duration-500 text-left backdrop-blur-sm w-full max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-[#b6dff0] mb-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-lg font-semibold text-[#b6dff0] mb-2">PR Agency</h3>
            <p class="text-gray-300 text-sm leading-relaxed">
                Strategic communication that builds credibility and trust with your audience.
            </p>
        </div>

        {{-- Kartu 3: Online Reputation --}}
        <div class="group bg-[#4D9DE0]/10 border border-[#b6dff0]/20 rounded-2xl p-6 hover:bg-[#4D9DE0]/15 hover:shadow-lg hover:shadow-[#4D9DE0]/20 hover:scale-[1.03] transform transition-all duration-500 text-left backdrop-blur-sm w-full max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-[#b6dff0] mb-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
            <h3 class="text-lg font-semibold text-[#b6dff0] mb-2">Online Reputation</h3>
            <p class="text-gray-300 text-sm leading-relaxed">
                Protect, manage, and grow your digital presence effectively.
            </p>
        </div>

    </div>
</section>

