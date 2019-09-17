<?php snippet('header') ?>
<?php snippet('slider') ?>

<div class="home-spacer grid-container full">
  <div class="grid-container chapter-inner">
    <div class="grid-x grid-margin-x">
        <div class="cell medium-4 small-12 text-center">
          <?php $news = $site->children()->find('news') ?>
          <a href="<?= $news->url() ?>">
            <h1><?= $news->children()->count() ?></h1>
            <h2>News</h2>
          </a>
        </div>
        <div class="cell medium-4 small-12 text-center">
          <?php $paintings = $site->children()->find('research')->children()->find('paintings') ?>
          <a href="<?= $paintings->url() ?>">
            <h1><?= $paintings->children()->count() ?></h1>
            <h2><?= $paintings->title() ?></h2>
          </a>
        </div>
        <div class="cell medium-4 small-12 text-center">
          <?php $archivals = $site->children()->find('research')->children()->find('archivals') ?>
          <a href="<?= $archivals->url() ?>">
            <h1><?= $archivals->children()->count() ?></h1>
            <h2><?= $archivals->title() ?></h2>
          </a>
        </div>
    </div>
  </div>
</div>

<div class="chapter-spacer grid-container home">
  <div class="grid-x offset">


    <?php if($page->pages()->toPages()->nth(0) != ""):
      $childOne = $page->pages()->toPages()->nth(0); ?>
      <div class="cell medium-8 small-12">
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell medium-6 small-12" style="background: url('<?= $childOne->images()->nth(0)->url() ?>');"></div>
          <div class="cell medium-6 small-12 primary">
            <h2><?= $childOne->headline() ?></h2>
            <p><?= $childOne->previewText() ?></p>
            <a href="<?= $childOne->url() ?>">Mehr Lesen...</a>
          </div>
        </div>
      </div>
    <?php endif ?>


    <?php if($page->pages()->toPages()->nth(1) != ""):
      $childTwo = $page->pages()->toPages()->nth(1); ?>
      <div class="cell medium-4 small-12">
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell small-12" style="background: url('<?= $childTwo->images()->nth(0)->url() ?>');"></div>
          <div class="cell small-12 gray">
            <h2><?= $childTwo->headline() ?></h2>
            <p><?= $childTwo->previewText() ?></p>
            <a href="<?= $childTwo->url() ?>">Mehr Lesen...</a>
          </div>
        </div>
      </div>
    <?php endif ?>

    <?php if($page->pages()->toPages()->nth(2) != ""):
      $childThree = $page->pages()->toPages()->nth(2); ?>
      <div class="cell small-12">
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell medium-4 small-12 light-gray">
            <h2><?= $childThree->headline() ?></h2>
            <p><?= $childThree->previewText() ?></p>
            <a href="<?= $childThree->url() ?>">Mehr Lesen...</a>
          </div>
          <div class="cell medium-8 small-12" style="background: url('<?= $childThree->images()->nth(0)->url() ?>');"></div>
        </div>
      </div>
    <?php endif ?>

    <?php if($page->pages()->toPages()->nth(3) != ""):
      $childFour = $page->pages()->toPages()->nth(3); ?>
      <div class="cell medium-4 small-12">
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell small-12" style="background: url('<?= $childFour->images()->nth(0)->url() ?>');"></div>
          <div class="cell small-12 primary">
            <h2><?= $childFour->headline() ?></h2>
            <p><?= $childFour->previewText() ?></p>
            <a href="<?= $childFour->url() ?>">Mehr Lesen...</a>
          </div>
        </div>
      </div>
    <?php endif ?>

    <?php if($page->pages()->toPages()->nth(4) != ""):
      $childFive = $page->pages()->toPages()->nth(4); ?>
      <div class="cell medium-8 small-12">
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell medium-6 small-12 gray">
            <h2><?= $childFive->headline() ?></h2>
            <p><?= $childFive->previewText() ?></p>
            <a href="<?= $childFive->url() ?>">Mehr Lesen...</a>
          </div>
          <div class="cell medium-6 small-12" style="background: url('<?= $childFive->images()->nth(0)->url() ?>');"></div>
        </div>
      </div>
    <?php endif ?>

  </div>
</div>

<?php snippet('footer') ?>
