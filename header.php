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

<header id="masthead" class="site-header gothic-font" role="banner">
    <div class="header-content">
        <!-- ヘッダーの左側にロゴを配置 -->
        <h1 class="header-left">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/headerLogo.png" alt="<?php bloginfo( 'name' ); ?>"> <!-- サイトのタイトルロゴを表示 -->
            </a>
        </h1>
        <!-- ヘッダーの右側にメニューを配置 -->
        <div class="header-right">
            <!-- ヘッダー上部に公式オンラインショップへのリンクを配置 -->
            <div class="header-shop-menu">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/headerShopBanner.png" alt="公式オンラインショップのURL"></a>
            </div>
            <!-- メインナビゲーションメニューを配置 -->
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul class="menu">
                    <li><a href="/">トップ</a></li>
                    <li><a href="#">会社案内</a></li>
                    <li><a href="#">事業案内</a></li>
                    <li><a href="#">事業所一覧</a></li>
                    <li><a href="#">採用情報</a></li>
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