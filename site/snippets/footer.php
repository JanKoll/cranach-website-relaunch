<footer>
  <div class="grid-container full footer-nav">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <?php foreach ($site->children()->listed() as $item): ?>
          <div class="cell medium-auto small-12">
            <ul>
              <li><a href="<?= $item->url() ?>"> <?= $item->title()->html() ?> </a></li>
              <?php if($item->hasChildren()):?>
                <?php foreach ($item->children()->listed() as $subitem): ?>
                  <li><a href="<?= $subitem->url() ?>"><?= $subitem->title()->html() ?></a></li>
                <?php endforeach ?>
              <?php endif ?>
            </ul>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <div class="grid-container full coppyright">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="cell medium-4 small-12">
          © Lucas Cranach Arcive 2019
        </div>

        <div class="cell medium-8 small-12">
          <ul>
            <?php foreach ($site->footer()->toPages() as $item): ?>
                <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="<?= $kirby->url() ?>/assets/js/app.js"></script>

</body>
</html>
