<?php
/**
 * Bild links – Text rechts
 * Felder: image (ID), headline (text), text (wysiwyg)
 */
$summary   = get_sub_field('summary');
$titel = get_sub_field('titel');
$text     = get_sub_field('text');
$image     = get_sub_field('image');
?>
<div class="row align-items-center g-5">
  <div class="col-md-6">
    <?php
    if ($image) {
      echo wp_get_attachment_image($image, 'large', false, [
        'class'    => 'img-fluid rounded',
        'loading'  => 'lazy',
        'decoding' => 'async',
      ]);
    }
    ?>
  </div>
  <div class="col-md-6">
    <?php if ($summary): ?><h2 class="mb-3"><?php echo esc_html($summary); ?></h2><?php endif; ?>
    <?php if ($titel): ?><h3 class="mb-3"><?php echo esc_html($titel); ?></h3><?php endif; ?>
    <?php if ($text): ?><div class="rte"><?php echo wp_kses_post($text); ?></div><?php endif; ?>
     <?php if ($image): ?><div class="rte"><?php echo wp_kses_post($image); ?></div><?php endif; ?>
  </div>
</div>
