<?php
/**
 * The template for displaying all single posts.
 *
 * @package oewebsite
 */

get_header(); ?>

		<?php if ( in_category( '37' ) ) : ?>
			<a href="?cat=37"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/blog-top.jpg" /></a>
			<a href="?cat=37"><img class="blog-top-mobile" src="<?php echo get_template_directory_uri(); ?>/img/blog-top-mobile.jpg" /></a>
		<?php endif; ?> 

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php oewebsite_post_nav(); ?>



		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>