<?php
/**
 * scrolling_panels_sounddevco_2019 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scrolling_panels_sounddevco_2019
 */

if ( ! function_exists( 'scrolling_panels_sounddevco_2019_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scrolling_panels_sounddevco_2019_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on scrolling_panels_sounddevco_2019, use a find and replace
		 * to change 'scrolling_panels_sounddevco_2019' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scrolling_panels_sounddevco_2019', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'scrolling_panels_sounddevco_2019' ),
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
		add_theme_support( 'custom-background', apply_filters( 'scrolling_panels_sounddevco_2019_custom_background_args', array(
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
add_action( 'after_setup_theme', 'scrolling_panels_sounddevco_2019_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scrolling_panels_sounddevco_2019_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'scrolling_panels_sounddevco_2019_content_width', 640 );
}
add_action( 'after_setup_theme', 'scrolling_panels_sounddevco_2019_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scrolling_panels_sounddevco_2019_widgets_init() {
	$template_dir = get_template_directory_uri();
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 2', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-2',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 3', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-3',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 4', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-4',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 5', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-5',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 6', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-6',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 7', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-7',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Panel 8', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'panel-8',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="%1$s" class="panel-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => "<h1><div class='ring'><div class='line line-1'></div><img src='".$template_dir."/img/ring.png' /><div class='line line-2'></div></div>",
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Portfolio', 'scrolling_panels_sounddevco_2019' ),
		'id'            => 'portfolio',
		'description'   => esc_html__( 'Add widgets here.', 'scrolling_panels_sounddevco_2019' ),
		'before_widget' => '<div id="portfolio-slider" class="slider"><div id="portfolio-close" class="close">X</div><div class="slider-wrapper">',
		'after_widget'  => '<div class="left-arrow arrow" href=""></div><div class="right-arrow arrow" href=""></div></div>',
	) );
}
add_action( 'widgets_init', 'scrolling_panels_sounddevco_2019_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scrolling_panels_sounddevco_2019_scripts() {
	if(is_front_page()) {
		wp_enqueue_style( 'scrolling_panels_sounddevco_2019-style', get_stylesheet_directory_uri() . '/home-style.css' );	
		wp_enqueue_script( 'scrolling_panels_sounddevco_2019-home', get_template_directory_uri() . '/js/home.js', array('jquery'), '20151215', true );
	} else if(is_page('contact')||is_page('about')||is_page('careers')){
		wp_enqueue_style( 'scrolling_panels_sounddevco_2019-style2', get_stylesheet_uri() );	
	} else {
		wp_enqueue_script( 'scrolling_panels_sounddevco_2019-main', get_template_directory_uri() . '/js/main.js', array('jquery'), true );
		wp_enqueue_style( 'scrolling_panels_sounddevco_2019-style2', get_stylesheet_uri() );	
	}
	wp_enqueue_script( 'scrolling_panels_sounddevco_2019-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'scrolling_panels_sounddevco_2019-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'scrolling_panels_sounddevco_2019_scripts' );

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
function wpdocs_custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function fouc_protect_against () {
	?>
			<style type="text/css">
					.hidden {display:none;}
			</style>
			<script type="text/javascript">
					jQuery('html').addClass('hidden');						
					jQuery(document).ready(function($) {		            
							setTimeout(function(){$('html').removeClass('hidden')},100);	            
					});  
			</script>
	<?php

}
add_action('wp_head', 'fouc_protect_against');