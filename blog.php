<?php
get_header();
?>

    <!-- ================= HERO ================= -->

    <!-- ================= HERO ================= -->

    <section class="bg-[#eef1ee] relative overflow-hidden pt-40 pb-24">
      <div
        class="absolute inset-0 opacity-[0.30]"
        style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "
      ></div>

      <div
        class="absolute -right-40 -top-40 w-[550px] h-[550px] rounded-full bg-primary/10 blur-3xl"
      ></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-3xl">
          <div class="flex items-center gap-3 mb-7">
            <span class="w-10 h-px bg-primary"></span>
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">
              Blog
            </span>
          </div>

          <h1
            class="text-6xl md:text-7xl xl:text-[82px] font-bold tracking-[-0.05em] leading-[.95]"
          >
            Notes &
            <br />
            <span class="text-primary">articles.</span>
          </h1>

          <p class="mt-8 max-w-xl text-lg text-gray-500 leading-8">
            Thoughts on design, development, tools and everything in between.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= POSTS ================= -->

    <main class="bg-white">
      <div class="max-w-7xl mx-auto px-6 py-24">

        <!-- Featured Post -->
        <article class="group mb-20">
          <a href="blog-single.html" class="grid lg:grid-cols-2 gap-10 items-center">
            <div class="aspect-[4/3] rounded-2xl bg-[#eef1ee] border border-gray-200 overflow-hidden relative">
              <div
                class="absolute inset-0 opacity-20"
                style="
                  background-image:
                    linear-gradient(#111827 1px, transparent 1px),
                    linear-gradient(90deg, #111827 1px, transparent 1px);
                  background-size: 40px 40px;
                "
              ></div>

              <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                  <span class="text-primary font-mono text-sm">Featured</span>
                  <h3 class="text-4xl md:text-5xl font-bold mt-3">
                    Design<br />Systems
                  </h3>
                </div>
              </div>
            </div>

            <div>
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Design</span>
                <span>•</span>
                <span>March 12, 2026</span>
              </div>

              <h2 class="text-3xl md:text-4xl font-bold mt-5 leading-tight group-hover:text-primary transition">
                Why every project deserves a design system
              </h2>

              <p class="text-gray-500 mt-5 leading-8">
                A design system isn't just about colors and buttons. It's about
                consistency, speed, and giving your team a shared language for
                building great products.
              </p>

              <span class="inline-flex items-center gap-2 text-sm font-medium text-primary mt-6 group-hover:gap-3 transition-all">
                Read article <span>→</span>
              </span>
            </div>
          </a>
        </article>

        <!-- Divider -->
        <div class="border-t border-gray-200 mb-14"></div>

        <!-- Filter -->
        <div class="flex flex-wrap items-center gap-2 mb-14">
          <button class="px-4 py-2.5 rounded-lg bg-gray-950 text-white text-sm font-medium">All</button>
          <button class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">Design</button>
          <button class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">Development</button>
          <button class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">Tools</button>
          <button class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">Career</button>
        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-14">

          <!-- Post 01 -->
          <article class="group">
            <a href="blog-single.html">
              <div class="aspect-[4/3] rounded-2xl bg-[#eef1ee] border border-gray-200 overflow-hidden relative">
                <div class="absolute inset-8 rounded-xl bg-white border border-gray-200 shadow-xl p-5">
                  <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                    <div class="h-2 w-20 bg-gray-200 rounded"></div>
                    <div class="w-7 h-7 rounded-full bg-primary/10"></div>
                  </div>
                  <div class="grid grid-cols-3 gap-2 mt-4">
                    <div class="h-16 bg-gray-50 rounded"></div>
                    <div class="h-16 bg-gray-50 rounded"></div>
                    <div class="h-16 bg-primary/10 rounded"></div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Development</span>
                <span>•</span>
                <span>March 8, 2026</span>
              </div>

              <h3 class="text-xl font-bold mt-3 leading-snug">
                <a href="blog-single.html" class="hover:text-primary transition">
                  Tailwind CSS tips for cleaner code
                </a>
              </h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Practical patterns that keep your markup readable and your
                styles consistent.
              </p>
            </div>
          </article>

          <!-- Post 02 -->
          <article class="group">
            <a href="blog-single.html">
              <div class="aspect-[4/3] rounded-2xl bg-gray-950 overflow-hidden relative flex items-center justify-center">
                <div class="absolute w-52 h-52 rounded-full bg-primary/20 blur-3xl"></div>
                <div class="relative text-center">
                  <span class="text-primary font-mono text-sm">Tools</span>
                  <h3 class="text-3xl font-bold text-white mt-3 group-hover:text-primary transition">
                    Better<br />Workflow
                  </h3>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Tools</span>
                <span>•</span>
                <span>March 3, 2026</span>
              </div>

              <h3 class="text-xl font-bold mt-3 leading-snug">
                <a href="blog-single.html" class="hover:text-primary transition">
                  My everyday development workflow
                </a>
              </h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                The tools, extensions and habits that keep me productive.
              </p>
            </div>
          </article>

          <!-- Post 03 -->
          <article class="group">
            <a href="blog-single.html">
              <div class="aspect-[4/3] rounded-2xl bg-primary/10 border border-primary/20 overflow-hidden relative flex items-center justify-center">
                <div class="text-center">
                  <span class="text-primary font-mono text-sm">Design</span>
                  <h3 class="text-4xl font-bold mt-3 group-hover:text-primary transition">
                    Minimal<br />UI
                  </h3>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Design</span>
                <span>•</span>
                <span>Feb 27, 2026</span>
              </div>

              <h3 class="text-xl font-bold mt-3 leading-snug">
                <a href="blog-single.html" class="hover:text-primary transition">
                  Simplicity is the hardest design choice
                </a>
              </h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Why less is often more — and how to get there without losing
                meaning.
              </p>
            </div>
          </article>

          <!-- Post 04 -->
          <article class="group">
            <a href="blog-single.html">
              <div class="aspect-[4/3] rounded-2xl bg-[#f1e9dc] overflow-hidden relative">
                <div class="absolute left-8 right-8 top-10 bottom-0 bg-white rounded-t-2xl shadow-xl p-5">
                  <div class="flex gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                  </div>
                  <div class="mt-6 space-y-3">
                    <div class="h-3 w-1/2 bg-gray-200 rounded"></div>
                    <div class="h-2 w-3/4 bg-gray-100 rounded"></div>
                    <div class="grid grid-cols-2 gap-2 mt-6">
                      <div class="h-16 bg-gray-100 rounded"></div>
                      <div class="h-16 bg-primary/10 rounded"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Career</span>
                <span>•</span>
                <span>Feb 18, 2026</span>
              </div>

              <h3 class="text-xl font-bold mt-3 leading-snug">
                <a href="blog-single.html" class="hover:text-primary transition">
                  What I learned in my first year freelancing
                </a>
              </h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Honest lessons from building a small studio from scratch.
              </p>
            </div>
          </article>

          <!-- Post 05 -->
          <article class="group">
            <a href="blog-single.html">
              <div class="aspect-[4/3] rounded-2xl bg-[#151a19] overflow-hidden relative flex items-center justify-center">
                <div class="text-center">
                  <span class="text-primary font-mono text-sm">Development</span>
                  <h3 class="text-4xl font-bold text-white mt-3 group-hover:text-primary transition">
                    React<br />Patterns
                  </h3>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Development</span>
                <span>•</span>
                <span>Feb 10, 2026</span>
              </div>

              <h3 class="text-xl font-bold mt-3 leading-snug">
                <a href="blog-single.html" class="hover:text-primary transition">
                  React patterns I keep coming back to
                </a>
              </h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Small patterns that make components cleaner and more reusable.
              </p>
            </div>
          </article>

          <!-- Post 06 -->
          <article class="group">
            <a href="blog-single.html">
              <div class="aspect-[4/3] rounded-2xl bg-[#e9f0ed] overflow-hidden relative">
                <div class="absolute inset-10 bg-white rounded-2xl shadow-xl p-5">
                  <div class="h-3 w-24 bg-primary/30 rounded"></div>
                  <div class="h-2 w-36 bg-gray-100 rounded mt-3"></div>
                  <div class="mt-6 grid grid-cols-2 gap-2">
                    <div class="h-16 bg-primary/10 rounded-xl"></div>
                    <div class="h-16 bg-gray-100 rounded-xl"></div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center gap-3 text-xs text-gray-400">
                <span class="text-primary font-semibold uppercase tracking-wider">Tools</span>
                <span>•</span>
                <span>Feb 2, 2026</span>
              </div>

              <h3 class="text-xl font-bold mt-3 leading-snug">
                <a href="blog-single.html" class="hover:text-primary transition">
                  Setting up a modern frontend stack
                </a>
              </h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                From Vite to Tailwind — a simple, fast and sane setup.
              </p>
            </div>
          </article>

        </div>

        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6 mt-20 pt-8 border-t border-gray-200">
          <p class="text-sm text-gray-500">
            Showing <span class="font-semibold text-gray-900">1–6</span> of
            <span class="font-semibold text-gray-900">24</span> articles
          </p>

          <nav class="flex items-center gap-2" aria-label="Pagination">
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-900 hover:border-gray-400 transition">←</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-950 text-white text-sm font-medium">1</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm">2</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm">3</a>
            <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition">→</a>
          </nav>
        </div>

      </div>
    </main>


<?php get_footer() ?>