<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="date"><?php the_date(); ?></div>
            <?php the_content(); ?>
            <div class="authorinfo"><?php the_author(); ?></div>
        </div>
    <?php endwhile; endif; ?>
<h3><a href="/archives">Older news&hellip;</a></h3>
<p><img alt="Gottung Family Portrait" class="full" src="<?php bloginfo('template_directory'); ?>/images/portrait.jpg" /></p> 
<p class="caption">Seated L-R:  Theresa Gottung Vetter (DOB 1892); Father-Matthias Gottung (DOB 1851); Margaret Gottung Gruny (DOB 1892-twin sister of Theresa); Mathias Gottung (DOB 1898); Gertude Gottung (DOB 1896).</p> 
<p class="caption">Standing L&ndash;R:  Anna Gottung Eck (DOB 1890). Bernard Gottung (DOB 1885); Theodore (DOB 1886).</p> 
<p class="caption">This photo was taken Circa 1904&mdash;Anna (Schaaf) Gottung had died approximately a year earlier and their son, Frank Gottung (DOB 1893), had died in 1900.</p>
<?php get_footer(); ?>
