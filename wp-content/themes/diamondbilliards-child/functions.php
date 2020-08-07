<?php

// Load Css

function load_css(){

		 wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
		 wp_enqueue_style('mainstyle', get_stylesheet_directory_uri() . '/css/main.css' );
}

add_action('wp_enqueue_scripts', 'load_css');

// Load JS
function load_js(){

wp_enqueue_script('jquery');

wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');


// Load theme Option

add_theme_support('menus');

// Menus

register_nav_menus(
	array(

		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Top menu', 
	)
);


// Custom Image Sizes

add_image_size('blog-large',800, 400, false);
add_image_size('blog-small',300, 200, true);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


