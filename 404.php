<?php
get_header();
?>

<!-- ================= 404 ================= -->

<?php
get_header();
?>

<section class="relative min-h-screen overflow-hidden bg-[#eef1ee] flex items-center justify-center px-6 py-32">

  <!-- Background grid -->
  <div class="absolute inset-0 opacity-30 pointer-events-none" style="
      background-image:
        linear-gradient(#d8ddd9 1px, transparent 1px),
        linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
      background-size: 60px 60px;
    ">
  </div>

  <!-- Soft background glow -->
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
              w-[500px] h-[500px] rounded-full bg-primary/10 blur-3xl
              pointer-events-none">
  </div>

  <!-- Content -->
  <div class="relative z-10 w-full max-w-3xl mx-auto text-center">

    <!-- Error label -->
    <div class="flex items-center justify-center gap-3 mb-6">
      <span class="w-8 h-px bg-primary"></span>

      <span class="text-primary font-semibold text-sm uppercase tracking-[0.2em]">
        Error 404
      </span>

      <span class="w-8 h-px bg-primary"></span>
    </div>

    <!-- 404 Number -->
    <div class="relative mb-5">
      <span class="block text-[120px] sm:text-[160px] md:text-[200px]
                   font-bold leading-none tracking-[-0.08em]
                   text-gray-950 select-none">
        404
      </span>

      <span class="absolute inset-0 flex items-center justify-center
                   text-[120px] sm:text-[160px] md:text-[200px]
                   font-bold leading-none tracking-[-0.08em]
                   text-primary/10 blur-sm select-none" aria-hidden="true">
        404
      </span>
    </div>

    <!-- Heading -->
    <h1 class="text-3xl sm:text-4xl md:text-5xl
               font-bold tracking-tight text-gray-950">
      Lost in <span class="text-primary">space?</span>
    </h1>

    <!-- Description -->
    <p class="max-w-lg mx-auto mt-6 text-base sm:text-lg
              leading-8 text-gray-500">
      The page you're looking for doesn't exist, was moved,
      or is taking a nap. Let's get you back on track.
    </p>

    <!-- Home button -->
    <div class="flex justify-center mt-9">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="group inline-flex items-center justify-center gap-3
        rounded-xl bg-gray-950 px-7 py-4
        text-sm font-semibold text-white
        shadow-lg shadow-gray-950/10
        transition-all duration-300
        hover:bg-primary hover:-translate-y-1
        hover:shadow-xl hover:shadow-primary/20
        focus:outline-none focus:ring-2
        focus:ring-primary focus:ring-offset-2">

        <span>Back to home</span>



      </a>
    </div>


  </div>
</section>