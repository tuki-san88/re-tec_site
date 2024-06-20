<?php
/*
 * Template Name: 事業所一覧
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
      'img' => 'sub/img_subMv_office',
      'title' => '事業所一覧',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>

    <div class="secOfficeMap secOfficeMap-l">
      <div class="secOfficeMap__inner inner">
        <?php
        $args = [
          'pictureImg' => 'sub/img_office_map',
          'spImg' => 'true',
          'spImgName' => '',
          'alt' => '',
          'file' => '.jpg',
          'webp' => 'true',
          'pcWidth' => '',
          'pcHeight' => '',
          'spWidth' => '',
          'spHeight' => '',
          'async' => '',
          'lazy' => '',
        ];
        get_template_part('tmp/picture', null, $args);
        ?>
      </div>
    </div>
    <!-- 各事業所 -->
    <!-- $officeLists配列内でiframeを挿入するときはiframe内のダブルクォーテーションをシングルクォーテーションに変えないとエラーが出ます。 -->
    <div class="secOfficeContents secOfficeContents-l">
      <!-- 本社 -->
      <div class="secOfficeContents__item">
        <div class="secOfficeContents__head">
          <h2 class="secOfficeContents__title secTitle">ReGroup 本社</h2>
        </div>
        <div class="secOfficeContents__body">
          <div class="secOfficeContents__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/sub/img_office_main.jpg" alt="">
          </div>
          <div class="secOfficeContents__text">
            <p class="baseText">
              本社は、滋賀県大津市関津に位置しています。<br>
              <br>
              関津は大津市の中心部に位置し、交通の便が良く、周辺には商業施設や公共施設が充実しています。<br>
              当社の本社では、経営企画や営業、人事などの各部署が一堂に集結し、チームワークを活かした事業展開を行っています。<br>
              <br>
              また、地域社会とのつながりを大切にし、地域貢献活動にも積極的に参加しています。
            </p>
          </div>
        </div>
        <div class="secOfficeContents__bottom">
          <div class="secOfficeContents__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.093558756266!2d135.92017817631265!3d34.929190472839345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60016cbfde1f12ff%3A0x4b7c47bc2c97beab!2z44CSNTIwLTIyNzcg5ruL6LOA55yM5aSn5rSl5biC6Zai5rSl77yT5LiB55uu77yV4oiS77yW!5e0!3m2!1sja!2sjp!4v1718776143717!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <!-- Sessions スィーツ・アパレル部門 -->
      <div class="secOfficeContents__item">
        <div class="secOfficeContents__head">
          <h2 class="secOfficeContents__title secTitle">Sessions スィーツ・アパレル部門</h2>
        </div>
        <div class="secOfficeContents__body">
          <div class="secOfficeContents__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/sub/img_office_sweets.jpg" alt="">
          </div>
          <div class="secOfficeContents__text">
            <p class="baseText">
              Sessionsは、滋賀県草津市の中心部に位置する、地域に根ざしたスィーツとアパレルの専門店です。当店では、新鮮な季節のフルーツを贅沢に使用したフルーツサンドや、カラフルで華やかなパフェなど、目でも楽しめる美味しいスィーツを提供しています。また、アパレルコーナーでは、日本製の洗練された大人服からかわいらしい子供服まで、幅広い品揃えを誇っています。<br>
              <br>
              草津市は、琵琶湖や比良山系などの自然に囲まれた美しい景観が広がる、住みやすい地域です。Sessionsは、そんな自然豊かな環境に溶け込むように店舗を構え、地域の皆様に親しまれています。草津市はまた、歴史や文化が息づく街でもあり、その活気ある市街地において、Sessionsは地域のファッションとスィーツの拠点として愛されています。<br>
              <br>
              草津市にお住まいの方々や観光客の皆様に、おしゃれなアイテムと美味しいスィーツを提供し、心温まるサービスでお出迎えするSessionsで、特別なひとときをお過ごしください。
            </p>
          </div>
        </div>
        <div class="secOfficeContents__bottom">
          <div class="secOfficeContents__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.093558756266!2d135.92017817631265!3d34.929190472839345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60016cbfde1f12ff%3A0x4b7c47bc2c97beab!2z44CSNTIwLTIyNzcg5ruL6LOA55yM5aSn5rSl5biC6Zai5rSl77yT5LiB55uu77yV4oiS77yW!5e0!3m2!1sja!2sjp!4v1718776143717!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>