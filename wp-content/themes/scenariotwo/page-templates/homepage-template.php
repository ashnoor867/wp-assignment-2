<?php
/*
Template Name: Homepage template
*/
get_header(); ?>
<section class="homepage-text">
    <h1>Welcome to Games Hub</h1>
    <h3>Browse latest games in the market.</h3>
</section>

<section class="homepage-content">
    <?php
    do_action('woocommerce_before_shop_loop');
    echo do_shortcode('[products limit="8" columns="4"]');
    do_action('woocommerce_after_shop_loop');
    ?>

    <a href="/shop">
        <button class="all-games-btn">All Games</button>
    </a>
</section>

<?php
get_footer();
?>