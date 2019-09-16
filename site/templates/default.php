<?php snippet('header') ?>



<h1>Spacer</h1>
<h1>Spacer</h1>

    <!-- Content -->

      <main id="sticky-container">

        <div class="grid-container intro">
          <div class="grid-x grid-padding-x">
            <div class="cell small-4" data-sticky-container>
              <div class="sticky" data-sticky data-margin-top="9" data-anchor="sticky-container">

                <!-- Breadcrumbs -->
                <?php snippet('breadcrumbs') ?>

                <!-- Article Navigation -->
                <ul class="article-nav" data-smooth-scroll data-offset="60">
                  <li><a href="#provenienz" class="icon-arrow-down">PROVENIENZ</a></li>
                  <li><a href="#forschungsgeschichte" class="icon-arrow-down">FORSCHUNGSGESCHICHTE</a></li>
                  <li><a href="#material" class="icon-arrow-down">MATERIAL / TECHNIK</a></li>
                  <li><a href="#erhaltungszustand" class="icon-arrow-down">ERHALTUNGSZUSTAND</a></li>
                  <li><a href="#restaurierungsgeschichte" class="icon-arrow-down">RESTAURIERUNGSGESCHICHTE</a></li>
                  <li><a href="#top" class="backtop icon-arrow-backtop"></a></li>
                </ul>
              </div>
            </div>

            <div class="cell medium-8 small-12">
              <div class="head">
                <h2><?= $page->headline() ?></h2>
                <p><?= $page->subHeadline() ?></p>
                <div class="media-control">0:00 / 5:24</div>
              </div>

              <div class="content">
                <?= $page->text()->kt() ?>
              </div>
            </div>
          </div>
        </div>



        <?php snippet('builder') ?>




      </main>






<?php snippet('footer') ?>
