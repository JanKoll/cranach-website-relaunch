<?php $pagination = $list->pagination() ?>
<nav class="cell" aria-label="Pagination">
              <ul class="pagination text-center">
              <?php if ($pagination->hasPrevPage()): ?>
    <li class="pagination-previous">
      <a href="<?= $pagination->prevPageURL() ?>">‹</a>
    </li>
    <?php else: ?>
                <li class="pagination-previous disabled">Previous</li>
                <?php endif ?>

                <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                <li><a href="#" aria-label="Page 2">2</a></li>
                <li><a href="#" aria-label="Page 3">3</a></li>
                <li><a href="#" aria-label="Page 4">4</a></li>
                <li class="ellipsis"></li>
                <li><a href="#" aria-label="Page 12">12</a></li>
                <li><a href="#" aria-label="Page 13">13</a></li>
                <li class="pagination-next">
                <?php if ($pagination->hasNextPage()): ?>
                <li>
                <a href="<?= $pagination->nextPageURL() ?>" aria-label="Next page">Next</a></li>
                </li>
    <?php endif ?>
              </ul>
            </nav>



    <?php foreach ($pagination->range(10) as $r): ?>
    <li>
      <a <?= $pagination->page() === $r ? ' aria-current="page"' : '' ?> href="<?= $pagination->pageURL($r) ?>">
        <?= $r ?>
      </a>
    </li>
    <?php endforeach ?>

    <?php if ($pagination->hasNextPage()): ?>
    <li>
      <a href="<?= $pagination->nextPageURL() ?>">›</a>
    </li>
    <?php else: ?>
    <li>
      <span>›</span>
    </li>
    <?php endif ?>

  </ul>
</nav>