<?php
/**
 * The template for displaying all single posts.
 *
 * @package oewebsite
 */

get_header(); ?>

	<?php get_sidebar(); ?>
	
	<div id="primary" class="content-area five-sixths">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php oewebsite_post_nav(); ?>



		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>