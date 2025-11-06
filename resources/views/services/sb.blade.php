<x-layout>
  <x-slot:title>Social Blast — Triatek</x-slot:title>
  <x-slot:content>

  <!-- ================= HERO SECTION ================= -->
  <section
    id="service-pr"
    class="relative text-white bg-gradient-to-r from-[#EF4444] via-black to-[#000000]
           bg-[length:400%_400%] animate-gradientFlow overflow-hidden py-32">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">

      <!-- Text Content -->
      <div class="fade-in-up">
        <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4 fade-in-up">
          Social Blast
        </p>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight max-w-xl mb-6">
           Building Stronger Brands Through <span class="text-red-500">Public Relations Agency</span>
        </h1>
        <p class="text-gray-300 leading-relaxed text-base md:text-lg">
          At Triatek (Sociatrax), we craft powerful communication strategies that elevate brand reputation and build lasting connections with target audiences. From media coverage to digital storytelling, our approach blends creativity, strategy, and measurable results.
        </p>
      </div>

      <!-- Right decorative image -->
      <div class="hidden md:block fade-in-up" style="animation-delay: 0.3s;">
        <img src="/images/pr-agency.png" alt="ERP dashboard illustration" class="opacity-90 scale-110 drop-shadow-[0_0_30px_rgba(255,0,0,0.25)]">
      </div>
    </div>

    <div class="absolute inset-0 bg-black/40 z-0"></div>
  </section>

<!-- ================= CORE SERVICES SECTION ================= -->
<section id="core-business" class="bg-black text-white py-24 relative overflow-hidden">
  <!-- Background subtle gradient -->
  <div class="absolute inset-0 bg-gradient-radial from-[#EF4444]/20 via-transparent to-transparent -z-10"></div>

  <div class="max-w-7xl mx-auto px-6 text-center">
    <!-- Header -->
    <div class="mb-20 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal">
      <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
        Core Services
      </p>
      <h2 class="text-4xl md:text-5xl font-bold leading-tight max-w-3xl mx-auto">
        Our PR expertise focuses on <span class="text-red-500">strategic communication</span>,
        <span class="text-red-500">trust-building</span>, and <span class="text-red-500">brand storytelling.</span>
      </h2>
    </div>

    <!-- Grid: 5 items, equal height -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @php
        $items = [
          ['icon' => 'digital.svg', 'title' => 'Digital & Social PR', 'text' => 'Leveraging social media, online communities, and content marketing to expand your brand’s reach and positive sentiment.'],
          ['icon' => 'management.svg', 'title' => 'Event & Campaign Management', 'text' => 'Planning and executing product launches, press conferences, and influencer activations that spark attention.'],
          ['icon' => 'communication.svg', 'title' => 'Crisis Communication Management', 'text' => 'Preparing proactive response plans and providing rapid support to safeguard your reputation in challenging times.'],
          ['icon' => 'messaging.svg', 'title' => 'Brand Messaging & Positioning', 'text' => 'Defining your brand voice and key messages for consistent, audience-focused communication.'],
          ['icon' => 'mediarelation.svg', 'title' => 'Media Relations & Press Outreach', 'text' => 'Building strong ties with journalists and editors to secure impactful coverage across print, broadcast, and digital outlets.'],
        ];
      @endphp

      @foreach($items as $index => $item)
        <div class="flex flex-col items-center text-center h-full justify-between group transition-all duration-700 opacity-0 translate-y-10 scroll-reveal delay-[{{ ($index + 1) * 100 }}ms]">
          <div class="flex flex-col items-center flex-grow">
            <div class="mb-6">
              <img src="/images/{{ $item['icon'] }}" alt="{{ $item['title'] }}" class="w-10 h-10 text-red-500">
            </div>
            <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
              {{ $item['title'] }}
            </h3>
            <p class="text-gray-400 text-sm leading-relaxed max-w-[230px] mx-auto">
              {{ $item['text'] }}
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>



<!-- ================= SCROLL REVEAL ANIMATION ================= -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const revealElements = document.querySelectorAll(".scroll-reveal");
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("show");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );

    revealElements.forEach((el) => observer.observe(el));
  });
</script>

<!-- ================= CUSTOM STYLES ================= -->
<style>
  .scroll-reveal {
    opacity: 0;
    transform: translateY(30px);
  }
  .scroll-reveal.show {
    opacity: 1;
    transform: translateY(0);
    transition: all 1s ease-out;
  }
</style>



<!-- ================= OUR PROCESS SECTION ================= -->
<section class="relative bg-gradient-to-b from-black via-[#0d0d0d] to-black text-white py-24 overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Header -->
    <div class="mb-16 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal">
      <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
        How Our Services Work?
      </p>
      <h2 class="text-4xl md:text-5xl font-bold leading-tight max-w-3xl">
        A <span class="text-red-500">Clear</span> and <span class="text-red-500">Collaborative process</span> from concept to completion.
      </h2>
    </div>

    <!-- Steps -->
    <div class="space-y-10">
      <!-- Step 1 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[100ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Discovery Phase
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          We start with a discovery phase to understand your brand’s goals and audience.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[200ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Manage & Adjusting
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
         We manage outreach, coordinate events, and monitor public sentiment in real time, adjusting strategies as needed.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[300ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Execution & Engagement
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          We execute the strategy through media outreach, press releases, events, and digital engagement — ensuring consistent and impactful brand visibility.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[400ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Reporting & Insights
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Detailed reports keep you informed of results, from media coverage to audience engagement metrics.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ================= SCROLL REVEAL ANIMATION ================= -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const revealElements = document.querySelectorAll(".scroll-reveal");
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("show");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );

    revealElements.forEach((el) => observer.observe(el));
  });
</script>

<!-- ================= CUSTOM STYLES ================= -->
<style>
  .scroll-reveal {
    opacity: 0;
    transform: translateY(30px);
  }

  .scroll-reveal.show {
    opacity: 1;
    transform: translateY(0);
    transition: all 1s ease-out;
  }
</style>


<section class="relative bg-gradient-to-b from-black via-black to-[#200000] text-white py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Left Illustration -->
        <div 
            class="flex justify-center relative"
            data-aos="fade-right"
            data-aos-duration="1000"
        >
            <img src="/images/erp2.png" 
                 alt="Software Illustration"
                 class="w-3/4 md:w-full max-w-md drop-shadow-[0_0_25px_rgba(255,0,0,0.25)] 
                        transition-transform duration-700 ease-out hover:scale-105 hover:drop-shadow-[0_0_35px_rgba(255,0,0,0.35)]">    
        </div>

        <!-- Right Text Content -->
        <div data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Why Choose Our<span class="text-red-500"> ERP Solutions?</span>
            </h2>

            <p class="text-gray-400 mb-10 leading-relaxed">
                Partnering with Triatek (Sociatrax)means working with a team that treats public relations as a strategic growth engine, not just media outreach. We immerse ourselves in your brand’s story, values, and goals to craft tailored campaigns that communicate a clear, authentic message and reach the audiences that matter most.
            </p>

            <!-- Points -->
            <div class="space-y-6">
                <!-- 1 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">01</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Our strong media network, data-driven insights, and real-time monitoring help us secure impactful coverage.
                    </p>
                </div>

                <!-- 2 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">02</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Guide brand perception, and respond quickly to opportunities or challenges.
                    </p>
                </div>

                <!-- 3 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="300">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">03</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                       With transparent reporting and measurable results, Triatek (Sociatrax) delivers consistent visibility.
                    </p>
                </div>

                <!-- 4 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="400">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">04</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Protects your reputation, and builds lasting trust with your stakeholders.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



  <!-- ================= CTA SECTION ================= -->
  <section class="bg-gradient-to-r from-[#200000] to-black py-20 text-center text-white">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold mb-4">Ready to turn your idea into a reliable solution?</h3>
      <p class="text-gray-300 max-w-2xl mx-auto mb-8">
        Let’s collaborate to build custom software that enhances your business performance and user experience.
      </p>
      <a href="{{ route('messages.create') }}" class="inline-block px-8 py-3 bg-red-600 hover:bg-red-700 transition rounded-xl font-semibold shadow-lg">
        Get in Touch
      </a>
    </div>
  </section>

  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".fade-in-up");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate-fadeInUp");
          }
        });
      },
      { threshold: 0.2 }
    );

    elements.forEach((el) => observer.observe(el));
  });
</script>



  </x-slot>
</x-layout>
