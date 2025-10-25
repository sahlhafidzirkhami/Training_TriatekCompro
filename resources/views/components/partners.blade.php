<section class="bg-gradient-to-r from-red-900 to-black py-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div id="partner-text-content" class="text-center mb-20 transition-all duration-1000 ease-out opacity-0 translate-y-8">
            <h2 class="text-sm uppercase tracking-widest text-red-300 font-semibold mb-3">
                {{ __('partners.title') }}
            </h2>
            <h3 class="text-4xl sm:text-6xl font-extrabold text-white leading-tight tracking-tight">
                {{ __('partners.desc1') }}
            </h3>
            <p class="mt-6 text-lg text-gray-300 max-w-3xl mx-auto">
                {{ __('partners.desc2') }}
            </p>
        </div>

        <div 
            id="partner-container" 
            class="relative w-full overflow-hidden mask-gradient-strong"
        >
            <div id="partner-scroller" class="flex items-center whitespace-nowrap">
                @php
                    $partners = [];
                    for ($i = 1; $i <= 9; $i++) {
                        $partners[] = ['name' => "Partner {$i}", 'logo' => asset("images/foto{$i}.png")];
                    }
                    $allPartners = array_merge($partners, $partners);
                @endphp

                @foreach($allPartners as $partner)
                    <div class="flex-none px-5">
                        <div class="group flex items-center justify-center bg-white/90 backdrop-blur-sm rounded-xl shadow-lg w-36 h-36 transition-all duration-300 hover:shadow-red-400/20 hover:!scale-110 hover:-translate-y-2 cursor-pointer">
                            <img 
                                src="{{ $partner['logo'] }}" 
                                alt="{{ $partner['name'] }} Logo" 
                                class="max-w-[70%] max-h-[70%] object-contain filter grayscale opacity-70 transition-all duration-300 group-hover:grayscale-0 group-hover:opacity-100" 
                            />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<style>
    @keyframes scroll-left {
        from { transform: translateX(0); }
        to { transform: translateX(calc(-1 * var(--scroll-width))); }
    }

    #partner-scroller {
        animation: scroll-left var(--scroll-duration) linear infinite;
    }

    .mask-gradient-strong {
        -webkit-mask-image: linear-gradient(to right, transparent 0%, black 15%, black 85%, transparent 100%);
        mask-image: linear-gradient(to right, transparent 0%, black 15%, black 85%, transparent 100%);
    }

    .is-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('partner-container');
        const scroller = document.getElementById('partner-scroller');
        const textContent = document.getElementById('partner-text-content');

        if (container && scroller) {
            function setupScroller() {
                const scrollWidth = scroller.scrollWidth / 2;
                const speed = 45;
                const duration = scrollWidth / speed;
                scroller.style.setProperty('--scroll-width', `${scrollWidth}px`);
                scroller.style.setProperty('--scroll-duration', `${duration}s`);
            }
            setupScroller();
            window.addEventListener('resize', setupScroller);

            container.addEventListener('mouseover', () => scroller.style.animationPlayState = 'paused');
            container.addEventListener('mouseout', () => scroller.style.animationPlayState = 'running');
        }

        if (textContent) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            observer.observe(textContent);
        }
    });
</script>