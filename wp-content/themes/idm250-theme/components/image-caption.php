<div class="image-caption">

    <div class="">
        <?php 
        $image = get_field('single_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="single-img"/>
        <?php endif; ?>
    </div>

    <div class="caption">
    <?php echo get_field('caption');?>
    </div>

</div>