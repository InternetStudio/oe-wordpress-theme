<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oewebsite
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
	</article><!-- #post-## -->