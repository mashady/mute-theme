<?php
$title       = $args['title'] ?? 'Default Title';
$paragraph   = $args['paragraph'] ?? 'Default paragraph content goes here.';
?>

<section class="py-16 flex flex-col items-start">
  <h2 class="text-black text-4xl font-normal font-inter">
    <?php echo esc_html($title); ?>
  </h2>
  <p class="mt-4 max-w-5xl text-zinc-600 text-base font-light font-inter leading-relaxed">
    <?php echo esc_html($paragraph); ?>
  </p>
</section>
