<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package oewebsite
 */

get_header(); ?>
<?php get_sidebar('blog'); ?>
    <div class="three-fourths">
        <?php if ( in_category( '6' ) ) : ?>
            <a href="?cat=6"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/oe-blog-header-2014.jpg" /></a>
        <?php endif; ?>
        <?php if ( in_category( '8' ) ) : ?>
            <a href="?cat=8"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/oe-blog-header-2015.jpg" /></a>
        <?php endif; ?>
        <?php if ( in_category( '61' ) ) : ?>
            <a href="?cat=82"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/oe-blog-header-2016.jpg" /></a>
        <?php endif; ?>
        <?php if ( in_category( '85' ) ) : ?>
            <a href="?cat=85"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/oe-blog-header-2017.jpg" /></a>
        <?php endif; ?>
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
    </div>

<?php get_footer(); ?>