<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- Remixicon Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Remixicon Icon -->
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> <!-- Lien vers le fichier style.css -->
    <?php wp_head() ?>
</head>
<body>
    <!-- header -->
    <header class="ds-header" id="site-header">
    <div class="container">
        <div class="ds-header-inner">
            <!-- logo -->
            <a href="index.html" class="ds-logo">
            <img src="#" alt="logo" class="logo">
            Grow High
            </a>
            <!-- logo -->
            <!-- social -->
            <ul class="ds-social">
            <li><a href="#">E-shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" target="_blank"><i class="ri-youtube-fill"></i></a></li>
            <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
            </ul>
            <!-- social -->
        </div>
    </div>
    </header>
    <!-- header -->

    <div class="container">