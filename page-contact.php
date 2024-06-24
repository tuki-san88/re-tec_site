<?php
/* Template Name: Contact Page */
get_header(); 
?>
<main>
<div class="sub">
    <!-- 下層MV mod = img_sp_none(SP時は画像がない) st_yellow st_pink st_green st_green-light -->
    <?php
    $args = [
      'mod' => '',
      'img' => 'sub/img_subMv_contact',
      'title' => 'お問い合わせ',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>

  <div class="contact-page">
  <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="dac443c" title="コンタクトフォーム"]'); ?>
    </div>
  </div>
</main>
<?php
get_footer();
?>
