<div class="subMv">
  <div class="subMv__title <?php echo $args['mod'] ?>">
    <?php if ($args['text']) : ?>
      <hgroup>
        <h1 class="secTitle"><?php echo $args['title'] ?></h1>
        <p class="subMv__text"><?php echo $args['text'] ?></p>
      </hgroup>
    <?php else : ?>
      <h1 class="secTitle"><?php echo $args['title'] ?></h1>
    <?php endif; ?>
  </div>
  <div class="subMv__img">
    <?php
    $args = [
      'pictureImg' => $args['img'],
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