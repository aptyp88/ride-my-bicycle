<?php
/**
 * ridemybicycle functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ridemybicycle
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ridemybicycle_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ridemybicycle_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ridemybicycle, use a find and replace
		 * to change 'ridemybicycle' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ridemybicycle', get_template_directory() . '/languages' );

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
				'top-menu'    => esc_html__( 'Top menu', 'ridemybicycle' ),
				'footer-menu' => esc_html__( 'Footer menu', 'ridemybicycle' )
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
				'ridemybicycle_custom_background_args',
				array(
					'default-color' => '74d416',
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
				'height'      	=> 40,
				'width'       	=> 40,
				'flex-width'  	=> true,
				'flex-height' 	=> true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ridemybicycle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ridemybicycle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ridemybicycle_content_width', 640 );
}
add_action( 'after_setup_theme', 'ridemybicycle_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ridemybicycle_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ridemybicycle' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ridemybicycle' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ridemybicycle_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ridemybicycle_scripts() {
	wp_enqueue_style( 'ridemybicycle-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ridemybicycle-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ridemybicycle-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ridemybicycle_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Register bootstrap nav walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Connecting jQuery, bootstrap, google fonts 
*/
add_action( 'wp_enqueue_scripts', 'maxin_scripts' );
function maxin_scripts() {
    wp_enqueue_script('jquery-cdn', '//code.jquery.com/jquery-3.5.1.min.js', array(), '1.9.1', false);
    wp_enqueue_style('bootstrap-cdn', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array());
    wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/main.css', array('bootstrap-cdn'));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Maven+Pro:wght@500&display=swap', array('bootstrap-cdn'));
	wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.9.0/css/all.css', array('bootstrap-cdn'));
	wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery-cdn'), '', true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery-cdn'), '1.0.0', true );
}