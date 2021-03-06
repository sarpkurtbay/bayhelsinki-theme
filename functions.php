<?php
/**
 * bayhelsinki functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bayhelsinki
 */

if ( ! function_exists( 'bayhelsinki_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bayhelsinki_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bayhelsinki, use a find and replace
		 * to change 'bayhelsinki' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bayhelsinki', get_template_directory() . '/languages' );

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
				'studio-header-menu' => esc_html__( 'Studio Header Menu', 'bayhelsinki' ),
				'store-header-menu' => esc_html__( 'Store Header Menu', 'bayhelsinki'),
				'studio-footer-menu-column-discover' => esc_html__( 'Studio Footer Menu Column Discover', 'bayhelsinki'),
				'studio-footer-menu-column-support' => esc_html__( 'Studio Footer Menu Column Support', 'bayhelsinki')
			)
		);

		// function register_my_menu() {
		// 	register_nav_menu('header-menu',__( 'Header Menu' ));
		//   }
		//   add_action( 'init', 'register_my_menu' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bayhelsinki_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bayhelsinki_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bayhelsinki_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bayhelsinki_content_width', 640 );
}
add_action( 'after_setup_theme', 'bayhelsinki_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bayhelsinki_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bayhelsinki' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bayhelsinki' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bayhelsinki_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bayhelsinki_scripts() {
	wp_enqueue_style( 'bayhelsinki-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bayhelsinki-stylesheet', get_template_directory_uri() . '/dist/stylesheet.css' );

	
	wp_enqueue_script( 'bayhelsinki-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bayhelsinki-flickity', get_template_directory_uri() . '/js/flickity.pkgd.js', array(), true );
	wp_enqueue_script( 'bayhelsinki-marquee', get_template_directory_uri() . '/js/marquee.js', array(), true );
	wp_enqueue_script( 'bayhelsinki-slideshow', get_template_directory_uri() . '/js/slideshow.js', array(), true );
	wp_enqueue_script( 'bayhelsinki-class-passes', get_template_directory_uri() . '/js/class-passes.js', array(), true );



	// wp_enqueue_script('jQuery-script', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);

	wp_enqueue_script( 'bayhelsinki-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bayhelsinki_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// ADDED - removes extra paragraph tags wrappng acf outputs
remove_filter ('acf_the_content', 'wpautop');


// // BUTTON STYLES TO VISUAL EDITOR
// // source: https://www.wpbeginner.com/wp-tutorials/how-to-add-custom-styles-to-wordpress-visual-editor/

// function wpb_mce_buttons_2($buttons) {
//     array_unshift($buttons, 'styleselect');
//     return $buttons;
// }
// add_filter('mce_buttons_2', 'wpb_mce_buttons_2');



// /*
// * Callback function to filter the MCE settings
// */
 
// function my_mce_before_init_insert_formats( $init_array ) {  
 
// 	// Define the style_formats array
	 
// 		$style_formats = array(  
// 	/*
// 	* Each array child is a format with it's own settings
// 	* Notice that each array has title, block, classes, and wrapper arguments
// 	* Title is the label which will be visible in Formats menu
// 	* Block defines whether it is a span, div, selector, or inline style
// 	* Classes allows you to define CSS classes
// 	* Wrapper whether or not to add a new block-level element around any selected elements
// 	*/
// 			array(  
// 				'title' => 'Content Block',  
// 				'block' => 'span',  
// 				'classes' => 'content-block',
// 				'wrapper' => true,
				 
// 			),  
// 			array(  
// 				'title' => 'Blue Button',  
// 				'block' => 'span',  
// 				'classes' => 'blue-button',
// 				'wrapper' => true,
// 			),
// 			array(  
// 				'title' => 'Red Button',  
// 				'block' => 'span',  
// 				'classes' => 'red-button',
// 				'wrapper' => true,
// 			),
// 		);  
// 		// Insert the array, JSON ENCODED, into 'style_formats'
// 		$init_array['style_formats'] = json_encode( $style_formats );  
		 
// 		return $init_array;  
	   
// 	} 
// 	// Attach callback to 'tiny_mce_before_init' 
// 	add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

// THIS DIDNT WORK FOR SOME REASON