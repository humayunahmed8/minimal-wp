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

// Register Theme Widget Sidebar 
function minimal_widget_areas() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Blog Sidebar', 'mydeals' ),
            'id'            => 'blog-sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'mydeals' ),
            'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action('widgets_init', 'minimal_widget_areas');

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

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



// Popular Post Widget 
class Popular_Posts extends WP_Widget {
	function __construct() {
		parent::__construct(
			'popular-post', 
			__('Popular Post'),
			array( 'description' => __( 'Show popular post here' ), ) 
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Popular_Posts' );
		});
  	}
  	
  	public $arg = array(
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget-latest-post single-widget">',
		'after_widget'  => '</div>'
    );

	public function widget( $arg, $instance ) {
        echo $arg['before_widget'];
		// Query post
		$args = array(  
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page'   => $instance['count'],
		);
		$query = new WP_Query( $args );
		if ( ! empty( $instance['title'] ) ) {
            echo $arg['before_title'];
            echo apply_filters( 'widget_title', $instance['title'] ); 
			echo $arg['after_title'];
        }
		
        echo '<div class="latest-post">';
			while($query->have_posts()) { $query->the_post(); ?>
				<div class="single-latest-post">
                    <?php if( has_post_thumbnail() ) : ?>
                    <div class="latest-post-img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <?php else : ?>
                    <div class="latest-post-img">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/blog-placeholder.png" alt="<?php the_title(); ?>" />
                    </div>
                    <?php endif; ?>
                    <h5>
                        <?php the_title('<a href="'.get_permalink().'">','</a>' ); ?>
                    </h5>	
                    <p><a href="<?php esc_url(get_permalink()); ?>" rel="bookmark"><?php echo esc_html(get_the_date()) ?></a></p>
				</div>
			<?php 
			}
        echo '</div>';
        echo $arg['after_widget'];
    }

	 public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'minimal' );
        $count = ! empty( $instance['count'] ) ? $instance['count'] : esc_html__( '', 'minimal' ); ?>
        
        <!-- Posts title label -->
        <p> 
          <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Widget Title:', 'minimal' ); ?></label>
          <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <!-- Posts count label -->
        <p>
          <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php echo esc_html__( 'Posts Count:', 'minimal' ); ?></label>
          <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" type="text" value="<?php echo esc_attr( $count ); ?>">
        </p>
        <?php
    }
}
$popular_posts = new Popular_Posts();
