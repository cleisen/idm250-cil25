<div class="container-hero-img">

<div class="">
    <?php 
    $image = get_field('about_hero_image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="about-hero-img" />
    <?php endif; ?>
</div>

<h1 class="about-hero-title">
    <?php echo get_field('about_hero_title'); ?>
</h1>

</div>