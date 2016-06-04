<?php
/**
 * @package oewebsite
 */
?>

	<section class="blog-post row">
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<article>
			<span class="post-header">
								<a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>

				<div class="post-meta">
					Posted on: <?php the_date(M-D-Y); ?><br />
					Categories: <?php the_category(', '); ?><br />
					Tags: <?php the_tags(''); ?>
				</div>
			</span>
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'oewebsite' ) ); ?>
					<?php
					wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'oewebsite' ),
							'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
				<hr />
			</article>
		</section><!-- #post-## -->
	</section>

