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
function register_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper-js', '//unpkg.com/swiper@11/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script('main-slider', get_template_directory_uri() . '/js/main-slider.js', array('jquery'), null, true);
    wp_enqueue_script('custom-slider', get_template_directory_uri() . '/js/custom-slider.js', array('jquery'), null, true);
    wp_enqueue_script('sub', get_template_directory_uri() . '/js/sub.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');



/* 各ページへのリンク */
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
        'privacy' => esc_url(home_url("/privacy-policy/")),
        // お問い合わせ
        'contact' => esc_url(home_url("/contact/")),
	);
}



/* お知らせのカスタム投稿定義 */
function create_post_type() {
    $exampleSupports = [
        'title',  // 記事タイトル
    ];
    register_post_type(
        'news_sessions',  // カスタム投稿ID
        array(
            'label' => 'セッションズお知らせ',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
            'public' => true,  // 投稿タイプをパブリックにするか否か
            'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
            'menu_position' => 5,  // 管理画面上でどこに配置するか、今回の場合は「投稿」の下に配置
            'supports' => $exampleSupports  // 投稿画面でどのモジュールを使うか的な設定
        )
    );
}
add_action('init', 'create_post_type'); // アクションに上記関数をフックします

/* メタボックスを追加する関数 */
function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box',          // メタボックスID
        'リンクURL',                // メタボックスのタイトル
        'show_custom_meta_box',     // メタボックスのコールバック関数
        'news_sessions',            // 対象の投稿タイプ
        'normal',                   // メタボックスを表示するコンテキスト（ここでは通常の位置に表示）
        'high'                      // メタボックスの優先度（ここでは高い優先度）
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box'); // メタボックスを追加するアクションフック

/* メタボックスの内容を表示する関数 */
function show_custom_meta_box($post) {
    $link_url = get_post_meta($post->ID, 'link_url', true); // 投稿のカスタムフィールド 'link_url' の値を取得
    ?>
    <label for="link_url">リンクURL:</label>
    <input type="text" id="link_url" name="link_url" value="<?php echo esc_attr($link_url); ?>" size="25" /> <!-- 入力フィールドを表示 -->
    <?php
}

/* メタボックスの値を保存する関数 */
function save_custom_meta_box($post_id) {
    if (isset($_POST['link_url'])) { // フォームから送信された 'link_url' が設定されている場合
        update_post_meta($post_id, 'link_url', sanitize_text_field($_POST['link_url'])); // カスタムフィールド 'link_url' の値を保存
    }
}
add_action('save_post', 'save_custom_meta_box'); // 投稿が保存されるときにメタボックスの値も保存するアクションフック

?>
