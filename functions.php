<?php 
// Import Kirki Plugin
// function minimal_kirki_configuration() {
//     return array( 'url_path'     => get_stylesheet_directory_uri() . '/inc/kirki/' );
// }
// add_filter( 'kirki/config', 'minimal_kirki_configuration' );

// Import Kirki Plugin File
include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );

// Kirki Customizer
require_once(get_theme_file_path('/inc/minimal-customizer.php'));

// Minimal Theme Setup
function minimal_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

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

    register_nav_menus(array(
        'primary-menu' => __('Main Menu', 'minimal'),
    ));
}
add_action('after_setup_theme', 'minimal_setup');

// Applied class to the wordpress menu anchor's
add_filter( 'nav_menu_link_attributes', function($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 100, 1 );

// Excerpt Length
function minimal_custom_excerpt_length($length){
    return 20;
}
add_action('excerpt_length', 'minimal_custom_excerpt_length');

// Excerpt More 
function minimal_excerpt_more($more){
    return '...';
}
add_action('excerpt_more', 'minimal_excerpt_more');


// Minimal Theme Script 
function minimal_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',array(),'4.1.1','all');
    wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css',array(),'1.0','all');
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css',array(),'1.0.3','all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css',array(),'2.3.3','all');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css',array(),'2.3.3','all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css',array(),'1.0','all');
    wp_enqueue_style('nivo-lightbox', get_template_directory_uri() . '/assets/css/nivo-lightbox.css',array(),'1.3.1','all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css',array(),'1.0','all');
    wp_enqueue_style('minimal-stylesheet', get_template_directory_uri() . '/assets/css/main.css',array(),'1.0','all');
    wp_enqueue_style('minimal-responsive', get_template_directory_uri() . '/assets/css/responsive.css',array(),'1.0','all');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js',array(),null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(),'4.1.1', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(),'2.3.3', true);
    wp_enqueue_script('mixit-up', get_template_directory_uri() . '/assets/js/jquery.mixitup.js',array(),'2.1.11', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js',array(),'2.1.11', true);
    wp_enqueue_script('onepage-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js',array(),'3.0', true);
    wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js',array(),'3.0', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js',array(),'1.3', true);
    wp_enqueue_script('counter-up', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js',array(),'1.0', true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js',array(),'1.3.1', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array(),'1.1.0', true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/assets/js/waypoints.min.js',array(),'2.0.3', true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js',array(),'1.0.4', true);
    wp_enqueue_script('minimal-main', get_template_directory_uri() . '/assets/js/main.js',array('jquery'),'1.0', true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'minimal_scripts');

