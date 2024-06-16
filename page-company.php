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