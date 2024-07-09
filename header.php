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
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body>

    <header id="masthead" class="site-header gothic-font" role="banner">
        <div class="header-content">
            <!-- ヘッダーの左側にロゴを配置 -->
            <?php
            $h1 = 'div';
            if (is_front_page() && is_home()) {
                $h1 = 'h1';
            }
            ?>
            <<?= $h1 ?> class="header-left">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/headerLogo.png" alt="<?php bloginfo('name'); ?>"> <!-- サイトのタイトルロゴを表示 -->
                </a>
            </<?= $h1 ?>>
            <!-- ヘッダーの右側にメニューを配置 -->
            <div class="header-right">
                <!-- ヘッダー上部に公式オンラインショップへのリンクを配置 -->
                <div class="header-shop-menu">
                    <a href="https://sessions-japan.com/" class="shoppingBtn hoverOpacity" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/sub/icon_cart.svg" alt=""><span>公式ショッピングサイト</span></a>
                </div>
                <!-- メインナビゲーションメニューを配置 -->
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <ul class="menu">
                        <li><a href="<?php echo $urls['home']; ?>">トップ</a></li><!-- テスト用 -->
                        <!-- <li><a href="/">トップ</a></li>本番用 -->
                        <li><a href="<?php echo $urls['company']; ?>">会社案内</a></li>
                        <li><a href="<?php echo $urls['business']; ?>">事業案内</a></li>
                        <li><a href="<?php echo $urls['offices']; ?>">事業所一覧</a></li>
                        <li><a href="<?php echo $urls['careers']; ?>">採用情報</a></li>
                    </ul>
                </nav>
                <!-- ハンバーガーメニューのトグルボタン -->
                <div class="mobile-menu-toggle">
                    <button id="mobile-menu-button" aria-controls="site-sp-navigation" aria-expanded="false">
                        <span class="menu-toggle-icon"></span>
                        <span class="menu-toggle-icon"></span>
                        <span class="menu-toggle-text">menu</span>
                    </button>
                </div>
            </div>
            <!-- ドロワーメニュー -->
            <nav class="drawer-menu js-drawer-menu" id="site-sp-navigation" aria-hidden="true">
                <ul class="drawer-menu__lists">
                    <li class="drawer-menu__list"><a href="<?php echo $urls['home']; ?>" class="drawer-menu__link hoverOpacity">トップ<span></span></a></li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['company']; ?>" class="drawer-menu__link hoverOpacity">会社案内<span></span></a></li>
                    <li class="drawer-menu__list"><span class="drawer-menu__link st_accordion hoverOpacity js-accordion__btn">事業案内<span></span></span>
                        <div class="drawer-menu__subLists" aria-hidden="true">
                            <div>
                                <ul>
                                    <li class="drawer-menu__subList"><a href="<?php echo $urls['apparel']; ?>" class="drawer-menu__subLink">アパレル部門<span></span></a></li>
                                    <li class="drawer-menu__subList"><a href="<?php echo $urls['sweets']; ?>" class="drawer-menu__subLink">スィーツ部門<span></span></a></li>
                                    <li class="drawer-menu__subList"><a href="<?php echo $urls['electrical']; ?>" class="drawer-menu__subLink">電気工事部門<span></span></a></li>
                                    <li class="drawer-menu__subList"><a href="<?php echo $urls['automotive']; ?>" class="drawer-menu__subLink">自動車部門<span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['offices']; ?>" class="drawer-menu__link hoverOpacity">事業所一覧<span></span></a></li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['careers']; ?>" class="drawer-menu__link hoverOpacity">採用について<span></span></a></li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['artisans']; ?>" class="drawer-menu__link hoverOpacity">職人名鑑<span></span></a></li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['Archive']; ?>" class="drawer-menu__link hoverOpacity">施工実績（一覧）<span></span></a></li>
                    <li class="drawer-menu__list"><a href="" class="drawer-menu__link hoverOpacity">施工実績（詳細）<span></span></a></li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['privacy']; ?>" class="drawer-menu__link hoverOpacity">プライバシーポリシー<span></span></a></li>
                    <li class="drawer-menu__list"><a href="<?php echo $urls['contact']; ?>" class="drawer-menu__link hoverOpacity">お問い合わせ<span></span></a></li>
                </ul>
            </nav>
        </div>
    </header>