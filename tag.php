<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package oewebsite
 */

get_header(); ?>
	<?php if ( in_category( '37' ) ) : ?>
		<a href="?cat=37"><img class="blog-top" src="<?php echo get_template_directory_uri(); ?>/img/blog-top.jpg" /></a>
		<a href="?cat=37"><img class="blog-top-mobile" src="<?php echo get_template_directory_uri(); ?>/img/blog-top-mobile.jpg" /></a>
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


<?php get_footer(); ?>
