<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

function add_theme_scripts() {
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/foundation.css',false,'1.1','all');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/menu.css',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

if(function_exists('add_theme_support')) {
	add_theme_support('automatic-feed-links');
}

if (function_exists('register_sidebar')) {
	
	register_sidebar(array(
	'name' => 'Header',
	'id' => 'Header',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
	));
	
	register_sidebar(array(
	'name' => 'Home_Content',
	'id' => 'Home_Content',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
	));
	
	register_sidebar(array(
	'name' => 'Footer',
	'id' => 'Footer',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
	));
	
	register_sidebar(array(
	'name' => 'Blog_Sidebar',
	'id' => 'Blog_Sidebar',
	'before_widget' => '<div class="side_blog">',
	'after_widget' => '</div>',
	'before_title' => '<h5>',
	'after_title' => '</h5><hr />'
	));

	register_sidebar(array(
	'name' => 'Blog_Header',
	'id' => 'Blog_Header',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
	));

}
	
add_theme_support( 'post-thumbnails' );

add_image_size( 'homepage-thumb', 500, 350, true );

//changing excerpt length - words
function new_excerpt_length($length) {
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

//changing excerpt more
function new_excerpt_more($more) {
	return '...';
 }
add_filter('excerpt_more', 'new_excerpt_more');

//gravity forms validation message
function change_message( $message, $form ) {
	return "<div class='validation_error'>Please fill in all information before hitting Contact P3 Cost Analysts. Incorrect fields are highlighted below.</div>";
}
add_filter( 'gform_validation_message', 'change_message', 10, 2 );