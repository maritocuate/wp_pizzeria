<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>

<body>

<header class="encabezado-sitio">
    <div class="contentedor">
        <div class="logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
            </a>
        </div><!--END logo-->
    </div><!--END contenedor-->
</header>

<nav class="menu-sitio">
    <div class="contentdor navegacion">
        <?php
            $args = array(
                'theme_location' => 'header_menu',
                'container' => 'nav',
                'container_class' => 'menu-sitio'
            );

            wp_nav_menu($args);
        ?>
    </div>
</nav>