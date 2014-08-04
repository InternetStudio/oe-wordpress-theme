<?php
/**
 * The template used for displaying page content in page-homepage.php
 *
 * @package oewebsite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<div class="entry-content row">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

