<?php
get_header();

?>

<section class="bg-[#eef1ee] relative overflow-hidden pt-40 pb-24">
  <div class="absolute inset-0 opacity-[0.30]" style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "></div>

  <div class="absolute -right-40 -top-40 w-[550px] h-[550px] rounded-full bg-primary/10 blur-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-6">
    <div class="max-w-3xl">
      <!-- Breadcrumb -->
      <div class="flex items-center gap-3 text-xs mb-7">
        <a href="projects.html" class="text-primary font-semibold uppercase tracking-wider hover:underline">
          Projects
        </a>
        <span class="text-gray-400">/</span>
        <span class="text-gray-500 uppercase tracking-wider font-medium">
          React / TypeScript
        </span>
      </div>

      <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-[-0.05em] leading-[.95]">
        Business
        <br />
        <span class="text-primary">Platform.</span>
      </h1>

      <p class="mt-8 max-w-xl text-lg text-gray-500 leading-8">
        A modern platform for managing business operations — built with a
        focus on speed, clarity and scalability.
      </p>
    </div>
  </div>
</section>

<!-- ================= MAIN ================= -->

<main class="bg-white">
  <div class="max-w-5xl mx-auto px-6 py-20">

    <!-- Featured Visual -->
    <div class="aspect-[16/9] rounded-2xl bg-gray-950 overflow-hidden relative mb-16">
      <div class="absolute inset-0 opacity-20" style="
              background-image:
                linear-gradient(#ffffff 1px, transparent 1px),
                linear-gradient(90deg, #ffffff 1px, transparent 1px);
              background-size: 50px 50px;
            "></div>

      <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center">
          <span class="text-primary font-mono text-sm">01</span>
          <h2 class="text-5xl md:text-6xl font-bold text-white mt-4">
            Business<br />Platform
          </h2>
        </div>
      </div>
    </div>

    <!-- Meta Bar -->
    <div class="grid sm:grid-cols-3 gap-6 pb-10 border-b border-gray-200">
      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Client</p>
        <p class="text-base font-medium mt-2">Acme Corp</p>
      </div>

      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Year</p>
        <p class="text-base font-medium mt-2">2026</p>
      </div>

      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Technologies</p>
        <div class="flex flex-wrap gap-2 mt-2">
          <span class="text-xs px-2.5 py-1 rounded-md bg-primary/10 text-primary font-medium">React</span>
          <span class="text-xs px-2.5 py-1 rounded-md bg-primary/10 text-primary font-medium">TypeScript</span>
          <span class="text-xs px-2.5 py-1 rounded-md bg-primary/10 text-primary font-medium">Tailwind</span>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="mt-14 space-y-6 text-gray-600 leading-8 text-lg">
      <h2 class="text-3xl font-bold text-gray-900 tracking-tight">
        About this project
      </h2>

      <p>
        The Business Platform was designed to help teams manage their daily
        operations in one place. From tracking customers to handling
        internal workflows, the goal was to make complex tasks feel simple.
      </p>

      <p>
        We focused on a clean interface, fast navigation and a scalable
        component system — so the product could grow without becoming
        messy.
      </p>

      <h3 class="text-xl font-bold text-gray-900 pt-4">
        The challenge
      </h3>

      <p>
        Existing tools were slow, cluttered and hard to use. Users needed
        something that felt fast and intuitive from the first click.
      </p>

      <h3 class="text-xl font-bold text-gray-900 pt-4">
        What we built
      </h3>

      <ul class="space-y-3 pl-5 list-disc marker:text-primary">
        <li>A modular dashboard with customizable widgets</li>
        <li>Real-time data updates and notifications</li>
        <li>Role-based access control and permissions</li>
        <li>A fully responsive layout for mobile and desktop</li>
      </ul>

      <p>
        The result is a platform that feels modern, responsive and ready to
        scale with the business.
      </p>
    </div>

    <!-- Project Links -->
    <div class="flex flex-wrap gap-3 mt-14 pt-10 border-t border-gray-200">
      <a href="#"
        class="inline-flex items-center gap-2 px-6 py-3 bg-gray-950 text-white rounded-lg text-sm font-medium hover:bg-primary transition">
        View live demo <span>↗</span>
      </a>
      <a href="#"
        class="inline-flex items-center gap-2 px-6 py-3 border border-gray-300 text-gray-900 rounded-lg text-sm font-medium hover:border-primary hover:text-primary transition">
        Source code <span>↗</span>
      </a>
    </div>

    <!-- Prev / Next -->
    <div class="flex justify-between items-center gap-6 mt-16 pt-10 border-t border-gray-200">
      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Previous</p>
        <a href="project-single.html" class="text-base font-medium mt-1 inline-block hover:text-primary transition">
          ← Analytics Dashboard
        </a>
      </div>

      <div class="text-right">
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Next</p>
        <a href="project-single.html" class="text-base font-medium mt-1 inline-block hover:text-primary transition">
          Corporate Website →
        </a>
      </div>
    </div>

  </div>
</main>


<?php get_footer() ?>