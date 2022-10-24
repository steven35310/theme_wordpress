<?php

add_action( 'wp_enqueue_scripts', 'insert_css' );

function insert_css() {

	//########## Import all the stylesheets here like the example below ##########
	//wp_register_style( 'ploume', 'https://source.ploume.io/latest/css/ploume.css' );
	wp_enqueue_style( 'ploume' );


	// Import the WordPress stylesheet (style.css)
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	//########## Import all the javascript scripts here like the example below ##########
	wp_register_script( 'jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
	wp_enqueue_script( 'jquery2' );
}

add_theme_support( 'menus' );