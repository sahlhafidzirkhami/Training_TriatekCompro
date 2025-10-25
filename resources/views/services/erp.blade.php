<x-layout>
  <x-slot:title>ERP Solutions — Triatek</x-slot:title>
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
          ERP Solutions
        </p>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight max-w-xl mb-6">
          Empower your business with <span class="text-red-500">Enterprise Resource Planning</span>
        </h1>
        <p class="text-gray-300 leading-relaxed text-base md:text-lg">
          Enterprise Resource Planning, or ERP, is an integrated software system that unifies and automates key business processes, 
          such as accounting, inventory, production, human resources, sales, and customer service into a single platform. 
          <br><br>
          By centralizing data, ERP provides real-time visibility across departments, helping organizations make faster, 
          data-driven decisions.
        </p>
      </div>

      <!-- Right decorative image -->
      <div class="hidden md:block fade-in-up" style="animation-delay: 0.3s;">
        <img src="/images/erp.png" alt="ERP dashboard illustration" class="opacity-90 scale-110 drop-shadow-[0_0_30px_rgba(255,0,0,0.25)]">
      </div>
    </div>

    <div class="absolute inset-0 bg-black/40 z-0"></div>
  </section>
  
 <!-- ================= CORE BUSINESS SECTION ================= -->
<section id="core-business" class="bg-black text-white py-24 relative overflow-hidden">
  <!-- Background subtle gradient -->
  <div class="absolute inset-0 bg-gradient-radial from-[#EF4444]/20 via-transparent to-transparent -z-10"></div>

  <div class="max-w-7xl mx-auto px-6 text-center">
    <!-- Header -->
    <div class="mb-20 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal">
      <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
        Core Business
      </p>
      <h2 class="text-4xl md:text-5xl font-bold leading-tight max-w-3xl mx-auto">
        How ERP strengthens business operations through
        <span class="text-red-500">integration and intelligence.</span>
      </h2>
    </div>

    <!-- Grid: 5 items, equal height -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @php
        $items = [
          ['icon' => 'data.svg', 'title' => 'Centralized Data Management', 'text' => 'All departments share one accurate data source, reducing duplication and errors.'],
          ['icon' => 'efficiency.svg', 'title' => 'Improved Efficiency', 'text' => 'Automation of routine tasks—like order processing or payroll—saves time and minimizes manual work.'],
          ['icon' => 'decision.svg', 'title' => 'Better Decision-Making', 'text' => 'Real-time dashboards and analytics provide insights for strategic planning and forecasting.'],
          ['icon' => 'scalability.svg', 'title' => 'Scalability', 'text' => 'ERP platforms can grow with your business, adding new modules or users as needed.'],
          ['icon' => 'security.svg', 'title' => 'Regulatory Compliance & Security', 'text' => 'Built-in controls help maintain compliance with laws, industry standards, and data security requirements.'],
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

<!-- ================= KEY FUNCTIONAL SECTION ================= -->
<section id="core-services" class="bg-black text-white py-24 relative overflow-hidden">
  <!-- Background subtle gradient -->
  <div class="absolute inset-0 bg-gradient-radial from-[#EF4444]/20 via-transparent to-transparent -z-10"></div>

  <div class="max-w-6xl mx-auto px-6 text-center">
    <!-- Header -->
    <div class="mb-20 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal">
      <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
        Key Functional Modules
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
            <img src="/images/finance.svg" alt="Custom Application" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Finance & Accounting
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Handles budgeting, reporting, and financial analytics.
          </p>
        </div>

        <!-- Service 2 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[250ms]">
          <div class="mb-6">
            <img src="/images/humanresources.svg" alt="UI UX Design" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Human Resources (HR)
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Manages recruitment, payroll, and employee performance.
        </div>

        <!-- Service 3 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[400ms]">
          <div class="mb-6">
            <img src="/images/warehouse.svg" alt="System Integration" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Inventory & Warehouse
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Tracks stock levels, purchases, and logistics.
          </p>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="flex flex-col md:flex-row justify-center gap-16 md:gap-12">
        <!-- Service 4 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[100ms]">
          <div class="mb-6">
            <img src="/images/relationship.svg" alt="IT Consulting" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Sales & Customer Relationship (CRM)
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Streamlines order management and customer interactions.
          </p>
        </div>

        <!-- Service 5 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[250ms]">
          <div class="mb-6">
            <img src="/images/maintenance-icon.svg" alt="Maintenance Support" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Manufacturing & Production
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Plans resources, schedules production, and monitors output.
          </p>
        </div>

        <!-- Service 6 -->
        <div class="group flex flex-col items-start text-left transition-all duration-700 max-w-[280px] opacity-0 translate-y-10 scroll-reveal delay-[400ms]">
          <div class="mb-6">
            <img src="/images/supply.svg" alt="Cloud DevOps" class="w-10 h-10 text-red-500">
          </div>
          <h3 class="text-lg font-semibold mb-4 group-hover:text-red-500 transition-colors duration-300">
            Procurement & Supply Chain
          </h3>
          <p class="text-gray-400 text-sm leading-relaxed">
            Automates supplier management and purchasing workflows.
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


<!-- ================= ERP SERVICES SECTION ================= -->
<section class="relative bg-gradient-to-b from-black via-[#0d0d0d] to-black text-white py-24 overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Header -->
    <div class="mb-16 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal">
      <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
        How Our ERP Services Works?
      </p>
      <h2 class="text-4xl md:text-5xl font-bold leading-tight max-w-3xl">
        At <span class="text-red-500">Triatek</span> we provide<p><span class="text-red-500">end-to-end</span> ERP solutions, including
      </h2>
    </div>

    <!-- Steps -->
    <div class="space-y-10">
      <!-- Step 1 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[100ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Business Process Analysis
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Understanding your operations to design the right ERP strategy.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[200ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Customization & Integration
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Tailoring modules and connecting with existing tools (e.g., e-commerce, POS, or CRM).
        </p>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[300ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Implementation & Training
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Smooth deployment, data migration, and user training.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="flex flex-col md:flex-row md:items-start md:justify-between border-t border-gray-800 pt-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out scroll-reveal delay-[400ms]">
        <h3 class="text-2xl font-semibold mb-3 md:mb-0 text-white">
          Continuous Support & Upgrades
        </h3>
        <p class="text-gray-400 md:w-1/2 leading-relaxed">
          Regular monitoring, updates, and feature enhancements
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
                Choosing Triatek as your ERP partner means getting a solution built around your business. We study your workflows and goals to design an ERP that scales as you grow, integrates smoothly with existing tools, and provides real-time analytics for faster decisions. A clean, intuitive interface keeps training simple, while built-in security and compliance features protect your critical data. More than software, we offer
            </p>

            <!-- Points -->
            <div class="space-y-6">
                <!-- 1 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">01</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Lasting partnership. From planning and migration to training and ongoing support.
                    </p>
                </div>

                <!-- 2 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">02</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Our team ensures a smooth rollout and continuous optimization.
                    </p>
                </div>

                <!-- 3 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="300">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">03</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Regular updates, automation, and process improvements help lower costs
                    </p>
                </div>

                <!-- 4 -->
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="400">
                    <span class="text-red-500 text-2xl font-bold transition-transform duration-500 group-hover:scale-125">04</span>
                    <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                        Deliver a fast return on investment, keeping your business efficient and competitive.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

  

  <!-- ================= CTA SECTION ================= -->
  <section class="bg-gradient-to-r from-[#200000] to-black py-20 text-center text-white">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold mb-4">Ready to elevate your enterprise performance?</h3>
      <p class="text-gray-300 max-w-2xl mx-auto mb-8">
        Let’s build a custom ERP solution tailored to your workflows and business goals.
      </p>
      <a href="{{ route('messages.create') }}" class="inline-block px-8 py-3 bg-red-600 hover:bg-red-700 transition rounded-xl font-semibold shadow-lg">
        Get Started
      </a>
    </div>
  </section>

  </x-slot>
</x-layout>
