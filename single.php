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
<?php if ( in_category( '82' ) ) : ?>
	<a href="<?php echo get_site_url(); ?>/category/2016/reader-on-power/"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/2016-blog-header.jpg" /></a>
	<a href="<?php echo get_site_url(); ?>/category/2016/reader-on-power/"><img class="blog-top-mobile" src="<?php echo get_template_directory_uri(); ?>/img/2016-blog-header-mobile.jpg" /></a>
	<div class="blog-intro">
		<p>Open Engagement's 2016 blog project is A Reader on POWER. Activists, writers, thinkers, artists, teachers, community leaders, cultural workers, and others from the OE and Oakland communities interpret and respond to the theme of POWER by sharing a resource or media. <a href="http://openengagement.info/a-reader-on-power/">Learn more</a>.</p>
		<p>
			Read <a href="http://openengagement.info/rene-de-guzman-imagine-power/"><em>Imagine Power</em></a> by 2016 Open Engagement curator, René de Guzman.</p>
	</div>
<?php endif; ?>


<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php oewebsite_post_nav(); ?>



		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>