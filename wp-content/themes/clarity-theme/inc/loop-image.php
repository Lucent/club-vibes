<?php
/**
 * The template for displaying image post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php if( is_page() ) { } else { ?>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ); ?></a>
				<?php clarity_postinfo(); ?>
			</div><!-- END .postinfo -->
			<?php } ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>