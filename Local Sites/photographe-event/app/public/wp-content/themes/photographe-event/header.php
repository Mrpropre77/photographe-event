<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
        <header> 
            <div class="header_desktop">
                <!-- Main menu -->
                <!-- Logo Accueil -->
                <a href="<?php echo home_url('/'); ?>" class="header_logo_link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png" class="header_logo_img" alt="Logo">
                </a>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main',
                        'container' => 'ul',
                        'menu_class' => 'header__menu__desktop',
                    )
                );
                ?>
                <div class="btn_menu">
                    <div class="line"></div>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div class="header_mobile">
                <div class="header_mobile_container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main',
                            'container' => 'ul',
                            'menu_class' => 'header__menu__mobile',
                        )
                    );
                    ?>
                </div>
            </div>
        </header>
<main class="main">