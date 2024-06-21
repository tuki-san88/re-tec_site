<div class="overview <?php echo $args['mod'] ?>">
  <?php foreach ($args as $key => $arg) : ?>
    <?php if ($key !== 'mod') : ?>
      <dl class="overview__row">
        <dt class="overview__dt baseText"><?php echo $arg['item'] ?></dt>
        <dd class="overview__dd baseText"><?php echo $arg['description'] ?></dd>
      </dl>
    <?php endif; ?>
  <?php endforeach; ?>
  <div class="overview__done">
    <p>現在募集は<br>行なっておりません</p>
  </div>
</div>