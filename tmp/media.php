<div class="media <?php echo $args['mod'] ?>">
  <?php foreach ($args as $key => $arg) : ?>
    <?php if ($key !== 'mod') : ?>
      <div class="media__item">
        <div class="media__content">
          <div class="media__textWrap">
            <p class="media__title"><?php echo $arg['title'] ?></p>
            <p class="media__text baseText"><?php echo $arg['text'] ?></p>
          </div>
        </div>
        <div class="media__content">
          <div class="media__imgWrap">
            <div class="media__img">
              <?php
              $args = [
                'pictureImg' => $arg['img'],
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
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>