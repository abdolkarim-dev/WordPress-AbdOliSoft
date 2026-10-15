<?php
get_header();

$simple_fields = [
  'project_client' => '_project_client',
  'project_year' => '_project_year',
  'project_hero_number' => '_project_hero_number',
];

$paged = max(1, get_query_var('paged'), get_query_var('page'));

$args = [
  'post_type' => 'post',
  'posts_per_page' => 6,
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
  'paged' => $paged,
];

$projects = new WP_Query($args);

$total_posts = $projects->found_posts;
$per_page = 6;
$current = $paged;
$start = (($current - 1) * $per_page) + 1;
$end = min($current * $per_page, $total_posts);

  ?>

<!-- ================= HERO ================= -->

<section class="bg-[#eef1ee] relative overflow-hidden pt-40 pb-24">
  <!-- Background Grid -->
  <div class="absolute inset-0 opacity-[0.30]" style="
          background-image:
            linear-gradient(#d8ddd9 1px, transparent 1px),
            linear-gradient(90deg, #d8ddd9 1px, transparent 1px);
          background-size: 60px 60px;
        "></div>

  <!-- Glow -->
  <div class="absolute -right-40 -top-40 w-[550px] h-[550px] rounded-full bg-primary/10 blur-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-6">
    <div class="max-w-4xl">
      <div class="flex items-center gap-3 mb-7">
        <span class="w-10 h-px bg-primary"></span>

        <span class="text-primary font-semibold text-sm uppercase tracking-wider">
          Our Work
        </span>
      </div>

      <h1 class="text-6xl md:text-7xl xl:text-[82px] font-bold tracking-[-0.05em] leading-[.95]">
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

    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
      <div>
        <p class="text-sm text-gray-400">01 — PORTFOLIO</p>

        <h2 class="text-3xl md:text-4xl font-bold mt-3">Recent work</h2>
      </div>

      <!-- Filters -->

      <div class="flex flex-wrap items-center gap-2">
        <button class="px-4 py-2.5 rounded-lg bg-gray-950 text-white text-sm font-medium">
          All
        </button>

        <button
          class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">
          React
        </button>

        <button
          class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">
          WordPress
        </button>

        <button
          class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">
          Web Apps
        </button>

        <button
          class="px-4 py-2.5 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm font-medium">
          UI / UX
        </button>
      </div>
    </div>

    <!-- ================= PROJECT GRID ================= -->

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-14 mt-16">
      <!-- Project 01 -->
      <?php

      if ($projects->have_posts()):
        $counter = 0;
        while ($projects->have_posts()):
          $projects->the_post();
          $counter++;

          $client = get_post_meta(get_the_ID(), $simple_fields['project_client'], true);
          $year = get_post_meta(get_the_ID(), $simple_fields['project_year'], true);
          $hero_no = get_post_meta(get_the_ID(), $simple_fields['project_hero_number'], true);

          $global_no = (($current - 1) * $per_page) + $counter;
          $number = $hero_no ? $hero_no : str_pad($global_no, 2, '0', STR_PAD_LEFT);

          $display_year = $year ? $year : get_the_date('Y');
          ?>

          <article class="group">
            <a href="<?php the_permalink(); ?>">
              <div class="aspect-[4/3] rounded-2xl bg-gray-950 overflow-hidden relative">

                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full', [
                    'class' => 'absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105',
                    'alt' => esc_attr(get_the_title()),
                  ]); ?>
                <?php endif; ?>



                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="text-center px-4">
                    <span class="text-primary font-mono text-sm"> <?php echo esc_html($number); ?> </span>


                  </div>
                </div>
              </div>
            </a>

            <div class="mt-5">
              <div class="flex items-center justify-between">
                <p class="text-primary text-sm font-semibold">
                  <?php echo esc_html($client); ?>
                </p>

                <span class="text-gray-400 text-sm"> <?php echo esc_html($display_year); ?> </span>
              </div>

              <h3 class="text-xl font-bold mt-2"><?php the_title(); ?></h3>

              <p class="text-gray-500 text-sm mt-2 leading-6 line-clamp-2">
                <?php echo esc_html(get_the_excerpt()); ?>
              </p>
            </div>
          </article>

          <?php
        endwhile;
        wp_reset_postdata();
      else:
        echo '<p>هیچ پروژه‌ای یافت نشد.</p>';
      endif;
      ?>
    </div>

    <!-- ================= PAGINATION ================= -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-6 mt-20 pt-8 border-t border-gray-200">
      <p class="text-sm text-gray-500">
        Showing
        <span class="font-semibold text-gray-900"><?php echo esc_html($start); ?>–<?php echo esc_html($end); ?></span>
        of
        <span class="font-semibold text-gray-900"><?php echo esc_html($total_posts); ?></span>
        projects
      </p>

      <nav class="flex items-center gap-2" aria-label="Pagination">
        <?php
        $big = 999999999; // عدد یکتا برای جایگزینی
        
        $links = paginate_links([
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'format' => '?paged=%#%',
          'current' => $current,
          'total' => $projects->max_num_pages,
          'type' => 'array',
          'prev_text' => '←',
          'next_text' => '→',
          'mid_size' => 1,   // چند تا قبل و بعد از صفحه فعلی
          'end_size' => 1,   // چند تا اول و آخر
        ]);

        if ($links):
          foreach ($links as $link) {
            // کلاس‌های مختلف برای حالت‌های مختلف
            $is_current = strpos($link, 'current') !== false;
            $is_dots = strpos($link, 'dots') !== false;
            $is_prev = strpos($link, 'prev') !== false;
            $is_next = strpos($link, 'next') !== false;

            if ($is_dots) {
              $class = 'w-10 h-10 flex items-center justify-center text-gray-400';
            } elseif ($is_current) {
              $class = 'w-10 h-10 flex items-center justify-center rounded-lg bg-gray-950 text-white text-sm font-medium';
            } elseif ($is_prev || $is_next) {
              $class = 'w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-900 hover:border-gray-400 transition';
            } else {
              $class = 'w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-950 hover:text-white transition text-sm';
            }

            // اضافه کردن کلاس به لینک
            $link = str_replace('<a ', '<a class="' . esc_attr($class) . '" ', $link);
            $link = str_replace('<span ', '<span class="' . esc_attr($class) . '" ', $link);

            echo $link;
          }
        endif;
        ?>
      </nav>
    </div>
  </div>
</main>


<?php get_footer() ?>