<x-layout>
  <x-slot:title>Software Development — Triatek</x-slot:title>
  <x-slot:content>

  <!-- ================= HERO SECTION ================= -->
  <section class="relative bg-gradient-to-b from-black via-[#0d0d0d] to-[#200000] text-white py-32 overflow-hidden">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">

      <!-- Text Content -->
      <div>
        <p class="text-sm tracking-[3px] uppercase text-gray-400 mb-4">
          Software Development
        </p>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight max-w-xl">
          Curious if you can both develop and promote your app?
          <span class="text-red-500">Discover</span> the answer.
        </h1>
      </div>

      <!-- Right decorative background (optional geometric image) -->
      <div class="hidden md:block">
        <img src="/images/software-bg-shape.png" alt="" class="opacity-40 scale-110">
      </div>
    </div>

    <!-- Overlay gradient effect -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
  </section>

  <!-- ================= CONTENT SECTION ================= -->
  <section class="bg-black text-gray-200 py-20">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

      <!-- Left Image -->
      <div class="flex justify-center">
        <img src="/images/software-team.jpg" alt="Software development team" class="rounded-xl shadow-lg w-full max-w-md">
      </div>

      <!-- Right Text -->
      <div>
        <h2 class="text-xl md:text-2xl font-semibold text-white mb-6">
          Software Development Services
        </h2>
        <p class="text-gray-400 leading-relaxed mb-5">
        At <span class="text-red-500">Triatek</span>, we transform business ideas into powerful digital solutions.
        Our software development service combines deep technical expertise with a clear understanding of your goals, ensuring every product is <span class="text-red-500">reliable, scalable, and built for growth.</span>
        </p>
        <p class="text-gray-400 leading-relaxed">
          From <span class="text-red-500">mobile apps and web platforms</span> to <span class="text-red-500">large-scale business management solutions, Triatek</span> delivers software that drives efficiency, improves customer experiences, and keeps you ahead of the competition.
        </p>
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

  </x-slot>
</x-layout>
