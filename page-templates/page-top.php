<?php
$pageId = "top";
/*
 * Template Name: Top Page
 */
get_header(); ?>

<main id="<?php echo $pageId; ?>">

    <!-- メインキャッチのスライドショー -->
    <div class="mainSliderWrapper">
        <div class="main-slider">
            <?php
            $images = array(
                'topMainSlide01.png',
                'topMainSlide02.jpg',
                'topMainSlide03.jpg'
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
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink01.png" alt="電気工事全般のサポート"><br>電気工事全般</a>
                        </li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink02.png" alt="スィーツ製品のサポート"><br>スィーツ</a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink03.png" alt="ファッション業界のサポート"><br>ファッション</a>
                        </li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/topTortalSupportLink04.png" alt="自動車販売のサポート"><br>自動車販売</a></li>
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
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/topSupportBanner.png" alt="ReGroupの事業内容をもっと見る"><span>ReGroupの事業内容を<br>
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
                    'custom_slide1.png',
                    'custom_slide2.png'
                );
                foreach ($custom_images as $custom_image) {
                    echo '<div class="custom-slide"><img src="' . get_template_directory_uri() . '/images/' . $custom_image . '" alt="Custom Slide"></div>';
                }
                ?>
            </div>
        </article>

    </div>
    <!-- メインラッパー終 -->

</main>
<?php get_footer(); ?>