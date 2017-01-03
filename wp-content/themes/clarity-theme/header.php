<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php include('inc/title.php'); ?></title>

	<meta charset="utf-8">

	<!-- Optimized mobile viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- CSS | main -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
	<!-- CSS | fontawesome -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<!-- CSS | googlefonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 IE Enabling Script -->
	<!--[if lt IE 9]><script src="js/html5.js"></script>
	<![endif]-->

	<?php
		wp_head();
		clarity_head();
	?>

	<?php if (get_theme_mod( 'script_header' ) !='') { echo get_theme_mod( 'script_header' ); } ?>

</head>

<body <?php body_class(); ?>>

<?php if ( is_page_template( 'page-landing.php' ) ) { } else { ?>

<?php clarity_head_before(); ?>

<?php

/**
 *
 * Clarity function to display the header (logo and widget area)
 *
 * @since  1.1.1
 *
**/

clarity_header();

?>

<?php clarity_head_after(); ?>

<?php clarity_navigation_before(); ?>

<?php

/**
 *
 * Clarity function to display the navigation
 *
 * @since  1.1.1
 *
**/

clarity_navigation();

?>

<?php clarity_navigation_after(); ?>

<?php } // is_page_template('page-landing.php') ?>

<?php clarity_content_before(); ?>

<?php if ( is_page_template( 'page-blank.php' ) || is_page_template( 'page-landing.php' ) ) { } else { ?>
<div class="contentwrap" id="content">
<div class="container">
<?php } ?>