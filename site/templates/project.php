<?php snippet('header'); ?>
<main id="project">
 
  <h1><?= $page->title() ?></h1>

  <article class="info">
    <div>
      <h3>Year</h3>
      <p><?= $page->year() ?></p>
    </div>
    <div>
      <h3>Category</h3>
      <?php foreach ($page->category()->split() as $category): ?>
        <p><?= $category ?></p>
      <?php endforeach ?>
    </div>
    <div>
      <h3>Client</h3>
      <p><?= $page->client() ?></p>
    </div>
    <div>
      <h3>Role</h3>
      <p><?= $page->role() ?></p>
    </div>
    <div>
      <?php if($page->links()->toStructure()->count() > 1) : ?>
        <h3>Links</h3>
      <?php else: ?>
        <h3>Link </h3>
        <p>—</p>
      <?php endif ?>
      <?php $links = $page->links()->toStructure();
          foreach ($links as $link) : ?>
            <div class="i i-5">
              <a href="<?= $link->target()->toLinkObject() ?>" target="_blank"><?= $link->title() ?></a>
            </div>
    <?php endforeach ?>
    </div>
  </article>
  
  <article>
    <figure>
      <?= $page->image() ?>
    </figure>
  </article>
  

  <?= $page->blocks()->toBlocks() ?>

</main>


<?php snippet('footer'); ?>