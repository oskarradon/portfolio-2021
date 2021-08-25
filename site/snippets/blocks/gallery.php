<?php /** @var \Kirby\Cms\Block $block */ ?>
<article class="gallery-block" style="--columns: <?= $block->columns()->toInt() ?>">
    <?php foreach ($block->images()->toFiles() as $image): ?>
    <figure>
      <?= $image ?>
    </figure>
    <?php endforeach ?>
</article>