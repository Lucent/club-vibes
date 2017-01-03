<?php
/**
 * The template for displaying aside post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php if( is_single() || is_page() ) { ?>
				<?php the_content(); ?>
			<?php } else { ?>
				<?php if (get_theme_mod( 'clarity_length' ) == 'excerpt' || get_theme_mod( 'clarity_length' ) == '' ) { ?>
					<?php the_excerpt(); ?>
				<?php } else { ?>
					<?php the_content('read more'); ?>	
				<?php } ?>
			<?php } ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>