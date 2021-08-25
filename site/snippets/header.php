<!doctype html>
<html class="no-js" lang="" itemscope itemtype="https://schema.org/Article">
  <head>
    <meta charset="utf-8">

    <?php if ($page->isHomePage()): ?>
      <title><?= $site->title() ?></title>
    <?php else: ?>
      <title><?= $page->seoTitle()->or($page->title()) ?> – <?= $site->title() ?></title>
    <?php endif ?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Facebook Open Graph data -->
    <meta property="og:url" content="https://www.example.com/path/to/page.html">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Oskar Radon">
    <meta property="og:image" content="https://www.example.com/path/to/image.jpg">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="article:author" content="Oskar Radon">

    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="https://www.example.com/path/to/page.html">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="https://www.example.com/path/to/image.jpg">

    <!-- Google's Schema.org -->
    <link rel="author" href="">
    <link rel="publisher" href="">
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Vendor stylesheets -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />

    <!-- Author stylesheets -->
    <?= css('/assets/css/main.css') ?>
    <?= css('/assets/css/components/code-highlight.css') ?>
    <?php echo css('@auto') ?> <!-- looks for stylesheet with same name as template in /assets/css/templates -->

    <meta name="theme-color" content="#fafafa">

  </head>

  <body>
    <div id="container">
      <header id="main-header">
        <article>
          <div>
            <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
          </div>
          <nav id="main-nav">
              <!-- <?php $links = $pages->listed()->not('projects');
                if($links->isNotEmpty()):
              ?>
                <?php foreach($links as $link): ?>
                  <a target=”_blank” <?php e($link->isOpen(), ' class="active"') ?> href="<?= $link->url() ?>">
                    <?= $link->title()->html() ?>
                  </a>
                <?php endforeach ?>
              <?php endif ?> -->
              <a href="#" id="about-toggle">About</a>
          </nav>
        </article>
        <div id="more-info" class="toggle">
          <div>
            <small>About</small>
            <?= $site->about()->kt() ?>
          </div>
          <div>
            <small>Selected clients</small>
            <?= $site->clients()->kt() ?>
          </div>
          <div id="education">
            <div>
              <small>Education</small>
              <?php $items = $site->education()->toStructure();
              foreach ($items as $item): ?>
                <?= $item->degree()->kt() ?>
              <?php endforeach ?>
            </div>
            <div>
              <small>Institution</small>
              <?php foreach ($items as $item): ?>
                <?= $item->institution()->kt() ?>
              <?php endforeach ?>
            </div>
            <div>
              <small>Year</small>
              <?php foreach ($items as $item): ?>
                <p><?= $item->year()->toDate('Y') ?></p>
              <?php endforeach ?>
            </div>
          </div>
        </div>

        <!-- <nav id="project-nav">
          <?php $projects = $site->page('projects')->children();
            if($projects->isNotEmpty()):
              foreach($projects as $project): ?>
              <input type="checkbox">
                <?= $project->category() ?>
              </input>
            <?php endforeach ?>
          <?php endif ?>
        </nav> -->
      </header>

