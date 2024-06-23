<?php
/*
 * Template Name: スィーツ
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
      'mod' => 'st_pink',
      'img' => 'sub/img_subMv_sweets',
      'title' => 'スィーツ',
      'text' => '-Fruit sandwich sweets-',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- お知らせ -->
    <div class="newsBlock">
      <div class="newsBlock__contents">
        <div class="newsBlock__content">
          <ul class="newsBlock__lists">
            <?php for ($count = 0; $count < 10; $count++) { ?>
              <li class="newsBlock__list">
                <a href="" class="hoverOpacity">
                  <span class="newsBlock__date baseText">2024.2.23</span>
                  <span class="newsBlock__title baseText">ここにお知らせ（リンク）のシステム追加</span>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- スイーツ詳細 -->
    <div class="secSweetsContent1 secContent1-l">
     <!-- メディアパーツ mod = st_yellow st_pink st_green reverse(PC時左右反転) ver2(titleが一番上に配置) -->
      <?php
      $args = [
        'mod' => 'st_pink ver2',
        [
          'title' => '滋賀県内県内<br>唯一のフルーツサンド<br class="pc-only">専門店',
          'text' => '当店は滋賀県内唯一のフルーツサンド専門店です。<br><br>地元で採れた新鮮なフルーツを厳選し、独自のレシピで手作りしています。豊富な種類のフルーツを使ったサンドイッチは、見た目も華やかでありながら、口にするとフルーツの甘みと香りが広がります。<br><br>【こんなシーンにピッタリ】<br>お見舞いの手土産や、ママ友会のスィーツ、休日のおやつ、仕事帰りのご褒美等、日々の生活の中で活躍するスィーツとして、幅広いシーンでご利用いただけます。<br>滋賀の自然を感じながら、贅沢なフルーツサンドをお楽しみください。',
          'img' => 'sub/img_media_sweets1',
        ],
        [
          'title' => '店内に入らず<br>気軽にテイクアウト<br>もできます',
          'text' => 'お店に入らずに手軽にテイクアウトできるのが当店の特長です。
          忙しい日常や外出先で、新鮮なフルーツがたっぷり詰まったサンドイッチを手に取って、健康的で美味しい軽食を楽しんでいただけます。<br><br>わざわざ店内に入らなくても、美味しいフルーツサンドを気軽にお持ち帰りいただけるので、お客様のスケジュールに合わせてご利用いただけます。',
          'img' => 'sub/img_media_sweets2',
        ],
      ];
      get_template_part('tmp/media', null, $args);
      ?>
    </div>
    <!-- image -->
    <section class="secSlideContent secSlideContent-l">
      <div class="secSlideContent__inner inner">
        <h2 class="secSlideContent__title secTitleSub">image</h2>
        <div class="secSlideContent__body">
          <?php
          $args = [
            [
              'img' => get_template_directory_uri() . '/images/sub/img_sweets_content1.jpg',
            ],
            [
              'img' => get_template_directory_uri() . '/images/sub/img_media_sweets1.jpg',
            ],
            [
              'img' => get_template_directory_uri() . '/images/sub/img_media_sweets2.jpg',
            ],
          ];
          get_template_part('tmp/imgSlide', null, $args);
          ?>
        </div>
        <div class="secSlideContent__bottom">
          <div class="secSlideContent__bnr">
            <a href="" class="hoverOpacity">
              <?php
              $args = [
                'pictureImg' => 'sub/bnr_sessions',
                'spImg' => 'true',
                'spImgName' => '',
                'alt' => '',
                'file' => '.jpg',
                'webp' => 'true',
                'pcWidth' => '812',
                'pcHeight' => '246',
                'spWidth' => '154',
                'spHeight' => '47',
                'async' => 'true',
                'lazy' => 'true',
              ];
              get_template_part('tmp/picture', null, $args);
              ?>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- アクセス -->
    <div class="secMap secMap-l2">
      <div class="secMap__inner inner">
        <h2 class="secMap__title secTitle">アクセス</h2>
        <div class="secMap__body">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.093558756266!2d135.92017817631265!3d34.929190472839345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60016cbfde1f12ff%3A0x4b7c47bc2c97beab!2z44CSNTIwLTIyNzcg5ruL6LOA55yM5aSn5rSl5biC6Zai5rSl77yT5LiB55uu77yV4oiS77yW!5e0!3m2!1sja!2sjp!4v1718776143717!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- 関連情報 -->
    <div class="subInfo subInfo-1">
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
        ];
        get_template_part('tmp/relatedInfo', null, $args);
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>