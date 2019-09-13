<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->intro()->kt() ?>
   
  </div>

<div>
 <?php foreach ($page->children()->listed() as $item): ?>
<div class="grid-container home">
  <div class="grid-x offset">
    <div class="cell medium-8 small-12">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell medium-6 small-12" style="background: url('/assets/img/placeholder_1200x600.jpg');"></div>
        <div class="cell medium-6 small-12 primary">
       
        <?= $item->headline() ?>
        <?= $item->text() ?>
        <?= $item->date() ?>
 
          <a href="#">Mehr Lesen...</a>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php endforeach ?>
 </div>
</main>
<?php snippet('footer') ?>


