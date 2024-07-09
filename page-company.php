<?php
/*
 * Template Name: 会社案内
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
      'mod' => '',
      'img' => 'sub/img_subMv_company',
      'title' => '会社案内',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- ReGroupの代表からのご挨拶 -->
    <div class="secGreeting secGreeting-l">
      <div class="secGreeting__inner inner">
        <div class="secGreeting__contents">
          <div class="secGreeting__textBlock">
            <div class="secGreeting__textWrap">
              <h2 class="secGreeting__title">ReGroupの代表からのご挨拶</h2>
              <p class="secGreeting__text baseText">
                「令和という新しい時代、若手を中心とした、進化する建設業の在り方で活気があり信用に満ちた事業を目指します。」<br>
                <br>
                ReGroupを代表して、皆様にご挨拶申し上げます。私たちは新たな時代、新たな価値観に向けて一歩前進し、多様性と革新を大切にしています。電気工事事業、アパレル事業、飲食事業、自動車販売事業の4つの異なる分野で活動し、建設業の進化と活気を推進することに力を注いでいます。<br>
                <br>
                私たちは「人生初」の体験を尊重し、それが未来への鍵であると信じています。驚き、興奮、感動。時代の変化と技術の進歩にもかかわらず、初めての瞬間と驚きは私たちの周りにいつも存在しています。<br>
                <br>
                ReGroupは未来への一歩、未知への挑戦、そして可能性の探求を象徴しています。私たちは時代の変化に前向きに対応し、新たな未来を築くお手伝いをすることを誇りに思っています。<br>
                <br>
                未来への一歩を踏み出しましょう。一緒に新しい時代を切り拓きましょう。
              </p>
            </div>
            <p class="secGreeting__name"><img src="<?php echo get_template_directory_uri() ?>/images/sub/name_miyamoto.svg" width="462" height="94" alt="宮本 佳士"></p>
          </div>
          <div class="secGreeting__imgBlock">
            <img src="<?php echo get_template_directory_uri() ?>/images/sub/img_president.png?20240710" width="462" height="94" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- 理念 -->
    <section class="secPhilosophy secPhilosophy-l">
      <div class="secPhilosophy__inner inner">
        <h2 class="secPhilosophy__title secTitle">理念</h2>
        <div class="secPhilosophy__body">
          <p class="secPhilosophy__text">
            令和という新しい時代<br>
            若手を中心とした、進化する建設業の在り方で<br>
            活気があり信用に満ちた事業を目指します。
          </p>
        </div>
      </div>
    </section>
    <!-- 会社概要 -->
    <section class="secCompanyView secCompanyView-l">
      <div class="secCompanyView__inner inner">
        <h2 class="secCompanyView__title secTitle">会社概要</h2>
        <div class="secCompanyView__body">
          <!-- 会社情報、求人情報 'mod' => 'st_done'で「現在募集は行なっておりません」の表示をする -->
          <?php
          $args = [
            'mod' => '',
            [
              'item' => '会社名',
              'description' => '株式会社Re-tec',
            ],
            [
              'item' => '所在地',
              'description' => '〒520-2277<br>滋賀県大津市関津3丁目5-6',
            ],
            [
              'item' => '設立',
              'description' => '2019年6月3日',
            ],
            [
              'item' => '従業員数',
              'description' => '20名',
            ],
            [
              'item' => '事業内容',
              'description' => '高圧電気設備(新設・改修工事）<br>低圧電気設備<br>電気土木工事<br>空調設備工事<br>計装工事<br>飲食<br>アパレル<br>自動車販売',
            ],
            [
              'item' => '主な取引先銀行',
              'description' => '京都銀行<br><br>滋賀銀行<br><br>滋賀中央信用金庫',
            ],
            [
              'item' => '建設業番号',
              'description' => '電気工事業 一般 般-3第 13577号<br><br>CCUS-　登録済み<br><br>グリーンサイト-　登録済み',
            ],
          ];
          get_template_part('tmp/overview', null, $args);
          ?>
        </div>
      </div>
    </section>
    <!-- SDG'sの取り組みについて -->
    <section class="secSdgs secSdgs-l" id="sdgs">
      <div class="secSdgs__inner">
        <h2 class="secSdgs__title secTitle">SDG'sの取り組みについて</h2>
        <div class="secSdgs__body">
          <div class="secSdgs__img">
            <?php
            $args = [
              'pictureImg' => 'sub/img_sdgs',
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
          <p class="secSdgs__text baseText">
            持続可能なエネルギーへの貢献や<br class="sp-only">
            エネルギー効率の向上を通じて、<br>
            環境への負荷を減らし、<br class="sp-only">
            地域社会により良い未来を提供します。<br>
            <br class="sp-only">
            私たちは、再生可能エネルギーへのシフトや<br class="sp-only">
            省エネルギーのプロジェクトをリードし、<br>
            クリーンで持続可能な未来に向けて<br class="sp-only">
            日々取り組んでおります。
          </p>
        </div>
      </div>
    </section>
    <!-- アクセス -->
    <div class="secMap secMap-l">
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
        ];
        get_template_part('tmp/relatedInfo', null, $args);
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>