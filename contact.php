<?php

get_header();


$site_settings = get_option('mycity_site_settings', []);
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
      <div class="flex items-center gap-3 mb-7">
        <span class="w-10 h-px bg-primary"></span>
        <span class="text-primary font-semibold text-sm uppercase tracking-wider">
          Get in touch
        </span>
      </div>

      <h1 class="text-6xl md:text-7xl xl:text-[82px] font-bold tracking-[-0.05em] leading-[.95]">
        Let's work
        <br />
        <span class="text-primary">together.</span>
      </h1>

      <p class="mt-8 max-w-xl text-lg text-gray-500 leading-8">
        Have a project, an idea, or just a question? We'd love to hear from
        you. Send a message and we'll get back within 24 hours.
      </p>
    </div>
  </div>
</section>

<!-- ================= CONTACT ================= -->

<main class="bg-white">
  <div class="max-w-5xl mx-auto px-6 py-24">
    <div class="grid lg:grid-cols-5 gap-16">
      <!-- ===== Info Column ===== -->

      <aside class="lg:col-span-2 space-y-10">
        <div>
          <p class="text-sm text-gray-400">01 — CONTACT INFO</p>

          <h2 class="text-2xl font-bold mt-3">Reach us directly</h2>
        </div>

        <!-- Email -->
        <div>
          <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
            Email
          </p>
          <a href="mailto:bazdarabdolkarim@gmail.com"
            class="text-lg font-medium mt-2 inline-block hover:text-primary transition">
            bazdarabdolkarim@gmail.com
          </a>
        </div>

        <!-- Location -->
        <div>
          <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
            Location
          </p>
          <p class="text-lg font-medium mt-2">Tehran, Iran</p>
        </div>

        <!-- Availability -->
        <div>
          <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
            Availability
          </p>
          <div class="flex items-center gap-2 mt-2">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <p class="text-lg font-medium">Open for new projects</p>
          </div>
        </div>

        <!-- Socials -->
        <div class="pt-2">
          <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">
            Follow
          </p>
          <div class="flex gap-3 mt-3">
            <a href="https://github.com/abdolkarim-dev"
              class="px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium text-gray-600 hover:border-primary hover:text-primary transition">
              GitHub
            </a>
            <a href="https://www.linkedin.com/in/abd..."
              class="px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium text-gray-600 hover:border-primary hover:text-primary transition">
              LinkedIn
            </a>
          </div>
        </div>
      </aside>

      <!-- ===== Form Column ===== -->

      <div class="lg:col-span-3" id="form">
        <p class="text-sm text-gray-400">02 — SEND A MESSAGE</p>

        <h2 class="text-2xl font-bold mt-3 mb-8">
          Tell us about your project
        </h2>

        <form class="space-y-6">
          <!-- Name + Email -->
          <div class="grid sm:grid-cols-2 gap-6">
            <div>
              <label for="name" class="block text-xs uppercase tracking-wider text-gray-400 font-semibold mb-2">
                Name
              </label>
              <input id="name" type="text" required placeholder="Your name"
                class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-[#fafbfa] text-sm placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition" />
            </div>

            <div>
              <label for="email" class="block text-xs uppercase tracking-wider text-gray-400 font-semibold mb-2">
                Email
              </label>
              <input id="email" type="email" required placeholder="you@example.com"
                class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-[#fafbfa] text-sm placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition" />
            </div>
          </div>

          <!-- Subject -->
          <div>
            <label for="subject" class="block text-xs uppercase tracking-wider text-gray-400 font-semibold mb-2">
              Subject
            </label>
            <input id="subject" type="text" placeholder="What is this about?"
              class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-[#fafbfa] text-sm placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition" />
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-xs uppercase tracking-wider text-gray-400 font-semibold mb-2">
              Message
            </label>
            <textarea id="message" rows="6" required
              placeholder="Tell us a bit about your project, timeline and goals..."
              class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-[#fafbfa] text-sm placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition resize-none"></textarea>
          </div>

          <!-- Submit -->
          <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2">
            <p class="text-xs text-gray-400">
              We'll reply within 24 hours.
            </p>

            <button type="submit"
              class="inline-flex items-center gap-2 px-7 py-3.5 bg-gray-950 text-white rounded-lg text-sm font-medium hover:bg-primary transition">
              Send message
              <span>↗</span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- ================= CTA ================= -->

    <div class="mt-28 text-center">
      <h2 class="text-3xl md:text-4xl font-bold leading-tight">
        Prefer a quick chat?
      </h2>

      <p class="text-gray-500 mt-4 leading-8 max-w-md mx-auto">
        Sometimes a short conversation is faster than an email. Reach out
        and let's talk.
      </p>

      <a href="mailto:bazdarabdolkarim@gmail.com"
        class="inline-flex items-center gap-2 mt-8 px-7 py-3.5 border border-gray-300 text-gray-900 rounded-lg text-sm font-medium hover:border-primary hover:text-primary transition">
        Email us directly
        <span>↗</span>
      </a>
    </div>
  </div>
</main>
<?php

get_footer();


?>