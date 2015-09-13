<?php 
add_action('wp_enqueue_scripts', 'wd_child_theme_add_scripts');
function wd_child_theme_add_scripts(){
	wp_register_style('parent-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('parent-style');
}
?>