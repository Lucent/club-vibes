<?php
/**
 * The template for displaying link post formats.
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
			<?php
			// Get the text & url from the first link in the content
			$content = get_the_content();
			$link_string = extract_from_string('<a href=', '/a>', $content);
			$link_bits = explode('"', $link_string);
			foreach( $link_bits as $bit ) {
				if( substr($bit, 0, 1) == '>') $link_text = substr($bit, 1, strlen($bit)-2);
				if( substr($bit, 0, 4) == 'http') $link_url = $bit;
			}?>		
			<?php if( is_single() || is_page() ) { ?>
			<h1 class="title"><a href="<?php echo $link_url;?>" title="<?php _e('External link');?>" target="_blank"><?php echo $link_text;?></a></h1>
			<?php } else { ?>
			<h2 class="title"><a href="<?php echo $link_url;?>" title="<?php _e('External link');?>" target="_blank"><?php echo $link_text;?></a></h2>
			<?php } ?>
		</div><!-- END .post -->
	<?php clarity_post_after(); ?>