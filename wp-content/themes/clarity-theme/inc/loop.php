<?php
/**
 * The template for displaying standard post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<article>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">

			<?php if (get_theme_mod( 'clarity_thumbnails' ) == 'large' ) { if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink() ?>" class="featimg"><?php the_post_thumbnail( 'slider' ); ?></a>
			<?php } } ?>
		
			<?php if( is_single() || is_page() ) { ?>
			<h1 class="title"><?php the_title(); ?></h1>
			<?php } else { ?>
			<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php } ?>
			
			<?php if( is_page() ) { } else { ?>
				<?php clarity_postinfo(); ?>
			<?php } ?>

			<?php if(!is_single()) { ?>
			<?php if (get_theme_mod( 'clarity_thumbnails' ) == 'thumb' ) { ?>
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<?php } ?>
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
		</article>
	<?php clarity_post_after(); ?>