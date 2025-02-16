<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="flex items-center">
                <?php the_custom_logo(); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo ml-3">
                    <h1 class="text-2xl font-bold inline-block"><?php bloginfo('name'); ?></h1>
                </a>
            </div>

            <nav>
                <button class="mobile-menu-icon">
                    ☰
                </button>
                <div class="mobile-menu">
                    <div class="mobile-menu-close">×</div>
                    <?php
                    wp_nav_menu(array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'menu-container',
                        'menu_class'        => 'lg:flex space-x-4',
                        'walker'            => new Tailwind_Nav_Walker(),
                    ));
                    ?>
                </div>
                <!-- Overlay -->
                <div class="menu-overlay"></div>
            </nav>
        </div>
    </header>