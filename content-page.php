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
	<article id="post-<?php the_ID(); ?>" class="entry-content" <?php post_class(); ?>>
		<?php if( $post->post_parent !== 0 ) : ?>
			<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<?php endif; ?>
		<?php the_content(); ?>
	</article><!-- #post-## -->
</div>
