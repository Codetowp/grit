<?php
/**
 * grit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grit
 */

if ( ! function_exists( 'grit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function grit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on grit, use a find and replace
		 * to change 'grit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'grit', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
       // add_theme_support( 'post-thumbnails' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'grit' ),
		) );
        
		register_nav_menus( array(
			'footer-menu' => esc_html__( 'Footer', 'grit' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'grit_custom_background_args', array(
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
add_action( 'after_setup_theme', 'grit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'grit_content_width', 640 );
}
add_action( 'after_setup_theme', 'grit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'grit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'grit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-social', 'grit' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'grit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    require get_template_directory() . '/inc/widgets/social.php';  
}
add_action( 'widgets_init', 'grit_widgets_init' );

//recent post widget
require get_template_directory() . '/inc/widgets/recentpost.php';
require get_template_directory() . '/inc/lib/print_styles.php';

// Custom Theme Functions
	require get_template_directory() . '/inc/lib/related-post.php';

// Custom Theme Image Sizes	
add_image_size( 'process-medium', 360, 463,  array( 'top', 'center' ) );
add_image_size( 'grit_latest_news', 262, 163,  array( 'top', 'center' ) );
add_image_size( 'grit_category', 265, 163,  array( 'top', 'center' ) );
// Breadcrumb Function
function the_breadcrumb() {
	if (!is_home()) {
		echo '<li class="breadcrumb-item">';
		echo '<a href="';
		echo home_url('home');
		echo '">';
		echo __('Home', 'dblogger');
		echo "</a>";
		echo '</li>';
		echo '<li class="breadcrumb-item">';
		if (is_category() || is_single()) {
			the_category('title_li=');			
		} elseif (is_page()) {
			echo the_title();
		}
		echo '</li>';
	}
}



/**
 * Enqueue scripts and styles.
 */

function grit_styles() {    
    wp_enqueue_style( 'grit-bootstrap',get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style( 'grit-font-awesome',get_template_directory_uri().'/css/font-awesome.css');
    wp_enqueue_style( 'grit-owl-carousel',get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style( 'grit-owl-theme',get_template_directory_uri().'/css/owl.theme.css');
    wp_enqueue_style( 'grit-animate',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style( 'grit-style',get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'grit-googleapis', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900');    
}
add_action( 'wp_enqueue_scripts', 'grit_styles' );

function add_ie_support() {
    $script = '<!--[if IE]>';
    $script .= '<meta http-equiv="x-ua-compatible" content="IE=9" />';
    $script .= '<![endif]-->'; 
    echo $script;
}
add_action('wp_head', 'add_ie_support');

function add_ie8_support() {
    $script = '<!--[if lt IE 9]>';
    $script .= '<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
    $script .= '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
    $script .= '<![endif]-->'; 
    echo $script;
}
add_action('wp_head', 'add_ie8_support');

function grit_scripts() {
	wp_enqueue_script( 'grit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'grit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );    
    wp_enqueue_script( 'grit-jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'grit-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );    
	wp_enqueue_script( 'grit-SmoothScroll-js', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20151215', true );
 	wp_enqueue_script( 'grit-jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '20151215', true );   
 	wp_enqueue_script( 'grit-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );    
 	wp_enqueue_script( 'grit-jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20151215', true );
 	wp_enqueue_script( 'grit-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
 	wp_enqueue_script( 'grit-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grit_scripts' );

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

if ( file_exists ( get_template_directory() . '/inc/customizer-library.php' ) ) :

// Helper library for the theme customizer.
require get_template_directory() . '/inc/customizer-library.php';

// Output inline styles based on theme customizer selections.
require get_template_directory() . '/inc/styles.php';

endif;
