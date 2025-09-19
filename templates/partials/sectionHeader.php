<?php
$title       = $args['title'] ?? 'Default Title';
$paragraph   = $args['paragraph'] ?? 'Default paragraph content goes here.';
?>

<div class="flex flex-col mb-4 items-start max-w-5xl section-header">
    <h2 class="text-black text-3xl md:text-5xl font-normal font-inter section-title">
        <?php echo esc_html($title); ?>
    </h2>
    <p class="mt-4  text-zinc-600 text-md lg:text-lg text-light font-inter section-subtitle">
        <?php echo esc_html($paragraph); ?>
    </p>
</div>