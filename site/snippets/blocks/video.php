<?php

/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src();
} elseif ($video = $block->video()->toFile()) {
    $src = $video->url();
}

?>
<?php if ($src): ?>
  <article>
    <figure class="video-block">
      <?php if ($block->location() == 'kirby'): ?>
        <video class="player" playsinline controls>
          <source src="<?= $src ?>" type="<?= $video->mime() ?>" />
        </video>
      <?php else: ?>
        <div class="plyr__video-embed player">
          <iframe
            src="<?= $src ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
            allowfullscreen
            allowtransparency
            allow="autoplay"
          ></iframe>
        </div>
      <?php endif ?>
    </figure>
  </article>
<?php endif ?>


