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

<?php wp_head(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/styles/main.css" rel="stylesheet" type="text/css" />

</head>

<body <?php body_class(); ?>>
<div id="page-wrapper" class="hfeed site wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'oewebsite' ); ?></a>

	<header>
		<section class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </section>
        <nav class="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
        <aside class="location-year">
            Pittsburgh 2015
        </aside>
	</header><!-- #masthead -->

	<section class="interior row">
