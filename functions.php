<?php

/**
 * byk_themetitle functions and definitions
 *
 * @package byk_themetitle
 */

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', time()); // DEV CACHE BUSTER
  // define('_S_VERSION', '1.0'); // RELEASE
}

if (!function_exists('byk_namespace_setup')) :
  /**
   * Sets up theme defaults and registers theme support.
   *
   * Note: Uses after_setup_theme hook, which runs before the init hook. 
   */
  function byk_namespace_setup()
  {
    /*
		 * Make theme available for translation.
     * DEFAULT: OFF
		 */
    // load_theme_textdomain('byk_namespace', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');

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


    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
      array(
        'menu-1' => esc_html__('Primary', 'byk_namespace'),
      )
    );
  }
endif;
add_action('after_setup_theme', 'byk_namespace_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function byk_namespace_content_width()
{
  $GLOBALS['content_width'] = apply_filters('byk_namespace_content_width', 640);
}
add_action('after_setup_theme', 'byk_namespace_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function byk_namespace_widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'byk_namespace'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'byk_namespace'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'byk_namespace_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function byk_namespace_scripts()
{
  wp_enqueue_style(
    'byk_namespace-style',
    get_stylesheet_uri(),
    array(),
    _S_VERSION
  );

  wp_enqueue_style(
    'fonts',
    'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap',
    array(),
    _S_VERSION
  );


  wp_enqueue_script('byk_namespace-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
  wp_enqueue_script('splide', get_template_directory_uri() . '/js/splide.min.js', array('jquery'), _S_VERSION, false);
  wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js', array('jquery'), _S_VERSION, false);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'byk_namespace_scripts');


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
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}