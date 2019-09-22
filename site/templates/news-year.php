<?php snippet('header') ?>

<!-- Content -->

<main id="sticky-container" data-something>

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-4 small-12" data-sticky-container>
        <div class="sticky" data-sticky data-margin-top="9" data-anchor="sticky-container">

          <!-- Breadcrumbs -->
          <?php snippet('breadcrumbs') ?>

          <!-- Article Navigation -->
          <ul class="article-nav" data-smooth-scroll>
            <?php foreach ($page->parent()->children() as $year): ?>

            <li><a href="<?= $year->url() ?>"><?= $year->title() ?></a></li>

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
              <a href="<?= $item->url() ?>">
                <?php
                    if($kirby->language()->code()=='de') {
                      echo 'Weiter lesen...';
                    } else {
                      echo 'Read more...';
                    };
                ?>
            </a>
                <hr />
            </div>
          <?php endforeach ?>

          <?php snippet('pagination', ['list' => $list]) ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
