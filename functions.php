<?php
function enqueue_styles() {
	wp_enqueue_style( 'jetro-style', get_template_directory_uri() . '/style.css');
	wp_register_style('font-style', ' "//fonts.fontstorage.com/import/bebasneue.css"');
	wp_register_style('font-style', ' "//fonts.fontstorage.com/import/aileron.css"');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
