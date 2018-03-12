<?php
/*
	
	============================
	FRONT-END ENQUEUE FUNCTIONS
	============================
*/

function guddi_scripts(){
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	
	wp_enqueue_style( 'guddi_css', get_template_directory_uri() . '/css/mystyle.css', array(), '1.0.0', 'all' );
	
	

	


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/vendor/jquery/jquery.js', false, '1.11.3', true );
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/bootstrap/js/popper.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/vendor/font-awesome/fontawesome-all.js', array('jquery'), '3.3.6', true );
	

	wp_enqueue_script( 'guddi', get_template_directory_uri() . '/js/mystyle.js', array('jquery'), '1.0.0', true );	
}
add_action( 'wp_enqueue_scripts', 'guddi_scripts' );