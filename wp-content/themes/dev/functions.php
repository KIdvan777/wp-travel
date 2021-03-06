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

// add links to thumbnails
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

	add_image_size('little', 107,71,true);
	add_image_size('tours', 159,103,true);
	add_image_size('feature', 188,152,true);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary menu', 'travel' ),
		'footer'  => __( 'Footer menu', 'travel' ),
		'filter'  => __('Filter menu', 'travel'),
		'country'  => __('Filter menu', 'travel'),
		'price'  => __('Price menu', 'travel'),
		'hotel'  => __('Hotel menu', 'travel')
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

		function register_phone_widget(){
		register_sidebar( array(
			'name' => "Телефон",
			'id' => 'phone-sidebar',
			'description' => 'Эти виджеты будут показаны с правой колонке сайта',
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
	add_action( 'widgets_init', 'register_phone_widget' );

	function register_timework_widget(){
		register_sidebar( array(
			'name' => "Время работы",
			'id' => 'time-sidebar',
			'description' => 'Эти виджеты будут показаны с правой колонке сайта',
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
	add_action( 'widgets_init', 'register_timework_widget' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css', travel_agency_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	function true_custom_fields() {
		add_post_type_support( 'tour', 'custom-fields'); // в качестве первого параметра укажите название типа поста
	}

	add_action('init', 'true_custom_fields');


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
		wp_enqueue_style('travel_about_tours', get_template_directory_uri() . '/css/about.css');

	}else if(is_page('contacts')){
		wp_enqueue_style('travel_contacts_tours', get_template_directory_uri() . '/css/contact.css');

	}else if(is_archive()){
		wp_enqueue_style('travel_tag', get_template_directory_uri() . '../css/tag.css');


	}else if(is_single()){
		wp_enqueue_style('travel_news', get_template_directory_uri() . '/css/single.css');


	};

	wp_enqueue_style('awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.css');

	// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
}
add_action('wp_enqueue_scripts', 'travel_scripts');



require get_template_directory() . '/tax-functions.php';

require get_template_directory() . '/best-functions.php';

require get_template_directory() . '/serv-functions.php';




