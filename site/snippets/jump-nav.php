
<?php if($page->mybuilder()->toBuilderBlocks() != ""): ?>
  <ul class="article-nav" data-smooth-scroll data-offset="60">
    <?php foreach($page->mybuilder()->toBuilderBlocks() as $block): ?>
      <li><a href="#<?= $block->_uid() ?>" class="icon-arrow-down"><?= $block->paragraphHeadline() ?></a></li>
    <?php endforeach ?>
    <li><a href="#top" class="backtop icon-arrow-backtop"></a></li>
  </ul>
<?php endif ?>
