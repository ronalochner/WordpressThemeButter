<?php
/**
-  Butter functions and definitions
-  @link https://developer.wordpress.org/themes/basics/theme-functions/
-  @package Butter
 */

if ( ! function_exists( 'butter_setup' ) ) :
	/**
	 - Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function butter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'butter', get_template_directory() . '/languages' );
		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );
		/*
		 *  Enable support for Post Thumbnails on posts and pages. (Featured image)
		 *  @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// THIS IS WHERE YOU REGISTER NEW MENU'S 
		// REMEMBER TO ALSO REGISTER THE NEW MENU IN THE PAGE STRUCTURE
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Menu', 'butter' ),
			'menu-2' => esc_html__( 'Secondary Menu', 'butter2'),
           	'menu-3' => esc_html__( 'Tertiary Menu', 'butter3')
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'butter_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'butter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function butter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'butter_content_width', 690 );
}
add_action( 'after_setup_theme', 'butter_content_width', 0 );

/**
 * Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function butter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'butter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'butter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Content One-Third', 'butter' ),
		'id'            => 'page-1',
		'description'   => esc_html__( 'Add widgets here.', 'butter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Page Content Two-Third', 'butter' ),
		'id'            => 'page-2',
		'description'   => esc_html__( 'Add widgets here.', 'butter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Page Content Three-Third', 'butter' ),
		'id'            => 'page-3',
		'description'   => esc_html__( 'Add widgets here.', 'butter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Page Content Full-Third', 'butter' ),
		'id'            => 'page-4',
		'description'   => esc_html__( 'Add widgets here.', 'butter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'butter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function butter_scripts() {
	//wp_enqueue_style( 'butter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'butter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'butter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'butter-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'butter_scripts' );

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



