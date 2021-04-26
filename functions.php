<?php

//function add_css_file() {
//	wp_enqueue_style('main-style-file', get_stylesheet_uri());
//}
//add_action('wp_enqueue_scripts', 'add_css_file');


add_action('wp_enqueue_scripts', function() {
	//	CSS Files
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap.min.css');
	wp_enqueue_style('main-style-file', get_stylesheet_uri());

	// JS Files
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap.min.js');
});
