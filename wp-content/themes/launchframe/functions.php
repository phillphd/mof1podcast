<?php
/**
 * Launchframe functions and definitions
 *
 * @package Launchframe
 */

require 'vendor/autoload.php';

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'launchframe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function launchframe_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Launchframe, use a find and replace
	 * to change 'launchframe' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'launchframe', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'launchframe' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'launchframe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	register_post_type('episodes',
    array(
       'labels' => array(
        	'name' => 'Episode',
        	'singular_name' => 'Episode',
        	'menu_name' => 'Episodes',
        	'add_new' => 'Add Episode',
        	'add_new_item' => 'Add New Episode',
        	'edit' => 'Edit',
        	'edit_item' => 'Edit Episode',
        	'new_item' => 'New Episode',
        	'view' => 'View Episodes',
        	'view_item' => 'View Episode',
        	'search_items' => 'Search Episodes',
        	'not_found' => 'No Episodes Found',
        	'not_found_in_trash' => 'No Episodes Found in Trash',
        	'parent' => 'Parent Episode',
        ),
	    	'public' => true,
	    	'show_ui' => true,
	    	'show_in_menu' => true,
	    	'show_in_nav_menus' => true,
	    	'show_in_admin_bar' => true,
	    	'menu_position' => 5,
	    	'capability_type' => 'post',
	    	'hierarchical' => false,
	    	'rewrite' => array('slug' => 'episodes'),
	    	'query_var' => true,
	    	'exclude_from_search' => false,
	    	'has_archive' => true,
	    	'taxonomies' => array(),
	    	'supports' => array(),
        )
    );
}
endif; // launchframe_setup
add_action( 'after_setup_theme', 'launchframe_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function launchframe_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'launchframe' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'launchframe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function launchframe_scripts() {
	// Theme definition
	wp_enqueue_style( 'launchframe-style', get_stylesheet_uri() );
	wp_enqueue_script( 'lf-modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', null, '201501.0', false);
	wp_enqueue_script( 'lf-jquery', 'https://code.jquery.com/jquery-1.11.2.min.js', null, '201501.1', true);
	wp_enqueue_style( 'launchframe-style-custom', get_template_directory_uri() . "/assets/dist/css/style.css"  );
	wp_enqueue_script( 'buildjs', get_template_directory_uri() . '/assets/dist/js/script.js', array( 'lf-jquery', 'mapjs' ), '201501.2', true );
	wp_enqueue_script( 'mapjs', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDvp0Rrhgs3ARhUDoTKEefcD7vBNpmhmps', array( 'lf-jquery' ), '201501.2', true );
	// wp_enqueue_script( 'videjs', get_template_directory_uri() . '/inc/jquery.vide.js', array( 'lf-jquery' ), '201501.2', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'launchframe_scripts' );

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
