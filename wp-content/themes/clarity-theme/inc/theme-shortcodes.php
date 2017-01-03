<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 *
 * Clarity Shortcodes
 *
 * All shortcodes registered by the Clarity WordPress theme.
 *
 * @package WordPress
 *
 * @subpackage  Clarity
 *
 * @author  Mike Smith
 *
 * @since  1.0.0
 *
 * TABLE OF CONTENTS
 *
 * - Clear
 * - Wrap
 * - Box
 * - Replace wpautop formatting
 * - Enable shortcodes in widget area
 *
**/


// Clear
function clearall($atts, $content = null) {
	extract(shortcode_atts(array(
		"class" => ''
	), $atts));
	return '<div class="'.$class.'"></div>';
}

add_shortcode("clear", "clearall");


// Wrap (for use with the "Empty" page template)
function wrappers($atts, $content = null) {
	extract(shortcode_atts(array(
		"class" => '',
		"id" => '',
		"image" => '',
		'parallax' => 'on',
	), $atts));
	if ( $parallax == 'on' ) {
		$plax = "background-attachment: fixed;";
	};
	return '<div class="'.$class.'" id="'.$id.'" style="'.$plax.' background-image: url('.$image.'); background-size: cover; background-position: center center;"><div class="container">'.do_shortcode($content).'</div></div>';
}

add_shortcode("wrap", "wrappers");


// Box
function boxes($atts, $content = null) {
	extract(shortcode_atts(array(
		"class" => ''
	), $atts));
	return '<div class="'.$class.'">'.do_shortcode($content).'</div>';
}

add_shortcode("box", "boxes");


// Filter out wpautop and fix shortcode output
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop', 99 );
add_filter( 'the_content', 'shortcode_unautop', 100 );


// Enable shortcodes in widget areas
add_filter( 'widget_text', 'do_shortcode' );


?>
