<?php snippet('header') ?>

<!-- Content -->

<main id="sticky-container" data-something>

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-4 small-12" data-sticky-container>
        <div class="sticky" data-sticky data-margin-top="9" data-anchor="sticky-container">

          <!-- Breadcrumbs -->
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>
                <span class="show-for-sr">Current: </span> <?= $page->title() ?>
              </li>
            </ul>
          </nav>

          <!-- Article Navigation -->
          <ul class="article-nav" data-smooth-scroll>
            <?php
              $callback = function ($f) {
                return $f->date()->toDate('Y');
              };

              $years = $page->children()->sortby('date','desc')->group($callback);

              foreach ($years as $year => $itemsPerYear) :
            ?>

            <li><a href="#"><?= $year ?></a></li>

            <?php endforeach ?>

            <li><a href="#top" class="backtop icon-arrow-backtop"></a></li>
          </ul>
        </div>
      </div>

      <div class="news cell medium-8 small-12">
        <div class="grid-x">

          <?php foreach ($list = $page->children()->sortby('date','desc')->paginate(5) as $item) : ?>

          <div class="cell small-12">

              <span><?= $item->date()->toDate('d. M Y') ?></span>
              <h3><?= $item->headline() ?></h3>
              <p><?= $item->previewText() ?></p>
              <a href="<?= $page->url() ?>">Weiter lesen...</a>
              <?php if (!(($item->indexOf() + 1) % 5 == 0)) : ?>
                <hr />
              <?php endif ?>
            </div>
          <?php endforeach ?>

          <?php snippet('pagination', ['list' => $list]) ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
