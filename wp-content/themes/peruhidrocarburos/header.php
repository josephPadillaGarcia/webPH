<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peru Hidrocarburos</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <!--ul>
            <li><a href="http://localhost/webph/blog/">Blog</a></li>
        </ul-->

        <?php
            $conf = [
                'theme_location' =>  'header-menu', // este sera el nombre del menu que le tengamos asignado en functions.php usando register_nav_menu()
                'menu' =>  '',
                'menu_id' =>  'menu-content', // <ul id="navMenu">
                'menu_class' => 'main-nav__list main-nav__list--h-line-bottom main-nav__list--h-color-text', // <ul class="navMenu">
                'container' => 'nav', // <nav></nav>
                'container_class' => 'main-nav', // <nav class="navMenu">
                'container_id' => '',    // <nav id="navMenu">'echo' => true,
                'fallback_cb' => 'wp_page_menu', // en caso de que el menu no exista cargar wp_page_menu
                'before' => '', // texto antes del texto del enlace.
                'after' => '', // texto despues del texto del enlace.
                'link_before' => '<span>', // <a href=""><span> ....
                'link_after' => '</span>', // </span></a>
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing' => 'preserve', // preserve / discard
                'depth' => 2, // numero de niveles que serán mostrados
                'walker' => ''
            ];

            wp_nav_menu($conf);
        ?>
    </header>
    