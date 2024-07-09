<?php
/*
 * Template Name: 実績詳細
 */
?>
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>
<?php get_header(); ?>

<main>

    <div class="sub">
        <!-- 下層MV mod = img_sp_none(SP時は画像がない) st_yellow st_pink st_green st_green-light -->
        <?php
        $args = [
            'mod' => 'img_sp_none',
            'img' => 'sub/img_subMv_actuarial',
            'title' => '施工実績',
            'text' => '',
        ];
        get_template_part('tmp/subMv', null, $args);
        ?>
        <!-- 実績詳細 -->
        <div class="actualResult">
            <div class="actualResult__head">
                <div class="actualResult__img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'クラス名', 'alt' => the_title_attribute('echo=0'))); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="actualResult__content1">
                <div class="actualResult__title secTitle"><?php the_title(); ?></div>
                <div class="actualResult__block">
                    <div class="actualResult__title__inner inner">
                        <div class="actualResult__lists">
                            <?php if ($start_date = get_field('start_date')) : ?>
                                <div class="actualResult__list"><span>施工開始日</span><span><?php echo $start_date; ?></span></div>
                            <?php endif; ?>
                            <?php if ($end_date = get_field('end_date')) : ?>
                                <div class="actualResult__list"><span>施工完了日</span><span><?php echo $end_date; ?></span></div>
                            <?php endif; ?>
                            <?php if ($electricity_type = get_field('electricity_type')) : ?>
                                <div class="actualResult__list"><span>電気工事種類</span><span><?php echo $electricity_type; ?></span></div>
                            <?php endif; ?>
                            <?php if ($location = get_field('location')) : ?>
                                <div class="actualResult__list"><span>所在地</span><span><?php echo $location; ?></span></div>
                            <?php endif; ?>
                            <?php /* //ひとまず空白
              <div class="actualResult__list"><span>テキスト</span><span><?php echo get_field('additional_text_1'); ?></span></div>
              <div class="actualResult__list"><span>テキスト</span><span><?php echo get_field('additional_text_2'); ?></span></div>
              <div class="actualResult__list"><span>テキスト</span><span><?php echo get_field('additional_text_3'); ?></span></div>
              <div class="actualResult__list"><span>テキスト</span><span><?php echo get_field('additional_text_4'); ?></span></div>
              */ ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="actualResult__content2">
                <div class="media st_yellow sp_color_none">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <?php
                        $text = get_field("project_section_{$i}_text");
                        $image = get_field("project_section_{$i}_image");
                        if ($text || $image) : ?>
                            <div class="media__item">
                                <div class="media__content media__content--1">
                                    <div class="media__textWrap">
                                        <p class="media__text baseText">
                                            <?php echo $text; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="media__content media__content--2">
                                    <div class="media__imgWrap">
                                        <div class="media__img">
                                            <?php if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="actualResult__content3 baseText">
                <div class="actualResult__content3__inner inner">
                    <p><?php the_field('additional_content_3'); ?></p>
                </div>
            </div>
            <div class="actualResult__pagination">
                <div class="actualResult__paginationItems baseText">
                    <div class="actualResult__paginationItem">
                        <?php previous_post_link('%link', '前の記事'); ?>
                    </div>
                    <div class="actualResult__paginationItem">
                        <a href="<?php echo $urls['Archive']; ?>">一覧</a>
                    </div>
                    <div class="actualResult__paginationItem">
                        <?php next_post_link('%link', '次の記事'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 関連情報 -->
        <div class="subInfo subInfo-2">
            <div class="inner">
                <?php
                $args = [
                    [
                        'link' => $urls['contact'],
                        'img' => 'sub/img_related_contact.jpg',
                        'title' => 'お問い合わせ',
                        'titleColor' => 'gray',
                        'position' => 'positionBottom',
                    ],
                    [
                        'link' => $urls['careers'],
                        'img' => 'sub/img_related_recruit.jpg',
                        'title' => '採用について',
                        'titleColor' => 'white',
                        'position' => 'positionTop',
                    ],
                ];
                get_template_part('tmp/relatedInfo', null, $args);
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>