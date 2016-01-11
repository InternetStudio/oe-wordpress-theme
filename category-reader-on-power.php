<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package oewebsite
 */

get_header(); ?>
<img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/2016-blog-header.jpg" />
<img class="blog-top-mobile" src="<?php echo get_template_directory_uri(); ?>/img/2016-blog-header-mobile.jpg" />
<div class="blog-intro">
    <p>Open Engagement's 2016 blog project is A Reader on POWER. Activists, writers, thinkers, artists, teachers, community leaders, cultural workers, and others from the OE and Oakland communities interpret and respond to the theme of POWER by sharing a resource or media. <a href="http://openengagement.info/a-reader-on-power/">Learn more</a>.</p>
    <p>
    Read <a href="http://openengagement.info/rene-de-guzman-imagine-power/"><em>Imagine Power</em></a> by 2016 Open Engagement curator, René de Guzman.</p>
</div>
<?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );
        ?>
    <?php endwhile; ?>

    <?php oewebsite_paging_nav(); ?>

<?php else : ?>

    <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>


<?php get_footer(); ?>
