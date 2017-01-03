<?php if ( is_home() || is_front_page() ) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?> - Search Results<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?> - Author Archives<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() && !is_front_page() ) { ?><?php bloginfo('name'); ?> - <?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?> - Archive - <?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?> - Archive - <?php the_time('F'); ?><?php } ?>
<?php if ( is_404() ) { ?><?php bloginfo('name'); ?> - This page could not be found<?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> - Tag Archive - <?php  single_tag_title("", true); } } ?>
<?php if ( is_post_type_archive('work') ) { ?><?php bloginfo('name'); ?> - Work - <?php single_cat_title(); ?><?php } ?>