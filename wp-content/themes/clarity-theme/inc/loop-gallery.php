<?php
/**
 * The template for displaying gallery post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>
	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php if( is_single() || is_page() ) { ?>
			<h1 class="title"><?php the_title(); ?></h1>
			<?php } else { ?>
			<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php } ?>
			<?php if( is_page() ) { } else { ?>
				<?php clarity_postinfo(); ?>
			<?php } ?>
			
			<?php if (get_theme_mod( 'clarity_thumbnails' ) == 'thumb' ) { ?>
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<?php } ?>

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