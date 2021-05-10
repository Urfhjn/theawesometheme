<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_action('wp_enqueue_scripts', function() {
	//	CSS Files
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap.min.css');
	wp_enqueue_style('main-style-file', get_stylesheet_uri());

	// JS Files
//	wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap.min.js');
});

register_nav_menus(
	array(
		'header' => 'Headerx menu',
		'footer-col1'  => 'Footer column 1',
		'footer-col2'  => 'Footer column 2',
		'footer-col3'  => 'Footer column 3',
	)
);

add_theme_support('post-thumbnails');