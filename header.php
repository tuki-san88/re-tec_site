<?php
/*
 * Template Name: header.php
 */
?>
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no" />
        <title><?php the_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body>

        <header id="masthead" class="site-header gothic-font" role="banner">
            <div class="header-content">
                <!-- ヘッダーの左側にロゴを配置 -->
                <h1 class="header-left">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/headerLogo.png" alt="<?php bloginfo('name'); ?>"> <!-- サイトのタイトルロゴを表示 -->
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
                            <li><a href="<?php echo $urls['company']; ?>">会社案内</a></li>
                            <li><a href="<?php echo $urls['business']; ?>">事業案内</a></li>
                            <li><a href="<?php echo $urls['offices']; ?>">事業所一覧</a></li>
                            <li><a href="<?php echo $urls['careers']; ?>">採用情報</a></li>
                        </ul>
                    </nav>
                    <!-- ハンバーガーメニューのトグルボタン -->
                    <div class="mobile-menu-toggle">
                        <button id="mobile-menu-button" aria-controls="site-sp-navigation" aria-expanded="false" popoverTarget="site-sp-navigation">
                            <span class="menu-toggle-icon"></span>
                            <span class="menu-toggle-icon"></span>
                            <span class="menu-toggle-text">メニュー</span>
                        </button>
                    </div>
                </div>
                <!-- ドロワーメニュー -->
                <nav class="drawer-menu js-drawer-menu" id="site-sp-navigation" aria-hidden="true" popover>
                    <ul class="drawer-menu__lists">
                        <li class="drawer-menu__list"><a href="<?php echo $urls['home']; ?>" class="hoverOpacity">トップ<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['company']; ?>" class="hoverOpacity">会社案内<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['business']; ?>" class="hoverOpacity">事業案内<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['apparel']; ?>" class="hoverOpacity">アパレル部門<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['sweets']; ?>" class="hoverOpacity">スィーツ部門<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['electrical']; ?>" class="hoverOpacity">電気工事部門<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['automotive']; ?>" class="hoverOpacity">自動車部門<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['offices']; ?>" class="hoverOpacity">事業所一覧<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['careers']; ?>" class="hoverOpacity">採用について<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['artisans']; ?>" class="hoverOpacity">職人名鑑<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['Archive']; ?>" class="hoverOpacity">施工実績（一覧）<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['details']; ?>" class="hoverOpacity">施工実績（詳細）<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['privacy']; ?>" class="hoverOpacity">プライバシーポリシー<span></span></a></li>
                        <li class="drawer-menu__list"><a href="<?php echo $urls['contact']; ?>" class="hoverOpacity">お問い合わせ<span></span></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>