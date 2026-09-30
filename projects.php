<?php
get_header();

?>
   <!-- ================= HERO ================= -->

    <section class="bg-[#eef1ee] relative overflow-hidden pt-40 pb-24">
      <!-- Background Grid -->
      <div
        class="absolute inset-0 opacity-[0.30]"
        style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "
      ></div>

      <!-- Glow -->
      <div
        class="absolute -right-40 -top-40 w-[550px] h-[550px] rounded-full bg-primary/10 blur-3xl"
      ></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-4xl">
          <div class="flex items-center gap-3 mb-7">
            <span class="w-10 h-px bg-primary"></span>

            <span
              class="text-primary font-semibold text-sm uppercase tracking-wider"
            >
              Our Work
            </span>
          </div>

          <h1
            class="text-6xl md:text-7xl xl:text-[82px] font-bold tracking-[-0.05em] leading-[.95]"
          >
            Selected
            <br />
            <span class="text-primary">projects.</span>
          </h1>

          <p class="mt-8 max-w-2xl text-lg text-gray-500 leading-8">
            A collection of websites, applications and digital experiences built
            with a focus on simplicity, usability and performance.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= PROJECTS ================= -->

    <main class="bg-white">
      <div class="max-w-7xl mx-auto px-6 py-24">
        <!-- Top Row -->

        <div
          class="flex flex-col lg:flex-row lg:items-center justify-between gap-8"
        >
          <div>
            <p class="text-sm text-gray-400">01 — PORTFOLIO</p>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">Recent work</h2>
          </div>

          <!-- Filters -->

          <div class="flex flex-wrap items-center gap-2">
            <button
              class="px-4 py-2.5 rounded-lg bg-gray-950 text-white text-sm font-medium"
            >
              All
            </button>

            <button
              class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium"
            >
              React
            </button>

            <button
              class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium"
            >
              WordPress
            </button>

            <button
              class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium"
            >
              Web Apps
            </button>

            <button
              class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium"
            >
              UI / UX
            </button>
          </div>
        </div>

        <!-- ================= PROJECT GRID ================= -->

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-14 mt-16">
          <!-- Project 01 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-gray-950 overflow-hidden relative"
              >
                <div
                  class="absolute inset-0 opacity-20"
                  style="
                    background-image:
                      linear-gradient(#ffffff 1px, transparent 1px),
                      linear-gradient(90deg, #ffffff 1px, transparent 1px);
                    background-size: 35px 35px;
                  "
                ></div>

                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="text-center">
                    <span class="text-primary font-mono text-sm"> 01 </span>

                    <h3
                      class="text-4xl font-bold text-white mt-3 group-hover:text-primary transition"
                    >
                      Business
                      <br />
                      Platform
                    </h3>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">
                  React / TypeScript
                </p>

                <span class="text-gray-400 text-sm"> 2026 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Business Platform</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Modern platform for managing business operations.
              </p>
            </div>
          </article>

          <!-- Project 02 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-[#eef1ee] border border-gray-200 overflow-hidden relative"
              >
                <div
                  class="absolute inset-8 rounded-xl bg-white border border-gray-200 shadow-xl p-5"
                >
                  <div
                    class="flex items-center justify-between border-b border-gray-100 pb-4"
                  >
                    <div class="w-20 h-2 bg-gray-200 rounded"></div>

                    <div class="w-8 h-8 rounded-full bg-primary/10"></div>
                  </div>

                  <div class="grid grid-cols-3 gap-3 mt-5">
                    <div class="h-20 bg-gray-50 rounded-lg"></div>
                    <div class="h-20 bg-gray-50 rounded-lg"></div>
                    <div class="h-20 bg-primary/10 rounded-lg"></div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">
                  Web Application
                </p>

                <span class="text-gray-400 text-sm"> 2026 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Management Dashboard</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Business dashboard for data and workflow management.
              </p>
            </div>
          </article>

          <!-- Project 03 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-primary/10 border border-primary/20 overflow-hidden relative flex items-center justify-center"
              >
                <div class="text-center">
                  <span class="text-primary font-mono text-sm"> 03 </span>

                  <h3
                    class="text-4xl font-bold mt-3 group-hover:text-primary transition"
                  >
                    Corporate
                    <br />
                    Website
                  </h3>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">WordPress</p>

                <span class="text-gray-400 text-sm"> 2026 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Corporate Website</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Custom WordPress theme for a software company.
              </p>
            </div>
          </article>

          <!-- Project 04 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-[#f1e9dc] overflow-hidden relative"
              >
                <div
                  class="absolute left-8 right-8 top-10 bottom-0 bg-white rounded-t-2xl shadow-xl p-5"
                >
                  <div class="flex gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                  </div>

                  <div class="mt-8">
                    <div class="h-3 w-1/2 bg-gray-200 rounded"></div>

                    <div class="h-2 w-3/4 bg-gray-100 rounded mt-4"></div>

                    <div class="grid grid-cols-2 gap-3 mt-8">
                      <div class="h-24 bg-gray-100 rounded-lg"></div>

                      <div class="h-24 bg-primary/10 rounded-lg"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">E-Commerce</p>

                <span class="text-gray-400 text-sm"> 2026 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Watch Store</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Modern online store focused on product discovery.
              </p>
            </div>
          </article>

          <!-- Project 05 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-gray-900 overflow-hidden relative flex items-center justify-center"
              >
                <div
                  class="absolute w-52 h-52 rounded-full bg-primary/20 blur-3xl"
                ></div>

                <div class="relative text-center">
                  <span class="text-primary font-mono text-sm"> 05 </span>

                  <h3
                    class="text-4xl font-bold text-white mt-3 group-hover:text-primary transition"
                  >
                    Analytics
                    <br />
                    Dashboard
                  </h3>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">React</p>

                <span class="text-gray-400 text-sm"> 2025 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Analytics Dashboard</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Interactive dashboard for visualizing business data.
              </p>
            </div>
          </article>

          <!-- Project 06 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-[#eef1ee] border border-gray-200 overflow-hidden relative"
              >
                <div
                  class="absolute inset-7 rounded-xl bg-white border border-gray-200 p-5"
                >
                  <div class="flex justify-between">
                    <div class="space-y-2">
                      <div class="h-2 w-24 bg-gray-200 rounded"></div>

                      <div class="h-2 w-16 bg-gray-100 rounded"></div>
                    </div>

                    <div class="w-9 h-9 rounded-lg bg-primary/10"></div>
                  </div>

                  <div class="mt-7 grid grid-cols-3 gap-2">
                    <div class="h-28 bg-gray-100 rounded"></div>

                    <div class="h-28 bg-primary/10 rounded"></div>

                    <div class="h-28 bg-gray-100 rounded"></div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">Admin Panel</p>

                <span class="text-gray-400 text-sm"> 2025 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Admin Panel</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Responsive administration interface for internal tools.
              </p>
            </div>
          </article>

          <!-- Project 07 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-[#151a19] overflow-hidden relative flex items-center justify-center"
              >
                <div class="text-center">
                  <span class="text-primary font-mono text-sm"> 07 </span>

                  <h3
                    class="text-4xl font-bold text-white mt-3 group-hover:text-primary transition"
                  >
                    City
                    <br />
                    Platform
                  </h3>

                  <p class="text-gray-500 text-xs mt-4">
                    WordPress / Custom Theme
                  </p>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">WordPress</p>

                <span class="text-gray-400 text-sm"> 2025 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">City Information Platform</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Content-driven city website with custom content types.
              </p>
            </div>
          </article>

          <!-- Project 08 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-[#e9f0ed] overflow-hidden relative"
              >
                <div
                  class="absolute inset-10 bg-white rounded-2xl shadow-xl p-6"
                >
                  <div class="h-3 w-28 bg-primary/30 rounded"></div>

                  <div class="h-2 w-40 bg-gray-100 rounded mt-4"></div>

                  <div class="mt-8 grid grid-cols-2 gap-3">
                    <div class="h-24 bg-primary/10 rounded-xl"></div>

                    <div class="h-24 bg-gray-100 rounded-xl"></div>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">Web Design</p>

                <span class="text-gray-400 text-sm"> 2025 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Product Landing Page</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Conversion-focused landing page for a digital product.
              </p>
            </div>
          </article>

          <!-- Project 09 -->

          <article class="group">
            <a href="#">
              <div
                class="aspect-[4/3] rounded-2xl bg-gray-950 overflow-hidden relative flex items-center justify-center"
              >
                <div class="absolute inset-0 bg-primary/5"></div>

                <div class="relative text-center">
                  <span class="text-primary font-mono text-sm"> 09 </span>

                  <h3
                    class="text-4xl font-bold text-white mt-3 group-hover:text-primary transition"
                  >
                    Data
                    <br />
                    Explorer
                  </h3>

                  <div class="flex justify-center gap-2 mt-5">
                    <span class="w-8 h-1 bg-primary rounded"></span>

                    <span class="w-4 h-1 bg-gray-700 rounded"></span>

                    <span class="w-6 h-1 bg-gray-700 rounded"></span>
                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">
                  Web Application
                </p>

                <span class="text-gray-400 text-sm"> 2025 </span>
              </div>

              <h3 class="text-xl font-bold mt-2">Data Explorer</h3>

              <p class="text-gray-500 text-sm mt-2 leading-6">
                Interactive interface for exploring structured data.
              </p>
            </div>
          </article>
        </div>

        <!-- ================= PAGINATION ================= -->

        <div
          class="flex flex-col sm:flex-row items-center justify-between gap-6 mt-20 pt-8 border-t border-gray-200"
        >
          <p class="text-sm text-gray-500">
            Showing
            <span class="font-semibold text-gray-900"> 1–9 </span>
            of
            <span class="font-semibold text-gray-900"> 18 </span>
            projects
          </p>

          <nav class="flex items-center gap-2" aria-label="Pagination">
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-900 hover:border-gray-400 transition"
            >
              ←
            </a>

            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-950 text-white text-sm font-medium"
            >
              1
            </a>

            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm"
            >
              2
            </a>

            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm"
            >
              3
            </a>

            <span
              class="w-10 h-10 flex items-center justify-center text-gray-400"
            >
              ...
            </span>

            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition"
            >
              →
            </a>
          </nav>
        </div>
      </div>
    </main>
 

<?php get_footer() ?>