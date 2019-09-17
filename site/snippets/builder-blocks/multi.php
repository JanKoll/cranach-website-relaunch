<div class="chapter grid-container full" id="<?= $data->_uid() ?>">
  <div class="grid-container chapter-inner">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-offset-4 medium-8 small-12" data-sticky-container>
        <h2><?= $data->paragraphheadline() ?></h2>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
          <?php foreach($data->mybuilder()->toBuilderBlocks() as $multi): ?>
            <li class="accordion-item" data-accordion-item id="<?= $page->uid() ?>-<?= $multi->_uid() ?>">
              <a href="#" class="accordion-title">
              <div class="media-control <?= $page->uid() ?>-<?= $multi->_uid() ?> icon-pause" onClick="textToSpeech('<?= $page->uid() ?>-<?= $multi->_uid() ?>')"></div>
                <p><b>Datum:</b> <?= $multi->paragraphMultiDate()->toDate('d.m.Y') ?></p>
                <p><?= $multi->paragraphMultiTarget() ?></p>
                <p><?= $multi->paragraphMultiTechnology() ?></p>
              </a>
              <div class="accordion-content" data-tab-content>
                <?= $multi->paragraphMultiText()->kt() ?>
              </div>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</div>
