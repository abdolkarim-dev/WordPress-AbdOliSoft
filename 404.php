<?php
get_header();
?>

<!-- ================= 404 ================= -->

<section class="bg-[#eef1ee] relative overflow-hidden min-h-screen flex items-center pt-40 pb-24">
  <div class="absolute inset-0 opacity-[0.30]" style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "></div>

  <div class="absolute -right-40 -top-40 w-[550px] h-[550px] rounded-full bg-primary/10 blur-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-6 w-full">
    <div class="max-w-3xl">
      <div class="flex items-center gap-3 mb-7">
        <span class="w-10 h-px bg-primary"></span>
        <span class="text-primary font-semibold text-sm uppercase tracking-wider">
          Error 404
        </span>
      </div>

      <h1 class="text-7xl md:text-8xl xl:text-[120px] font-bold tracking-[-0.05em] leading-[.9]">
        Lost in
        <br />
        <span class="text-primary">space?</span>
      </h1>

      <p class="mt-8 max-w-lg text-lg text-gray-500 leading-8">
        The page you're looking for doesn't exist, was moved, or is taking
        a nap. Let's get you back on track.
      </p>

      <div class="flex flex-wrap gap-3 mt-10">
        <a href="index.html"
          class="inline-flex items-center gap-2 px-7 py-3.5 bg-gray-950 text-white rounded-lg text-sm font-medium hover:bg-primary transition">
          Back to home
          <span>↗</span>
        </a>

        <a href="blog.html"
          class="inline-flex items-center gap-2 px-7 py-3.5 border border-gray-300 text-gray-900 rounded-lg text-sm font-medium hover:border-primary hover:text-primary transition">
          Read the blog
        </a>
      </div>

      <!-- Search -->
      <div class="mt-14 max-w-md">
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold mb-3">
          Or search for something
        </p>
        <form action="search.html" class="flex gap-2">
          <input type="search" name="q" placeholder="Type keywords..."
            class="flex-1 px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm placeholder-gray-400 focus:outline-none focus:border-primary transition" />
          <button type="submit"
            class="px-6 py-3.5 bg-primary text-white rounded-lg text-sm font-medium hover:bg-emerald-700 transition">
            Search
          </button>
        </form>
      </div>
    </div>
  </div>
</section>