<?php $pagination = $list->pagination() ?>

<nav class="cell" aria-label="Pagination">
  <ul class="pagination text-center">
    <li class="pagination-previous <?= e(!$pagination->hasPrevPage(), ' disabled') ?>">
      <?php if($pagination->hasPrevPage()): ?>
        <a href="<?= $pagination->prevPageURL() ?>" aria-label="Previous page">Previous</a>
      <?php else: ?>
        Previous
      <?php endif ?>
    </li>

    <?php foreach ($pagination->range(5) as $r) : ?>
      <?php if ($pagination->page() === $r ? ' aria-current="page"' : '') : ?>
        <li class="current"><span class="show-for-sr">You're on page</span>
          <a href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a>
        </li>
      <?php else : ?>
      <li>
        <a href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a>
      </li>
      <?php endif ?>
    <?php endforeach ?>


    <li class="pagination-next <?= e(!$pagination->hasNextPage(), ' disabled') ?>">
      <?php if($pagination->hasNextPage()): ?>
        <a href="<?= $pagination->nextPageURL() ?>" aria-label="Next page">Next</a>
      <?php else: ?>
        Next
      <?php endif ?>
    </li>
  </ul>
</nav>
