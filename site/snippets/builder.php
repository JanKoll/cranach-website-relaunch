<?php foreach($page->mybuilder()->toBuilderBlocks() as $block): ?>
    <?= snippet('blocks/' . $block->_key(), array('data' => $block)) ?>
<?php endforeach ?>
