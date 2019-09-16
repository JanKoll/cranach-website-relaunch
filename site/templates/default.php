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

                <!-- Article Navigation -->
                <?php snippet('jump-nav') ?>
              </div>
            </div>

            <div class="cell medium-8 small-12">
              <div class="head">
                <h2><?= $page->headline() ?></h2>
                <p><?= $page->subHeadline() ?></p>
                <div class="media-control">0:00 / 5:24</div>
              </div>

              <div class="content">
                <?= $page->text()->kt() ?>
              </div>
            </div>
          </div>
        </div>
        <?php snippet('builder') ?>
      </main>

<?php snippet('footer') ?>
