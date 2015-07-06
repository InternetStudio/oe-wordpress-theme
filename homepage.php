<?php
/**
 * Template Name: Homepage
 *
 *
 * @package oewebsite
 */

get_header(); ?>
<div class="homepage-hero">
<img src="<?php echo get_template_directory_uri(); ?>//img/logo.png" class="hero-logo" />
<p>Open Engagement is an international conference and platform to support socially engaged art. The conference highlights the work of transdisciplinary artists, activists, students, scholars, community members, and organizations.</p>
<p>Open Engagement 2016 takes place in Oakland, California. The theme is POWER.</p>
</div>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'fullwidth' ); ?>

	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
