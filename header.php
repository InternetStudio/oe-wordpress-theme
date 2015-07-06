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
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/scripts/main.js"></script>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:700' rel='stylesheet' type='text/css'><link href="<?php echo get_template_directory_uri(); ?>/styles/main.css" rel="stylesheet" type="text/css" />
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</head>

<body <?php body_class(); ?>>
<div id="page-wrapper" class="hfeed site wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'oewebsite' ); ?></a>

	<header id="top">
        <div class="row">
<!--     		<section class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </section> -->
            <nav class="main-nav">
                <span class="menu-link"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" /></span>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
        </div>
	</header><!-- #masthead -->
    <div class="back-to-top icon-arrow-up"><a href="#"></a></div>
	<section class="interior row">

