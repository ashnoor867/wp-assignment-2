<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet"
        href="<?php echo esc_url(home_url('wp-content/themes/scenariotwo/css/custom-style.css')); ?>">
</head>

<body <?php body_class(); ?> style="overflow-x: hidden">
    <header class="default-header">
        <nav class="navbar">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header',
                    'menu_class' => 'nav-links',
                    'container' => 'div',
                    'container_class' => 'nav-container',
                    'fallback_cb' => false,
                    'depth' => 2,
                )
            );
            ?>
        </nav>
    </header>