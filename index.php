<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="date"><?php the_date(); ?></div>
            <?php the_content(); ?>
            <div class="authorinfo"><?php the_author(); ?></div>
        </div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
