<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <?php wp_head() ?>
</head>

<body>
    <div id="main-container">
    <div class="top">
        <a href="<?php echo get_home_url() ?>">
            <img style="height: 40px;" src="<?php echo get_stylesheet_directory_uri() ?>/img/Louiselogo_blaa.png">
        </a>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
    </div>