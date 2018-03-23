<?php

function my_college_scripts() {
	wp_enqueue_script( 'my_college_script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
	wp_enqueue_style( 'google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_style( 'font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'my_college_style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_college_scripts' );

function college_features(){
	register_nav_menus(
		array(
			'headerMenu' => __( 'Header Menu' ),
			'footerMenu1' => __( 'Footer Menu 1' ),
			'footerMenu2' => __( 'Footer Menu 2' )
			)
		);
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'college_features');
