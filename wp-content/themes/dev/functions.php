<?php

function travel_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'travel' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 63,
		'width'       => 193,
		'flex-height' => true,
	) );


	add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

	function my_post_image_html( $html, $post_id, $post_image_id ) {

		$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
		return $html;

	}
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'travel' ),
		'social'  => __( 'Social Links Menu', 'travel' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css', travel_agency_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
// travel_agency_setup
add_action( 'after_setup_theme', 'travel_setup' );



function travel_scripts()
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );


	wp_enqueue_style('travel', get_template_directory_uri() . '/css/index.css');

	if(is_page('tours')){

		wp_enqueue_style('travel_tours', get_template_directory_uri() . '/css/tours.css');

	}else if(is_page('best-tours')){

		wp_enqueue_style('travel_best_tours', get_template_directory_uri() . '/css/best-tours.css');

	}else if(is_page('services')){

		wp_enqueue_style('travel_services_tours', get_template_directory_uri() . '/css/service.css');
	}else if(is_page('about')){

		wp_enqueue_style('travel_services_tours', get_template_directory_uri() . '/css/about.css');
	}else if(is_page('contacts')){

		wp_enqueue_style('travel_services_tours', get_template_directory_uri() . '/css/contact.css');
	};
	wp_enqueue_style('awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.css');

	// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
}
add_action('wp_enqueue_scripts', 'travel_scripts');
