<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <?php
      $item = $site->breadcrumb();
      $last = $item->last();

      foreach($item as $crumb):
    ?>

      <?php if(!($crumb == $last)): ?>
        <li><a href="<?= $crumb->url() ?>"><?= html($crumb->title()) ?></a></li>
      <?php else: ?>
        <li>
          <span class="show-for-sr">
            <?php 
              if($kirby->language()->code()=='de') {
                echo 'Aktuelles: '; 
              } else {
                echo 'Current: ';  
              };
            ?>
            </span> <?= html($crumb->title()) ?>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
