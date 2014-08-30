<?php
/**
 * @package oewebsite
 */
?>
<section class="blog-post row">
	<div class="one-fourth">
		<article>		
			<ul>
				<li><?php the_date(M-D-Y); ?></li>
				<li><?php the_author(); ?></li>
				<li><?php the_tags(''); ?></li>
			</ul>
		</article>
	</div>

	<section id="post-<?php the_ID(); ?>" class="two-thirds" <?php post_class(); ?>>

		<article>
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'oewebsite' ) ); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'oewebsite' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</article>
	</section><!-- #post-## -->
</section>