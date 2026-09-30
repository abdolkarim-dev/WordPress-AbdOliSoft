<?php
get_header();

?>
<section class="bg-[#eef1ee] relative overflow-hidden pt-40 pb-20">
  <div class="absolute inset-0 opacity-[0.30]" style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "></div>

  <div class="relative max-w-3xl mx-auto px-6">
    <div class="flex items-center gap-3 text-xs mb-6">
      <a href="blog.html" class="text-primary font-semibold uppercase tracking-wider hover:underline">
        Blog
      </a>
      <span class="text-gray-400">/</span>
      <span class="text-gray-500 uppercase tracking-wider font-medium">Design</span>
    </div>

    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-[-0.04em] leading-[1.05]">
      Why every project deserves a design system
    </h1>

    <p class="mt-6 text-lg text-gray-500 leading-8">
      A design system isn't just about colors and buttons. It's about
      consistency, speed, and giving your team a shared language for
      building great products.
    </p>

    <!-- Author + Date -->
    <div class="flex items-center gap-4 mt-10 pt-6 border-t border-gray-200">
      <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
        A
      </div>
      <div>
        <p class="text-sm font-semibold">Abdolkarim Bazdar</p>
        <p class="text-xs text-gray-400">March 12, 2026 · 6 min read</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= CONTENT ================= -->

<main class="bg-white">
  <div class="max-w-3xl mx-auto px-6 py-20">
    <!-- Featured Image -->
    <div class="aspect-[16/9] rounded-2xl bg-[#eef1ee] border border-gray-200 overflow-hidden relative mb-14">
      <div class="absolute inset-0 opacity-20" style="
              background-image:
                linear-gradient(#111827 1px, transparent 1px),
                linear-gradient(90deg, #111827 1px, transparent 1px);
              background-size: 40px 40px;
            "></div>
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center">
          <span class="text-primary font-mono text-sm">Design Systems</span>
          <h2 class="text-4xl md:text-5xl font-bold mt-3">
            Consistency<br />at scale
          </h2>
        </div>
      </div>
    </div>

    <!-- Article Body -->
    <article class="space-y-6 text-gray-600 leading-8 text-lg">
      <p>
        When you start a new project, it's easy to focus only on features.
        Ship fast, iterate, and figure things out along the way. But as the
        product grows, something starts to slip — the details.
      </p>

      <p>
        Buttons look slightly different on different pages. Spacing feels
        inconsistent. Colors drift. Suddenly, the product that felt clean at
        the beginning feels messy — even if nothing is technically broken.
      </p>

      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 pt-6 tracking-tight">
        What a design system actually is
      </h2>

      <p>
        A design system is more than a style guide. It's a shared set of
        decisions — components, tokens, patterns and rules — that keep a
        product consistent as it grows.
      </p>

      <blockquote class="border-l-4 border-primary pl-6 italic text-gray-700 my-8">
        "A design system isn't a project. It's a product that serves other
        products."
      </blockquote>

      <p>
        The goal isn't to limit creativity. It's to remove the small,
        repetitive decisions so you can focus on the big ones.
      </p>

      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 pt-6 tracking-tight">
        Why it matters
      </h2>

      <ul class="space-y-3 pl-5 list-disc marker:text-primary">
        <li>
          <strong class="text-gray-900">Consistency:</strong> everything
          feels like it belongs together.
        </li>
        <li>
          <strong class="text-gray-900">Speed:</strong> new pages come
          together in hours, not days.
        </li>
        <li>
          <strong class="text-gray-900">Scalability:</strong> your product
          doesn't fall apart as it grows.
        </li>
        <li>
          <strong class="text-gray-900">Communication:</strong> designers
          and developers share the same language.
        </li>
      </ul>

      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 pt-6 tracking-tight">
        Start small
      </h2>

      <p>
        You don't need a full design system on day one. Start with the
        basics — color tokens, spacing scale, typography, and a handful of
        core components. Let it grow naturally with the product.
      </p>

      <p>
        The best design systems are not the biggest ones. They're the ones
        that actually get used.
      </p>
    </article>

    <!-- Tags -->
    <div class="flex flex-wrap gap-2 mt-14 pt-8 border-t border-gray-200">
      <a href="#"
        class="text-xs px-3 py-1.5 rounded-md bg-gray-100 text-gray-600 hover:bg-primary hover:text-white transition">#design</a>
      <a href="#"
        class="text-xs px-3 py-1.5 rounded-md bg-gray-100 text-gray-600 hover:bg-primary hover:text-white transition">#systems</a>
      <a href="#"
        class="text-xs px-3 py-1.5 rounded-md bg-gray-100 text-gray-600 hover:bg-primary hover:text-white transition">#ui</a>
      <a href="#"
        class="text-xs px-3 py-1.5 rounded-md bg-gray-100 text-gray-600 hover:bg-primary hover:text-white transition">#workflow</a>
    </div>

    <!-- Author Box -->
    <div class="mt-14 p-8 rounded-2xl bg-[#fafbfa] border border-gray-200 flex flex-col sm:flex-row gap-5">
      <div
        class="w-14 h-14 shrink-0 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-xl">
        A
      </div>
      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
          Written by
        </p>
        <p class="font-bold mt-1">Abdolkarim Bazdar</p>
        <p class="text-gray-500 text-sm mt-2 leading-7">
          Designer & developer at AbdOliSoft. I write about design,
          development and the craft of building products on the web.
        </p>
      </div>
    </div>

    <!-- Prev / Next -->
    <div class="flex justify-between items-center gap-6 mt-16 pt-10 border-t border-gray-200">
      <div class="max-w-[45%]">
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
          Previous
        </p>
        <a href="blog-single.html" class="text-base font-medium mt-1 inline-block hover:text-primary transition">
          ← Tailwind tips for cleaner code
        </a>
      </div>

      <div class="max-w-[45%] text-right">
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
          Next
        </p>
        <a href="blog-single.html" class="text-base font-medium mt-1 inline-block hover:text-primary transition">
          My everyday dev workflow →
        </a>
      </div>
    </div>

    <!-- Comments (placeholder) -->
    <div class="mt-16 pt-10 border-t border-gray-200">
      <h3 class="text-xl font-bold">Comments</h3>
      <p class="text-gray-500 text-sm mt-3">
        Comments are disabled in this static preview.
      </p>
    </div>
  </div>
</main>


<?php get_footer() ?>