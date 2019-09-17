<?php snippet('header') ?>

  <div class="chapter grid-container full text-center">
    <div class="grid-x grid-padding-x">
      <div class="cell">
        <h1>
          <?php 
            if($kirby->language()->code()=='de') {
              echo 'Fehler 404 - Seite nicht gefunden'; 
            } else {
              echo 'Error 404 - Page not Found';  
            };
          ?>
        </h1>
        <a href="<?= $site->url() ?>">
          <h3>
            <?php 
              if($kirby->language()->code()=='de') {
                echo 'Zurück zur Startseite'; 
              } else {
                echo 'Go to Homepage';  
              };
            ?>
          </h3>
        </a>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>
