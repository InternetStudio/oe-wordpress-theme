<?php
/**
 * @package oewebsite
 */
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_category(); ?>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php the_author( '<h2 class="entry-author">', '</h2>' ); ?>

	<div class="entry-content row">
		<div class="two-thirds">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'oewebsite' ),
					'after'  => '</div>',
				) );
			?>
		</div>
		<div class="one-third">
			<ul>
				<li><?php the_date(); ?></li>
				<li><?php the_tags(); ?></li>
			</ul>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
