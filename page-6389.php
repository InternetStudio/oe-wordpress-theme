<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package oewebsite
 */

get_header(); ?>

<div class="one-fourth">
  <?php get_sidebar(); ?>
</div>


<!-- 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> --> 
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'sched' ); ?>

			<?php endwhile; // end of the loop. ?>

	<!-- 	</main> --><!-- #main -->
	<!-- </div> --><!-- #primary -->

<?php get_footer(); ?>
