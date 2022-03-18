<?php 

// To add css and js files Testing file
function technisun_script(){
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
add_action('wp_enqueue_scripts', 'technisun_script');

// To add Menu option in Dashboard
function show_menu(){
	register_nav_menus(
		array(
				'primary_menu'=> __('Primary Menu'),  // id=>vlaue
				'footer_menu'=> __('Footer Menu')
				)
				);      
}
add_action('init','show_menu');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link mobile_nav_link main-link";
        return $atts;
}, 100, 1 );

// add_filter('wp_nav_menu_items','search_box_function', 10, 2);
// function search_box_function( $nav, $args ) {
// 	   echo "nav menu test";
// 		echo "<pre>";
// 		print_r($nav);
// 		echo "get test";
// 		print_r($args);
// 		die();
//     // if( $args->theme_location == 'primary' )
//         return $nav."<li class='menu-header-search'><form action='http://example.com/' id='searchform' method='get'><input type='text' name='s' id='s' placeholder='Search'></form></li>";

//     // return $nav;
// }








