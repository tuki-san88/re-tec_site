<?php
/*
 * Template Name: 404.php
 */
?>
<?php get_header(); ?>
<main id="main">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php echo get_the_title(); ?></h1>
<?php endwhile; ?>
<?php endif; ?>
<p>404.phpを表示しています</p>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>