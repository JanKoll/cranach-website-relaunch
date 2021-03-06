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
                <?php if(!($page->intendedTemplate() == 'news')): ?>
                  <?php snippet('jump-nav') ?>
                <?php endif ?>
              </div>
            </div>


            <div class="cell medium-8 small-12" id="<?= $page->uid() ?>-<?= $page->title() ?>">
              <div class="head">
                <h2><?= $page->headline() ?></h2>
                <p><?= $page->subHeadline() ?><?= $page->date() ?></p>
                <div class="media-control <?= $page->uid() ?>-<?= $page->title() ?> icon-pause" onClick="textToSpeech('<?= $page->uid() ?>-<?= $page->title() ?>')"></div>
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

        <?php snippet('builder') ?>

      </main>

<?php snippet('footer') ?>
