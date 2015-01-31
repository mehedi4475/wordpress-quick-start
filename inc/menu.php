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
wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav')); ?>

*/
