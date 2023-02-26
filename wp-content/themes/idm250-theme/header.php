<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/zik2ksl.css">
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