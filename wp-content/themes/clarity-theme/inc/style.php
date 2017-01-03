<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/<?php
	if ( function_exists( 'get_option_tree' ) ) {
	  $style = get_option_tree('style_color');
	  if ( 'color_default' == $style ) {
		echo 'default';
	  } elseif ( 'color_red' == $style) {
		echo 'red';
	  } elseif ( 'color_blue' == $style) {
		echo 'blue';
	  } elseif ( 'color_green' == $style) {
		echo 'green';
	  } elseif ( 'color_pink' == $style) {
		echo 'pink';
	  } elseif ( 'color_purple' == $style) {
		echo 'purple';
	  } elseif ( 'color_orange' == $style) {
		echo 'orange';
	  } elseif ( 'color_brown' == $style) {
		echo 'brown';
	  }
	}
	?>.css" />
