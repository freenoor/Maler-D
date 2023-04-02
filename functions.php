<?php
/**
 * Puzzle functions and definitions
 *
 *
 * @package Puzzle
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'puzzle_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function puzzle_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Puzzle, use a find and replace
		 * to change 'puzzle' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'puzzle', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'puzzle' ),
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
				'puzzle_custom_background_args',
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
add_action( 'after_setup_theme', 'puzzle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function puzzle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'puzzle_content_width', 640 );
}
add_action( 'after_setup_theme', 'puzzle_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

add_action('widgets_init', 'myWidget');
function myWidget(){
  
  register_sidebar(array(
    'name'=>'Logo',
    'id' => 'logo'
  ));
  register_sidebar(array(
    'name'=>'Footer 1',
    'id' => 'footer1'
  ));
  register_sidebar(array(
    'name'=>'Footer 2',
    'id' => 'footer2'
  ));
  register_sidebar(array(
    'name'=>'Footer 3',
    'id' => 'footer3'
  ));
  register_sidebar(array(
    'name'=>'Widget 1',
    'id' => 'widget-1'
  ));
  register_sidebar(array(
    'name'=>'Contact',
    'id' => 'mapright2'
  ));
}

/**
 * Enqueue scripts and styles.
 */
function puzzle_scripts() {
	wp_enqueue_style( 'puzzle-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('animate-css', get_template_directory_uri().'/assets/css/animate.css', array(), 'all');
	wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/main.css', array(), 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/bootstrap.min.css', array(), '4.5.0', 'all');
	wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/swiper/css/swiper.min.css', array(), 'all');
	wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick-csss', get_template_directory_uri().'/assets/slick/slick-theme.css', array(), '1.8.1', 'all');

	wp_enqueue_style('tooltip-css', get_template_directory_uri().'/assets/css/tooltip.css', array(), '1.8.1', 'all');
	wp_style_add_data( 'puzzle-style', 'rtl', 'replace' );

	wp_enqueue_script( 'puzzle-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/swiper/js/swiper.min.js', array(), true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/bootstrap.min.js', array(), '4.5.0', 'all');
	wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/slick/slick.js', array(), '1.8.1', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'puzzle_scripts' );

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

function custom_post_type(){
    
	$labels_frontpage = array(
	  'name' => 'Slider',
	  );
	  register_post_type('sliserhome', array(
	  'labels' => $labels_frontpage,
	  'public' => true,
	  'has_archive' => true,
	  'publicly_queryable' => true,
	  'query_var' => true,
	  'rewrite' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'supports' => array(
	  'title',
	  'editor',
	  'excerpt',
	  'thumbnail',
	  'revisions',),
	  'menu_position' => 8,
	  'exclude_from_search' => false,
	  'menu_icon' => 'dashicons-format-gallery',
	  ));
	  $labels_frontpage = array(
		'name' => 'Testimonials',
		);
		register_post_type('testim', array(
		'labels' => $labels_frontpage,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'revisions',),
		'menu_position' => 8,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-format-gallery',
		));
	  $labels_frontpage = array(
		'name' => 'Completed Projects',
		);
		register_post_type('projects', array(
		'labels' => $labels_frontpage,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'revisions',
		'page-attributes'
	),
		'menu_position' => 8,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-format-gallery',
		));
		$labels_frontpage = array(
			'name' => 'Services',
			);
			register_post_type('services', array(
			'labels' => $labels_frontpage,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',),
			'menu_position' => 8,
			'exclude_from_search' => false,
			'menu_icon' => 'dashicons-format-gallery',
			));
			$labels_frontpage = array(
				'name' => 'Count Down',
				);
				register_post_type('countdown', array(
				'labels' => $labels_frontpage,
				'public' => true,
				'has_archive' => true,
				'publicly_queryable' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',),
				'menu_position' => 8,
				'exclude_from_search' => false,
				'menu_icon' => 'dashicons-format-gallery',
				));
				$labels_frontpage = array(
					'name' => 'Meet Our Team',
					);
					register_post_type('ourteam', array(
					'labels' => $labels_frontpage,
					'public' => true,
					'has_archive' => true,
					'publicly_queryable' => true,
					'query_var' => true,
					'rewrite' => true,
					'capability_type' => 'post',
					'hierarchical' => false,
					'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'revisions',),
					'menu_position' => 8,
					'exclude_from_search' => false,
					'menu_icon' => 'dashicons-format-gallery',
					));
			$labels_frontpage = array(
				'name' => 'Blog & News',
				);
				register_post_type('blogpost', array(
				'labels' => $labels_frontpage,
				'public' => true, //removed from dashboard
				'has_archive' => true,
				'publicly_queryable' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',),
				'menu_position' => 8,
				'exclude_from_search' => false,
				'menu_icon' => 'dashicons-format-gallery',
				));

	}
add_action('init', 'custom_post_type');


add_action( 'init', 'create_tag_taxonomies', 0 );


//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','blogpost',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}


// /*Dienstleistungen custom post type*/
// function ld_diens_post_type(){
//     $labels = array(
//         'name' => 'Service Posts',
//         'singular_name' => 'Service Post',
//         'add_new' => 'Add item',
//         'all_items' => 'All items',
//         'add_new_item' => 'Add Item',
//         'edit_item' => 'Edit Item',
//         'new_item' => 'New Items',
//         'view_item' => 'View Item',
//         'search_item' => 'Search Services',
//         'not_found' => 'No items found',
//         'not_found_in_trash' => 'No items found in trash',
//         'parent_item_colon' => 'Parent Item'
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queruable' => true,
//         'query_var' => true,
//         'rewrite' => true,
//         'capability_type'=> 'post',
//         'menu_icon' => 'dashicons-menu-alt3',
//         'supports' => array(
//         'title',
//         'editor',
//         'thumbnail',
//         ),
//         'taxonomies' => array( 'category' ),
//         'menu_position' => 5, 
//     );
//     register_post_type('services',$args);
//     }
//     add_action('init','ld_diens_post_type');



	$labels = array(
        'name' => _x( 'Projects Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Unsere Projects', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Unsere Projects' ),
        'all_items' => __( 'All Unsere Projects' ),
        'parent_item' => __( 'Parent Unsere Projects' ),
        'parent_item_colon' => __( 'Parent Unsere Projects:' ),
        'edit_item' => __( 'Edit Unsere Projects' ), 
        'update_item' => __( 'Update Unsere Projects' ),
        'add_new_item' => __( 'Add New Unsere Projects' ),
        'new_item_name' => __( 'New Unsere Projects Name' ),
        'menu_name' => __( 'Projects Categories' ),
    );    
    // Now register the taxonomy
    register_taxonomy('categorytwo',array('projects'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorytwo' ),
    ));

	