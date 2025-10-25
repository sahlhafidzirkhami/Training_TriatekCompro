<x-layout>
  <x-slot:title>Software Development — Triatek</x-slot:title>
  <x-slot:content>

  <!-- ================= HERO SECTION ================= -->
  <section
    id="service-erp"
    class="relative text-white bg-gradient-to-r from-[#EF4444] via-black to-[#000000]
           bg-[length:400%_400%] animate-gradientFlow overflow-hidden py-32">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">

      <!-- Text Content -->
      <div class="fade-in-up">
        <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4 fade-in-up">
          {{ __('software.subtitle') }}
        </p>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight max-w-xl mb-6">
          {{ __('software.title') }}<span class="text-red-500"> {{ __('software.titleRed') }}</span>
        </h1>
      <p class="text-gray-400 leading-relaxed mb-5">
        {{ __('software.at') }} <span class="text-red-500">Triatek</span>,{{__('software.desc1')}}
        <span class="text-red-500">{{__('software.desc1Red')}}</span>
      </p>
      <p class="text-gray-400 leading-relaxed">
        From <span class="text-red-500">mobile apps and web platforms</span> to
        <span class="text-red-500">large-scale business management solutions, Triatek</span>
        delivers software that drives efficiency, improves customer experiences, and keeps you ahead of the competition.
      </p>
      </div>

      <!-- Right decorative image -->
      <div class="hidden md:block fade-in-up" style="animation-delay: 0.3s;">
        <img src="/images/software.png" alt="ERP dashboard illustration" class="opacity-90 scale-110 drop-shadow-[0_0_30px_rgba(255,0,0,0.25)]">
      </div>
    </div>

    <div class="absolute inset-0 bg-black/40 z-0"></div>
  </section>

<!-- ================= CORE SERVICES SECTION ================= -->
<section id="core-services" class="bg-black text-white py-24 relative overflow-hidden">
  <!-- Background subtle gradient -->
  <div class="absolute inset-0 bg-gradient-radial from-[#EF4444]/20 via-transparent to-transparent -z-10"></div>

  <div class="max-w-6xl mx-auto px-6 text-center">
    <!-- Header -->
    <div class="mb-20 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal">
      <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
        Core Services
      </p>
      <h2 class="text-4xl md:text-5xl font-bold leading-tight max-w-3xl mx-auto">
        Our core expertise lies in building intelligent, reliable, and scalable software ecosystems.
      </h2>
    </div>

    <!-- Grid Container -->
    <div class="flex flex-col items-center gap-16">
      <!-- Row 1 -->
      <div class="flex flex-col md:flex-row justify-center gap-16 md:gap-12">
        <!-- Service 1 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[100ms]">
          <div class="mb-6">
            <img src="/images/code-icon.svg" alt="Custom Application" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Customs Web & Mobile Apps
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            We design and build tailor-made web, desktop, and mobile applications that fit your specific business needs and scale as you grow.
          </p>
        </div>

        <!-- Service 2 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[250ms]">
          <div class="mb-6">
            <img src="/images/uiux-icon.svg" alt="UI UX Design" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            UI/UX Design
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            We create intuitive interfaces and user experiences that make your applications attractive, easy to use, and customer-friendly.
          </p>
        </div>

        <!-- Service 3 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[400ms]">
          <div class="mb-6">
            <img src="/images/system-icon.svg" alt="System Integration" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            System Integration & API Development
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Our team connects new and existing platforms—cloud services, databases, and third-party apps—for seamless data exchange and automation.
          </p>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="flex flex-col md:flex-row justify-center gap-16 md:gap-12">
        <!-- Service 4 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[100ms]">
          <div class="mb-6">
            <img src="/images/itconsulting-icon.svg" alt="IT Consulting" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            IT Consulting & Technology Advisory
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            From digital transformation roadmaps to architecture reviews, we provide strategic guidance to align technology with your business goals.
          </p>
        </div>

        <!-- Service 5 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[250ms]">
          <div class="mb-6">
            <img src="/images/maintenance-icon.svg" alt="Maintenance Support" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Maintenance & Support
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            We offer continuous monitoring, troubleshooting, and regular updates to keep your systems secure, stable, and up to date.
          </p>
        </div>

        <!-- Service 6 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[400ms]">
          <div class="mb-6">
            <img src="/images/cloud-icon.svg" alt="Cloud DevOps" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Cloud & DevOps Services
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            We help you migrate to the cloud, optimize infrastructure, and implement CI/CD pipelines for faster, more reliable software delivery.
          </p>
        </div>
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
        Our Process
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
          Discovery & Requirement Analysis
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          We start by listening—learning about your operations, challenges, and objectives to help us define precise requirements and a roadmap that fits your timeline and budget.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[200ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Design & Architecture
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Our team crafts clean, user-friendly interfaces and a robust system architecture to guarantee excellent performance and easy maintenance.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[300ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Agile Development
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Using modern programming languages and frameworks, our developers deliver features in iterative sprints, so you can see progress early and provide feedback.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[400ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Quality Assurance & Testing
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          We run thorough manual and automated tests to ensure your software is secure, fast, and bug-free before launch.
        </p>
      </div>

      <!-- Step 5 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[500ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Deployment & Integration
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          We handle setup, data migration, and integration with your existing systems for a smooth, disruption-free rollout.
        </p>
      </div>

      <!-- Step 6 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-b border-gray-800 pt-8 pb-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[600ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Continuous Support & Enhancement
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          After launch, we monitor performance, provide updates, and add new features as your business evolves.
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
            <img src="/images/softwaredevelopment.png" 
                 alt="Software Illustration"
                 class="w-3/4 md:w-full max-w-md drop-shadow-[0_0_25px_rgba(255,0,0,0.25)] 
                        transition-transform duration-700 ease-out hover:scale-105 hover:drop-shadow-[0_0_35px_rgba(255,0,0,0.35)]">    
        </div>

        <!-- Right Text Content -->
        <div data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Why <span class="text-red-500">Software Development</span> Matters?
            </h2>

            <p class="text-gray-400 mb-10 leading-relaxed">
                In today’s digital economy, software isn’t just a tool — it’s the foundation of innovation, 
                scalability, and competitive advantage. Here’s why it matters:
            </p>

            <!-- Points -->
            <div class="space-y-6">
                <!-- 1 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">01</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Increase efficiency through automation of repetitive tasks.
                    </p>
                </div>

                <!-- 2 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">02</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Improve customer experiences with user-friendly digital services.
                    </p>
                </div>

                <!-- 3 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="300">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">03</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Gain a competitive edge by innovating faster than competitors.
                    </p>
                </div>

                <!-- 4 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="400">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">04</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Scale operations to meet growing demand without proportional costs.
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
