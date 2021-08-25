<?php

$projects = $data->children()->listed();
;

?>
<main id="projects">
  <!-- <h1><?= $data->title() ?></h1> -->

    <?php foreach ($projects as $project): ?>
      <a href="<?= $project->url() ?>">
        <figure <?php if( $project->category() == "Web application"): ?>class="app"<?php endif ?> >
          <div class="img-wrapper">
            <?php if ($cover = $project->cover()->toFile()): ?>
              <img src="<?= $cover->resize(1000)->url() ?>" class="<?= $cover->orientation()?>" />
            <?php endif ?>
          </div>
          <figcaption>
            <span class="title"><?= $project->title() ?></span>
            <span class="category"><?= $project->category() ?></span>
            <span class="year"><?= $project->year()->toDate('m/Y') ?></span>
          </figcaption>
        </figure>
      </a>
    <?php endforeach ?>

</main>
