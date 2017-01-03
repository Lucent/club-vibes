<?php
/**
 * The template for displaying status post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
			<?php the_content(); ?>
				<?php clarity_postinfo(); ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>