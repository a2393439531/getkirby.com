<?php snippet('header') ?>

<main class="main" role="main">

  <div class="col-4-6 last">
    <ul class="docs-index-list list-2">
      <?php foreach($items as $item): ?><!--
   --><li>
        <div class="text">
          <h2 class="delta"><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2>
          <p class="text small"><?php e($item->category()->isNotEmpty(), 'Category: '. $item->category()->html(), '') ?></p>

          <?php echo kirbytext($item->description()) ?>
        </div>
     </li><!--
    --><?php endforeach ?>
    </ul>
  </div>
  <?php snippet('category-filter', array('categories' => $categories)) ?>
</main>

<?php snippet('footer') ?>
