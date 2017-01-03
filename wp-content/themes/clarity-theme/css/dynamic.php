<?php
	$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
	$wp_load = $absolute_path[0] . 'wp-load.php';
	require_once($wp_load);
	header('Content-type: text/css');
	header('Cache-control: must-revalidate');
?>
<?php if (get_option_tree( 'layout_width' ) == 'fullwidth') { } else { ?>

.headwrap,
.navwrap,
.footerwrap,
.footerwidgets {
	background: transparent;
}

.headwrap {
	padding: 0;
}

.headwrap .container {
	background: #f1f1f1;
	overflow: auto;
	padding: 20px 10px;
}

.navwrap .container {
	background: #000;
	overflow: auto;
	padding: 0 10px;
}

.contentwrap .container {
	background: #FFF;
	margin: 0 auto;	
	overflow: auto;
	padding: 20px 10px;
}

.container {
	float: none;
	margin: 0 auto;
	width: 100%;
	max-width: 980px;
}

.footerwrap .container {
	background: #f9f9f9;
	overflow: auto;
	padding: 0 10px;
}


.footerwidgets .container {
	background: #f1f1f1;
	overflow: auto;
	padding: 0 10px;
}
<?php } ?>