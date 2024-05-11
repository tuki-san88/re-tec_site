<?php
/*
 * Template Name: header.php
 */
?>
<!DOCTYPE html>
<html>
<head>
<title><?php the_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
<header>

<header id="masthead" class="site-header" role="banner">
    <div class="header-content">
        <!-- ヘッダーの左側にロゴを配置 -->
        <div class="header-left">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?> <!-- サイトのタイトルを表示 -->
            </a>
        </div>
        <!-- ヘッダーの右側にメニューを配置 -->
        <div class="header-right">
            <!-- ヘッダー上部に公式オンラインショップへのリンクを配置 -->
            <div class="header-top-menu">
                <a href="公式オンラインショップのURL">公式オンラインショップ</a>
            </div>
            <!-- メインナビゲーションメニューを配置 -->
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul class="menu">
                    <li><a href="#">トップ</a></li>
                    <li><a href="#">会社概要</a></li>
                    <li><a href="#">サンプル</a></li>
                    <li><a href="#">サンプル</a></li>
                    <li><a href="#">サンプル</a></li>
                </ul>
            </nav>
            <!-- ハンバーガーメニューのトグルボタン -->
            <div class="mobile-menu-toggle">
                <button id="mobile-menu-button" aria-controls="site-navigation" aria-expanded="false">
                    <span class="menu-toggle-icon"></span>
                    <span class="menu-toggle-text">メニュー</span>
                </button>
            </div>
        </div>
    </div>
</header>

</header>