<?php
/*
 * Template Name: functions.php
 */

/* style.cssの読み込み */
function register_style() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'register_style' );