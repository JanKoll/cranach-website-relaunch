<?php foreach($page->mybuilder()->toBuilderBlocks() as $block): ?>
    <?= snippet('builder-blocks/' . $block->_key(), array('data' => $block)) ?>
<?php endforeach ?>
