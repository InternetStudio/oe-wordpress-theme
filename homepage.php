<?php
/**
 * Template Name: Homepage
 *
 *
 * @package oewebsite
 */

get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'fullwidth' ); ?>

	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
