<?php
if( !function_exists( 'wanium_child_enqueue_styles' ) ) {
	function wanium_child_enqueue_styles() {
	    $parent_style = 'wanium-style';
	    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', 
	    	array( 'wanium-libs', 'wanium-theme-styles' ) 
	    );
	    wp_enqueue_style( 'wanium-child-style', get_stylesheet_directory_uri() . '/style.css',
	        array( $parent_style )
	    );
	}
	add_action( 'wp_enqueue_scripts', 'wanium_child_enqueue_styles' );
}

if( !function_exists( 'wanium_child_language_setup' ) ) {
	function wanium_child_language_setup() {
		load_child_theme_textdomain( 'wanium', get_stylesheet_directory() . '/languages' );
	}
	add_action( 'after_setup_theme', 'wanium_child_language_setup' );
}