<?php
/*
 * Template Name: 自動車事業
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
      'mod' => 'st_green',
      'img' => 'sub/img_subMv_automotive',
      'title' => '自動車',
      'text' => '-Automobile business-',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- 自動車事業詳細 -->
    <div class="secAutomobileContent1 secContent1-l">
      <!-- メディアパーツ mod = st_yellow st_pink st_green reverse(PC時左右反転) ver2(titleが一番上に配置) -->
      <?php
      $args = [
        'mod' => 'st_green ver2',
        [
          'title' => '厳選された品質と信頼性の<br class="sp-only">中古車をご提供します！',
          'text' => '当社の中古車販売サービスでは、厳しい基準に基づいて選りすぐられた高品質な中古車をご用意しています。<br><br>お客様のニーズに合わせて幅広いラインナップを取り揃え、安心してお乗りいただける車を提供しています。<br><br>万全の点検とメンテナンスを施し、信頼性の高い中古車をお届けします。',
          'img' => 'sub/img_media_automotive1',
        ],
        [
          'title' => '安心のカバレッジで <br>車の安全をサポート！',
          'text' => '当社の損害保険サービスでは、お客様の車の安全と安心を第一に考えています。<br><br>事故やトラブルに備えて、幅広い保険商品を提供しています。<br>お客様のライフスタイルや予算に合わせて最適なプランをご提案し、万が一の際もスムーズな対応をお約束します。',
          'img' => 'sub/img_media_automotive2',
        ],
        [
          'title' => '車を美しく保護する<br>カーコーティングサービス！',
          'text' => '当社のカーコーティングサービスでは、車の表面を保護し、美しい輝きを与える施工を行っています。<br><br>傷や汚れから車を守り、長期間美しさをキープします。<br><br>お客様の愛車をより一層美しく、長持ちさせるために、カーコーティングのプロフェッショナルが最高の仕上がりをお約束します。',
          'img' => 'sub/img_media_automotive3',
        ],
        [
          'title' => '丁寧な修理で車を元の美しい状態に！',
          'text' => '当社の板金サービスでは、傷や凹みの修理から事故車の修復まで、経験豊富なスタッフが丁寧に作業いたします。<br><br>最新の技術と設備を駆使し、お客様の車を元の美しい状態に戻します。<br><br>安全かつ快適なドライブをサポートするために、板金修理に関するお悩みはお任せください。',
          'img' => 'sub/img_media_automotive4',
        ],
      ];
      get_template_part('tmp/media', null, $args);
      ?>
    </div>
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
            'titleColor' => 'white',
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