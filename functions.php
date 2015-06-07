<?php

// ADD GENESIS HTML5 MARKUP STRUCTURE
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

/*
// load the parent theme stylesheet and then the child theme stylesheet	
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
*/

// ENQUEUE SCRIPTS AND STYLES
function contentjones_g_scripts() {
	//load the primary stylesheet
	wp_enqueue_style( 'contentjones_g-style', get_stylesheet_uri() );

	//load main.js and jQuery
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery-core'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'contentjones_g_scripts' );


