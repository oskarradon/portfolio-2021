<?php /** @var \Kirby\Cms\Block $block */ ?>
<article class="carousel">
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php foreach ($block->images()->toFiles() as $image): ?>
        <figure class="swiper-slide">
          <img class="<?= $image->orientation() ?>" src="<?= $image->resize(1000)->url() ?>" alt="" loading="lazy" />
        </figure>
      <?php endforeach ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</article>


