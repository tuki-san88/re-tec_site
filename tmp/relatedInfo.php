<div class="relatedInfo">
  <div class="relatedInfo__head">
    <h2 class="secTitle">関連情報</h2>
  </div>
  <div class="relatedInfo__body">
    <div class="relatedInfo__items">
      <?php foreach($args as $arg): ?>
        <a href="<?php echo $arg['link'] ?>" class="relatedInfo__item hoverOpacity">
          <div class="relatedInfo__img"><img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $arg['img'] ?>" alt=""></div>
          <div class="relatedInfo__content <?php echo $arg['position'] ?>">
            <p class="relatedInfo__title <?php echo $arg['titleColor'] ?>"><?php echo $arg['title'] ?></p>
            <span class="relatedInfo__deco">more</span>
          </div>
        </a>
        <?php endforeach; ?>
    </div>
  </div>
</div>