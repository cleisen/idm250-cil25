<div class="link-arrow">

    <h5>
    <a href="<?php echo get_field('page_link'); ?>" class="link"> 
    See a list of all of our plants</a>
    </h5>

    <?php 
    $image = get_field('link_image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="arrow" />
    <?php endif; ?>

</div>