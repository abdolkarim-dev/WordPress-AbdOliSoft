<?php
get_header();

// ===== دریافت متا =====
$client      = get_post_meta(get_the_ID(), '_project_client', true);
$year        = get_post_meta(get_the_ID(), '_project_year', true);
$live_url    = get_post_meta(get_the_ID(), '_project_live_url', true);
$source_url  = get_post_meta(get_the_ID(), '_project_source_url', true);
$hero_number = get_post_meta(get_the_ID(), '_project_hero_number', true);

// تکنولوژی‌ها (آرایه)
$technologies = get_post_meta(get_the_ID(), '_project_technologies', true);
if (!is_array($technologies)) {
    $technologies = $technologies
        ? array_map('trim', explode(',', $technologies))
        : [];
}
$technologies = array_filter($technologies);

// ===== دسته‌بندی (برای Breadcrumb) =====
$categories = get_the_category();
$primary_cat = !empty($categories) ? $categories[0] : null;

// ===== عنوان شکسته =====
// عنوان رو به دو بخش تقسیم می‌کنیم: کلمه آخر با رنگ primary
$title_raw  = get_the_title();
$title_words = explode(' ', $title_raw);
$title_last  = array_pop($title_words);
$title_main  = implode(' ', $title_words);
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
      <!-- Breadcrumb -->
      <div class="flex items-center gap-3 text-xs mb-7">
        <a href="<?php echo esc_url(get_post_type_archive_link('post') ?: home_url('/projects/')); ?>"
           class="text-primary font-semibold uppercase tracking-wider hover:underline">
          Projects
        </a>

        <?php if ($primary_cat): ?>
          <span class="text-gray-400">/</span>
          <a href="<?php echo esc_url(get_category_link($primary_cat->term_id)); ?>"
             class="text-gray-500 uppercase tracking-wider font-medium hover:text-primary transition">
            <?php echo esc_html($primary_cat->name); ?>
          </a>
        <?php endif; ?>
      </div>

      <!-- Title -->
      <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-[-0.05em] leading-[.95]">
        <?php echo esc_html($title_main); ?>
        <?php if ($title_last): ?>
          <br />
          <span class="text-primary"><?php echo esc_html($title_last); ?>.</span>
        <?php endif; ?>
      </h1>

      <!-- Excerpt -->
      <?php if (has_excerpt()): ?>
        <p class="mt-8 max-w-xl text-lg text-gray-500 leading-8">
          <?php echo esc_html(get_the_excerpt()); ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ================= MAIN ================= -->

<main class="bg-white">
  <div class="max-w-5xl mx-auto px-6 py-20">

    <!-- Featured Visual -->
    <div class="aspect-[16/9] rounded-2xl bg-gray-950 overflow-hidden relative mb-16">

      <?php if (has_post_thumbnail()): ?>
        <!-- تصویر شاخص -->
        <?php the_post_thumbnail('full', [
          'class' => 'absolute inset-0 w-full h-full object-cover',
          'alt'   => esc_attr(get_the_title()),
        ]); ?>
        <div class="absolute inset-0 bg-black/40"></div>
      <?php else: ?>
        <!-- پس‌زمینه گرید پیش‌فرض -->
        <div class="absolute inset-0 opacity-20" style="
                background-image:
                  linear-gradient(#ffffff 1px, transparent 1px),
                  linear-gradient(90deg, #ffffff 1px, transparent 1px);
                background-size: 50px 50px;
              "></div>
      <?php endif; ?>

      <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center px-6">
          <?php if ($hero_number): ?>
            <span class="text-primary font-mono text-sm"><?php echo esc_html($hero_number); ?></span>
          <?php endif; ?>

          <h2 class="text-5xl md:text-6xl font-bold text-white mt-4">
            <?php echo esc_html($title_main); ?>
            <?php if ($title_last): ?>
              <br /><?php echo esc_html($title_last); ?>
            <?php endif; ?>
          </h2>
        </div>
      </div>
    </div>

    <!-- Meta Bar -->
    <div class="grid sm:grid-cols-3 gap-6 pb-10 border-b border-gray-200">
      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Client</p>
        <p class="text-base font-medium mt-2"><?php echo esc_html($client ?: '—'); ?></p>
      </div>

      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Year</p>
        <p class="text-base font-medium mt-2"><?php echo esc_html($year ?: '—'); ?></p>
      </div>

      <div>
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Technologies</p>
        <div class="flex flex-wrap gap-2 mt-2">
          <?php if (!empty($technologies)): ?>
            <?php foreach ($technologies as $tech): ?>
              <span class="text-xs px-2.5 py-1 rounded-md bg-primary/10 text-primary font-medium">
                <?php echo esc_html($tech); ?>
              </span>
            <?php endforeach; ?>
          <?php else: ?>
            <span class="text-sm text-gray-400">—</span>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="mt-14 space-y-6 text-gray-600 leading-8 text-lg">
      <?php
      // محتوای اصلی پست
      if (have_posts()) :
          while (have_posts()) : the_post();
              the_content();
          endwhile;
      endif;
      ?>
    </div>

    <!-- Project Links -->
    <?php if ($live_url || $source_url): ?>
      <div class="flex flex-wrap gap-3 mt-14 pt-10 border-t border-gray-200">
        <?php if ($live_url): ?>
          <a href="<?php echo esc_url($live_url); ?>" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 px-6 py-3 bg-gray-950 text-white rounded-lg text-sm font-medium hover:bg-primary transition">
            View live demo <span>↗</span>
          </a>
        <?php endif; ?>

        <?php if ($source_url): ?>
          <a href="<?php echo esc_url($source_url); ?>" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 px-6 py-3 border border-gray-300 text-gray-900 rounded-lg text-sm font-medium hover:border-primary hover:text-primary transition">
            Source code <span>↗</span>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <!-- Prev / Next -->
    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    ?>

    <?php if ($prev_post || $next_post): ?>
      <div class="flex justify-between items-center gap-6 mt-16 pt-10 border-t border-gray-200">

        <div class="max-w-[45%]">
          <?php if ($prev_post): ?>
            <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Previous</p>
            <a href="<?php echo esc_url(get_permalink($prev_post)); ?>"
               class="text-base font-medium mt-1 inline-block hover:text-primary transition">
              ← <?php echo esc_html(get_the_title($prev_post)); ?>
            </a>
          <?php endif; ?>
        </div>

        <div class="text-right max-w-[45%]">
          <?php if ($next_post): ?>
            <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Next</p>
            <a href="<?php echo esc_url(get_permalink($next_post)); ?>"
               class="text-base font-medium mt-1 inline-block hover:text-primary transition">
              <?php echo esc_html(get_the_title($next_post)); ?> →
            </a>
          <?php endif; ?>
        </div>

      </div>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>