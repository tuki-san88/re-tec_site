<?php
/*
 * Template Name: footer.php
 */
?>
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>

<footer class="footer">
  <div class="footer__inner">
    <div class="footer__contents">
      <div class="footer__main">
        <div class="footer__mainWrap">
          <div class="footer__head">
            <div class="footer__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/footerLogo.png" alt="<?php bloginfo('name'); ?>">
            </div>
          </div>
          <div class="footer__body">
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
        <div class="footer__bottom">
          <div class="footer__sns">
            <div class="footer__snsTitle">公式アカウント</div>
            <ul class="footer__snsLists">
              <?php
              $snsLists = array(
                array(
                  "title" => "Re-tec株式会社",
                  "link" => "",
                  "image" => "sub/icon_instagram.png",
                ),
                array(
                  "title" => "SessionsGarden",
                  "link" => "",
                  "image" => "sub/icon_instagram.png",
                ),
                array(
                  "title" => "Sessions",
                  "link" => "",
                  "image" => "sub/icon_instagram.png",
                ),
              );
              ?>
              <?php foreach ($snsLists as $snsList) { ?>
                <li class="footer__snsList">
                  <p class="footer__snsText"><?php echo $snsList["title"]; ?></p>
                  <a href="<?php echo $snsList["link"]; ?>" target="_blank" class="footer__snsLink hoverOpacity"><img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $snsList["image"]; ?>" alt=""></a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__sub">
        <div class="footer__listWrap">
          <ul class="footer__lists">
            <li class="footer__list"><a href="<?php echo $urls['home']; ?>" class="hoverOpacity">トップ</a></li>
            <li class="footer__list mt"><a href="<?php echo $urls['company']; ?>" class="hoverOpacity">会社案内</a></li>
            <li class="footer__list"><a href="<?php echo $urls['business']; ?>" class="hoverOpacity">事業案内</a>
              <ul class="footer__subLists">
                <li class="footer__subList"><a href="<?php echo $urls['electrical']; ?>" class="hoverOpacity">アパレル部門</a></li>
                <li class="footer__subList"><a href="<?php echo $urls['sweets']; ?>" class="hoverOpacity">スィーツ部門</a></li>
                <li class="footer__subList"><a href="<?php echo $urls['electrical']; ?>" class="hoverOpacity">電気工事部門</a></li>
                <li class="footer__subList"><a href="<?php echo $urls['automotive']; ?>" class="hoverOpacity">自動車部門</a></li>
              </ul>
            </li>
          </ul>
          <ul class="footer__lists">
            <li class="footer__list"><a href="<?php echo $urls['offices']; ?>" class="hoverOpacity">事業所一覧</a></li>
            <li class="footer__list"><a href="<?php echo $urls['careers']; ?>" class="hoverOpacity">採用について</a></li>
            <li class="footer__list"><a href="<?php echo $urls['artisans']; ?>" class="hoverOpacity">職人名鑑</a></li>
            <li class="footer__list"><a href="<?php echo $urls['Archive']; ?>" class="hoverOpacity">施工実績（一覧）</a>
              <ul class="footer__subLists">
                <li class="footer__subList"><a href="<?php echo $urls['details']; ?>" class="hoverOpacity">施工実績（詳細）</a></li>
              </ul>
            </li>
            <li class="footer__list"><a href="<?php echo $urls['privacy']; ?>" class="hoverOpacity">プライバシーポリシー</a></li>
            <li class="footer__list"><a href="<?php echo $urls['contact']; ?>" class="hoverOpacity">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__copy">&copy;2023 株式会社Re-tec All Rights Reserved.</div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>