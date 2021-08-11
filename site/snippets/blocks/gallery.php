<?php /** @var \Kirby\Cms\Block $block */ ?>
<article class="gallery" style="--columns: <?= $block->columns()->toInt() ?>">
  <?php foreach ($block->images()->toFiles() as $image): ?>
  <figure class="lightbox">
    <?= $image ?>
  </figure>
  <?php endforeach ?>
</article>