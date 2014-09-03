<?php
/**
 * @package oewebsite
 */
?>
<section class="blog-post row">
	<section id="post-<?php the_ID(); ?>" class="two-thirds" <?php post_class(); ?>>
		<article>
			<span class="post-header">
				<a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
				<?php the_meta(); ?>
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
		</article>
	</section><!-- #post-## -->
	<div class="one-fourth">
		<article>		
			<ul>
				<li><?php the_date(M-D-Y); ?></li>
				<li><?php the_tags(''); ?></li>
			</ul>
		</article>
	</div>
</section>