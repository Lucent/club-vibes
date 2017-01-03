<?php if ( is_page_template( 'page-blank.php' ) || is_page_template( 'page-landing.php' ) ) { } else { ?>
</div><!-- END .container -->
</div><!-- END .contentwrap -->
<?php } ?>

<?php clarity_content_after(); ?>

<?php if ( is_page_template('page-landing.php') ) {} else { ?>

<?php clarity_footer_widgets_before(); ?>

<?php if ( is_active_sidebar( 'footer' ) ) { ?><footer>
<div class="footerwidgets">
<div class="container">
	<?php clarity_footer_widgets_inside(); ?>
	<?php dynamic_sidebar( 'footer' ); ?>
</div><!-- END .container -->
</div><!-- END .footerwidgets --></footer>
<?php } ?>

<?php clarity_footer_widgets_after(); ?>

<?php clarity_footer_before(); ?>

<div class="footerwrap">
<div class="container">
	<?php clarity_footer_inside(); ?>
	<div class="col12">
	<?php if (get_theme_mod( 'clarity_copyright' ) !='') { ?>
		<?php echo get_theme_mod( 'clarity_copyright' ); ?>
	<?php } else { ?>
		<p>&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a> &middot; <?php _e( 'Powered by', 'clarity-theme' ); ?> <a href="http://www.wordpress.org/" target="_blank">WordPress</a> &middot; <a href="http://www.madebyguerrilla.com" target="_blank">Made by Guerrilla</a></p>
	<?php } ?>
	</div><!-- END .col12 -->
</div><!-- END .container -->
</div><!-- END .footerwrap -->

<?php clarity_footer_after(); ?>

<?php } // is_page_template('page-landing.php') ?>

<?php if (get_theme_mod( 'clarity_stickynav' ) == 1 ) { ?>
<script type="text/javascript">
jQuery(function(){
	$(".navwrap").stick_in_parent()
});
</script>
<?php } ?>

<?php if (get_theme_mod( 'clarity_centernav' ) == 1 ) { ?>
<style>
.sf-menu {
    margin-left: 0;
    text-align: center;
    width: 100%;
}
.sf-menu li {
    display: inline-block;
    float: none;
}
.sf-menu li ul {
	text-align: left;
}
</style>
<?php } ?>

<?php
	wp_footer();
	clarity_footer();
?>

<?php if (get_theme_mod( 'script_footer' ) !='') { echo get_theme_mod( 'script_footer' ); } ?>

</body>
</html>