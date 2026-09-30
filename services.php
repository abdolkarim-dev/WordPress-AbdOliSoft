<?php
get_header();
?>
 

    <!-- Services Hero -->
    <section class="min-h-[680px] bg-[#eef1ee] relative overflow-hidden">

      <!-- Grid -->
      <div
        class="absolute inset-0 opacity-[0.35]"
        style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "
      ></div>

      <!-- Glow -->
      <div
        class="absolute -right-40 -top-40 w-[600px] h-[600px] rounded-full bg-primary/10 blur-3xl"
      ></div>

      <div
        class="relative max-w-7xl mx-auto px-6 pt-44 pb-24"
      >
        <div class="grid lg:grid-cols-[1.15fr_.85fr] gap-16 items-center">

          <!-- Text -->
          <div>

            <div class="flex items-center gap-3 mb-7">
              <span class="w-10 h-px bg-primary"></span>

              <span
                class="text-primary font-semibold text-sm uppercase tracking-wider"
              >
                Our Services
              </span>
            </div>

            <h1
              class="text-6xl md:text-7xl xl:text-[82px] font-bold tracking-[-0.05em] leading-[.95]"
            >
              Digital products.
              <br />
              <span class="text-primary">Built right.</span>
            </h1>

            <p
              class="mt-8 max-w-2xl text-lg text-gray-500 leading-8"
            >
              From websites to custom web applications, we design and
              develop digital experiences that are modern, reliable and
              built around real business needs.
            </p>

            <div class="flex flex-wrap gap-4 mt-10">
              <a
                href="#services"
                class="px-6 py-3.5 bg-gray-900 text-white rounded-xl font-medium hover:bg-primary transition"
              >
                Explore services
              </a>

              <a
                href="contact.html"
                class="px-6 py-3.5 bg-white border border-gray-200 rounded-xl font-medium hover:border-gray-400 transition"
              >
                Start a project
              </a>
            </div>

          </div>


          <!-- Visual -->
          <div class="relative">

            <div
              class="absolute -inset-8 bg-primary/10 blur-3xl"
            ></div>

            <div
              class="relative bg-gray-950 rounded-3xl p-8 md:p-10 shadow-2xl border border-gray-800"
            >

              <div class="flex items-center justify-between mb-10">

                <div class="flex gap-2">
                  <span class="w-3 h-3 rounded-full bg-red-400"></span>
                  <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                  <span class="w-3 h-3 rounded-full bg-green-400"></span>
                </div>

                <span class="text-xs text-gray-500">
                  services.json
                </span>

              </div>

              <div class="font-mono text-sm leading-8">

                <p>
                  <span class="text-purple-400">const</span>
                  <span class="text-blue-300"> services</span>
                  <span class="text-gray-500"> = [</span>
                </p>

                <p class="pl-6">
                  <span class="text-green-400">"Web Development"</span>,
                </p>

                <p class="pl-6">
                  <span class="text-green-400">"UI / UX Design"</span>,
                </p>

                <p class="pl-6">
                  <span class="text-green-400">"WordPress"</span>,
                </p>

                <p class="pl-6">
                  <span class="text-green-400">"Web Applications"</span>
                </p>

                <p>
                  <span class="text-gray-500">];</span>
                </p>

                <div class="h-px bg-gray-800 my-7"></div>

                <p>
                  <span class="text-purple-400">return</span>
                  <span class="text-green-400">
                    "Quality digital experiences."
                  </span>
                </p>

              </div>

              <div class="flex items-center gap-3 mt-10">
                <span class="w-2 h-2 rounded-full bg-primary"></span>

                <span class="text-xs text-gray-500">
                  Available for new projects
                </span>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- Intro -->
    <section class="bg-gray-950 text-white">

      <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-[1.3fr_.7fr] gap-16 items-center">

          <div>

            <span
              class="text-primary text-sm font-semibold uppercase tracking-widest"
            >
              What we do
            </span>

            <h2
              class="text-3xl md:text-4xl font-bold mt-5 leading-tight"
            >
              We turn ideas into useful digital experiences.
            </h2>

          </div>

          <p
            class="text-gray-500 leading-8"
          >
            Every project starts with understanding the problem.
            We combine design, development and technology to create
            solutions that are simple to use and easy to maintain.
          </p>

        </div>

      </div>

    </section>


    <!-- Main Services -->
    <section
      id="services"
      class="bg-[#f5f6f4]"
    >

      <div class="max-w-7xl mx-auto px-6 py-28">

        <!-- Heading -->
        <div class="max-w-3xl">

          <div class="flex items-center gap-3">

            <span class="text-primary font-mono text-sm">
              01
            </span>

            <span class="h-px w-10 bg-primary"></span>

            <span
              class="text-gray-500 text-sm uppercase tracking-widest"
            >
              Services
            </span>

          </div>

          <h2
            class="text-5xl md:text-6xl font-bold mt-6 tracking-tight"
          >
            What we
            <span class="text-primary">build.</span>
          </h2>

          <p
            class="text-gray-500 text-lg leading-8 mt-6 max-w-2xl"
          >
            Flexible development services designed for companies
            that need a reliable digital presence or a custom
            web-based solution.
          </p>

        </div>


        <!-- Service 01 -->
        <article
          class="mt-16 border-t-2 border-gray-900 py-12 group"
        >

          <div
            class="grid lg:grid-cols-[100px_1fr_1fr] gap-8"
          >

            <span class="font-mono text-primary">
              01
            </span>

            <div>

              <h3
                class="text-4xl md:text-5xl font-bold group-hover:text-primary transition"
              >
                Web Development
              </h3>

              <p
                class="text-gray-500 leading-8 mt-6 max-w-lg"
              >
                Modern responsive websites focused on performance,
                usability and clean structure.
              </p>

            </div>

            <div class="lg:pl-10">

              <p class="text-sm text-gray-400 uppercase tracking-wider">
                Technologies
              </p>

              <div class="flex flex-wrap gap-2 mt-5">

                <span class="px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm">
                  HTML
                </span>

                <span class="px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm">
                  CSS
                </span>

                <span class="px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm">
                  JavaScript
                </span>

                <span class="px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm">
                  React
                </span>

                <span class="px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm">
                  Tailwind
                </span>

              </div>

            </div>

          </div>

        </article>


        <!-- Service 02 -->
        <article
          class="border-t border-gray-300 py-12 group"
        >

          <div
            class="grid lg:grid-cols-[100px_1fr_1fr] gap-8"
          >

            <span class="font-mono text-gray-400">
              02
            </span>

            <div>

              <h3
                class="text-4xl md:text-5xl font-bold group-hover:text-primary transition"
              >
                UI / UX Design
              </h3>

              <p
                class="text-gray-500 leading-8 mt-6 max-w-lg"
              >
                Clean and intuitive interfaces designed to make
                digital products easier to understand and use.
              </p>

            </div>

            <div class="lg:pl-10">

              <p class="text-sm text-gray-400 uppercase tracking-wider">
                Focus
              </p>

              <ul class="mt-5 space-y-3 text-gray-500">

                <li>→ User-centered interfaces</li>
                <li>→ Responsive layouts</li>
                <li>→ Design systems</li>
                <li>→ Modern visual direction</li>

              </ul>

            </div>

          </div>

        </article>


        <!-- Service 03 -->
        <article
          class="border-t border-gray-300 py-12 group"
        >

          <div
            class="grid lg:grid-cols-[100px_1fr_1fr] gap-8"
          >

            <span class="font-mono text-gray-400">
              03
            </span>

            <div>

              <h3
                class="text-4xl md:text-5xl font-bold group-hover:text-primary transition"
              >
                WordPress
              </h3>

              <p
                class="text-gray-500 leading-8 mt-6 max-w-lg"
              >
                Custom WordPress websites and themes built around
                the content and workflow of each business.
              </p>

            </div>

            <div class="lg:pl-10">

              <p class="text-sm text-gray-400 uppercase tracking-wider">
                Solutions
              </p>

              <ul class="mt-5 space-y-3 text-gray-500">

                <li>→ Custom WordPress Themes</li>
                <li>→ Custom Post Types</li>
                <li>→ Responsive Design</li>
                <li>→ Content Management</li>

              </ul>

            </div>

          </div>

        </article>


        <!-- Service 04 -->
        <article
          class="border-y border-gray-300 py-12 group"
        >

          <div
            class="grid lg:grid-cols-[100px_1fr_1fr] gap-8"
          >

            <span class="font-mono text-gray-400">
              04
            </span>

            <div>

              <h3
                class="text-4xl md:text-5xl font-bold group-hover:text-primary transition"
              >
                Web Applications
              </h3>

              <p
                class="text-gray-500 leading-8 mt-6 max-w-lg"
              >
                Custom web applications that help businesses
                manage information, workflows and everyday tasks.
              </p>

            </div>

            <div class="lg:pl-10">

              <p class="text-sm text-gray-400 uppercase tracking-wider">
                Capabilities
              </p>

              <ul class="mt-5 space-y-3 text-gray-500">

                <li>→ Admin Dashboards</li>
                <li>→ Business Tools</li>
                <li>→ Data Management</li>
                <li>→ API Integration</li>

              </ul>

            </div>

          </div>

        </article>

      </div>

    </section>


    <!-- Technologies -->
    <section class="bg-white">

      <div class="max-w-7xl mx-auto px-6 py-28">

        <div class="grid lg:grid-cols-[.7fr_1.3fr] gap-16">

          <div>

            <div class="flex items-center gap-3">

              <span class="text-primary font-mono text-sm">
                02
              </span>

              <span class="h-px w-10 bg-primary"></span>

              <span
                class="text-gray-500 text-sm uppercase tracking-widest"
              >
                Technologies
              </span>

            </div>

            <h2
              class="text-5xl font-bold mt-6 tracking-tight"
            >
              Tools we
              <span class="text-primary">use.</span>
            </h2>

            <p class="text-gray-500 leading-8 mt-6">
              We choose technologies based on the needs of each
              project rather than forcing every project into the
              same stack.
            </p>

          </div>


          <div
            class="grid grid-cols-2 md:grid-cols-3 gap-4"
          >

            <div class="p-7 rounded-2xl bg-[#f5f6f4] border border-gray-200">
              <p class="font-semibold">React</p>
              <p class="text-sm text-gray-400 mt-2">Frontend</p>
            </div>

            <div class="p-7 rounded-2xl bg-[#f5f6f4] border border-gray-200">
              <p class="font-semibold">TypeScript</p>
              <p class="text-sm text-gray-400 mt-2">Development</p>
            </div>

            <div class="p-7 rounded-2xl bg-[#f5f6f4] border border-gray-200">
              <p class="font-semibold">Tailwind CSS</p>
              <p class="text-sm text-gray-400 mt-2">UI</p>
            </div>

            <div class="p-7 rounded-2xl bg-[#f5f6f4] border border-gray-200">
              <p class="font-semibold">WordPress</p>
              <p class="text-sm text-gray-400 mt-2">CMS</p>
            </div>

            <div class="p-7 rounded-2xl bg-[#f5f6f4] border border-gray-200">
              <p class="font-semibold">PHP</p>
              <p class="text-sm text-gray-400 mt-2">Backend</p>
            </div>

            <div class="p-7 rounded-2xl bg-[#f5f6f4] border border-gray-200">
              <p class="font-semibold">MySQL</p>
              <p class="text-sm text-gray-400 mt-2">Database</p>
            </div>

          </div>

        </div>

      </div>

    </section>


    <!-- Process -->
    <section
      class="bg-[#eef1ee]"
    >

      <div class="max-w-7xl mx-auto px-6 py-28">

        <div class="max-w-2xl">

          <div class="flex items-center gap-3">

            <span class="text-primary font-mono text-sm">
              03
            </span>

            <span class="h-px w-10 bg-primary"></span>

            <span
              class="text-gray-500 text-sm uppercase tracking-widest"
            >
              Our Process
            </span>

          </div>

          <h2
            class="text-5xl md:text-6xl font-bold mt-6 tracking-tight"
          >
            Simple process.
            <br />
            <span class="text-primary">Clear results.</span>
          </h2>

        </div>


        <div class="grid md:grid-cols-4 mt-16">

          <div class="border-t-2 border-primary pt-6 pr-8">

            <span class="text-primary font-mono text-sm">
              01
            </span>

            <h3 class="text-xl font-bold mt-4">
              Discover
            </h3>

            <p class="text-gray-500 text-sm leading-7 mt-3">
              We understand your goals, users and business
              requirements.
            </p>

          </div>


          <div class="border-t border-gray-300 pt-6 pr-8">

            <span class="text-gray-400 font-mono text-sm">
              02
            </span>

            <h3 class="text-xl font-bold mt-4">
              Design
            </h3>

            <p class="text-gray-500 text-sm leading-7 mt-3">
              We create the structure and visual direction.
            </p>

          </div>


          <div class="border-t border-gray-300 pt-6 pr-8">

            <span class="text-gray-400 font-mono text-sm">
              03
            </span>

            <h3 class="text-xl font-bold mt-4">
              Develop
            </h3>

            <p class="text-gray-500 text-sm leading-7 mt-3">
              We build the product using reliable technologies.
            </p>

          </div>


          <div class="border-t border-gray-300 pt-6">

            <span class="text-gray-400 font-mono text-sm">
              04
            </span>

            <h3 class="text-xl font-bold mt-4">
              Launch
            </h3>

            <p class="text-gray-500 text-sm leading-7 mt-3">
              We test, refine and prepare the final product.
            </p>

          </div>

        </div>

      </div>

    </section>


    <!-- CTA -->
    <section
      class="bg-white px-6 py-28"
    >

      <div class="max-w-6xl mx-auto">

        <div
          class="rounded-[2rem] bg-primary px-8 py-20 md:px-16 relative overflow-hidden"
        >

          <div
            class="absolute -right-20 -bottom-40 w-96 h-96 rounded-full bg-white/10 blur-2xl"
          ></div>

          <div class="relative max-w-3xl">

            <span class="text-white/70 font-mono text-sm">
              HAVE A PROJECT?
            </span>

            <h2
              class="text-5xl md:text-7xl text-white font-bold tracking-tight mt-5"
            >
              Let's build
              <br />
              something great.
            </h2>

            <a
              href="contact.html"
              class="inline-flex items-center gap-3 mt-9 bg-gray-950 text-white px-7 py-4 rounded-xl font-medium hover:bg-white hover:text-gray-900 transition"
            >
              Start a conversation
              <span>↗</span>
            </a>

          </div>

        </div>

      </div>

    </section>


<?php
get_footer();
?>