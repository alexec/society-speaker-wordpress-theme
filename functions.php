<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'society-speakers' ), // Register the Primary menu
	)
);

function society_speakers_scripts()  { 
	wp_enqueue_style( 'society-speakers-style', get_template_directory_uri() . '/style.css');
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.1', true );
  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.1', true );  
}
add_action( 'wp_enqueue_scripts', 'society_speakers_scripts' ); 

require_once('wp_bootstrap_navwalker.php');

