<?php
/**
 * PrimeTour functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PrimeTour
 */

define( 'THEME_DIR_URL', get_template_directory_uri() );

if ( ! function_exists( 'primetour_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function primetour_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on PrimeTour, use a find and replace
		 * to change 'primetour' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'primetour', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'primetour' ),
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
		add_theme_support( 'custom-background', apply_filters( 'primetour_custom_background_args', array(
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
add_action( 'after_setup_theme', 'primetour_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function primetour_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'primetour_content_width', 640 );
}
add_action( 'after_setup_theme', 'primetour_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function primetour_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'primetour' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'primetour' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'primetour_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function primetour_scripts() {
	wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
	wp_enqueue_style( 'owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'themify-icons', THEME_DIR_URL . '/css/themify-icons.css' );
	wp_enqueue_style( 'flaticon', THEME_DIR_URL . '/css/flaticon.css' );
	wp_enqueue_style( 'magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' );
	wp_enqueue_style( 'gijgo', '//cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css' );
	wp_enqueue_style( 'nice-select', '//cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css' );
	wp_enqueue_style( 'slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_enqueue_style( 'primetour-style', get_stylesheet_uri() );

	wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'fontawesome', '//kit.fontawesome.com/9699c7bc7c.js', array(), '20151215', true );
	wp_enqueue_script( 'magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'nice-select', '//cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js', array(), '20151215', true );
	wp_enqueue_script( 'gijgo', '//cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ajaxchimp', '//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-form', '//cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-validate', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js', array(), '20151215', true );
	wp_enqueue_script( 'primetour-navigation', THEME_DIR_URL . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'primetour-skip-link-focus-fix', THEME_DIR_URL . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'mail-script', THEME_DIR_URL . '/js/mail-script.js', array(), '20151215', true );
	wp_enqueue_script( 'contact', THEME_DIR_URL . '/js/contact.js', array(), '20151215', true );
	wp_enqueue_script( 'custom', THEME_DIR_URL . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'jquery', 'wordpress',
        array(
            'ajax_url' => admin_url('admin-ajax.php')
        )
	);
}
add_action( 'wp_enqueue_scripts', 'primetour_scripts' );

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
 * Post types.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Metaboxes.
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * Redux config.
 */
require get_template_directory() . '/inc/redux-framework/redux-config.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

