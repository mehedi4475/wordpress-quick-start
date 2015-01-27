<?php

//Add style
function theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css','','3.3.0');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css','','4.2.0');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css','','1.3.3');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.css','','1.0');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css','','1.1.3');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css','','1.0');
    wp_enqueue_style( 'boilerplate', get_template_directory_uri() . '/css/boilerplate.css','','4.3.0');

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//Add scripts 
function theme_name_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.0', true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.3.3', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '1.1', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );