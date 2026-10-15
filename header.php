<?php
$menu_name = "primary";
$locations = get_nav_menu_locations();
$current_url = home_url(add_query_arg([], $wp->request));
$current_url = untrailingslashit($current_url);
$menu_items = isset($locations[$menu_name])
    ? wp_get_nav_menu_items($locations[$menu_name])
    : [];
?>

<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AbdOliSoft — Digital Products</title>
    <link href="<?php echo get_template_directory_uri(); ?>/src/output.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/src/font/font.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/style.css" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body class="bg-[#f5f6f4] text-[#111827]" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- ========== Header ========== -->
    <header id="header" class="fixed top-5 left-0 right-0 z-50 transition-all duration-300">
        <div
            class="mx-6 2xl:mx-auto max-w-7xl h-16 px-5 flex items-center justify-between bg-white/80 backdrop-blur-xl border border-white/60 rounded-2xl shadow-sm">
            <a href="#" class="text-xl font-bold tracking-tight">
                Abd<span class="text-primary">Oli</span>Soft
            </a>

            <nav class="hidden md:flex items-center gap-1 bg-gray-50 border border-gray-100 rounded-xl p-1">
                <?php foreach ($menu_items as $item):
                    $is_active = $current_url === untrailingslashit($item->url);
                    ?>
                    <a href="<?php echo esc_url($item->url); ?>" class="px-4 py-2 rounded-lg text-sm font-medium transition
                    <?php echo $is_active
                        ? 'bg-white shadow-sm text-primary'
                        : 'text-gray-600 hover:text-primary hover:bg-white'; ?>">
                        <?php echo esc_html($item->title); ?>
                    </a>
                <?php endforeach; ?>

            </nav>


            <!-- Search Container -->
            <div id="header-search" class="relative hidden md:flex items-center">

                <!-- Search Input -->
                <form id="header-search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get" role="search"
                    class="absolute right-0 top-1/2 -translate-y-1/2
                    w-0 opacity-0 pointer-events-none overflow-hidden
                    transition-all duration-300 ease-in-out
                    [&.is-open]:w-[280px]
                    [&.is-open]:opacity-100
                    [&.is-open]:pointer-events-auto">

                    <div class="flex items-center h-10 pl-3 pr-1.5
                        rounded-xl border border-gray-200
                        bg-white shadow-lg shadow-gray-900/5
                        focus-within:border-primary">

                        <input id="header-search-input" type="search" name="s" placeholder="Search anything..."
                            aria-label="Search the website" class="w-full min-w-0 bg-transparent text-sm
                         text-gray-800 placeholder-gray-400 outline-none" />

                        <button type="submit" aria-label="Submit search" class="shrink-0 flex items-center justify-center
                        w-8 h-8 rounded-lg bg-primary text-white
                        hover:bg-emerald-700 transition">

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="7" stroke-width="2" />
                                <path d="m16 16 4 4" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </form>
                <button id="search-toggle"
                    class="hidden md:flex items-center justify-center w-10 h-10 bg-gray-50 border border-gray-100 rounded-xl text-gray-600 hover:text-primary hover:bg-white hover:shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>



            </div>



            <button id="mobile-menu-toggle" type="button" aria-label="Open menu" aria-expanded="false"
                aria-controls="mobile-menu" class="md:hidden relative z-50 flex h-10 w-10 shrink-0
           items-center justify-center rounded-xl
           text-gray-700 transition-colors duration-200
           hover:bg-white hover:text-primary">
                <span class="relative h-4 w-5">

                    <span class="menu-line absolute left-0 top-0
                   h-0.5 w-5 rounded-full bg-current
                   transition-all duration-300"></span>

                    <span class="menu-line absolute left-0 top-1/2
                   h-0.5 w-5 -translate-y-1/2 rounded-full
                   bg-current transition-all duration-300"></span>

                    <span class="menu-line absolute left-0 bottom-0
                   h-0.5 w-5 rounded-full bg-current
                   transition-all duration-300"></span>

                </span>
            </button>


        </div>

        <!-- Mobile Menu -->

        <div id="mobile-menu" aria-label="Mobile navigation" class="pointer-events-none invisible absolute left-0 right-0 top-full
           mx-6 mt-3 origin-top -translate-y-2 scale-95 opacity-0
           rounded-2xl border border-white/70 bg-white/95
           shadow-xl shadow-gray-900/10 backdrop-blur-xl
           transition-all duration-300 ease-out
           md:hidden">
            <nav class="flex max-h-[70vh] flex-col gap-1 overflow-y-auto p-3">

                <?php foreach ($menu_items as $item):
                    $is_active = $current_url === untrailingslashit($item->url);
                    ?>

                    <a href="<?php echo esc_url($item->url); ?>" class="flex items-center justify-between rounded-xl
                       px-4 py-3 text-sm font-medium
                       transition-colors duration-200
                       <?php echo $is_active
                           ? 'bg-primary/10 text-primary'
                           : 'text-gray-600 hover:bg-gray-50 hover:text-primary'; ?>">
                        <span><?php echo esc_html($item->title); ?></span>

                        <svg class="h-4 w-4 opacity-50" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                        </svg>
                    </a>

                <?php endforeach; ?>


                <!-- Mobile Search -->
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get" role="search"
                    class="mt-4 border-t border-gray-100 pt-4">

                    <div
                        class="flex h-11 items-center gap-2 rounded-xl border border-gray-200 bg-gray-50 px-2 transition focus-within:border-primary focus-within:bg-white">
                        <input id="mobile-search-input" type="search" name="s" placeholder="Search anything..."
                            aria-label="Search the website"
                            class="w-full min-w-0 bg-transparent px-2 text-sm text-gray-800 outline-none placeholder:text-gray-400" />

                        <button type="submit" aria-label="Submit search"
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:bg-emerald-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="7" stroke-width="2" />
                                <path d="m16 16 4 4" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </form>


            </nav>
        </div>


    </header>