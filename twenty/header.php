<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="top_header_block">
        <?php wp_nav_menu(array(
            'theme_location' => 'top_menu',
            'class' => 'top_header_block_text',
            'container' => 'ul'
        )); ?>
    </div>

    <header>
        <div class="modual_header">
            <div class="container">
                <div class="Modual_wrappr">
                    <div class="left_header">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/image/Frame.png" alt="Logo">
                        </a>
                    </div>
                    <div class="right_header">
                        <nav class="menubar">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main_menu',
                                'class' => 'nav',
                                'container' => 'ul'
                            )); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>