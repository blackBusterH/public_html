<?php
/**
 * astromag functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astromag
 */

if ( ! function_exists( 'astromag_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function astromag_setup() {

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
		add_image_size( 'astromag-blog', 750, 450, true );
		add_image_size( 'astromag-logo', 300, 90, true );
		add_image_size( 'astromag-blog-page', 400, 400, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'astromag' ),
        'right_side_menu' => esc_html__( 'Right Side Menu', 'astromag' ),
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

	function astromag_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'astromag_add_editor_styles' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'astromag_custom_background_args', array(
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
			'height'      => 90,
			'width'       => 300,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'astromag_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function astromag_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'astromag_content_width', 640 );
}
add_action( 'after_setup_theme', 'astromag_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function astromag_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Post Sidebar', 'astromag' ),
        'id'            => 'post-sidebar',
        'description'   => esc_html__( 'Add widgets in single article post.', 'astromag' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'astromag' ),
        'id'            => 'page-sidebar',
        'description'   => esc_html__( 'Add widgets in page.', 'astromag' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'AstroMag Home', 'astromag' ),
        'id'            => 'astromag-home',
        'description'   => esc_html__( 'Add widgets in Astro Homepage.', 'astromag' ),
        'before_widget' => '<section id="%1$s" class="astro-home %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="astro-title home-category mb-20">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'astromag' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'astromag' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'astromag' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'astromag' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'astromag' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'astromag' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'astromag' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'astromag' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'astromag_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function astromag_scripts() {

	// frow css
	wp_enqueue_style( 'frow', get_template_directory_uri().'/assets/css/frow.css', array(), '4.0.0', 'all' );
	// default css
	wp_enqueue_style( 'astromag-defaultcss', get_template_directory_uri().'/assets/css/default.css', array(), '1.0', 'all' );
	// custom css
	wp_enqueue_style( 'astromag-customcss', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0', 'all' );
	// fontawesome css
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/all.css', array(), '6.0.0', 'all' );
	// woocommerce css
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'astromag-woocomerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css' );
	}

	wp_enqueue_style( 'astromag-style', get_stylesheet_uri() );

	
    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );
	// theme-script js
	wp_enqueue_script( 'astromag-themejs', get_template_directory_uri() . '/assets/js/theme-script.js', array('jquery'), '', true );
	// skip to content js
	wp_enqueue_script( 'astromag-skip-link-focus-fix-js', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '1.0', true );
	// responsive-nav js
	wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/assets/js/responsive-nav.js', array(), '1.0', true );
	// main js
	wp_enqueue_script( 'astromag-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
	// comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'astromag_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Kirki framework additions.
 */
require get_template_directory() . '/inc/kirki/kirki.php';

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

/**
 * Load woocommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function astromag_customize_css() {
	?>
	<style>
		.no-thumb:before{
			content: "<?php echo esc_attr( get_theme_mod('section_one_no_thumb_background_text', 'No Thumbnail') ) ?>";
		}

		.no-thumb{
			background-color: <?php echo esc_attr( get_theme_mod('section_one_no_thumb_background_color') ); ?>;
		}

		.home-category:before{
			background-color: <?php echo esc_attr( get_theme_mod('section_one_title_bar_color') ); ?>;
		}
		
		.post-image span{
			background-color: <?php echo esc_attr( get_theme_mod('section_one_post_category_background_color') ); ?>;
		}

		.single-post-home.astromag-all-post-list .no-thumb:before{
			content: "<?php echo esc_attr( get_theme_mod('section_three_no_thumb_background_text', 'No Thumbnail') ) ?>";
		}
		
		.single-post-home.astromag-all-post-list .no-thumb{
			background-color: <?php echo esc_attr( get_theme_mod('section_three_no_thumb_background_color') ); ?>;
		}
		.nav-collapse a {
			font-size: <?php echo esc_attr( get_theme_mod( 'header_font_size', '14px' ) ); ?>;
		}
		.menu-items > li:hover > a::before {
			background-color: <?php echo esc_attr( get_theme_mod( 'header_hover_border_color', '#df2021' ) ); ?>;
		}

		<?php 
		$social_handles_color_default = [
                [
                    'header_icons_color' => '#065dbf',
                ],
                [
                    'header_icons_color' => '#f242a5',
                ],
                [
                    'header_icons_color' => '#08a4e5',
                ],
                [
                    'header_icons_color' => '#0b66c2',
                ],
            ];
			$social_handle_icons = get_theme_mod( 'header_social_handle', $social_handles_color_default ); 
			$i = 1;
			foreach($social_handle_icons as $social_handle_icon):
				
		?>

		ul.header-social li:nth-child(<?php echo esc_attr($i++); ?>) {
			color: <?php echo esc_attr( $social_handle_icon['header_icons_color'] ); ?>;
		}
		<?php endforeach; ?>

	</style>
	<?php
}
add_action( 'wp_head', 'astromag_customize_css');

// check if infinite scroll enabled from theme option
if( get_theme_mod( 'section_three_enable_inf_scroll', 'enable' ) == 'enable' ):

	function astromag_enqueue_custom_infinite_scroll() {
		// infinite scroll
		wp_enqueue_script( 'infinite-scroll', get_template_directory_uri() . '/assets/js/infinite-scroll.pkgd.js', array('jquery'), '4.0.1', true );

		// conditions
		if( get_theme_mod( 'section_three_scroll_behavior', 'scroll' ) == 'button' ):
			$infiniteButton = '
				scrollThreshold: false,
				button: "#infinite-load-btn"
			';
		else:
			$infiniteButton = '
				scrollThreshold: 100
			';
			endif;

		// init infinite scroll options
		wp_add_inline_script( 'infinite-scroll', '
		
		jQuery(document).ready(function($){

			$("#post-container").infiniteScroll({
				
				path: ".astromag-page-nav .next",
				append: "#single-post",
				status: ".page-load-status",
				checkLastPage: true,
				'.$infiniteButton.'
				});
		});

		' );
	}
	add_action( 'wp_enqueue_scripts', 'astromag_enqueue_custom_infinite_scroll' );
 
endif; // infinite scroll check ends