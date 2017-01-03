<?php get_header(); ?>

<?php clarity_main_before(); ?>

	<div class="col8" id="content">		
	
		<?php clarity_main_inside(); ?>
		
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'inc/loop', get_post_format() ); ?>
		<?php endwhile; ?>
		<div class="post single" id="comments">
			<?php comments_template(); ?>
		</div><!-- END .post #comments -->
		<?php else : ?>
		<?php endif; ?>
		
		<?php clarity_main_insideafter(); ?>

	</div><!-- END .col8 #content -->
	
<?php clarity_main_after(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>