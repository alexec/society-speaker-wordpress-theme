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
}
add_action( 'wp_enqueue_scripts', 'society_speakers_scripts' ); 

require_once('wp_bootstrap_navwalker.php');

