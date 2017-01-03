<?php
/**
 * The template for displaying quote post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
			<?php if( is_single() || is_page() ) { ?>
			<h1 class="title"><?php the_title(); ?></h1>
			<?php } else { ?>
			<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php } ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>