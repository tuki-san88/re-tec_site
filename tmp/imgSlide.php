<div class="imgSlide">
  <div class="swiper js-img-swiper">
    <div class="swiper-wrapper">
      <?php foreach($args as $arg): ?>
      <div class="swiper-slide">
        <img src="<?php echo $arg['img'] ?>" alt="">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>