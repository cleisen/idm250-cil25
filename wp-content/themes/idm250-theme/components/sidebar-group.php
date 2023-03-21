<div class="sidebar-group">

    <div class="">
        <?php 
        $image = get_field('sidebar_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="sidebar-img"/>
        <?php endif; ?>
    </div>

    <h6 class="sidebar-text">
    <?php echo get_field('sidebar_text');?>
        </h6>

    <div class="logo-cloud">
        <?php  $images = get_field('logo_cloud');
        if($images): ?>
        <?php foreach($images as $image): ?>
        <img class="tiny-logo" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" width="auto" height="auto">
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <h5 class="sidebar-text-bold">
        <?php echo get_field('sidebar_text_bold');?>
    </h5>

</div>