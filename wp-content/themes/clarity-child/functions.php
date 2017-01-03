<?php

function claritychild_scripts() {
	wp_enqueue_style( 'clarity-theme', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'clarity-child', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_script( 'clarity-child', get_stylesheet_directory_uri() . '/js/clarity-child.js', array(), '20160112', true );
}
add_action( 'wp_enqueue_scripts', 'claritychild_scripts' );

function claritychild_skiplinks() { ?>
	<?php if( is_front_page() ) { ?>
		<a class="skip-link screen-reader-text" href="#homeintro"><?php esc_html_e( 'Skip to content', 'clarity-child' ); ?></a>
	<?php } else { ?>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'clarity-child' ); ?></a>
	<?php } ?>
<?php }
add_action( 'clarity_head_before', 'claritychild_skiplinks' );

?>
