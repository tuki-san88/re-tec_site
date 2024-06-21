<?php
/*
 * Template Name: functions.php
 */

/* CSSの読み込み */
function register_styles() {
    wp_enqueue_style('swiper-css', '//unpkg.com/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('common-style', get_template_directory_uri() . '/css/common.css');
    wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub.css');
}
add_action('wp_enqueue_scripts', 'register_styles');

/* JavaScriptの読み込み */
function register_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper-js', '//unpkg.com/swiper@11/swiper-bundle.min.js' );
    wp_enqueue_script('main-slider', get_template_directory_uri() . '/js/main-slider.js', array('jquery'), null, true);
    wp_enqueue_script('custom-slider', get_template_directory_uri() . '/js/custom-slider.js', array('jquery'), null, true);
    wp_enqueue_script('sub', get_template_directory_uri() . '/js/sub.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');


function my_setup()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support('html5', array( // HTML5による出力
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}
add_action('after_setup_theme', 'my_setup');


// 各ページへのリンク
function get_my_urls()
{
	return array(
        // トップ
        'home' => esc_url(home_url("/")),
		// 会社案内
        'company' => esc_url(home_url("/company/")),
        // 事業案内
        'business' => esc_url(home_url("/business/")),
        // 電気工事事案
        'electrical' => esc_url(home_url("/electrical-construction/")),
        // アパレル事案
        'apparel' => esc_url(home_url("/apparel/")),
        // スイーツ事業
        'sweets' => esc_url(home_url("/sweets/")),
        // 自動車工事事案
        'automotive' => esc_url(home_url("/automotive/")),
        // 採用について
        'careers' => esc_url(home_url("/careers/")),
        // 職人名盤
        'artisans' => esc_url(home_url("/artisans/")),
        // 事業所一覧
        'offices' => esc_url(home_url("/offices/")),
        // 施工実績（一覧）
        'Archive' => esc_url(home_url("/")),
        // プライバシーポリシー
        'privacy' => esc_url(home_url("/")),
        // お問い合わせ
        'contact' => esc_url(home_url("/")),
	);
}

?>


