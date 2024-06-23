<?php foreach ($args as $arg) : ?>
  <div class="directory">
    <div class="directory__head">
      <dl class="directory__lists">
        <div class="directory__list">
          <dt class="directory__dt"><?php echo $arg['item1'] ?></dt>
          <dd class="directory__dd"><?php echo $arg['description1'] ?></dd>
        </div>
        <div class="directory__list">
          <dt class="directory__dt"><?php echo $arg['item2'] ?></dt>
          <dd class="directory__dd"><?php echo $arg['description2'] ?></dd>
        </div>
        <div class="directory__list">
          <dt class="directory__dt"><?php echo $arg['item3'] ?></dt>
          <dd class="directory__dd"><?php echo $arg['description3'] ?></dd>
        </div>
      </dl>
      <div class="directory__img">
        <img src="<?php echo $arg['image'] ?>" alt="<?php echo $arg['alt'] ?>">
      </div>
    </div>
    <div class="directory__body">
      <div class="directory__title"><?php echo $arg['title'] ?></div>
      <div class="directory__text"><?php echo $arg['text'] ?></div>
    </div>
  </div>
<?php endforeach; ?>