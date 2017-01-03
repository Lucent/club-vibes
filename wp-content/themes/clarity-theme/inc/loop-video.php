<?php
/**
 * The template for displaying video post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
			<?php clarity_postinfo(); ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>