<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package oewebsite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

					<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'oewebsite' ); ?></h1>

				<div class="page-content">
					<p>It looks like nothing was found at this location. Try one of the links above.</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
