<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) exit;

// Theme Customizer
load_template( trailingslashit( get_template_directory() ) . 'inc/theme-customizer.php' );

// Support Post Formats
add_theme_support('post-formats', array( 'aside', 'gallery','link','image','quote','status','video','audio','chat' ) );

// Adding in the infinity symbol to the end of the aside posts
add_filter( 'the_content', 'my_aside_to_infinity_and_beyond', 9 );
function my_aside_to_infinity_and_beyond( $content ) {
	if ( has_post_format( 'aside' ) && !is_singular() )
		$content .= ' <a href="' . get_permalink() . '">&#8734;</a>';
	return $content;
}

// Adding in the post format 'quote' functionality to ensure blockquotes are styled properly
add_filter( 'the_content', 'my_quote_content' );
function my_quote_content( $content ) {
	// Check if we're displaying a 'quote' post
	if ( has_post_format( 'quote' ) ) {
		// Match any <blockquote> elements
		preg_match( '/<blockquote.*?>/', $content, $matches );
		// If no <blockquote> elements were found, wrap the entire content in one
		if ( empty( $matches ) )
			$content = "<blockquote>{$content}</blockquote>";
	}
	return $content;
}

// Extract first occurance of text from a string for the Link post format
if( !function_exists ('extract_from_string') ) :
function extract_from_string($start, $end, $tring) {
	$tring = stristr($tring, $start);
	$trimmed = stristr($tring, $end);
	return substr($tring, strlen($start), -strlen($trimmed));
}
endif;

// Set content width to help with youtube video iframes being responsive
if ( ! isset( $content_width ) ) $content_width = 900;

// This theme uses backwards compatible code for the navigation menu
if (function_exists('wp_nav_menu')) {
	add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
		register_nav_menus(
			array(
			'Navigation' => __( 'Navigation' ),
			)
		);
	}
}

// This theme allows users to set a custom background
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

// This theme uses post thumbnails
if ( function_exists( 'add_image_size' ) )
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'slider', 900, 450, true ); // Slider image

// This code adds the "Slider" image size to the drop down selector when adding images to posts and pages
add_filter( 'image_size_names_choose', 'clarity_image_sizes' );
function clarity_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'slider' => __('slider'),
    ) );
}

// Custom Excerpt Length
if ( ! function_exists( 'clarity_excerpt_length' ) ) :
	function clarity_excerpt_length( $length ) { return 60; }
	add_filter( 'excerpt_length', 'clarity_excerpt_length' );
endif;

// Custom "Read More" text for post excerpts
if ( ! function_exists( 'clarity_continue_reading_link' ) ) :
function clarity_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'clarity' ) . '</a>';
}
function clarity_auto_excerpt_more( $more ) {
	return ' &hellip;' . clarity_continue_reading_link();
}
add_filter( 'excerpt_more', 'clarity_auto_excerpt_more' );
endif;

// Widget Areas
if ( function_exists('register_sidebar') )
register_sidebar(array(
	'id' => 'sidebar',
	'name'=>'Sidebar',
	'before_widget' => '<div id="%1$s" class="widget">',
	'after_widget' => '</div><!-- end .widget -->',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'header',
	'name'=>'Header',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5>',
));
register_sidebar(array(
	'id' => 'footer',
	'name'=>'Footer',
	'before_widget' => '<div id="%1$s" class="col3">',
	'after_widget' => '</div><!-- END .col3 -->',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

// Slider image sizing
function custom_get_attachment_id( $guid ) {
  global $wpdb;
  /* nothing to find return false */
  if ( ! $guid )
    return false;
  /* get the ID */
  $id = $wpdb->get_var( $wpdb->prepare(
    "
    SELECT  p.ID
    FROM    $wpdb->posts p
    WHERE   p.guid = %s
            AND p.post_type = %s
    ",
    $guid,
    'attachment'
  ) );
  // the ID was not found, try getting it the expensive WordPress way
  if ( $id == 0 )
    $id = url_to_postid( $guid );
  return $id;
}

/**

 * Theme Hooks
 * Theme Shortcodes
 * Added 12-11-14

 */

load_template( trailingslashit( get_template_directory() ) . 'inc/theme-functions.php' );
load_template( trailingslashit( get_template_directory() ) . 'inc/theme-hooks.php' );
load_template( trailingslashit( get_template_directory() ) . 'inc/theme-shortcodes.php' );

// Adding jquery scripts
if( ! function_exists('clarity_scripts') ) {
function clarity_scripts() {
	wp_enqueue_script( 'jquery-main', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151218', true );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/superfish.js', array(), '20151218', true );
	wp_enqueue_script( 'jquery-clarity', get_template_directory_uri() . '/js/clarity-theme.js', array(), '20151218', true );
	wp_enqueue_script( 'jquery-stickynav', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js', array(), '20151218', true );
}
add_action( 'wp_enqueue_scripts', 'clarity_scripts' );
}

?>
