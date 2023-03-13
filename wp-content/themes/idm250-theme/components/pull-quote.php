<div class="pull-quote">

    <?php 
        $image = get_field('accent_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="arrow" />
        <?php endif; ?>

    <div class="quote">
        <h3>
            <?php echo get_field('quote_text');?>
        </h3>
    </div>

    <div class="customer">

        <div class="customer-name">
            <?php echo get_field('customer_name');?>
        </div>

        <div>
            <?php 
                $image = get_field('customer_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="customer-img" />
                <?php endif; ?>
        </div>

    </div>

</div>