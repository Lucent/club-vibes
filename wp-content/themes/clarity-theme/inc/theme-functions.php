<?php 

// Post Info function
if( ! function_exists('clarity_postinfo') ) {
	function clarity_postinfo() { ?>
		<div class="postinfo">
			<i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?> &middot; <i class="fa fa-folder-o"></i> <?php the_category(', ') ?> &middot; <i class="fa fa-comment-o"></i> <?php comments_popup_link('0 Comments','1 Comment','% Comments'); ?> &nbsp; <?php edit_post_link('(Edit)', '', ''); ?>
		</div><!-- END .postinfo -->
	<?php } // clarity_postinfo
}

if( ! function_exists('clarity_header') ) {
	function clarity_header() { ?>
		<header>
		<div class="headwrap">
		<div class="container">
			<?php clarity_head_inside(); ?>
			<div class="col4">
				<div class="logowrap">
				<?php if (get_theme_mod( 'logo' ) !='') { ?>
					<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				<?php } else { ?>
				<?php if (is_single()) { ?>
					<h2><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
				<?php } elseif (is_page()) { ?>
					<h2><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
				<?php } else { ?>
					<h1><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<?php } ?>
					<h5><?php bloginfo('description'); ?></h5>
				<?php } ?>
				</div><!-- END logowrap -->
				<?php clarity_logo_inside(); ?>
			</div><!-- END .col4 -->
			<div class="col8 headwidget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : ?><?php endif; ?>
				<?php clarity_headwidget_inside(); ?>
			</div><!-- END .col8.headwidget -->
		</div><!-- END .container -->
		</div><!-- END .headwrap -->
		</header>
	<?php } // clarity_header
}

if( ! function_exists('clarity_navigation') ) {
	function clarity_navigation() { ?>
		<?php $Navigation = '';
		if (function_exists('wp_nav_menu')) {
			$Navigation = wp_nav_menu( array( 'theme_location' => 'Navigation', 'container' => '', 'menu_class' => 'sf-menu', 'menu_id' => '', 'fallback_cb' => '', 'echo' => false ) ); 
		};
		if ($Navigation == '') { } else { ?>
		<nav>
		<div class="navwrap">
		<div class="container">
			<?php clarity_navigation_inside(); ?>
			<div class="col12">
				<?php clarity_navigation_insidecol(); ?>
				<div id="mobnav-btn">Expand site navigation</div>
				<?php echo($Navigation); ?>
			</div><!-- END .col12 #header -->
		</div><!-- END .container -->
		</div><!-- END .navwrap -->
		</nav>
		<?php } ?>
	<?php } // clarity_navigation
}
?>