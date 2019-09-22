<?php $pagination = $list->pagination() ?>

<?php if($list->count() > 4): ?>

<nav class="cell" aria-label="Pagination">
  <ul class="pagination text-center">
    <li class="pagination-previous <?= e(!$pagination->hasPrevPage(), ' disabled') ?>">
      <?php if($pagination->hasPrevPage()): ?>
        <a href="<?= $pagination->prevPageURL() ?>" aria-label="Previous page">
          <?php
              if($kirby->language()->code()=='de') {
                echo 'Vorheriges';
              } else {
                echo 'Previous';
              };
            ?>
          </a>
      <?php else: ?>
      <?php
              if($kirby->language()->code()=='de') {
                echo 'Vorheriges';
              } else {
                echo 'Previous';
              };
            ?>
      <?php endif ?>
    </li>

    <?php foreach ($pagination->range(5) as $r) : ?>
      <?php if ($pagination->page() === $r ? ' aria-current="page"' : '') : ?>
        <li class="current">
          <span class="show-for-sr">
            <?php
                  if($kirby->language()->code()=='de') {
                    echo 'Du bist hier';
                  } else {
                    echo 'You are on page';
                  };
                ?>
            </span>
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
        <a href="<?= $pagination->nextPageURL() ?>" aria-label="Next page">
          <?php
              if($kirby->language()->code()=='de') {
                echo 'Nächstes';
              } else {
                echo 'Next';
              };
            ?>
         </a>
      <?php else: ?>
      <?php
              if($kirby->language()->code()=='de') {
                echo 'Nächstes';
              } else {
                echo 'Next';
              };
            ?>
      <?php endif ?>
    </li>
  </ul>
</nav>

<?php endif ?>
