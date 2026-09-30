<?php
 
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
                <a href="#" class="px-4 py-2 rounded-lg bg-white shadow-sm text-primary text-sm font-medium">
                    Home
                </a>

                <a href="#services"
                    class="px-4 py-2 rounded-lg text-gray-600 hover:text-primary hover:bg-white transition text-sm font-medium">
                    Services
                </a>

                <a href="#projects"
                    class="px-4 py-2 rounded-lg text-gray-600 hover:text-primary hover:bg-white transition text-sm font-medium">
                    Projects
                </a>

                <a href="#about"
                    class="px-4 py-2 rounded-lg text-gray-600 hover:text-primary hover:bg-white transition text-sm font-medium">
                    About
                </a>

                <a href="#process"
                    class="px-4 py-2 rounded-lg text-gray-600 hover:text-primary hover:bg-white transition text-sm font-medium">
                    Process
                </a>
            </nav>

            <a href="#contact"
                class="hidden md:flex items-center gap-2 px-6 py-2.5 bg-primary text-white rounded-lg text-sm font-medium hover:bg-emerald-700 transition">
                Let's Talk
            </a>

            <button class="md:hidden text-xl">☰</button>
        </div>
    </header>