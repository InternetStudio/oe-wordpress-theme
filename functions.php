<?php
/**
 * oewebsite functions and definitions
 *
 * @package oewebsite
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'oewebsite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oewebsite_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on oewebsite, use a find and replace
	 * to change 'oewebsite' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'oewebsite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'oewebsite' ),
		'secondary' => __( 'Secondary Menu', 'oewebsite' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link'
	// ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'oewebsite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // oewebsite_setup
add_action( 'after_setup_theme', 'oewebsite_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function oewebsite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'oewebsite' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
			'name'          => __( 'Sidebar Blog', 'oewebsite' ),
			'id'            => 'sidebar-blog',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'oewebsite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oewebsite_scripts() {
	wp_enqueue_style( 'oewebsite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'oewebsite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'oewebsite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_dequeue_style('creativ_conference');
}
add_action( 'wp_enqueue_scripts', 'oewebsite_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



function createRow ($attr, $content) {
    return '<div class="row">' . do_shortcode($content) . '</div>';
}

add_shortcode('row', 'createRow');

function addColumn ($attr, $content) {
    $attr = shortcode_atts(array('width' => '', 'row' => ''), $attr);

    if($attr[row] == 'start') {
    	switch ($attr[width]) {
	    	case '1/2':
	    		return '<div class="row"><div class="one-half">' . do_shortcode($content) . '</div>';
	    		break;
	      	case '1/3':
	    		return '<div class="row"><div class="one-third">' . do_shortcode($content) . '</div>';
	    		break;
	        case '2/3':
	    		return '<div class="row"><div class="two-thirds">' . do_shortcode($content) . '</div>';
	    		break;
	    	case '1/6':
	    		return '<div class="row"><div class="one-sixth">' . do_shortcode($content) . '</div>';
	    		break;
	    	case '5/6':
	    		return '<div class="row"><div class="five-sixths">' . do_shortcode($content) . '</div>';
	    		break;
	    	case '1/4':
	    		return '<div class="row"><div class="one-fourth">' . $do_shortcode($content) . '</div>';
	    		break;	    		
	    }  
    } else if($attr[row] == 'end') {
	    switch ($attr[width]) {
	    	case '1/2':
	    		return '<div class="one-half">' . do_shortcode($content) . '</div></div>';
	    		break;
	      	case '1/3':
	    		return '<div class="one-third">' . do_shortcode($content) . '</div></div>';
	    		break;
	        case '2/3':
	    		return '<div class="two-thirds">' . do_shortcode($content) . '</div></div>';
	    		break;
	    	case '1/6':
	    		return '<div class="one-sixth">' . do_shortcode($content) . '</div></div>';
	    		break;
	    	case '5/6':
	    		return '<div class="five-sixths">' . $do_shortcode($content) . '</div></div>';
	    		break;
	    	case '1/4':
	    		return '<div class="one-fourth">' . do_shortcode($content) . '</div></div>';
	    		break;

	    }  
    }

    //otherwise, normal row
    switch ($attr[width]) {
    	case '1/2':
    		return '<div class="one-half">' . do_shortcode($content) . '</div>';
    		break;
      	case '1/3':
    		return '<div class="one-third">' . do_shortcode($content) . '</div>';
    		break;
        case '2/3':
    		return '<div class="two-thirds">' . do_shortcode($content) . '</div>';
    		break;
    	case '1/6':
    		return '<div class="one-sixth">' . do_shortcode($content) . '</div>';
    		break;
    	case '5/6':
    		return '<div class="five-sixths">' . do_shortcode($content) . '</div>';
    		break;
	    case '1/4':
    		return '<div class="one-fourth">' . do_shortcode($content) . '</div>';
    		break;

    }  
}


add_shortcode('column', 'addColumn');

// REMOVE insertion of width/height from images

add_filter( 'img_caption_shortcode', 'bs_responsive_img_caption_filter', 10, 3 );
function bs_responsive_img_caption_filter( $val, $attr, $content = null ) {
	extract( shortcode_atts( array(
		'id' => '',
		'align' => '',
		'width' => '',
		'caption' => ''
		), $attr
	) );

	if ( 1 > (int) $width || empty( $caption ) )
		return $val;

	$new_caption = sprintf( '<div id="%1$s" class="wp-caption %2$s" style="max-width:100%% !important;height:auto;width:auto;">%4$s<p class="wp-caption-text">%5$s</p></div>',
		esc_attr( $id ),
		esc_attr( $align ),
		'', //( 10 + (int) $width ),
		do_shortcode( $content ),
		$caption
	);
	return $new_caption;
}

// Shortcode to add twitter embed

function addTwitterEmbed ($attr, $content) {
    return '<a class="twitter-timeline"  href="https://twitter.com/OPENENGAGEMENT" data-widget-id="523560236540370944" data-link-color="#00b74f" data-chrome="noheader nofooter noborders noscrollbar" data-tweet-limit="1" > Tweets by @OPENENGAGEMENT n</a>';
}

add_shortcode('twitter', 'addTwitterEmbed');

$prevDate;

function displayTimeSlots ($date) {
		$date = strtotime($date);
		$date = date('g A', $date);	
		return ($date);

}

function getSessionDay ($date) {
	$date = date('l', $date);
	return ($date);
}

function sessionGroup_init() {
	// create a new taxonomy
	register_taxonomy(
			'cr3ativconfgroup', //taxonomy
			'cr3ativconference', //posttype
			array(
					'hierarchical' => true,
					'label' => __('Display Group', 'cr3at_conf'),
					'query_var' => true,

			)
	);
}
add_action( 'init', 'sessionGroup_init' );




