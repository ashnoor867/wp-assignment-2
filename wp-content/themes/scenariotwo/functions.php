<?php
function my_theme_setup()
{
    register_nav_menus(
        array(
            'header' => 'Header menu',
            'footer' => 'Footer menu',
        )
    );
}
add_action('after_setup_theme', 'my_theme_setup');
add_theme_support('post-thumbnails');


// adding woocommerce support to our theme
function customtheme_add_woocomerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('wc-cart-fragments');
}
add_action('after_setup_theme', 'customtheme_add_woocomerce_support');
// add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');

function enqueue_wc_cart_fragments()
{
    wp_enqueue_script('wc-cart-fragments');
}
add_action('wp_enqueue_scripts', 'enqueue_wc_cart_fragments');

// add_action('woocommerce_before_single_product_summary', function () {
//     printf('<h4>This is our first woocommerce action hook!!</h4>');
// });
// remove_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_product_meta_start', 'wc_display_product_meta_sku', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_filter('woocommerce_is_sold_individually', '__return_true');

//Removing basic layout 
// Single product page
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


// Changing layout
// Single product page
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 15);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 5);

add_action('woocommerce_before_single_product', function () {
    echo '<div class="custom-product-banner">🔥 Limited Time Offer! Get Your Game Now! 🔥</div>';

}, 1);

