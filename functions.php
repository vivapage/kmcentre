<?php
/**
 * kmcentre functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kmcentre
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kmcentre_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kmcentre_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kmcentre, use a find and replace
		 * to change 'kmcentre' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kmcentre', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kmcentre' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kmcentre_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kmcentre_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kmcentre_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kmcentre_content_width', 640 );
}
add_action( 'after_setup_theme', 'kmcentre_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kmcentre_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kmcentre' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kmcentre' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kmcentre_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kmcentre_scripts() {
	wp_enqueue_style( 'kmcentre-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kmcentre-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kmcentre-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kmcentre_scripts' );

/**
 * Implement the Custom Header feature.
 */
/*
require get_template_directory() . '/inc/custom-header.php';
*/
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
/*
require get_template_directory() . '/inc/customizer.php';
*/

function kmcentre_remove_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'kmcentre_remove_block_library_css' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> esc_html__( 'Theme General Settings', 'kmcentre' ),
		'menu_title'	=> esc_html__( 'Theme Settings', 'kmcentre' ),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
		
}

// WPML
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define('ICL_DONT_LOAD_LANGUAGES_JS', true);

//Clean HTML

function itsme_disable_feed() {
	wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
 }
 
 add_action('do_feed', 'itsme_disable_feed', 1);
 add_action('do_feed_rdf', 'itsme_disable_feed', 1);
 add_action('do_feed_rss', 'itsme_disable_feed', 1);
 add_action('do_feed_rss2', 'itsme_disable_feed', 1);
 add_action('do_feed_atom', 'itsme_disable_feed', 1);
 add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
 add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

 remove_action('wp_head','adjacent_posts_rel_link_wp_head');
 remove_action( 'wp_head', 'feed_links_extra', 3 );
 remove_action( 'wp_head', 'feed_links', 2 );

	remove_action('wp_head', 'wp_generator');

	global $sitepress;
	remove_action( 'wp_head', array( $sitepress, 'meta_generator_tag' ) );
	
	remove_action( 'wp_head', 'wlwmanifest_link' );

	remove_action( 'wp_head', 'rsd_link' );

	remove_action('wp_head', 'wp_shortlink_wp_head');

	remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

	// Kill WPML script if not logged in
function remove_wpml_style() {
	if ( is_user_logged_in() ) {
			return;
	}

	wp_dequeue_style( 'wpml-tm-admin-bar' );
}
add_action( 'wp_print_styles', 'remove_wpml_style' );



add_action( 'wp_enqueue_scripts', 'kmcentre_method' );
function kmcentre_method() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script( 'jquery' );
}