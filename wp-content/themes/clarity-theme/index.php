<?php get_header(); ?>

<?php clarity_main_before(); ?>

	<div class="col8" id="content">
	
		<?php clarity_main_inside(); ?>
		
		<?php if(is_category()) { ?>
		<div class="post archivetitle">
			<h4><?php single_cat_title('Currently browsing: '); ?></h4>
			<p><?php echo category_description( $category_id ); ?></p>
		</div><!-- END .archiveinfo -->
		<?php } ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'inc/loop', get_post_format() ); ?>
		<?php endwhile; ?>
		<div class="post" id="pagenavi">
			<?php include('inc/wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</div><!-- END .post -->
		<?php else : ?>
		<div class="post">
			<h1 class="title"><?php _e( 'No results were found', 'clarity-theme' ); ?></h1>
				<p><?php _e( 'Sorry, but you are looking for something that is not here', 'clarity-theme' ); ?></p>
				<p><?php _e( 'Perhaps you can find what you are looking for by searching the site archives', 'clarity-theme' ); ?></p>
			<div class="left404">
				<strong><?php _e( 'By Month:', 'clarity-theme' ); ?></strong>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div><!-- END .left404 -->
			<div class="right404">
				<strong><?php _e( 'By Category:', 'clarity-theme' ); ?></strong>
				<ul>
					<?php wp_list_cats('sort_column=name'); ?>
				</ul>
			</div><!-- END .right404 -->
		</div><!-- END .post -->
		<?php endif; ?>
		
		<?php clarity_main_insideafter(); ?>

	</div><!-- END .col8 #content -->

<?php clarity_main_after(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>