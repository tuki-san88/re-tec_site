<?php
$pageId = "top";
/*
 * Template Name: Top Page
 */
get_header(); ?>
<?php $urls = get_my_urls(); ?>

<main id="<?php echo $pageId; ?>">

    <!-- メインキャッチのスライドショー -->
    <div class="mainSliderWrapper">
        <div class="main-slider">
            <?php
            $images = array(
                'topMainSlide01.png',
                'topMainSlide02.jpg',
                'topMainSlide03.jpg',
                'topMainSlide04.jpg',
                'topMainSlide05.jpg'
            );
            foreach ($images as $image) {
                echo '<div class="slide"><img src="' . get_template_directory_uri() . '/images/' . $image . '" alt="Slide"></div>';
            }
            ?>
        </div>
        <div class="slideOnMesseage">
            進化する若手中心の<span>企業の在り方</span>
        </div>
    </div>
    <!-- メインラッパー -->
    <div class="mainWrapper">
        <!-- メッセージ -->
        <article class="topMessageWrapper">
            <h2>「Re-Group」新たな未来へ</h2>
            <section>
                令和という新しい時代<br>
                若手を中心とした、進化する建設業の在り方で活気があり信用に満ちた事業を目指します。<br>
                新しい時代、新しい価値観。私たち、ReGroupは、電気工事事業、アパレル事業、飲食事業、自動車販売事業の4つの異なる分野で活動するグループカンパニーです。私たちは多様性と革新を尊重し、一歩踏み出すことを大切にしています。<br>
                「ReGroup」は、未来への一歩を踏み出すために創設されました。私たちは建設業における進化と活気に焦点を当て、信頼と品質に満ちた事業を目指しています。その一環として、私たちはさまざまな分野でビジョンを実現することを誓っています。<br>
                私たちは「人生初」の体験を大切にし、それが新しい時代を築く鍵であると信じています。驚き、興奮、感動。時代はめまぐるしく変化し、私たちの環境や技術も進化しています。ですが、初めての体験と驚きは、私たちの周りに常に存在しています。<br>
                <br>
                ReGroupは、未来への一歩、未知への挑戦、そして可能性の追求を象徴します。私たちは、時代の変化に進んで対応し、あなたの新しい未来を共に築くためにここにいます。<br>
                一緒に、未来を創造しましょう。
            </section>
        </article>
        <!-- トータルサポート -->
        <article>
            <section class="topTortalSupportWrapper">
                <div class="supportLeft gothic-font">
                    TORTAL SUPPORT
                </div>
                <div class="supportRight">
                    <ul class="supportNav">
                        <li><a href="<?php echo $urls['electrical']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink01.png" alt="電気工事全般のサポート"><br><span>電気工事全般</span></a>
                        </li>
                        <li><a href="<?php echo $urls['sweets']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink02.png" alt="スィーツ製品のサポート"><br><span>スィーツ</span></a></li>
                        <li><a href="<?php echo $urls['apparel']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink03.png" alt="ファッション業界のサポート"><br><span>ファッション</span></a>
                        </li>
                        <li><a href="<?php echo $urls['automotive']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink04.png" alt="自動車販売のサポート"><br><span>自動車販売</span></a></li>
                    </ul>
                    <div class="supportNavDescription">
                        理想的なライフスタイルを叶えるためのトータルサポート。<br>
                        電気工事からスィーツ、ファッション、そして自動車販売まで、<br>
                        幅広い分野でお客様のニーズに応えます。<br>
                        品質とサービスの両面で妥協なく、安心してご利用いただける製品やサービスを提供しています。<br>
                        研鑽とユーザーニーズを大切にし、お客様の生活をより快適で豊かなものにするために努めています。
                    </div>
                </div>
            </section>
            <section class="topTortalSupportBanner">
                <div class="supportBanner">
                <a href="<?php echo $urls['business']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topSupportBanner.png" alt="ReGroupの事業内容をもっと見る"><span>ReGroupの事業内容を<br>
                            もっと見る　　→</span></a><!-- 矢印　要修正 -->
                </div>
            </section>
        </article>

        <!-- 事業内容イメージスライドショー -->
        <article class="topSubSlideWrapper">
            <h2>IMAGE</h2>
            <div class="custom-slider">
                <?php
                $custom_images = array(
                    'custom_slide1.jpg',
                    'custom_slide2.jpg',
                    'custom_slide3.jpg',
                    'custom_slide4.jpg',
                    'custom_slide5.jpg',
                    'custom_slide6.jpg',
                    'custom_slide7.jpg'
                );
                foreach ($custom_images as $custom_image) {
                    echo '<div class="custom-slide"><img src="' . get_template_directory_uri() . '/images/' . $custom_image . '" alt="Custom Slide"></div>';
                }
                ?>
            </div>
        </article>

        <!-- 施行実績 -->
        <article>
            <section class="topResultWrapper">
                <div class="resultLeft gothic-font">
                    CONSTRUCTION RESULTS
                </div>
                <div class="resultRight gothic-font">
                    <h2>電気工事事業での施工実績をご紹介</h2>
                    <ul class="resultNav">
                        <li class="resultNaviItem"><a href="">
                            <a href="#" class="resultNaviLink">
                                <span class="resultNaviImage"><img src="<?php echo get_template_directory_uri(); ?>/images/topResultThamn.png" alt=""></span>
                                <span class="resultNaviTitle">土木電気工事</span>
                                <span class="resultNaviDate">2024.04.10</span>
                                <p class="resultNaviDescription">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                                </p>
                            </a>
                        </li>
                        <li class="resultNaviItem">
                            <a href="#" class="resultNaviLink">
                                <span class="resultNaviImage"><img src="<?php echo get_template_directory_uri(); ?>/images/topResultThamn.png" alt=""></span>
                                <span class="resultNaviTitle">電気設備工事</span>
                                <span class="resultNaviDate">2024.04.11</span>
                                <p class="resultNaviDescription">
                                    このテキストは別の内容です。このテキストは別の内容です。このテキストは別の内容です。このテキストは別の内容です。このテキストは別の内容です。このテキストは別の内容です。
                                </p>
                            </a>
                        </li>
                        <li class="resultNaviItem">
                            <a href="#" class="resultNaviLink">
                                <span class="resultNaviImage"><img src="<?php echo get_template_directory_uri(); ?>/images/topResultThamn.png" alt=""></span>
                                <span class="resultNaviTitle">通信工事</span>
                                <span class="resultNaviDate">2024.04.12</span>
                                <p class="resultNaviDescription">
                                    また異なるテキストが入ります。また異なるテキストが入ります。また異なるテキストが入ります。また異なるテキストが入ります。また異なるテキストが入ります。また異なるテキストが入ります。
                                </p>
                            </a>
                        </li>
                        <li class="resultNaviItem">
                            <a href="#" class="resultNaviLink">
                                <span class="resultNaviImage"><img src="<?php echo get_template_directory_uri(); ?>/images/topResultThamn.png" alt=""></span>
                                <span class="resultNaviTitle">配線工事</span>
                                <span class="resultNaviDate">2024.04.13</span>
                                <p class="resultNaviDescription">
                                    異なるテキストがここに入ります。異なるテキストがここに入ります。異なるテキストがここに入ります。異なるテキストがここに入ります。異なるテキストがここに入ります。異なるテキストがここに入ります。
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="ResultButton">
                        <a href="#">MORE</a>
                    </div>
                </div>
            </section>
        </article>
    </div>
    <!-- メインラッパー終 -->

    <!-- 会社概要 -->
    <article>
        <section class="topCompanyWrapper">
            <div>
                <ul>
                    <li>
                        <a href="<?php echo $urls['company']; ?>#sdgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topSdgsImg.png" alt="">
                            <span>SDG'sの取り組みについて　→</span>
                        </a>
                    </li>

                    <li>
                    <a href="<?php echo $urls['electrical']; ?>#sdgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topBusinessImg.png" alt="">
                            <span>電気工事の種類について　→</span>
                        </a>
                    </li>
                    <li>
                    <a href="<?php echo $urls['privacy']; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topContactImg.png" alt="">
                            <span>個人情報の取扱いについて　→</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </article>
    <!-- メインラッパー -->
    <div class="mainWrapper">

        <!-- 採用バナー -->
        <article>
            <section class="topRecruitBanner">
            <a href="<?php echo $urls['careers']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topRecruitBanner.png" alt=""></a>
            </section>
        </article>

        <!-- 取扱い商品バナー -->
        <article>
            <section class="topAparelWrapper">
                <h2>取扱い商品</h2>
                <div class="flexWrapper">
                    <div>
                        <a href="https://www.instagram.com/sessions_sweets_niwatasu" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topSweetBanner.png" alt="">
                            <span>フルーツサンド</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/sessions_garden_niwatasu" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topAparelBanner.png" alt="">
                            <span>ファッション</span>
                        </a>
                    </div>
                </div>
                <div class="shopingBtn">
                    <a href="https://sessions-japan.com/" target="_blank">ファッションショッピングサイトへ</a>
                </div>

                <div class="notification-container">
                    <div class="notification-list">
                        <ul>
                            <?php
                            // カスタム投稿タイプ 'news_sessions' の最新の 30 件を取得
                            $args = array(
                                'post_type' => 'news_sessions',
                                'posts_per_page' => 30,
                            );
                            $news_query = new WP_Query($args);

                            // 投稿が存在する場合
                            if ($news_query->have_posts()) :
                                while ($news_query->have_posts()) : $news_query->the_post();
                                    $post_date = get_the_date('Y.m.d');
                                    $link_url = get_post_meta(get_the_ID(), 'link_url', true);
                            ?>
                                    <li>
                                        <a href="<?php echo esc_url($link_url); ?>" target="_blank">
                                            <span><?php echo esc_html($post_date); ?></span>
                                            <?php the_title(); ?>
                                        </a>
                                    </li>
                                <?php endwhile;
                                wp_reset_postdata(); // クエリをリセット
                            else : ?>
                                <li>お知らせはありません。</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>


            </section>
        </article>
        <!-- PICK UP -->
        <article>
            <section class="topPickupWrapper">
                <div class=" gothic-font pickupLeft">
                    PICK UP
                </div>
                <div class=" pickupRight">
                    <ul class=" pickupNav">
                        <li><a href="<?php echo $urls['artisans']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topPickupListImg.png" alt="職人名鑑"><br>職人名鑑</a>
                        </li>
                        <li><a href="<?php echo $urls['careers']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topPickupBusinessImg.png" alt="会社概要"><br>「アットホーム」よりも<br>
                                ファミリーと言われる企業へ</a></li>
                    </ul>
                </div>
            </section>
        </article>

    </div>
    <!-- メインラッパー終 -->

</main>
<?php get_footer(); ?>