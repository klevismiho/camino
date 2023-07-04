<?php
/**
 * Camino functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Camino
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function camino_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Camino, use a find and replace
		* to change 'camino' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'camino', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_post_type_support( 'page', 'excerpt' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'camino' ),
			'footer_menu' => esc_html__( 'Footer', 'camino' )
		)
	);

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
			'camino_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'camino_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function camino_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'camino_content_width', 640 );
}
add_action( 'after_setup_theme', 'camino_content_width', 0 );


function camino_scripts() {

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap' );
	wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.3/swiper-bundle.css' );
	wp_enqueue_style( 'mmenu', get_template_directory_uri() . '/node_modules/mmenu-js/dist/mmenu.css' );
	wp_enqueue_style( 'camino-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'camono-style-app', get_stylesheet_directory_uri() . '/css/app.css?v='. time() );
	wp_style_add_data( 'camino-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'camino-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/node_modules/mmenu-js/dist/mmenu.js', array(), true, true);
	wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.3/swiper-bundle.min.js', '', '', true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', '', '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'camino_scripts' );


// Register custom post types
function camino_create_posttypes() {
  
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
			'menu_icon' => 'dashicons-insert',
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        )
    );
 
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
			'menu_icon' => 'dashicons-insert',
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        )
    );
	 
    register_post_type( 'research',
        array(
            'labels' => array(
                'name' => __( 'Research' ),
                'singular_name' => __( 'Research' )
            ),
			'menu_icon' => 'dashicons-insert',
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        )
    );

	register_post_type( 'publication',
		array(
			'labels' => array(
				'name' => __( 'Publications' ),
				'singular_name' => __( 'Publication' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'contributor',
		array(
			'labels' => array(
				'name' => __( 'Contributors' ),
				'singular_name' => __( 'Contributor' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'what-we-do',
		array(
			'labels' => array(
				'name' => __( 'What we do' ),
				'singular_name' => __( 'What we do' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
		)
	);

	register_post_type( 'survey',
		array(
			'labels' => array(
				'name' => __( 'Surveys' ),
				'singular_name' => __( 'Survey' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'timeline',
		array(
			'labels' => array(
				'name' => __( 'Timeline' ),
				'singular_name' => __( 'Timeline' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'services-sectors',
		array(
			'labels' => array(
				'name' => __( 'Services & Sectors' ),
				'singular_name' => __( 'Services & Sectors' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title' ),
		)
	);

	register_post_type( 'value',
		array(
			'labels' => array(
				'name' => __( 'Values' ),
				'singular_name' => __( 'Value' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'bibliography',
		array(
			'labels' => array(
				'name' => __( 'Bibliography' ),
				'singular_name' => __( 'Bibliography' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title' ),
		)
	);

	register_post_type( 'media-discussion',
		array(
			'labels' => array(
				'name' => __( 'Media & Discussion' ),
				'singular_name' => __( 'Media & Discussion' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
		)
	);

	register_post_type( 'news',
		array(
			'labels' => array(
				'name' => __( 'News' ),
				'singular_name' => __( 'News' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
		)
	);

	register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'campaign',
		array(
			'labels' => array(
				'name' => __( 'Campaigns' ),
				'singular_name' => __( 'Campaign' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'impact',
		array(
			'labels' => array(
				'name' => __( 'Impact' ),
				'singular_name' => __( 'Impact' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);

	register_post_type( 'brand-asset',
		array(
			'labels' => array(
				'name' => __( 'Brand Assets' ),
				'singular_name' => __( 'Brand Asset' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'thumbnail' ),
		)
	);

	register_post_type( 'media-team',
		array(
			'labels' => array(
				'name' => __( 'Media Team' ),
				'singular_name' => __( 'Media Team' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'thumbnail', 'editor' ),
		)
	);

	register_post_type( 'statistics',
		array(
			'labels' => array(
				'name' => __( 'Statistics' ),
				'singular_name' => __( 'Statistics' )
			),
			'menu_icon' => 'dashicons-insert',
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
			'supports' => array( 'title', 'thumbnail' ),
		)
	);

}
// Hooking up our function to theme setup
add_action( 'init', 'camino_create_posttypes' );


// Register custom taxonomies
// Register Custom Taxonomy
function camino_custom_taxonomies() {

	$args = array(
		'labels'                     => array(
			'name'                       => _x( 'Contributor Types', 'Contributor Type', 'camino' ),
			'singular_name'              => _x( 'Contributor Type', 'Contributor Type', 'camino' ),
			'menu_name'                  => __( 'Contributor Type', 'camino' )
		),
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_in_rest' => true
	);
	register_taxonomy( 'contributor-type', array( 'contributor' ), $args );

	$args2 = array(
		'labels'                     => array(
			'name'                       => _x( 'Type', 'Type', 'camino' ),
			'singular_name'              => _x( 'Type', 'Type', 'camino' ),
			'menu_name'                  => __( 'Type', 'camino' )
		),
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_in_rest' => true
	);
	register_taxonomy( 'services-sectors-type', array( 'services-sectors'), $args2 );

}
add_action( 'init', 'camino_custom_taxonomies', 0 );


// Add custom styles for WP Give plugin 
function wp_give_iframe_styles() {
    wp_enqueue_style( 'givewp-iframes-styles', get_template_directory_uri() . '/css/wpgive.css');
}
add_action('wp_print_styles', 'wp_give_iframe_styles', 10);


// 
if( function_exists('acf_add_options_page') ) { 
    acf_add_options_page(array(
        'page_title'    => 'Camino General',
        'menu_title'    => 'Camino General',
        'menu_slug'     => 'camino-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}


function camino_excerpt_length( $length ) {
    return 150;
}
add_filter( 'excerpt_length', 'camino_excerpt_length', 999 );


function custom_excerpt($length) {
	$excerpt = get_the_excerpt(); 
	if (strlen($excerpt) > $length) {
		$excerpt = substr($excerpt, 0, $length) . '...';
	}
	return $excerpt;
}


add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="dark secondary button with-icon"';
}
function posts_link_attributes_2() {
    return 'class="dark secondary button with-icon icon-left"';
}


function camino_remove_plugin_stylesheet() {
	if ( is_front_page() ) {
		wp_dequeue_style( 'import-eventbrite-events-front' );
		wp_deregister_style( 'import-eventbrite-events-front' );
		wp_dequeue_style( 'import-eventbrite-events-front-style2' );
		wp_deregister_style( 'import-eventbrite-events-front-style2' );
		// wp_dequeue_style( 'wpml-tm-admin-bar' );
		// wp_deregister_style( 'wpml-tm-admin-bar' );
		wp_dequeue_style( 'font-awesome' );
		wp_deregister_style( 'font-awesome' );

		// wp_dequeue_script( 'jquery-core' );
		// wp_deregister_script( 'jquery-core' );
		wp_dequeue_script( 'give-stripe-js' );
		wp_deregister_script( 'give-stripe-js' );
	}
}
add_action( 'wp_enqueue_scripts', 'camino_remove_plugin_stylesheet', 100 );