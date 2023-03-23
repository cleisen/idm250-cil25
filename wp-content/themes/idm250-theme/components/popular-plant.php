<div class="plant-card">

    <div class="">
        <?php 
            $image = get_field('plant_card');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="" />
        <?php endif; ?>
    </div>

    <div class="plant-title">
        <h4>
            <?php echo get_field('popular_plant_title'); ?>
        </h4>
    </div>

    <div class="price">
        <h4>
            <?php echo get_field('price'); ?>
        </h4>
    </div>

</div>