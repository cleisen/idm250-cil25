<div class="hero-img-container">

    <div class="">
        <?php 
        $image = get_field('hero_image_home');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hero-img-home" />
        <?php endif; ?>
    </div>

    <div class="hero-title">
        <h1>
            <?php echo get_field('hero_title_home'); ?>
        </h1>
    </div>
    
    <div>
        <a href="<?php echo get_field('hero_link'); ?>" class="hero-link"> 
        Contact Us Now</a>
    </div>
    

</div>