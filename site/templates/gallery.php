<?php snippet('header') ?>

    <!-- Content -->
      <main id="sticky-container" data-something>
        <div class="grid-container filter">
          <div class="grid-x grid-padding-x">
            <div class="cell small-4" data-sticky-container>
              <div class="sticky" data-sticky data-margin-top="9" data-anchor="sticky-container">
                <!-- Breadcrumbs -->
                <?php snippet('breadcrumbs') ?>

                <?php if($page->hasChildren()): ?>
                  <a href="<?= $page->children()->shuffle()->first()->url() ?>" class="button random icon-shuffle">Random Article</a>
                <?php endif ?>
                
                <!-- Filter -->
                <form>
                  <fieldset class="fieldset">
                    <legend>Filter:</legend>
                    <label for="eins"><input type="checkbox" name="eins" value="eins" id="eins">Eins</label>
                    <label for="zwei"><input type="checkbox" name="zwei" value="zwei" id="zwei">Zwei</label>
                    <label for="drei"><input type="checkbox" name="drei" value="drei" id="drei">Drei</label>
                    <button type="button" name="anwenden" class="button">Anwenden</button>
                  </fieldset>
                </form>
              </div>
            </div>

            <div class="cell medium-8 small-12">

              <div class="grid-x grid-padding-x">
                <?php foreach ($page->children() as $item): ?>
                  <div class="cell medium-4 small-6">
                    <div class="card">
                      <a href="<?= $item->url() ?>">
                      <img src="<?= $item->images()->nth(0)->crop(400,500)->url() ?>">
                        <div class="card-section">
                          <p><?= $item->title() ?> [<?= $item->date()->toDate('d. M Y') ?>]</p>
                        </div>
                      </a>
                    </div>
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
