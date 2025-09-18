<?php
$title       = $args['title'] ?? 'Default Title';
$paragraph   = $args['paragraph'] ?? 'Default paragraph content goes here.';
?>

<div class="flex flex-col mb-4 items-start max-w-5xl section-header">
    <h2 class="text-black text-5xl font-normal font-inter">
        <?php echo esc_html($title); ?>
    </h2>
    <p class="mt-4  text-zinc-600 text-lg text-light font-inter">
        <?php echo esc_html($paragraph); ?>
    </p>
</div>