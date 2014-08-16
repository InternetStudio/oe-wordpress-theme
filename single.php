<?php
/**
 * The template for displaying all single posts.
 *
 * @package oewebsite
 */

get_header(); ?>

	

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php oewebsite_post_nav(); ?>



		<?php endwhile; // end of the loop. ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>