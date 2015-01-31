<?php

add_action('init', 'my_theme_register_menu');
function my_theme_register_menu() {
    register_nav_menu( 'main-menu', 'Main Menu');
    register_nav_menu( 'footer-menu', 'Footer Menu');
} 
 
// Default menu
 
function my_theme_default_menu() {
    echo '<ul id="nav">';
    if ('page' != get_option('show_on_front')) {
        echo '<li><a href="'. home_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
        echo '</ul>';
}



/*

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => 'footer-menu',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

*/
