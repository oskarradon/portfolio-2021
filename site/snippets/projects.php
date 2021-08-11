<?php

$projects = $data->children()->listed();
;

?>
<main id="projects">
  <!-- <h1><?= $data->title() ?></h1> -->

    <?php foreach ($projects as $project): ?>
      <!-- <a href="<?= $project->url() ?>"> -->
        <figure <?php if( $project->category() == "Web application"): ?>class="app"<?php endif ?> >
          <div class="img-wrapper">
            <img src="<?= $project->image()->resize(800)->url() ?>" class="<?= $project->image()->orientation()?>" />
          </div>
          <figcaption>
            <span class="title"><?= $project->title() ?></span>
            <span class="category"><?= $project->category() ?></span>
            <span class="year"><?= $project->year() ?></span>
          </figcaption>
        </figure>
      <!-- </a> -->
    <?php endforeach ?>

</main>
