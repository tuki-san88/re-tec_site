<?php
/*
 * Template Name: footer.php
 */
?>
<?php
// 会社案内f
$home = esc_url(home_url("/"));
// 事業案内
$company = esc_url(home_url("/company/"));
// 電気工事事案
$business = esc_url(home_url("/business/"));
// アパレル事案
$electrical = esc_url(home_url("/electrical-construction/"));
// スイーツ事業
$sweets = esc_url(home_url("/sweets/"));
// 自動車工事事案
$automotive = esc_url(home_url("/automotive/"));
// 採用について
$careers = esc_url(home_url("/careers/"));
// 事業所一覧
$offices = esc_url(home_url("/offices/"));
// 施工実績（一覧）
$Archive = esc_url(home_url("/"));
// 施工実績（詳細）
$details = esc_url(home_url("/"));
// プライバシーポリシー
$privacy = esc_url(home_url("/"));
// お問い合わせ
$contact = esc_url(home_url("/"));

?>
<footer class="footer">
  <div class="footer__inner">
    <div class="footer__contents">
      <div class="footer__main">
        <div class="footer__head">
          <div class="footer__logo">
            <?php
            $args = [
              'pictureImg' => 'footerLogo',
              'spImg' => 'true',
              'spImgName' => '',
              'alt' => '',
              'file' => '.png',
              'webp' => '',
              'pcWidth' => '294',
              'pcHeight' => '219',
              'spWidth' => '108',
              'spHeight' => '81',
              'async' => 'true',
              'lazy' => 'true',
            ];
            get_template_part('tmp/picture', null, $args);
            ?>
          </div>
        </div>
        <div class="footer__body">
          <div class="footer__sns">
            <div class="footer__snsTitle">公式アカウント</div>
            <ul class="footer__snsLists">
              <?php
              $snsLists = array(
                array(
                  "title" => "Re-tec株式会社",
                  "link" => "",
                  "image" => "/images/sub/icon_instagram.png",
                ),
                array(
                  "title" => "SessionsGarden",
                  "link" => "",
                  "image" => "/images/sub/icon_instagram.png",
                ),
                array(
                  "title" => "Sessions",
                  "link" => "",
                  "image" => "/images/sub/icon_instagram.png",
                ),
              );
              ?>
              <?php foreach ($snsLists as $snsList) { ?>
                <li class="footer__snsList">
                  <p class="footer__snsText"><?php echo $snsList["title"]; ?></p>
                  <a href="<?php echo $aboutList["link"]; ?>" target="_blank" class="footer__snsLink"><img src="<?php echo get_template_directory_uri() ?><?php echo $snsList["image"]; ?>" alt=""></a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="footer__bottom">
          <address>
            <div class="footer__adBlock">
              <p class="footer__adText">〒520-2277</p>
              <p class="footer__adText">滋賀県大津市関津3丁目5-6</p>
            </div>
            <div class="footer__adBlock">
              <p class="footer__adTel">077-536-6594</p>
              <p class="footer__adText">事務所　平日9：00～15：00</p>
            </div>
          </address>
        </div>
      </div>
      <div class="footer__sub">
        <div class="footer__listWrap">
          <ul class="footer__lists">
            <li class="footer__list"><a href="<?php echo $home; ?>">トップ</a></li>
            <li class="footer__list"><a href="<?php echo $company; ?>">会社案内</a></li>
            <li class="footer__list"><a href="<?php echo $business; ?>">事業案内</a>
              <ul class="footer__subLists">
                <li class="footer__subList"><a href="<?php echo $electrical; ?>">アパレル部門</a></li>
                <li class="footer__subList"><a href="<?php echo $sweets; ?>">スィーツ部門</a></li>
                <li class="footer__subList"><a href="<?php echo $electrical; ?>">電気工事部門</a></li>
                <li class="footer__subList"><a href="<?php echo $automotive; ?>">自動車部門</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="footer__listWrap">
          <ul class="footer__lists">
            <li class="footer__list"><a href="<?php echo $offices; ?>">事業所一覧</a></li>
            <li class="footer__list"><a href="<?php echo $careers; ?>">採用について</a></li>
            <li class="footer__list"><a href="<?php echo $topics; ?>">職人名鑑</a></li>
            <li class="footer__list"><a href="<?php echo $Archive; ?>">施工実績（一覧）</a>
              <ul class="footer__subLists">
                <li class="footer__subList"><a href="<?php echo $details; ?>">施工実績（詳細）</a></li>
              </ul>
            </li>
            <li class="footer__list"><a href="<?php echo $privacy; ?>">プライバシーポリシー</a></li>
            <li class="footer__list"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>