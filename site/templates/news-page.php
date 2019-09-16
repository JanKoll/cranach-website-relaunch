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

        <!-- 
        <?php
        $callback = function($f) {
            return $f->date()->toDate('Y');
        };
$groups = $page->children()->groupBy('$callback');
foreach($groups as $year => $items):
?>

<h2><?= $year ?></h2>
  <ul>
    <?php foreach($items as $item): ?>
    <li><?= $item->date()->toDate('Y') ?></li>
    <?php endforeach ?>
  </ul>
<?php endforeach ?>
-->

        <ul class="article-nav" data-smooth-scroll>
          <li><a href="#">2019</a></li>
          <li><a href="#">2018</a></li>
          <li><a href="#">2017</a></li>
          <li><a href="#">2016</a></li>
          <li><a href="#">2015</a></li>
          <li><a href="#">2014</a></li>
          <li><a href="#">2013</a></li>
          <li><a href="#">2012</a></li>
          <li><a href="#top" class="backtop icon-arrow-backtop"></a></li>
        </ul>
      </div>
    </div>

    <div class="news cell medium-8 small-12">

      <div class="grid-x">
      
        <?php foreach ($list = $page->children()->paginate(2) as $item): ?>
        <div class="cell small-12">
          <span><?= $item->date()->toDate('d. M Y') ?></span>
          <h3><?= $item->headline() ?></h3>
          <p><?= $item->previewText() ?>.</p>
          <a href="<?= $page->url() ?>">Weiter lesen...</a>
          <?php if (!($item->isLast())): ?>
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