<?php
/**
 * Car Service Center functions and definitions
 *
 * @package Car Service Center
 */

if ( ! function_exists( 'car_service_center_setup' ) ) :
	function car_service_center_setup() {
		
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
		 * Post thumbnail support should be enabled for pages and posts.
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'car-service-center' ),
			'menu-2' => esc_html__( 'Footer', 'car-service-center' ),
		) );

		/*
		 * To produce valid HTML5, change the default core markup for the comments, search form, and search form.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'width'       => 270,
			'height'      => 80,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add custom image size.
		add_image_size( 'car-service-center-1920-550', 1920, 550, true );
		add_image_size( 'car-service-center-1370-550', 1370, 550, true );
		add_image_size( 'car-service-center-590-310', 590, 310, true );
		add_image_size( 'car-service-center-420-380', 420, 380, true );
		add_image_size( 'car-service-center-420-300', 420, 300, true );
		add_image_size( 'car-service-center-420-200', 420, 200, true );
		add_image_size( 'car-service-center-290-150', 290, 150, true );
		add_image_size( 'car-service-center-80-60', 80, 60, true );
		
		add_editor_style( array( '/assets/css/editor-style.min.css') );

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'car_service_center_setup' );

/**
 * Enqueue scripts and styles.
 */
function car_service_center_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	if ( is_rtl() ){
		wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/bootstrap/css/rtl/bootstrap.min.css' );
	}

	wp_enqueue_style( 'car-service-center-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css' );
	
	wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'car-service-center-blocks', get_template_directory_uri() . '/assets/css/blocks.min.css' );
	wp_enqueue_style( 'car-service-center-google-font', 'https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap', false );
	wp_enqueue_style( 'car-service-center-inter-google-font', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', false );

	$scripts = array(
		array(
			'id'     => 'bootstrap',
			'url'    => get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js',
			'footer' => true
		),
		array(
			'id'     => 'owl.carousel.js',
			'url'    => get_template_directory_uri() . '/assets/js/owl.carousel.js',
			'footer' => true
		),
		array(
			'id'     => 'car-service-center-custom',
			'url'    => get_template_directory_uri() . '/assets/js/custom.js',
			'footer' => true
		)
	);

	car_service_center_add_scripts( $scripts );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'car_service_center_scripts' );

/**
* Add script
* 
* @since Car Service Center 1.0.0
*/
function car_service_center_add_scripts( $scripts ){
	foreach ( $scripts as $key => $value ) {
		wp_enqueue_script( $value['id'] , $value['url'] , array( 'jquery', 'jquery-masonry' ), 0.8, $value['footer'] );
	}
}

/**
 * Sanitizes Image Upload.
 *
 * @param string $input potentially dangerous data.
 */
function car_service_center_sanitize_image( $input ) {
	$filetype = wp_check_filetype( $input );
	if ( $filetype['ext'] && wp_ext2type( $filetype['ext'] ) === 'image' ) {
		return esc_url( $input );
	}
	return '';
}

/**
* Car Service Center: Excerpt
*
* @since Car Service Center 1.0.0
*/
if( ! class_exists( 'Pixel_Transport_Excerpt' ) ):

class Pixel_Transport_Excerpt{

    /**
    * Default length (by WordPress)
    *
    * @since Car Service Center 1.0.0
    * @access public
    * @var int
    */
    public $length = 15;

    /**
    * Read more Text for excerpt
    * @since Car Service Center 1.0.0
    * @access public
    * @var string
    */
    public $more_text = '';

    /**
    * So you can call: Pixel_Transport_Excerpt( 'short' );
    *
    * @since Car Service Center 1.0.0
    * @access protected
    * @var    array
    */
    protected $types = array(
        'short'   => 15,
        'regular' => 25,
        'long'    => 55
    );

    /**
    * Stores class instance
    * 
    * @since Car Service Center 1.0.0
    * @access protected
    * @var    object
    */
    protected static $instance = NULL;

    /**
    * Retrives the instance of this class
    * 
    * @since Car Service Center 1.0.0
    * @access public
    * @return object
    */
    public static function get_instance() {

        if ( ! self::$instance ) {
          self::$instance = new self();
        }

        return self::$instance;
    }

    /**
    * Sets the length for the excerpt,then it adds the WP filter
    * And automatically calls the_excerpt();
    *
    * @since Car Service Center 1.0.0
    * @param string $new_length 
    * @access public
    * @return void
    */
    public function excerpt( $echo, $more_text, $new_length = 15 ) {

        $this->length    = $new_length;
        $this->more_text = $more_text;
        if(!is_admin()):
            add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ), 999 );
            add_filter( 'excerpt_length', array( $this, 'new_length' ), 999 );
        endif;

        if( $echo )
          the_excerpt();
        else
          return get_the_excerpt();

    }

    public function new_excerpt_more(){
        return $this->more_text;
    }

    /** 
    * Tells WP the new length
    *
    * @since Car Service Center 1.0.0
    * @access public
    * @return int
    */
    public function new_length() {

        if( isset( $this->types[ $this->length ] ) )
          return $this->types[ $this->length ];
        else
          return $this->length;
    }
}

endif;

/**
* Call to car_service_center_excerpt
*
* @since  1.0.0
* @uses   Pixel_Transport_Excerpt:::get_instance()->excerpt()
* @param  int $length
* @return void
*/
if( ! function_exists( 'car_service_center_excerpt' ) ):

    function car_service_center_excerpt( $length = 15, $echo = true, $more = '' ) {
        $length  = apply_filters( 'post_excerpt_length', $length );
        $excerpt = Pixel_Transport_Excerpt::get_instance()->excerpt( false, $more, $length );
        
        the_excerpt();
    }
endif;

/**
* Enqueue editor styles for Gutenberg
* 
* @since Car Service Center 1.0.0
*/
function car_service_center_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'car-service-center-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.min.css' ) );
	// Google Font
	wp_enqueue_style( 'car-service-center-google-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,700i', false );
}
add_action( 'enqueue_block_editor_assets', 'car_service_center_block_editor_styles' );

// Sanitization function to ensure it's an integer within the range
function car_service_center_sanitize_number( $input ) {
    $input = absint( $input ); // Convert to a non-negative integer
    return ( $input >= 1 && $input <= 6 ) ? $input : 1; // Return input if within range, or default to 1
}

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
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Dynamic CSS.
 */
require get_template_directory() . '/inc/customizer/loader.php';