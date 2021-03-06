<?php
	/*
	======================================
	Inkludera script till sidan
	======================================
	*/
	function myportfolio_script_enqueue(){

		//css
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
		wp_enqueue_style('cusomstyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
		//js
		wp_enqueue_script('jquery');
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);

	}
	add_action('wp_enqueue_scripts', 'myportfolio_script_enqueue');

	/*
	===========================================
	Aktiverar menyverktyget i wordpress panelen
	===========================================
	*/

	function myportfolio_theme_setup(){

		add_theme_support('menus');

		register_nav_menu('primary', 'Primary header navigation');
		register_nav_menu('secondary', 'Footer navigation');
	}
	add_action('init', 'myportfolio_theme_setup');

	/*
	======================================
	Theme support funktioner
	======================================
	*/

	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');

	add_theme_support('post-formats', array('aside','image','video'));


?>