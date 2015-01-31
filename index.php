<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav')); ?>

<hr/>

<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_id' => 'nav')); ?>

<?php wp_footer(); ?>	
</body>
</html>