<?php
/**
 * The template for displaying the archives page template
 * 
 * @package clarity-theme
 * @since 3.0
 */
?>

	<?php clarity_post_before(); ?>
		<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
		
			<h1 class="title"><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<h3><?php _e( 'All Categories', 'clarity-theme'); ?></h3>
			<?php $categories = get_categories( 'hide_empty=1' ); ?>
			<?php if( count( $categories) > 0 ) { ?>
				<ul>
					<?php foreach( $categories as $category ) { ?>
						<li><a href="<?php echo get_category_link( $category->cat_ID ); ?>"><?php echo $category->cat_name; ?></a></li>
					<?php } // end foreach ?>
				</ul>
			<?php } else { ?>
				<p><?php _e( 'You have no categories.', 'clarity-theme'); ?></p>
			<?php } // end if/else ?>
			
			<h3><?php _e( 'All Posts', 'clarity-theme'); ?></h3>
			<?php $posts = get_posts( 'orderby=post_date&order=desc&numberposts=-1' ); ?>
			<?php if( count( $posts) > 0 ) { ?>
				<ul>
					<?php foreach( $posts as $post ) { ?>
						<?php $title = '' == get_the_title( $post->ID ) ? get_the_time( get_option( 'date_format' ), $post->ID ) : get_the_title( $post->ID ); ?>
						<li><span class="the_date"><?php echo get_the_time( get_option( 'date_format' ), $post->ID ); ?></span>&nbsp;&mdash;&nbsp;<span class="the_title"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $title; ?></a></span></li>
					<?php } // end foreach ?>
				</ul>
			<?php } else { ?>
				<p><?php _e( 'You have no posts.', 'clarity-theme'); ?></p>
			<?php } // end if/else ?>

		</div><!-- END .post -->
	<?php clarity_post_after(); ?>