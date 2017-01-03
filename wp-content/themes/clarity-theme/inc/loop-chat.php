<?php
/**
 * The template for displaying chat post formats.
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
				<?php the_content(); ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>