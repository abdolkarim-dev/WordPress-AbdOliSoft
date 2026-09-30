<?php get_header() ?>

<section class="min-h-[850px] bg-[#eef1ee] relative overflow-hidden">
    <!-- Decorative grid -->
    <div class="absolute inset-0 opacity-[0.35]" style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "></div>

    <div class="absolute -right-40 -top-40 w-[600px] h-[600px] rounded-full bg-primary/10 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 pt-44 pb-28">
        <div class="grid lg:grid-cols-[1.05fr_.95fr] gap-16 items-center">
            <!-- Hero text -->

            <div>
                <!-- <div class="flex items-center gap-3 mb-7">
              <span class="w-2.5 h-2.5 bg-primary rounded-full"></span>

              <span class="text-sm font-medium text-gray-500">
                Software Development Studio
              </span>
            </div> -->

                <h1 class="text-6xl md:text-7xl xl:text-[82px] font-bold tracking-[-0.05em] leading-[.95]">
                    Digital ideas.
                    <br />

                    <span class="text-primary"> Built better. </span>
                </h1>

                <p class="mt-8 max-w-xl text-lg text-gray-500 leading-8">
                    AbdOliSoft designs and develops modern websites, web applications
                    and digital products for ambitious businesses.
                </p>

                <div class="flex flex-wrap items-center gap-4 mt-10">
                    <a href="#projects"
                        class="px-6 py-3.5 bg-gray-900 text-white rounded-xl font-medium hover:bg-primary transition">
                        Explore our work
                    </a>

                    <!-- <a
                href="#services"
                class="px-6 py-3.5 bg-white border border-gray-200 rounded-xl font-medium hover:border-gray-400 transition"
              >
                What we do
              </a> -->
                </div>
            </div>

            <!-- Code Window -->

            <div class="relative">
                <div class="absolute -inset-8 bg-primary/10 blur-3xl"></div>

                <div class="relative bg-[#101413] rounded-3xl overflow-hidden shadow-2xl border border-white/10">
                    <!-- Browser bar -->

                    <!-- Code -->

                    <div class="relative">
                        <div class="absolute -inset-5 bg-primary/10 rounded-[2rem] blur-2xl"></div>

                        <div class="relative rounded-2xl bg-gray-950 shadow-2xl overflow-hidden border border-gray-800">
                            <!-- Window Header -->

                            <div class="h-12 px-5 flex items-center border-b border-gray-800">
                                <div class="flex gap-2">
                                    <span class="w-3 h-3 rounded-full bg-red-400 cursor-pointer"></span>
                                    <span class="w-3 h-3 rounded-full bg-yellow-400 cursor-pointer"></span>
                                    <span class="w-3 h-3 rounded-full bg-green-400 cursor-pointer"></span>
                                </div>

                                <div class="mx-auto text-xs text-gray-500">
                                    abdolkarim_dev
                                </div>
                            </div>

                            <!-- Code -->

                            <div class="p-7 font-mono text-sm leading-8">
                                <div>
                                    <span class="text-purple-400">const</span>
                                    <span class="text-blue-300"> company</span>
                                    <span class="text-gray-400"> = {</span>
                                </div>

                                <div class="pl-6">
                                    <span class="text-gray-500">name:</span>
                                    <span class="text-green-400"> "AbdOliSoft"</span>,
                                </div>

                                <div class="pl-6">
                                    <span class="text-gray-500">focus:</span>
                                    <span class="text-green-400"> "Web Development"</span>,
                                </div>

                                <div class="pl-6">
                                    <span class="text-gray-500">quality:</span>
                                    <span class="text-orange-300"> true</span>,
                                </div>

                                <div class="pl-6">
                                    <span class="text-gray-500">modern:</span>
                                    <span class="text-orange-300"> true</span>
                                </div>

                                <div>
                                    <span class="text-gray-400">};</span>
                                </div>

                                <div class="mt-6">
                                    <span class="text-purple-400">function</span>
                                    <span class="text-blue-300"> build</span>
                                    <span class="text-gray-400">() {</span>
                                </div>

                                <div class="pl-6">
                                    <span class="text-purple-400">return</span>
                                    <span class="text-green-400"> "Something great"</span>;
                                </div>

                                <div>
                                    <span class="text-gray-400">}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero -->
<section class="bg-gray-950 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-gray-200">
            <div>
                <p class="text-4xl font-bold">20+</p>
                <p class="text-gray-500 mt-2 text-sm">Projects</p>
            </div>

            <div>
                <p class="text-4xl font-bold">10+</p>
                <p class="text-gray-500 mt-2 text-sm">Technologies</p>
            </div>

            <div>
                <p class="text-4xl font-bold">5+</p>
                <p class="text-gray-500 mt-2 text-sm">Years Experience</p>
            </div>

            <div>
                <p class="text-4xl font-bold text-primary">100%</p>
                <p class="text-gray-500 mt-2 text-sm">Commitment</p>
            </div>
        </div>
    </div>
</section>
<!-- Selected Work -->
<section id="projects" class="bg-white">
    <div class="max-w-7xl mx-auto px-6 py-28">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <div class="flex items-center gap-3">
                    <span class="w-10 h-px bg-primary"></span>

                    <span class="text-primary font-semibold text-sm uppercase tracking-wider">
                        Selected Work
                    </span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold mt-5">
                    Featured Projects
                </h2>
            </div>

            <a href="#" class="font-semibold text-primary">
                View all projects →
            </a>
        </div>

        <!-- Later replaced with WordPress CPT -->

        <div class="grid md:grid-cols-3 gap-6 mt-14">
            <article class="group cursor-pointer">
                <div class="h-72 rounded-2xl bg-gray-100 border border-gray-200 flex items-center justify-center">
                    <span class="text-7xl font-bold text-gray-200 group-hover:text-primary transition">
                        01
                    </span>
                </div>

                <p class="text-primary text-sm font-semibold mt-6">
                    Web Development
                </p>

                <h3 class="text-xl font-bold mt-2">Business Platform</h3>

                <p class="text-gray-500 text-sm mt-2">
                    Modern digital platform for a growing business.
                </p>
            </article>

            <article class="group cursor-pointer">
                <div class="h-72 rounded-2xl bg-gray-950 flex items-center justify-center">
                    <span class="text-7xl font-bold text-gray-800 group-hover:text-primary transition">
                        02
                    </span>
                </div>

                <p class="text-primary text-sm font-semibold mt-6">
                    Web Application
                </p>

                <h3 class="text-xl font-bold mt-2">Management System</h3>

                <p class="text-gray-500 text-sm mt-2">
                    A practical application for managing business operations.
                </p>
            </article>

            <article class="group cursor-pointer">
                <div class="h-72 rounded-2xl bg-primary/10 border border-primary/20 flex items-center justify-center">
                    <span class="text-7xl font-bold text-primary/20 group-hover:text-primary transition">
                        03
                    </span>
                </div>

                <p class="text-primary text-sm font-semibold mt-6">WordPress</p>

                <h3 class="text-xl font-bold mt-2">Corporate Website</h3>

                <p class="text-gray-500 text-sm mt-2">
                    A custom WordPress website for a modern company.
                </p>
            </article>
        </div>
    </div>
</section>
<!-- How We Work -->
<section id="process" class="bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-28">
        <div class="max-w-2xl">
            <div class="flex items-center gap-3">
                <span class="w-10 h-px bg-primary"></span>

                <span class="text-primary font-semibold text-sm uppercase tracking-wider">
                    How We Work
                </span>
            </div>

            <h2 class="text-4xl md:text-5xl font-bold mt-5">
                From idea to reality.
            </h2>
        </div>

        <div class="grid md:grid-cols-4 mt-16">
            <div class="border-t-2 border-primary pt-6 pr-8">
                <span class="text-primary font-mono text-sm"> 01 </span>

                <h3 class="text-xl font-bold mt-4">Discover</h3>

                <p class="text-gray-500 text-sm leading-7 mt-3">
                    We understand your goals, users and business requirements.
                </p>
            </div>

            <div class="border-t border-gray-300 pt-6 pr-8">
                <span class="text-gray-400 font-mono text-sm"> 02 </span>

                <h3 class="text-xl font-bold mt-4">Design</h3>

                <p class="text-gray-500 text-sm leading-7 mt-3">
                    We create a clear structure and intuitive user experience.
                </p>
            </div>

            <div class="border-t border-gray-300 pt-6 pr-8">
                <span class="text-gray-400 font-mono text-sm"> 03 </span>

                <h3 class="text-xl font-bold mt-4">Develop</h3>

                <p class="text-gray-500 text-sm leading-7 mt-3">
                    We turn the design into a reliable digital product.
                </p>
            </div>

            <div class="border-t border-gray-300 pt-6">
                <span class="text-gray-400 font-mono text-sm"> 04 </span>

                <h3 class="text-xl font-bold mt-4">Launch</h3>

                <p class="text-gray-500 text-sm leading-7 mt-3">
                    We test, refine and prepare the product for launch.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- HAVE A PROJECT? -->
<section id="contact" class="bg-white px-6 py-28">
    <div class="max-w-6xl mx-auto">
        <div class="rounded-[2rem] bg-primary px-8 py-20 md:px-16 relative overflow-hidden">
            <div class="absolute -right-20 -bottom-40 w-96 h-96 rounded-full bg-white/10 blur-2xl"></div>

            <div class="relative max-w-3xl">
                <span class="text-white/70 font-mono text-sm">
                    HAVE A PROJECT?
                </span>

                <h2 class="text-5xl md:text-7xl text-white font-bold tracking-tight mt-5">
                    Let's build
                    <br />
                    something great.
                </h2>

                <a href="mailto:hello@abdolisoft.com"
                    class="inline-flex items-center gap-3 mt-9 bg-gray-950 text-white px-7 py-4 rounded-xl font-medium hover:bg-white hover:text-gray-900 transition">
                    Start a conversation
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer()
    ?>