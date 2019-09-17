<?php snippet('header') ?>
<?php snippet('slider') ?>

    <!-- Content -->
      <main id="sticky-container">
        <div class="grid-container intro">
          <div class="grid-x grid-padding-x">
            <div class="cell small-4" data-sticky-container>
              <div class="sticky" data-sticky data-margin-top="9" data-anchor="sticky-container">
                <!-- Breadcrumbs -->
                <?php snippet('breadcrumbs') ?>
              </div>
            </div>

            <div class="cell medium-8 small-12">
              <div class="head">
                <h2><?= $page->headline() ?></h2>
                <p><?= $page->subHeadline() ?><?= $page->date()->toDate('d. M Y') ?></p>
                <div class="media-control">0:00 / 5:24</div>
              </div>

              <div class="content">
                <?= $page->text()->kt() ?>
                <?php if($page->intendedTemplate() == 'news'): ?>
                  <?= $page->previewText()->kt() ?>
                <?php endif ?>

              </div>
            </div>
          </div>
        </div>


        <?php foreach($page->children()->visible() as $block): ?>
          <div class="chapter-spacer grid-container research">
            <div class="grid-x grid-padding-x">
              <div class="cell medium-offset-4 medium-8 small-12">
                <figure>
                  <a href="<?= $block->url() ?>">
                    <img src="<?= $block->images()->nth(0)->crop(800,300)->url() ?>" alt="<?= $block->images()->nth(0)->alt() ?>">
                    <figcaption class="title"><h2><?= $block->headline() ?></h2></figcaption>
                  </a>

                  <figcaption class="content">
                    <p><?= $block->previewText() ?></p>
                    <p>
                      <a href="<?= $block->url() ?>" class="button">
                        <?php 
                          if($kirby->language()->code()=='de') {
                            echo 'Entdecken'; 
                          } else {
                            echo 'Discover';  
                          };
                         ?>
                        </a>
                    </p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        <?php endforeach ?>



      </main>

<?php snippet('footer') ?>
