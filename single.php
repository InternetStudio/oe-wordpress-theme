<?php
/**
 * The template for displaying all single posts.
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
	<?php if ( in_category( '82' ) ) : ?>
		<a href="?cat=82"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/oe-blog-header-2016.jpg" /></a>
	<?php endif; ?>
	<?php if ( in_category( '85' ) ) : ?>
		<a href="?cat=85"><img class="blog-top" src="http://openengagement.info/wp-content/uploads/2017/02/OEWebsiteBanners5.jpg" /></a>
	<?php endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

		<?php posts_nav_link( '-', 'previous', 'next' ); ?>
		<?php oewebsite_post_nav(); ?>


	<?php endwhile; // end of the loop. ?>

	<?php get_footer(); ?>
</div>