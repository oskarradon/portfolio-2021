<?php

/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$src     = null;

if ($block->location() == 'web') {
  if($block->youtube()->isNotEmpty()) {
    $src = $block->youtube();
  } else {
    $src = $block->vimeo();
  }
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
          <?php if ($block->youtube()->isNotEmpty()): ?>
            src="https://www.youtube.com/embed/<?= $src ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
          <?php else: ?>
            src="https://player.vimeo.com/video/<?= $src ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
          <?php endif ?>
            allowfullscreen
            allowtransparency
            allow="autoplay"
          ></iframe>
        </div>
      <?php endif ?>
    </figure>
  </article>
<?php endif ?>