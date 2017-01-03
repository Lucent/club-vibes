<?php
/*
Template Name: Landing
*/
?>
<?php get_header(); ?>

<?php clarity_main_before(); ?>

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<?php get_template_part( 'inc/loop-blank' ); ?>

		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		
<?php clarity_main_after(); ?>

<?php get_footer(); ?>