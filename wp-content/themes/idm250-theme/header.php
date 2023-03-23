<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <!-- <link rel="stylesheet" href="https://use.typekit.net/zik2ksl.css"> -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>

<header>
    <nav class="main-menu">
        <?php
        wp_nav_menu(['theme_location' => 'primary-menu']);
        ?>
    </nav>
</header>