<div class="chapter grid-container full" id="<?= $data->_uid() ?>">
  <div class="grid-container chapter-inner">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-offset-4 medium-8 small-12" data-sticky-container>
        <div class="media-control">0:00 / 5:24</div>

        <div class="article-accordion" data-accordion data-allow-all-closed="true">
          <div data-accordion-item>
          <a href="#" class="article-accordion-title"><h2><?= $data->paragraphMultiHeadline() ?></h2></a>

            <div class="article-accordion-content" data-tab-content style="display: none;">

              <?php foreach($data->mybuilder()->toBuilderBlocks() as $multi): ?>
                <?php if($multi->paragraphMultiText() != ""): ?>
                  <?= $multi->paragraphMultiText()->kt() ?>

                <?php else: ?>

                    <?= $multi->_key() ?>

                <?php endif ?>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
