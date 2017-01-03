<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

<?php clarity_main_before(); ?>

	<div class="col12" id="content">
	
		<?php clarity_main_inside(); ?>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<?php get_template_part( 'inc/loop' ); ?>

		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>

	</div><!-- END .col12 #content -->

<?php clarity_main_before(); ?>

<?php get_footer(); ?>