<?php
/*
 * Template Name: 事業案内
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
      'img' => 'sub/img_subMv_business',
      'title' => '事業案内',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- 各事業 -->
    <div class="secBusiness">
      <?php
      $businessLists = array(
        array(
          "link" => "#electric",
          "img" => "sub/img_businessLink1",
          "text" => "電気工事",
        ),
        array(
          "link" => "#sweets",
          "img" => "sub/img_businessLink2",
          "text" => "スィーツ",
        ),
        array(
          "link" => "#apparel",
          "img" => "sub/img_businessLink3",
          "text" => "アパレル",
        ),
        array(
          "link" => "#automotive",
          "img" => "sub/img_businessLink4",
          "text" => "自動車",
        ),
      );
      ?>
      <?php foreach ($businessLists as $businessList) { ?>
        <a href="<?php echo $businessList["link"]; ?>" class="secBusiness__item hoverOpacity">
          <div class="secBusiness__img">
            <?php
            $args = [
              'pictureImg' => $businessList['img'],
              'spImg' => '',
              'spImgName' => '',
              'alt' => '',
              'file' => '.jpg',
              'webp' => 'true',
              'pcWidth' => '',
              'pcHeight' => '',
              'spWidth' => '',
              'spHeight' => '',
              'async' => 'true',
              'lazy' => 'true',
            ];
            get_template_part('tmp/picture', null, $args);
            ?>
          </div>
          <p class="secBusiness__text"><?php echo $businessList["text"]; ?><span></span></p>
        </a>
      <?php } ?>
    </div>
    <!-- 各事業詳細 -->
    <div class="secBusinessDetail-l">
      <?php
      $businessDescLists = array(
        array(
          "id" => "electric",
          "title" => "電気工事",
          "subTitle" => "-Electrical construction-",
          "img" => "sub/img_business_desc1",
          "text" => "
          私たちは、新時代の建設業において活気に満ち、<br class='sp-only'>進化し続ける電気工事業です。<br>
          若手中心のチームが常に向上心を持ち、<br class='sp-only'>確実かつ丁寧な工事を提供します。<br><br class='sp-only'>
          地域の発展にも貢献し、琵琶湖総合保全設備計画や<br>
          MLGs(Mother Lake Goals)に賛同し、<br class='sp-only'>実践しています。<br>
          今後は、ワンストップ工事を提供することでお客様のニーズに応える信頼ある企業を目指します。
          ",
          "link" => $urls['electrical'],
        ),
        array(
          "id" => "sweets",
          "title" => "スィーツ",
          "subTitle" => "-Fruit sandwich sweets-",
          "img" => "sub/img_business_desc2",
          "text" => "
          自然とフルーツサンドの美味しさを組み合わせ、<br>
          心地よい空間を提供しています。<br>
          季節のフルーツや地元の素材を活かし、<br class='sp-only'>SNS映えする商品を提供。<br>
          ナチュラルな雰囲気とアットホームな接客で、<br>
          誰もが気軽に立ち寄れる場所を目指します。
          ",
          "link" => $urls['sweets'],
        ),
        array(
          "id" => "apparel",
          "title" => "アパレル",
          "subTitle" => "-Apparel shop-",
          "img" => "sub/img_business_desc3",
          "text" => "
          カジュアルなアイテムからオリジナルブランドまで、幅広いアイテムを展開。<br>
          インフルエンサーとのコラボレーションや<br class='sp-only'>新しいブランド展開で、<br>
          お客様に特別な体験を提供。<br>
          心と体を満たすナチュラルな雰囲気の中で、<br class='sp-only'>お客様の笑顔をお届けします。
          ",
          "link" => $urls['apparel'],
        ),
        array(
          "id" => "automotive",
          "title" => "自動車",
          "subTitle" => "-Automobile business-",
          "img" => "sub/img_business_desc4",
          "text" => "
          中古車販売から損害保険、板金、カーコーティングまで、幅広いサービスを提供しています。<br>
          高品質な中古車の販売だけでなく、<br class='sp-only'>万が一の事故に備えた損害保険や、<br>
          車体の傷やへこみの修理を行う板金サービスも<br class='sp-only'>ご利用いただけます。<br>
          さらに、車体の保護や美観を保つための<br class='sp-only'>カーコーティングも行っています。<br>
          安心して快適なカーライフをサポートします。
          ",
          "link" => $urls['automotive'],
        ),
      );
      ?>
      <?php foreach ($businessDescLists as $businessDescList) { ?>
        <section id="<?php echo $businessDescList["id"]; ?>" class="secBusinessDetail">
          <hgroup>
            <h2 class="secBusinessDetail__title secTitle"><?php echo $businessDescList["title"]; ?></h2>
            <p class="secBusinessDetail__subTitle secTitleSub"><?php echo $businessDescList["subTitle"]; ?></p>
          </hgroup>
          <div class="secBusinessDetail__body"></div>
          <div class="secBusinessDetail__img">
            <?php
            $args = [
              'pictureImg' => $businessDescList['img'],
              'spImg' => 'true',
              'spImgName' => '',
              'alt' => '',
              'file' => '.jpg',
              'webp' => 'true',
              'pcWidth' => '420',
              'pcHeight' => '420',
              'spWidth' => '150',
              'spHeight' => '150',
              'async' => 'true',
              'lazy' => 'true',
            ];
            get_template_part('tmp/picture', null, $args);
            ?>
          </div>
          <p class="secBusinessDetail__text baseText"><?php echo $businessDescList["text"]; ?></p>
          <div class="secBusinessDetail__btn">
            <a href="<?php echo $businessDescList["link"]; ?>" class="btnBase hoverOpacity">more</a>
          </div>
        </section>
      <?php } ?>
    </div>
    <!-- 関連情報 -->
    <div class="subInfo">
      <div class="inner">
        <?php
        $args = [
          [
            'link' => $urls['careers'],
            'img' => 'sub/img_related_recruit.jpg',
            'title' => '採用について',
            'titleColor' => 'white',
            'position' => 'positionTop',
          ],
          [
            'link' => $urls['offices'],
            'img' => 'sub/img_related_office.jpg',
            'title' => '事業所一覧',
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