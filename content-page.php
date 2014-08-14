<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oewebsite
 */
?>
<div class="one-fourth">
	<?php get_sidebar(); ?>
</div>
<div class="three-fourths">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content row">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>
