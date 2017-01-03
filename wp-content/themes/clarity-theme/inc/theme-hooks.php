<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 *
 * Clarity Hooks.
 *
 * All hooks registered by the Clarity WordPress theme.
 *
 * @package WordPress
 *
 * @subpackage  Clarity
 *
 * @author  Mike Smith
 *
 * @since  1.0.0
 *
 * @updated 1.1.1
 *
 * TABLE OF CONTENTS
 *
 * - clarity_head()
 * - clarity_head_before()
 * - clarity_head_after()
 * - clarity_head_inside()
 * - clarity_headwidget_inside()
 * - clarity_logo_inside()
 * - clarity_navigation_before()
 * - clarity_navigation_after()
 * - clarity_navigation_inside()
 * - clarity_navigation_insidecol()
 * - clarity_content_before()
 * - clarity_content_after()
 * - clarity_main_before()
 * - clarity_main_after()
 * - clarity_main_inside()
 * - clarity_main_afterinside()
 * - clarity_post_before()
 * - clarity_post_after()
 * - clarity_footer()
 * - clarity_footer_before()
 * - clarity_footer_inside()
 * - clarity_footer_after()
 * - clarity_footer_widgets_before()
 * - clarity_footer_widgets_inside()
 * - clarity_footer_widgets_after()
 *
**/


// header.php

function clarity_head() { clarity_do_atomic( 'clarity_head' ); }
function clarity_head_before() { clarity_do_atomic( 'clarity_head_before' ); }
function clarity_head_inside() { clarity_do_atomic( 'clarity_head_inside' ); }
function clarity_head_after() { clarity_do_atomic( 'clarity_head_after' ); }
function clarity_headwidget_inside() { clarity_do_atomic( 'clarity_headwidget_inside' ); }
function clarity_logo_inside() { clarity_do_atomic( 'clarity_logo_inside' ); }

function clarity_navigation_before() { clarity_do_atomic( 'clarity_navigation_before' ); }
function clarity_navigation_inside() { clarity_do_atomic( 'clarity_navigation_inside' ); }
function clarity_navigation_insidecol() { clarity_do_atomic( 'clarity_navigation_insidecol' ); }
function clarity_navigation_after() { clarity_do_atomic( 'clarity_navigation_after' ); }

// Template files: 404, archive, single, page, sidebar, index, search 

function clarity_content_before() { clarity_do_atomic( 'clarity_content_before' ); }
function clarity_content_after() { clarity_do_atomic( 'clarity_content_after' ); }
function clarity_main_before() { clarity_do_atomic( 'clarity_main_before' ); }
function clarity_main_after() { clarity_do_atomic( 'clarity_main_after' ); }
function clarity_main_inside() { clarity_do_atomic( 'clarity_main_inside' ); }
function clarity_main_insideafter() { clarity_do_atomic( 'clarity_main_insideafter' ); }
function clarity_post_before() { clarity_do_atomic( 'clarity_post_before' ); }
function clarity_post_after() { clarity_do_atomic( 'clarity_post_after' ); }

// footer.php

function clarity_footer() { clarity_do_atomic( 'clarity_footer' ); }
function clarity_footer_before() { clarity_do_atomic( 'clarity_footer_before' ); }
function clarity_footer_inside() { clarity_do_atomic( 'clarity_footer_inside' ); }
function clarity_footer_after() { clarity_do_atomic( 'clarity_footer_after' ); }
function clarity_footer_widgets_before() { clarity_do_atomic( 'clarity_footer_widgets_before' ); }
function clarity_footer_widgets_inside() { clarity_do_atomic( 'clarity_footer_widgets_inside' ); }
function clarity_footer_widgets_after() { clarity_do_atomic( 'clarity_footer_widgets_after' ); }

// sidebar.php

function clarity_sidebar_before() { clarity_do_atomic( 'clarity_sidebar_before' ); }
function clarity_sidebar_inside() { clarity_do_atomic( 'clarity_sidebar_inside' ); }
function clarity_sidebar_insideafter() { clarity_do_atomic( 'clarity_sidebar_insideafter' ); }
function clarity_sidebar_after() { clarity_do_atomic( 'clarity_sidebar_after' ); }


if ( ! function_exists( 'clarity_do_atomic' ) ) {

/**
 *
 * clarity_do_atomic()
 *
 * Adds contextual action hooks to the theme.  This allows users to easily add context-based content
 * without having to know how to use WordPress conditional tags.  The theme handles the logic.
 *
 * An example of a basic hook would be 'clarity_head'.  The clarity_do_atomic() function extends that to
 * give extra hooks such as 'clarity_head_home', 'clarity_head_singular', and 'clarity_head_singular-page'.
 *
 * Major props to Ptah Dunbar for the do_atomic() function.
 * @link http://ptahdunbar.com/wordpress/smarter-hooks-context-sensitive-hooks
 *
 * @since 3.9.0
 * @uses clarity_get_query_context() Gets the context of the current page.
 * @param string $tag Usually the location of the hook but defines what the base hook is.
 *
**/

function clarity_do_atomic( $tag = '', $args = '' ) {
	if ( !$tag ) return false;
	/* Do actions on the basic hook. */
	do_action( $tag, $args );
	/* Loop through context array and fire actions on a contextual scale. */
	foreach ( (array) clarity_get_query_context() as $context )
		do_action( "{$tag}_{$context}", $args );
} // End clartiy_do_atomic()

} // END function clarity_do_atomic()

if ( ! function_exists( 'clarity_apply_atomic' ) ) {

/**
 *
 * clarity_apply_atomic()
 *
 * Adds contextual filter hooks to the theme.  This allows users to easily filter context-based content
 * without having to know how to use WordPress conditional tags. The theme handles the logic.
 *
 * An example of a basic hook would be 'clarity_entry_meta'.  The clarity_apply_atomic() function extends
 * that to give extra hooks such as 'clarity_entry_meta_home', 'clarity_entry_meta_singular' and 'clarity_entry_meta_singular-page'.
 *
 * @since 3.9.0
 * @uses clarity_get_query_context() Gets the context of the current page.
 * @param string $tag Usually the location of the hook but defines what the base hook is.
 * @param mixed $value The value to be filtered.
 * @return mixed $value The value after it has been filtered.
 *
**/

function clarity_apply_atomic( $tag = '', $value = '' ) {
	if ( ! $tag ) return false;
	/* Get theme prefix. */
	$pre = 'clarity';
	/* Apply filters on the basic hook. */
	$value = apply_filters( "{$pre}_{$tag}", $value );
	/* Loop through context array and apply filters on a contextual scale. */
	foreach ( (array)clarity_get_query_context() as $context )
		$value = apply_filters( "{$pre}_{$context}_{$tag}", $value );
	/* Return the final value once all filters have been applied. */
	return $value;
} // End clarity_apply_atomic()

} // END function clarity_apply_atomic

if ( ! function_exists( 'clarity_get_query_context' ) ) {

/**
 *
 * clarity_get_query_context()
 *
 * Retrieve the context of the queried template.
 *
 * @since 3.9.0
 * @return array $query_context
 *
**/

function clarity_get_query_context() {
	global $wp_query, $query_context;

	/* If $query_context->context has been set, don't run through the conditionals again. Just return the variable. */
	if ( is_object( $query_context ) && isset( $query_context->context ) && is_array( $query_context->context ) ) {
		return $query_context->context;
	}

	unset( $query_context );
	$query_context = new stdClass();
	$query_context->context = array();

	/* Front page of the site. */
	if ( is_front_page() ) {
		$query_context->context[] = 'home';
	}

	/* Blog page. */
	if ( is_home() && ! is_front_page() ) {
		$query_context->context[] = 'blog';

	/* Singular views. */
	} elseif ( is_singular() ) {
		$query_context->context[] = 'singular';
		$query_context->context[] = "singular-{$wp_query->post->post_type}";

		/* Page Templates. */
		if ( is_page_template() ) {
			$to_skip = array( 'page', 'post' );

			$page_template = basename( get_page_template() );
			$page_template = str_replace( '.php', '', $page_template );
			$page_template = str_replace( '.', '-', $page_template );

			if ( $page_template && ! in_array( $page_template, $to_skip ) ) {
				$query_context->context[] = $page_template;
			}
		}

		$query_context->context[] = "singular-{$wp_query->post->post_type}-{$wp_query->post->ID}";
	}

	/* Archive views. */
	elseif ( is_archive() ) {
		$query_context->context[] = 'archive';

		/* Taxonomy archives. */
		if ( is_tax() || is_category() || is_tag() ) {
			$term = $wp_query->get_queried_object();
			$query_context->context[] = 'taxonomy';
			$query_context->context[] = $term->taxonomy;
			$query_context->context[] = "{$term->taxonomy}-" . sanitize_html_class( $term->slug, $term->term_id );
		}

		/* User/author archives. */
		elseif ( is_author() ) {
			$query_context->context[] = 'user';
			$query_context->context[] = 'user-' . sanitize_html_class( get_the_author_meta( 'user_nicename', get_query_var( 'author' ) ), $wp_query->get_queried_object_id() );
		}

		/* Time/Date archives. */
		else {
			if ( is_date() ) {
				$query_context->context[] = 'date';
				if ( is_year() )
					$query_context->context[] = 'year';
				if ( is_month() )
					$query_context->context[] = 'month';
				if ( get_query_var( 'w' ) )
					$query_context->context[] = 'week';
				if ( is_day() )
					$query_context->context[] = 'day';
			}
			if ( is_time() ) {
				$query_context->context[] = 'time';
				if ( get_query_var( 'hour' ) )
					$query_context->context[] = 'hour';
				if ( get_query_var( 'minute' ) )
					$query_context->context[] = 'minute';
			}
		}
	}

	/* Search results. */
	elseif ( is_search() ) {
		$query_context->context[] = 'search';
	/* Error 404 pages. */
	} elseif ( is_404() ) {
		$query_context->context[] = 'error-404';
	}

	return $query_context->context;
} // End clarity_get_query_context()

} // END function clarity_get_query_context()

?>