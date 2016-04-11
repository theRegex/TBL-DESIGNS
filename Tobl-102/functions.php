<?php

function tbl_script_enqueue(){

	wp_enqueue_style('tbl_bootstrap' , get_template_directory_uri().'/css/bootstrap.min.css', array(),'1.0.0','all');
	wp_enqueue_style('tbl_bootstrap_theme' , get_template_directory_uri().'/css/bootstrap-theme.min.css', array(),'1.0.0','all');
	wp_enqueue_style('flickity_css' , get_template_directory_uri().'/css/flickity.css', array(),'1.0.0','all');
	wp_enqueue_style('customstyle' , get_template_directory_uri().'/css/tbl102.css', array(),'1.0.0','all');
	wp_enqueue_script('jQuery_lib' , get_template_directory_uri().'/libs/jquery-1.12.3.min.js', array(),'1.0.0',false);
	wp_enqueue_script('bootstrap_js' , get_template_directory_uri().'/libs/bootstrap.min.js', array(),'1.0.0',true);
	wp_enqueue_script('flickity_js' , get_template_directory_uri().'/libs/flickity.pkgd.min.js', array(),'1.0.0',true);
	wp_enqueue_script('customJS' , get_template_directory_uri().'/js/site.js', array(),'1.0.0',true);

}


add_action('wp_enqueue_scripts','tbl_script_enqueue');

function tbl_theme_setup(){
		add_theme_support("menus");
		register_nav_menu("primaryHeader", "Primary Navigation Bar");
		register_nav_menu("primaryFooter", "Footer Navigation Bar");
}

add_action('after_setup_theme','tbl_theme_setup');

//Allows user to change background.
add_theme_support("custom-background");
//Allows user to change image/logo in header. - html hook must be added in desired spot
add_theme_support("custom-header");

//Allows user to add image to blog post - html hook must be added in desired spot
add_theme_support("post-thumbnails");




function tbl_widget_setup(){
		register_sidebar(
			array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'tbl-sidebar',
			'description'	=> 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'	=> '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
			);
	
}

//Initializing sidebar widget... - html hook must be added in desired spot
add_action('widgets_init','tbl_widget_setup');


?>