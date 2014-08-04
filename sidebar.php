<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package oewebsite
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area one-sixth" role="complementary">
	<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
