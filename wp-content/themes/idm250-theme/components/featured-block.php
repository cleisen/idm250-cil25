<div class="container-bg-img">

<div class="bg-img">
    <?php 
    $image = get_field('title_background_image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>

<div class="title-on-img">
<h1>
    <?php echo get_field('title_on_image'); ?>
</h1>
</div>

</div>