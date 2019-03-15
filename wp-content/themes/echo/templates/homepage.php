<?php
/**
 * Template name: Template Homepage
 *
 */
?>

<?php get_header(); ?>

<div class="banner">
    <h1><?php the_field('banner_title'); ?></h1>
    <p><?php the_field('banner_text'); ?></p>
</div>

<?php get_footer(); ?>
