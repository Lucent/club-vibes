<?php get_header(); ?>

<?php clarity_main_before(); ?>

	<div class="col8" id="content">

	<?php clarity_main_inside(); ?>
		
	<?php clarity_post_before(); ?>

		<div class="post">
			<h1 class="title"><?php _e( '404 - Page not found', 'clarity-theme' ); ?></h1>
				<p><?php _e( 'Sorry, but you are looking for something that is not here.', 'clarity-theme' ); ?></p>
				<p><?php _e( 'Perhaps you can find what you are looking for by searching the site archives', 'clarity-theme' ); ?></p>
			<div class="left404">
				<strong><?php _e( 'By month:', 'clarity-theme' ); ?></strong>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div><!-- END .left404 -->
			<div class="right404">
				<strong><?php _e( 'By category', 'clarity-theme' ); ?></strong>
				<ul>
					<?php wp_list_cats('sort_column=name'); ?>
				</ul>
			</div><!-- END .right404 -->
		</div><!-- END .post -->

	<?php clarity_post_after(); ?>
	
	<?php clarity_main_insideafter(); ?>
	
	</div><!-- END .col8 #content -->

<?php clarity_main_after(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>