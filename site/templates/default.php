<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->intro()->kt() ?>
   
  </div>

<div>
 <?php foreach ($page->children() as $item): ?>

        <?= $item->headline() ?>
        <?= $item->text() ?>
        <?= $item->date() ?>
 
          
        <br>
        <br>
 <?php endforeach ?>


 </div>
</main>
<?php snippet('footer') ?>


