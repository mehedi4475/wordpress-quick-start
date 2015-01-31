<?php
	function my_theme_add_favicon(){ ?>
	    <!-- Custom Favicons -->
	    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon.ico"/>
	    <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon.ico" type="image/x-icon">
	    <?php }
	add_action('wp_head','my_theme_add_favicon');

?>