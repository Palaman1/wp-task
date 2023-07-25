<?php
/**
 * blog.navidminno functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package palamaniuk.workflow.ca
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function my_setup() {
	
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menu( 'header', 'Header menu' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'my_setup' );


/**
 * Enqueue scripts and styles.
 */
function my_scripts() {
	wp_enqueue_style(
	    'main-style',
	    get_template_directory_uri() . '/style.css',
	    [],
	    '1.0',
	    'all'
	);

}
add_action( 'wp_enqueue_scripts', 'my_scripts', 10);


