<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oewebsite
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
		<div class="post-meta">
			Posted on: <?php the_time( get_option( 'date_format' ) ); ?><br />
			Categories: <?php the_category(', '); ?><br />
			Tags: <?php the_tags(''); ?><br />
		</div>

		<?php the_excerpt(); ?>
		<hr />
	</article><!-- #post-## -->