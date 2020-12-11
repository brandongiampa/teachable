<?php
/**
 * Teachable functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */

/**
 * Teachable has only been tested in WordPress 5.3 or later.
 */

if ( ! function_exists( 'teachable_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function teachable_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'teachable' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'teachable', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
                'menu-left' => __( 'Left Menu', 'teachable' ),
				'footer' => __( 'Footer Menu', 'teachable' ),
				'social' => __( 'Social Links Menu', 'teachable' ),
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
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 40,
				'width'       => 40,
				'flex-width'  => true,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'teachable' ),
					'shortName' => __( 'S', 'teachable' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'teachable' ),
					'shortName' => __( 'M', 'teachable' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'teachable' ),
					'shortName' => __( 'L', 'teachable' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'teachable' ),
					'shortName' => __( 'XL', 'teachable' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Primary', 'teachable' ) : null,
					'slug'  => 'primary',
					'color' => get_theme_mod( 'primary_color', 'purple' ),
				),
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Secondary', 'teachable' ) : null,
					'slug'  => 'secondary',
					'color' => get_theme_mod( 'secondary_color', 'green' ),
				),
				array(
					'name'  => __( 'Dark Gray', 'teachable' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'teachable' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'teachable' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'teachable_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function teachable_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar Header', 'teachable' ),
			'id'            => 'sidebar-header',
			'description'   => __( 'Add widgets here to appear on the top of all pages except home (ideal for breadcrumb).', 'teachable' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Sidebar Right', 'teachable' ),
			'id'            => 'sidebar-right',
			'description'   => __( 'Add widgets here to appear on the right side of most pages.', 'teachable' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'teachable' ),
			'id'            => 'sidebar-footer',
			'description'   => __( 'Add widgets here to appear in your footer.', 'teachable' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'teachable_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function teachable_scripts() {
	// wp_enqueue_style( 'teachable-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ), 'all' );
	wp_enqueue_style( 'teachable-style', get_template_directory_uri() . '/assets/css/style.css', array(), "1.0.0", 'all' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@300;400;500;600;700&display=swap', array(), '1.0.0' );
	// wp_style_add_data( 'teachable-style', 'rtl', 'replace' );

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_script( 'teachable-script', get_template_directory_uri() . "/assets/js/app.js", array(), '1.0.0', true );
	
	//send info to javascript for sharing on social media
    $tchbl_localize = array(
        'template_url'  => get_template_directory_uri(),
        'site_name'    => get_bloginfo( 'name' )
    );
	wp_localize_script( 'teachable-script', 'tchbl', $tchbl_localize );
	
	//Yoast SEO blocks this script, making sure it gets through 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'teachable_scripts', 100 );

//enqueue block assets
function teachable_enqueue_block_editor_assets() {
	// wp_enqueue_style( 'gutenberg-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ), 'all' );
	wp_enqueue_style( 'gutenberg-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'teachable_enqueue_block_editor_assets', 100 );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function twentytwenty_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Primary Color', 'teachable' ),
			'slug'  => 'primary',
			'color' => '#D02F74'
		),
		array(
			'name'  => __( 'Accent Color', 'teachable' ),
			'slug'  => 'accent',
			'color' => '#D02FC5'
		),
		array(
			'name'  => __( 'Success Color', 'teachable' ),
			'slug'  => 'success',
			'color' => '#74D02F'
		),
		array(
			'name'  => __( 'Danger Color', 'teachable' ),
			'slug'  => 'danger',
			'color' => '#D03A2F'
		),
		array(
			'name'  => __( 'Dark Background', 'teachable' ),
			'slug'  => 'dark-background',
			'color' => '#172125 '
		),
		array(
			'name'  => __( 'Sixth Color', 'teachable' ),
			'slug'  => 'sixto',
			'color' => '#972125 '
		)
	);

	add_theme_support( 'editor-color-palette', $editor_color_palette );


	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'twentytwenty' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'twentytwenty' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'twentytwenty' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'twentytwenty' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

	add_theme_support( 'editor-styles' );

}

add_action( 'after_setup_theme', 'twentytwenty_block_editor_settings' );

/*
*
*	Special Purpose Functions 
*
*/

//function to determine current pages shown and total pages of query
function teachable_make_posts_shown_string() {
	global $wp_query;
	$posts_per_page = $wp_query->query_vars['posts_per_page'] ;
	$current_page = $wp_query->query_vars['paged'] !== 0 ? $wp_query->query_vars['paged'] : 1 ;
	$total = $wp_query->found_posts;

	if ( 0 === $total ) {
		return "No results were found.";
	}

	$number_of_pages = ceil( $total / $posts_per_page );

	if ( $total < $posts_per_page ) { //only has one page
		$upper_value = $total;
		$lower_value = 1;
	}
	else if ( $current_page == $number_of_pages ) { //is last page
		$upper_value = $total;
		$lower_value = ( $number_of_pages * $posts_per_page ) - $posts_per_page + 1;
	}
	else {
		$upper_value = $current_page * $posts_per_page;
		$lower_value = $upper_value - $posts_per_page + 1;
	}

	return "Showing entries ${lower_value} to ${upper_value} of ${total} results.";
}