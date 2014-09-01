<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package oewebsite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/scripts/main.js"></script>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri(); ?>/styles/main.css" rel="stylesheet" type="text/css" />

</head>
<body class="coming-soon">

<!-- 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->
			<div>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
	<!-- 	</main> --><!-- #main -->
	<!-- </div> --><!-- #primary -->


</body>