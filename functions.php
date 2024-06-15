<?php
/*
 * Template Name: functions.php
 */

/* CSSの読み込み */
function register_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('common-style', get_template_directory_uri() . '/css/common.css');
    wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub.css');
}
add_action('wp_enqueue_scripts', 'register_styles');

/* JavaScriptの読み込み */
function register_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-slider', get_template_directory_uri() . '/js/main-slider.js', array('jquery'), null, true);
    wp_enqueue_script('custom-slider', get_template_directory_uri() . '/js/custom-slider.js', array('jquery'), null, true);
    wp_enqueue_script('sub', get_template_directory_uri() . '/js/sub.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');
?>
