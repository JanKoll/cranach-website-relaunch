<?php $pagination = $list->pagination() ?>
<nav class="cell" aria-label="Pagination">
    <ul class="pagination text-center">
        <?php if (!$pagination->hasPrevPage()) : ?>
            <li class="pagination-previous disabled">Previous</li>
        <?php else : ?>
            <li><a href="<?= $pagination->prevPageURL() ?>">Previous</a></li>
        <?php endif ?>
        <?php foreach ($pagination->range(5) as $r) : ?>

            <?php if ($pagination->page() === $r ? ' aria-current="page"' : '') : ?>
                <li class="current"><span class="show-for-sr">You're on page</span>
                    <a href="<?= $pagination->pageURL($r) ?>">
                        <?= $r ?></a></li>
            <?php else : ?>
                <li><a href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a></li>
            <?php endif ?>
        <?php endforeach ?>

        <li class="pagination-next">
            <?php if ($pagination->hasNextPage()) : ?>
        <li>
            <a href="<?= $pagination->nextPageURL() ?>" aria-label="Next page">Next</a></li>

    <?php endif ?>
    </li>
    </ul>
</nav>
