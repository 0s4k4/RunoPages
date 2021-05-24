<?php
/**
 * w3layouts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package w3layouts
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'w3layouts_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function w3layouts_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on w3layouts, use a find and replace
		 * to change 'w3layouts' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'w3layouts', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'w3layouts' ),
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
				'w3layouts_custom_background_args',
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
add_action( 'after_setup_theme', 'w3layouts_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function w3layouts_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'w3layouts_content_width', 640 );
}
add_action( 'after_setup_theme', 'w3layouts_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function w3layouts_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'w3layouts' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'w3layouts' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
'name' => 'Footer Menu List 1',
'id' => 'footer-menu-list-1',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="%2$s">',
'after_widget' => '</div>',
'before_title' => '<h6 class="footer-title-29">',
'after_title' => '</h6>',
) );
register_sidebar( array(
'name' => 'Footer Menu List 2',
'id' => 'footer-menu-list-2',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="%2$s">',
'after_widget' => '</div>',
'before_title' => '<h6 class="footer-title-29">',
'after_title' => '</h6>',
) );
register_sidebar( array(
'name' => 'Footer Menu List 3',
'id' => 'footer-menu-list-3',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="footer-right-links %2$s">',
'after_widget' => '</div>',
) );
}

add_action( 'widgets_init', 'w3layouts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function w3layouts_scripts() {
	wp_enqueue_style( 'w3layouts-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'w3layouts-style', 'rtl', 'replace' );

	wp_enqueue_script( 'w3layouts-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'w3layouts_scripts' );

/**
 * W3layouts Custom Functions.
 */
function w3layouts_pagination() {
	global $wp_query;

	$big = 999999999;
	$pagenum_link = str_replace( $big, '%#%', get_pagenum_link( $big ));
	$pagenum_link = str_replace( '#038;','&',  $pagenum_link);

	$args = array(
		'base'               => $pagenum_link,
		'format'             => '?page=%#%',
		'total'              => $wp_query->max_num_pages,
		'current'            => max(1,get_query_var('paged')),
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 2,
		'prev_next'          => true,
		'prev_text'          => esc_html__('Prev', 'merinda'),
		'next_text'          => esc_html__('Next', 'merinda'),
		'type'               => 'list',
		);
		echo paginate_links( $args );
}
/**
 * Add Socail URL's to User Contact Information
 */
function w3layouts_user_Socaial( $w3layouts_user_contact ) {
	$w3layouts_user_contact['twitterurl'] = __( 'Twitter URL' );
	$w3layouts_user_contact['facebookurl'] = __( 'Facebook URL' );
	$w3layouts_user_contact['instagramurl'] = __( 'Instagram URL' );
	$w3layouts_user_contact['vkurl'] = __( 'VK URL' );
	$w3layouts_user_contact['pinteresturl'] = __( 'Pinterest URL' );
	$w3layouts_user_contact['tumblrurl'] = __( 'tumblr URL' );
	return $w3layouts_user_contact;
}
add_filter( 'user_contactmethods', 'w3layouts_user_Socaial' );
/**
 * Image Thumbnails for this theme
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-thumb size', 360, 240 );
add_image_size( 'post-thumbnail size', 720, 480 );

/**
 * breadcrumbs for this theme
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
		elseif (is_author()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_archive_title();
    }
		elseif (is_archive()) {
				echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
				echo "Archives";
				echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
				echo the_archive_title();
		}
		elseif (is_404()) {
				echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
				echo "404 Page not found";
		}
}


require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerclasses.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerHeader.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerFooter.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerBlogpage.php';

require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerHomepagephp.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerAboutpage.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerServicespage.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerLandingpage.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/customizerContact.php';




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
* bootstrap.
*/
require get_template_directory() . '/bootstrap-navwalker.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
