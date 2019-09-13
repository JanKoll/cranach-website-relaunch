<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/index.css', '@auto']) ?>

</head>
<body>


  <div class="page">
    <header class="header">

  <div class="title-bar" data-responsive-toggle="menu" data-hide-for="large">
    <div class="title-bar-left">
      <button class="menu-icon" type="button" data-toggle="menu"></button>
      <a class="logo-topbar" href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </div>


<div class="top-bar topbar-sticky-shrink-header" id="menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>

      <a class="logo" href="<?= $site->url() ?>" ><?= $site->title() ?></a>
      <?php foreach ($site->children()->listed() as $item): ?>
                  <?php if($item->title() == 'Würfe'): ?>
                    <li class="<?= e($item->isOpen(), ' active') ?>"><a href="<?= $item->children()->first()->url() ?>"><?= $item->title()->html() ?></a>
                  <?php else: ?>
                    <li class="<?= e($item->isOpen(), ' active') ?>"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                  <?php endif ?>

                  <?php if($item->hasChildren()):?>
                      <ul class="sublinks">
                        <?php foreach ($item->children()->listed() as $subitem): ?>
                          <li><a class="<?= e($subitem->isOpen(), ' active') ?>" href="<?= $subitem->url() ?>"><?= $subitem->title()->html() ?></a></li>
                        <?php endforeach ?>
                      </ul>
                  <?php endif ?>
                </li>

                <?php endforeach ?>

    <!-- forschung bar  -->
      
     
      </ul>
    </div>
    <div class="top-bar-right">
     

    
     <div class="meta-nav">
        <ul class="menu">
          <li><a href="#">Kontakt</a></li>
          <ul>
    <?php foreach($kirby->languages() as $language): ?>
    <li <?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?php echo $language->url() ?>" hreflang="<?php echo $language->code() ?>">
        <?php echo html($language->code()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
      </div>  

      <div class="search">
        <input type="search" placeholder="Search">
        <button type="button"><svg version="1.1" id="Search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve">
  <path d="M132,18C108-6,68.9-6,44.9,18c-22.1,22.1-23.8,57-5.2,81.1L2.3,136.5c-3.1,3.1-3.1,8.1,0,11.2s8.1,3.1,11.2,0l37.4-37.4
	c24.1,18.6,59,16.9,81.1-5.2C156,81.1,156,42,132,18z M120.6,93.6c-17.7,17.7-46.5,17.7-64.2,0c-17.7-17.7-17.7-46.5,0-64.2
	s46.5-17.7,64.2,0C138.3,47.1,138.3,75.9,120.6,93.6z" />
</svg>
</button>
      </div>
    </div>
  </div>

 </header>

   