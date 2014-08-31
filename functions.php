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
	    		return '<div class="row"><div class="one-half">' . $content . '</div>';
	    		break;
	      	case '1/3':
	    		return '<div class="row"><div class="one-third">' . $content . '</div>';
	    		break;
	        case '2/3':
	    		return '<div class="row"><div class="two-thirds">' . $content . '</div>';
	    		break;
	    	case '1/6':
	    		return '<div class="row"><div class="one-sixth">' . $content . '</div>';
	    		break;
	    	case '5/6':
	    		return '<div class="row"><div class="five-sixths">' . $content . '</div>';
	    		break;
	    	case '1/4':
	    		return '<div class="row"><div class="one-fourth">' . $content . '</div>';
	    		break;	    		
	    }  
    } else if($attr[row] == 'end') {
	    switch ($attr[width]) {
	    	case '1/2':
	    		return '<div class="one-half">' . $content . '</div></div>';
	    		break;
	      	case '1/3':
	    		return '<div class="one-third">' . $content . '</div></div>';
	    		break;
	        case '2/3':
	    		return '<div class="two-thirds">' . $content . '</div></div>';
	    		break;
	    	case '1/6':
	    		return '<div class="one-sixth">' . $content . '</div></div>';
	    		break;
	    	case '5/6':
	    		return '<div class="five-sixths">' . $content . '</div></div>';
	    		break;
	    	case '1/4':
	    		return '<div class="one-fourth">' . $content . '</div></div>';
	    		break;

	    }  
    }

    //otherwise, normal row
    switch ($attr[width]) {
    	case '1/2':
    		return '<div class="one-half">' . $content . '</div>';
    		break;
      	case '1/3':
    		return '<div class="one-third">' . $content . '</div>';
    		break;
        case '2/3':
    		return '<div class="two-thirds">' . $content . '</div>';
    		break;
    	case '1/6':
    		return '<div class="one-sixth">' . $content . '</div>';
    		break;
    	case '5/6':
    		return '<div class="five-sixths">' . $content . '</div>';
    		break;
	    case '1/4':
    		return '<div class="one-fourth">' . $content . '</div>';
    		break;

    }  
}



add_shortcode('column', 'addColumn');

// REMOVE insertion of width/height from images

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


