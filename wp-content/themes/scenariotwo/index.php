<?php
get_header();
?>
<h1><?php the_title(); ?></h1>
<section class="homepage">
    <?php echo get_the_content(); ?>
</section>
<?php
get_footer();
?>