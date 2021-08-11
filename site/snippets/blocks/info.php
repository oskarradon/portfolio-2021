<?php /** @var \Kirby\Cms\Block $block */ ?>
<article class="info">
  <div>
    <h3>Year</h3>
    <p><?= $block->year() ?></p>
  </div>
  <div>
    <h3>Category</h3>
    <?php foreach ($block->category()->split() as $category): ?>
      <p><?= $category ?></p>
    <?php endforeach ?>
  </div>
  <div>
    <h3>Client</h3>
    <p><?= $block->client() ?></p>
  </div>
  <div>
    <h3>Role</h3>
    <p><?= $block->role() ?></p>
  </div>
  <div>
    <?php if($block->links()->toStructure()->count() > 1) : ?>
      <h3>Links</h3>
    <?php else: ?>
      <h3>Link </h3>
      <p>—</p>
    <?php endif ?>
    <?php $links = $block->links()->toStructure();
        foreach ($links as $link) : ?>
          <div class="i i-5">
            <a href="<?= $link->target()->toLinkObject() ?>" target="_blank"><?= $link->title() ?></a>
          </div>
  <?php endforeach ?>
  </div>
  
</article>