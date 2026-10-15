<?php
get_header();

?>

   <section class="bg-[#eef1ee] relative overflow-hidden pt-40 pb-20">
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
            <span
              class="text-primary font-semibold text-sm uppercase tracking-wider"
            >
              Search results
            </span>
          </div>

          <h1
            class="text-5xl md:text-6xl font-bold tracking-[-0.05em] leading-[1.05]"
          >
            Results for
            <br />
            <span class="text-primary">"design system"</span>
          </h1>

          <p class="mt-6 text-gray-500 text-lg">7 results found.</p>

          <!-- Search again -->
          <form action="search.html" class="flex gap-2 mt-8 max-w-md">
            <input
              type="search"
              name="q"
              value="design system"
              placeholder="Search again..."
              class="flex-1 px-4 py-3 rounded-lg border border-gray-200 bg-white text-sm placeholder-gray-400 focus:outline-none focus:border-primary transition"
            />
            <button
              type="submit"
              class="px-6 py-3 bg-primary text-white rounded-lg text-sm font-medium hover:bg-emerald-700 transition"
            >
              Search
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- ================= RESULTS ================= -->

    <main class="bg-white">
      <div class="max-w-5xl mx-auto px-6 py-20">
        <div class="divide-y divide-gray-200">
          <!-- Result 01 -->
          <article class="py-8 group">
            <div class="flex items-start gap-6">
              <a href="blog-single.html" class="shrink-0 hidden sm:block">
                <div
                  class="w-32 h-24 rounded-xl overflow-hidden border border-gray-200 bg-[#eef1ee] flex items-center justify-center"
                >
                  <span class="text-2xl font-bold text-gray-400">DS</span>
                </div>
              </a>

              <div class="flex-1">
                <div class="flex items-center gap-3 text-xs mb-3">
                  <span
                    class="text-primary font-semibold uppercase tracking-wider"
                    >Article</span
                  >
                  <span class="text-gray-400">•</span>
                  <span class="text-gray-400">March 12, 2026</span>
                </div>

                <h2 class="text-xl font-bold leading-snug">
                  <a
                    href="blog-single.html"
                    class="hover:text-primary transition"
                  >
                    Why every project deserves a design system
                  </a>
                </h2>

                <p class="text-gray-500 text-sm mt-2 leading-7">
                  A design system isn't just about colors and buttons. It's
                  about consistency, speed, and giving your team a shared
                  language for building great products.
                </p>

                <a
                  href="blog-single.html"
                  class="inline-flex items-center gap-1 text-sm font-medium text-primary mt-3 hover:gap-2 transition-all"
                >
                  Read more <span>→</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Result 02 -->
          <article class="py-8 group">
            <div class="flex items-start gap-6">
              <a href="project-single.html" class="shrink-0 hidden sm:block">
                <div
                  class="w-32 h-24 rounded-xl overflow-hidden border border-gray-200 bg-gray-950 flex items-center justify-center"
                >
                  <span class="text-2xl font-bold text-primary">01</span>
                </div>
              </a>

              <div class="flex-1">
                <div class="flex items-center gap-3 text-xs mb-3">
                  <span
                    class="text-primary font-semibold uppercase tracking-wider"
                    >Project</span
                  >
                </div>

                <h2 class="text-xl font-bold leading-snug">
                  <a
                    href="project-single.html"
                    class="hover:text-primary transition"
                  >
                    Business Platform
                  </a>
                </h2>

                <p class="text-gray-500 text-sm mt-2 leading-7">
                  Modern platform for managing business operations. Built with
                  React, TypeScript and a focus on design consistency.
                </p>

                <a
                  href="project-single.html"
                  class="inline-flex items-center gap-1 text-sm font-medium text-primary mt-3 hover:gap-2 transition-all"
                >
                  View project <span>→</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Result 03 -->
          <article class="py-8 group">
            <div class="flex items-start gap-6">
              <a href="blog-single.html" class="shrink-0 hidden sm:block">
                <div
                  class="w-32 h-24 rounded-xl overflow-hidden border border-gray-200 bg-[#f1e9dc] flex items-center justify-center"
                >
                  <span class="text-2xl font-bold text-gray-400">UI</span>
                </div>
              </a>

              <div class="flex-1">
                <div class="flex items-center gap-3 text-xs mb-3">
                  <span
                    class="text-primary font-semibold uppercase tracking-wider"
                    >Article</span
                  >
                  <span class="text-gray-400">•</span>
                  <span class="text-gray-400">Feb 27, 2026</span>
                </div>

                <h2 class="text-xl font-bold leading-snug">
                  <a
                    href="blog-single.html"
                    class="hover:text-primary transition"
                  >
                    Simplicity is the hardest design choice
                  </a>
                </h2>

                <p class="text-gray-500 text-sm mt-2 leading-7">
                  Why less is often more — and how to get there without losing
                  meaning.
                </p>

                <a
                  href="blog-single.html"
                  class="inline-flex items-center gap-1 text-sm font-medium text-primary mt-3 hover:gap-2 transition-all"
                >
                  Read more <span>→</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Result 04 -->
          <article class="py-8 group">
            <div class="flex items-start gap-6">
              <a href="project-single.html" class="shrink-0 hidden sm:block">
                <div
                  class="w-32 h-24 rounded-xl overflow-hidden border border-gray-200 bg-[#eef1ee] flex items-center justify-center"
                >
                  <span class="text-2xl font-bold text-primary">05</span>
                </div>
              </a>

              <div class="flex-1">
                <div class="flex items-center gap-3 text-xs mb-3">
                  <span
                    class="text-primary font-semibold uppercase tracking-wider"
                    >Project</span
                  >
                </div>

                <h2 class="text-xl font-bold leading-snug">
                  <a
                    href="project-single.html"
                    class="hover:text-primary transition"
                  >
                    Analytics Dashboard
                  </a>
                </h2>

                <p class="text-gray-500 text-sm mt-2 leading-7">
                  Interactive dashboard for visualizing business data with a
                  clean, consistent interface.
                </p>

                <a
                  href="project-single.html"
                  class="inline-flex items-center gap-1 text-sm font-medium text-primary mt-3 hover:gap-2 transition-all"
                >
                  View project <span>→</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Result 05 -->
          <article class="py-8 group">
            <div class="flex items-start gap-6">
              <a href="blog-single.html" class="shrink-0 hidden sm:block">
                <div
                  class="w-32 h-24 rounded-xl overflow-hidden border border-gray-200 bg-gray-950 flex items-center justify-center"
                >
                  <span class="text-2xl font-bold text-primary">TW</span>
                </div>
              </a>

              <div class="flex-1">
                <div class="flex items-center gap-3 text-xs mb-3">
                  <span
                    class="text-primary font-semibold uppercase tracking-wider"
                    >Article</span
                  >
                  <span class="text-gray-400">•</span>
                  <span class="text-gray-400">March 8, 2026</span>
                </div>

                <h2 class="text-xl font-bold leading-snug">
                  <a
                    href="blog-single.html"
                    class="hover:text-primary transition"
                  >
                    Tailwind CSS tips for cleaner code
                  </a>
                </h2>

                <p class="text-gray-500 text-sm mt-2 leading-7">
                  Practical patterns that keep your markup readable and your
                  styles consistent.
                </p>

                <a
                  href="blog-single.html"
                  class="inline-flex items-center gap-1 text-sm font-medium text-primary mt-3 hover:gap-2 transition-all"
                >
                  Read more <span>→</span>
                </a>
              </div>
            </div>
          </article>
        </div>

        <!-- Pagination -->
        <div
          class="flex items-center justify-center gap-2 mt-16 pt-10 border-t border-gray-200"
        >
          <a
            href="#"
            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-900 hover:border-gray-400 transition"
            >←</a
          >
          <a
            href="#"
            class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-950 text-white text-sm font-medium"
            >1</a
          >
          <a
            href="#"
            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm"
            >2</a
          >
          <a
            href="#"
            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition"
            >→</a
          >
        </div>

        <!-- No results example (optional) -->
        <div class="hidden text-center py-20 max-w-md mx-auto">
          <div
            class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center mx-auto"
          >
            <span class="text-3xl">🔍</span>
          </div>

          <h2 class="text-2xl font-bold mt-6">Nothing found</h2>

          <p class="text-gray-500 mt-3 leading-7">
            We couldn't find anything matching your search. Try different
            keywords or browse our pages.
          </p>

          <div class="flex flex-wrap justify-center gap-3 mt-8">
            <a
              href="index.html"
              class="px-5 py-2.5 bg-gray-950 text-white rounded-lg text-sm font-medium hover:bg-primary transition"
              >Home</a
            >
            <a
              href="blog.html"
              class="px-5 py-2.5 border border-gray-300 text-gray-900 rounded-lg text-sm font-medium hover:border-primary hover:text-primary transition"
              >Blog</a
            >
            <a
              href="projects.html"
              class="px-5 py-2.5 border border-gray-300 text-gray-900 rounded-lg text-sm font-medium hover:border-primary hover:text-primary transition"
              >Projects</a
            >
          </div>
        </div>
      </div>
    </main>


<?php get_footer() ?>