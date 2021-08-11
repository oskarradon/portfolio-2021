<!doctype html>
<html class="no-js" lang="" itemscope itemtype="https://schema.org/Article">
  <head>
    <meta charset="utf-8">

    <?php if ($page->isHomePage()): ?>
      <title><?= $site->title() ?></title>
    <?php else: ?>
      <title><?= $page->seoTitle()->or($page->title()) ?> | <?= $site->title() ?></title>
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Author stylesheets -->
    <?= css('/assets/css/main.css') ?>
    <?php echo css('@auto') ?> <!-- looks for stylesheet with same name as template in /assets/css/templates -->

    <meta name="theme-color" content="#fafafa">

  </head>

  <body>
    <div id="container">
      <header>
        <article>
          <div>
            <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
          </div>
          <nav>
          <?php
            $links = $pages->listed()->not('projects');
            if($links->isNotEmpty()):
          ?>
            <?php foreach($links as $link): ?>
              <a target=”_blank” <?php e($link->isOpen(), ' class="active"') ?> href="<?= $link->url() ?>">
                <?= $link->title()->html() ?>
              </a>
            <?php endforeach ?>
            <?php endif ?>
            <a target=”_blank” href="https://drive.google.com/file/d/1GkWWJlD6PRX8cvCIX1HM7SH2SkPo3-Xo/view?usp=sharing">PDF Portfolio</a>
            <a href="#" id="about">About</a>
            <a target=”_blank” href="https://read.cv/oskar">CV</a>
          </nav>
          
        </article>
        <div id="more-info">
          <div>
            <h3>About</h3>
            <p>I'm a designer and front-end developer from Portland, OR. I specialize in publications, branding, and web applications.</p>
          </div>
          <div>
            <h3>Selected clients</h3>
            <p>Yale Union, Orchard47, Esperanza Spalding, Portland Institute for Contemporary Art, Sequence Press, WebMD Health Services, Pacific Northwest College of Art</p>
          </div>
          <div id="education">
            <div>
              <h3>Education</h3>
              <p>BFA Graphic Design<br>
              Web development Certificate<br>
              UX Design Certificate</p>
            </div>
            <div>
              <h3>Issuing institution</h3>
              <p>PNCA<br>
              Epicodus<br>
              Hack Oregon</p>
            </div>
            <div>
              <h3>Year</h3>
              <p>2020<br>
              2016<br>
              2016</p>
            </div>
          </div>
            </div>
      </header>