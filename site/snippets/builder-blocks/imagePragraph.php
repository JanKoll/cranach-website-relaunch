<div class="chapter grid-container full" id="<?= $data->_uid() ?>">
  <div class="grid-container chapter-inner">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-offset-4 medium-8 small-12" data-sticky-container id="<?= $page->uid() ?>-<?= $data->_uid() ?>">
      <div class="media-control <?= $page->uid() ?>-<?= $data->_uid() ?> icon-pause" onClick="textToSpeech('<?= $page->uid() ?>-<?= $data->_uid() ?>')"></div>

        <div class="article-accordion" data-accordion data-allow-all-closed="true">
          <div data-accordion-item>
          <a href="#" class="article-accordion-title"><h2><?= $data->paragraphHeadline() ?></h2></a>

            <div class="article-accordion-content" data-tab-content style="display: none;">

              <?php foreach($data->mybuilder()->toBuilderBlocks() as $multi): ?>
                <?php if($multi->paragraphMultiText() != ""): ?>
                  <?= $multi->paragraphMultiText()->kt() ?>

                <?php else: ?>

                    <?= $multi->paragraphmultiimage()->toFile() ?>
                    <p class="image-caption"><?= $multi->paragraphmultiimage()->toFile()->caption() ?></p>

                <?php endif ?>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
