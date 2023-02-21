<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>

<header>
    <p>LOGO GOES HERE</p>
    <nav class="main-menu">
        <?php
        wp_nav_menu(['theme_location' => 'primary-menu']);
        ?>
    </nav>
</header>