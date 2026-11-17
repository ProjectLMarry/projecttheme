<?php
/**
 * About Section.
 * ACF fields: title, intro, text.
 */
$title = get_sub_field('title');
$intro = get_sub_field('intro');
$text  = get_sub_field('text');
?>
<div class="about-section__inner">
  <?php if ($title): ?>
    <h2 class="about-section__title"><?php echo esc_html($title); ?></h2>
  <?php endif; ?>

  <?php if ($intro): ?>
    <p class="about-section__intro"><?php echo esc_html($intro); ?></p>
  <?php endif; ?>

  <?php if ($text): ?>
    <div class="about-section__text rte"><?php echo wp_kses_post($text); ?></div>
  <?php endif; ?>
</div>
