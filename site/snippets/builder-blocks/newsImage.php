  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-offset-4 medium-8 small-12" data-sticky-container>
        <?= $data->paragraphNewsImage()->toFile() ?>
        <p class="image-caption"><?= $multi->paragraphmultiimage()->toFile()->caption() ?></p>
      </div>
    </div>
  </div>
