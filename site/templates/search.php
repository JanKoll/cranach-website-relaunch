<?php snippet('header') ?>

<!-- Content -->
  <main>
    <div class="grid-container chapter-spacer">
      <div class="grid-x grid-padding-x">

        <div class="cell medium-offset-2 medium-8 small-12">

          <div class="grid-x grid-padding-x">
            <div class="cell">
              <h1>Results for <i><?= html($query) ?></i></h1>
              <hr />
            </div>
            <?php foreach ($list=$results->paginate(9) as $result): ?>
                <div class="cell">
                  <h3><?= $result->headline() ?></h3>
                  <p><?= $result->previewText() ?></p>
                  <a href="<?= $result->url() ?>">Weiter Lesen...</a>
                  <hr />
                </div>
            <?php endforeach ?>

            <?php if( $list == '' ): ?>
              <h3>  Keine Ergebnisse </h3> 
            <?php elseif(($list->last()->indexOf()+1) < 5): ?>
            
            <?php else:?>
            
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>
    <?php snippet('builder') ?>
  </main>

<?php snippet('footer') ?>
