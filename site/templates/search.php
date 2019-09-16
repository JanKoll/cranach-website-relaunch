<?php snippet('header') ?>

<!-- Content -->
  <main>
    <div class="grid-container chapter-spacer">
      <div class="grid-x grid-padding-x">

        <div class="cell medium-offset-4 medium-8 small-12">

          <div class="grid-x grid-padding-x">
            <div class="cell">
              <h1>Results for <i><?= html($query) ?></i></h1>
              <hr />
            </div>
            <?php foreach ($results as $result): ?>
                <div class="cell">
                  <h3><?= $result->headline() ?></h3>
                  <p><?= $result->previewText() ?></p>
                  <a href="<?= $result->url() ?>">Weiter Lesen...</a>
                  <hr />
                </div>
            <?php endforeach ?>

            <nav class="cell" aria-label="Pagination">
              <ul class="pagination text-center">
                <li class="pagination-previous disabled">Previous</li>
                <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                <li><a href="#" aria-label="Page 2">2</a></li>
                <li><a href="#" aria-label="Page 3">3</a></li>
                <li><a href="#" aria-label="Page 4">4</a></li>
                <li class="ellipsis"></li>
                <li><a href="#" aria-label="Page 12">12</a></li>
                <li><a href="#" aria-label="Page 13">13</a></li>
                <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
    <?php snippet('builder') ?>
  </main>

<?php snippet('footer') ?>
