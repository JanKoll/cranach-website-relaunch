<!-- Slider -->

  <div class="orbit <?php if($page->template() == 'artifact' || $page->template() == 'home') echo 'large' ?>" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <div class="orbit-wrapper">
      <div class="orbit-controls">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      </div>
      <ul class="orbit-container">
        <?php foreach($page->images() as $image): ?>
          <li class="orbit-slide <?php if($image->first()) echo 'is-active' ?>">
            <figure class="orbit-figure">
              <img class="orbit-image" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
              <figcaption class="orbit-caption"><?= $image->caption() ?></figcaption>
            </figure>
          </li>
        <?php endforeach ?>

      </ul>
    </div>
  </div>
