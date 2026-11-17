<?php
/**
 * Program Content October.
 * ACF fields: title, items (date/description), image.
 */
$title = get_sub_field('title');
$items = get_sub_field('items');
$image = get_sub_field('image');
?>
<div class="program-content-october__inner row align-items-center g-4 g-lg-5">
  <div class="col-12 <?php echo $image ? 'col-lg-8' : 'col-lg-12'; ?>">
    <?php if ($title): ?>
      <h2 class="program-content-october__title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>

    <?php if ($items): ?>
      <ul class="program-content-october__items">
        <?php foreach ($items as $item): ?>
          <li>
            <?php if (!empty($item['date'])): ?>
              <span class="program-content-october__date"><?php echo esc_html($item['date']); ?></span>
            <?php endif; ?>
            <?php if (!empty($item['description'])): ?>
              <span><?php echo esc_html($item['description']); ?></span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

  <?php if ($image): ?>
    <div class="col-12 col-lg-4 text-center">
      <?php
      echo wp_get_attachment_image($image, 'large', false, [
        'class'    => 'program-content-october__image img-fluid',
        'loading'  => 'lazy',
        'decoding' => 'async',
      ]);
      ?>
    </div>
  <?php endif; ?>
</div>
