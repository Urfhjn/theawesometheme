<?php
//require_once('class-wp-bootstrap-navwalker.php');

//function add_css_file() {
//	wp_enqueue_style('main-style-file', get_stylesheet_uri());
//}
//add_action('wp_enqueue_scripts', 'add_css_file');


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
//function wpb_custom_new_menu() {
//	register_nav_menu('foo-menu-x', 'Foo');
//	register_nav_menu('bar-menu-y', 'Bar');
//}
//add_action( 'init', 'wpb_custom_new_menu' );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//register_nav_menus( array(
//	'foo' => 'PrimaryX Menu',
//) );

add_theme_support('post-thumbnails');

// Commented this out for fixing later
//function register_navwalker(){
//	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
//}
//add_action( 'after_setup_theme', 'register_navwalker' );


// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {

	function wpex_pagination() {

		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';

		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			if( !$current_page = get_query_var('paged') )
				$current_page = 1;
			if( get_option('permalink_structure') ) {
				$format = 'page/%#%/';
			} else {
				$format = '&paged=%#%';
			}
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			) );
		}
	}

}
