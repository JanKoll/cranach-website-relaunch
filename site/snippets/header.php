<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/app.css', '@auto']) ?>

</head>
<body id="top">

  <div class="title-bar" data-responsive-toggle="menu" data-hide-for="large">
    <div class="title-bar-left">
      <button class="menu-icon" type="button" data-toggle="menu"></button>
      <a href="<?= $site->url() ?>" class="logo-topbar">cda_</a>
    </div>

    <div class="search">
      <input type="search" placeholder="Search">
      <button type="button">
        <svg version="1.1" id="Search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve">
          <path d="M132,18C108-6,68.9-6,44.9,18c-22.1,22.1-23.8,57-5.2,81.1L2.3,136.5c-3.1,3.1-3.1,8.1,0,11.2s8.1,3.1,11.2,0l37.4-37.4
        	c24.1,18.6,59,16.9,81.1-5.2C156,81.1,156,42,132,18z M120.6,93.6c-17.7,17.7-46.5,17.7-64.2,0c-17.7-17.7-17.7-46.5,0-64.2
        	s46.5-17.7,64.2,0C138.3,47.1,138.3,75.9,120.6,93.6z" />
        </svg>
      </button>
    </div>
  </div>

  <div class="top-bar topbar-sticky-shrink-header" id="menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <a href="<?= $site->url() ?>" class="logo">cda_</a>

        <?php foreach ($site->children()->listed() as $item): ?>
          <li class="<?= e($item->isOpen(), 'active') ?>"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
            <?php if($item->hasListedChildren()):?>
              <ul class="menu vertical">
                <?php foreach ($item->children()->listed() as $subitem): ?>
                  <li class="<?= e($subitem->isOpen(), 'active') ?>"> <a href="<?= $subitem->url() ?>"><?= $subitem->title()->html() ?></a></li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
    <div class="top-bar-right">
      <div class="meta-nav">
        <ul class="menu">
          <li><a href="#">Kontakt</a></li>
        </ul>
        <ul class="language">
          <?php foreach($kirby->languages() as $language): ?>
            <li class="<?= e($kirby->language() == $language, 'active') ?>"><a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
              <?= html($language->code()) ?>
            </a></li>
          <?php endforeach ?>
        </ul>
      </div>

      <div class="search">
        <form class="searchbox" action="<?php echo page('search')->url() ?>" method="post">
          <input type="search" placeholder="Suchen" name="q" required>

          <button type="submit" value="Search">
            <svg version="1.1" id="Search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve">
              <path d="M132,18C108-6,68.9-6,44.9,18c-22.1,22.1-23.8,57-5.2,81.1L2.3,136.5c-3.1,3.1-3.1,8.1,0,11.2s8.1,3.1,11.2,0l37.4-37.4
            	c24.1,18.6,59,16.9,81.1-5.2C156,81.1,156,42,132,18z M120.6,93.6c-17.7,17.7-46.5,17.7-64.2,0c-17.7-17.7-17.7-46.5,0-64.2
            	s46.5-17.7,64.2,0C138.3,47.1,138.3,75.9,120.6,93.6z" />
            </svg>
          </button>
      </form>
      </div>
    </div>
  </div>
