<?php 

// To add css and js files Testing file
function school_script(){
	wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('all_css',get_template_directory_uri().'/css/fluidbox.min.css');
	wp_enqueue_style('custom_css',get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('custom_css_two',get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('custom_css_three',get_template_directory_uri().'/css/style.min.css');

	wp_enqueue_script('jquery_js',get_template_directory_uri().'/js/jquery.min.js',array(),'1.1',true);
	wp_enqueue_script('isotrap_js',get_template_directory_uri().'/js/isotrap.pkgd.min.js',array(),'1.1',true);
	wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true);
	wp_enqueue_script('script_js',get_template_directory_uri().'/js/scripts.js',array(),'1.1',true);

}
add_action('wp_enqueue_scripts', 'school_script');








