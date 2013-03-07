<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php wp_get_archives(); ?>
        </div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
