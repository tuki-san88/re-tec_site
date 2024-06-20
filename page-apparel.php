<?php
/*
 * Template Name: アパレル
 */
?>
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>
<?php get_header(); ?>
<main>
  <div class="sub">
    <!-- 下層MV mod = st_img_sp_none st_yellow st_pink st_green st_green-light -->
    <?php
    $args = [
      'mod' => 'st_green-light',
      'img' => 'sub/img_subMv_apparel',
      'title' => 'アパレル',
      'text' => '-Apparel shop-',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- アパレル -->
    <div class="secApparelContent1 secContent1-l">
      <!-- メディアパーツ mod = st_yellow st_pink st_green st_green-light reverse -->
      <?php
      $args = [
        'mod' => 'st_green-light',
        [
          'title' => '日本製の洗練された<br>大人服と子供服の専門店',
          'text' => '日本製の洗練された大人服と子供服の専門店では、日本の伝統的な職人技術と洗練されたデザインが融合した衣料品を取り扱っています。<br>大人服には、上品な素材と丁寧な縫製が施され、着心地と耐久性を兼ね備えたアイテムが揃っています。子供服には、遊び心溢れるデザインと安全性に配慮した素材が使用され、お子様の成長と活動に適したアイテムが豊富に取り揃えられています。お客様には、日本ならではの品質とデザインを楽しんでいただけるだけでなく、家族みんなでお買い物を楽しんでいただける居心地の良い空間を提供しています。店内では、スタッフが丁寧にサポートし、お客様のニーズに合ったアイテムをご提案します。',
          'img' => 'sub/img_media_apparel1',
        ],
        [
          'title' => '接客コンセプトは「もうひとりの家族」 <br>お客様とスタッフが一緒になって楽しめ、<br>気軽に来店して頂けるお店',
          'text' => '当店の接客コンセプトは「もうひとりの家族」です。<br>お客様とスタッフが一緒になって楽しめるアットホームな雰囲気を大切にし、気軽に来店していただけるお店を目指しています。<br><br>セッションズでは、お客様が家族のようにくつろげる場所を提供し、スタッフはお客様とのコミュニケーションを大切にしています。どんな些細な質問や要望にも丁寧に対応し、お客様がリラックスしてショッピングを楽しんでいただけるよう心がけています。<br>また、お子様連れのお客様やお一人様でも、皆様が安心してお店に立ち寄れるような環境を整えています。私たちの店舗は、お客様とスタッフが一体となって楽しめる、居心地の良い場所を提供しています。<br>忙しい日常や外出先で、新鮮なフルーツがたっぷり詰まったサンドイッチを手に取って、健康的で美味しい軽食を楽しんでいただけます。<br><br>わざわざ店内に入らなくても、美味しいフルーツサンドを気軽にお持ち帰りいただけるので、お客様のスケジュールに合わせてご利用いただけます。',
          'img' => 'sub/img_media_apparel2',
        ],
      ];
      get_template_part('tmp/media', null, $args);
      ?>
    </div>
    <!-- ブランド -->
    <?php
    $blandLogoLists = array(
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_tumugu.jpg',
        "alt" => "tumugu",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_stample.jpg',
        "alt" => "stample",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_frankygrow.jpg',
        "alt" => "frankygrow",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_estroislose.jpg',
        "alt" => "ESTROISLOSE",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_tang.jpg',
        "alt" => "TANG",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_bedsideDrama.jpg',
        "alt" => "BEDSIDEDRAMA",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_go-to-hollywood.jpg',
        "alt" => "GO TO HOLLYWOOD",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_denimm-dungaree.jpg',
        "alt" => "DENIMM DUNGAREE",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_arch&line.jpg',
        "alt" => "ARCH&LINE",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/needle-works.jpg',
        "alt" => "NEEDLE WORKS",
      ),
      array(
        "logo" => get_template_directory_uri() . '/images/sub/brandBanner_nunuforme.jpg',
        "alt" => "nunuforme",
      ),
    );
    ?>
    <div class="secBland secBland-l">
      <div class="secBland__inner inner">
        <h2 class="secBland__title secTitleSub">brand</h2>
        <div class="secBland__body">
          <div class="secBland__items">
            <?php foreach ($blandLogoLists as $blandLogoList) { ?>
              <div class="secBland__item"><img src="<?php echo $blandLogoList["logo"]; ?>" alt="<?php echo $blandLogoList["alt"]; ?>"></div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- image -->
    <section class="secSlideContent secSlideContent-l2">
      <div class="secSlideContent__inner inner">
        <h2 class="secSlideContent__title secTitleSub">image</h2>
        <div class="secSlideContent__body">
          <?php
          $args = [
            [
              'img' => get_template_directory_uri() . '/images/sub/img_apparel_content1.jpg',
            ],
            [
              'img' => get_template_directory_uri() . '/images/sub/img_media_apparel1.jpg',
            ],
            [
              'img' => get_template_directory_uri() . '/images/sub/img_media_apparel2.jpg',
            ],
          ];
          get_template_part('tmp/imgSlide', null, $args);
          ?>
        </div>
      </div>
    </section>
    <!-- 撮影 -->
    <section class="secPhoto secPhoto-l">
      <div class="secPhoto__head">
        <hgroup>
          <h2 class="secPhoto__title secTitle">撮影</h2>
          <p class="secPhoto__titleSub secTitleSub">-Photograph-</p>
        </hgroup>
      </div>
      <div class="secPhoto__body">
        <?php
        $args = [
          'mod' => 'st_green-light',
          [
            'title' => '子供イベントが豊富な<br>アパレル業界では<br>珍しいショップ',
            'text' => '当店では、お子様を中心に据えた様々な魅力的なイベントを企画・開催しております。例えば、一日子供店長になる特別な体験や、子供服のポップアップショップにて新しいトレンドアイテムを楽しむイベント、そして才能豊かな作家さんの作品を一堂に集めたイベントなど、多岐にわたります。これにより、お子様たちだけでなく、ご家族やアートやファッションに興味を持つ様々な方々を巻き込んで、楽しいひとときを提供しています。<br><br>当社のイベント情報は、公式Instagramで随時更新しております。イベントの開催予定や当日の雰囲気など、最新情報をご確認いただけますので、ぜひ以下のバナーからフォローしていただければ嬉しいです。新しい発見や素敵な瞬間を共有できるよう、是非ともご参加いただき、お楽しみください。お子様たちやご家族と一緒に、特別な時間をお過ごしいただけることを心よりお待ちしております。',
            'img' => 'sub/img_media_apparel3',
          ],
        ];
        get_template_part('tmp/media', null, $args);
        ?>
      </div>
      <div class="secPhoto__bottom">
        <div class="secPhoto__bnr">
          <a href="" class="hoverOpacity">
            <?php
            $args = [
              'pictureImg' => 'sub/bnr_sessions2',
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