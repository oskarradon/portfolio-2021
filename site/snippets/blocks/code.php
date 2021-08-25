<?php /** @var \Kirby\Cms\Block $block */ ?>
<article>
  
<pre><code class="language-<?= $block->language()->or('text') ?>"><?= $block->code()->html(false) ?></code></pre>
</article>