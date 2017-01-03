<?php clarity_sidebar_before(); ?>
	<div class="col4" id="sidebar">
		<?php clarity_sidebar_inside(); ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>
		<?php clarity_sidebar_insideafter(); ?>
	</div><!-- END .col4 #sidebar -->
<?php clarity_sidebar_after(); ?>