<?php snippet('header'); ?>

<main id="project">

  <header class="project-header">
    <h1><?= $page->title() ?></h1>
    <h4><?= $page->tagline() ?></h4>
  </header>
  
  <?= $page->blocks()->toBlocks() ?>

  <nav id="prev-next">
    <?php if ($page->hasPrevListed()): ?>
      <a id="prev" href="<?= $page->prevListed()->url() ?>">
      <?= asset('assets/icons/arrow-left.svg')->read() ?>Previous<span>&nbsp;project</span></a>
    <?php endif ?>

    <?php if ($page->hasNextListed()): ?>
      <a id="next" href="<?= $page->nextListed()->url() ?>">Next<span>&nbsp;project</span><?= asset('assets/icons/arrow-right.svg')->read() ?></a>
      
    <?php endif ?>
  </nav>

  <article class="info">
    <hr>
    <div class="grid-container">
      <div>
        <small>Date</small>
        <p><?= $page->year()->toDate('m/Y') ?></p>
      </div>
      <div id="category">
        <small>Category</small>
        <?php foreach ($page->category()->split() as $category): ?>
          <p><?= $category ?></p>
        <?php endforeach ?>
      </div>
      <div id="client">
        <small>Client</small>
        <p><?= $page->client() ?></p>
      </div>
      <div>
        <small>Role</small>
        <p><?= $page->role() ?></p>
      </div>
      <div>
        <small>Dimensions</small>
        <p><?= $page->dimensions() ?></p>
      </div>
      <div>
        <?php if($page->links()->toStructure()->count() > 1) : ?>
          <small>Links</small>
        <?php else: ?>
          <small>Link </small>
        <?php endif ?>
        <?php if ($page->links()->isEmpty()): ?>
          <p>—</p>
        <?php else: ?>
          <?php $links = $page->links()->toStructure();
          foreach ($links as $link) : ?>
            <div class="i i-5">
              <a href="<?= $link->target()->toLinkObject() ?>" target="_blank"><?= $link->title() ?></a>
            </div>
          <?php endforeach ?>
      <?php endif ?>
      </div>
    </div>
  </article>

</main>

<?php snippet('footer'); ?>