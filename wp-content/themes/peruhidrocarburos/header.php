<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peru Hidrocarburos</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header header--background">
            <div class="container">
                <div class="header__content">

                    <?php
                        $args = array(
                            'post_type' => 'informacion_general',
                            'posts_per_page' => '0',
                        );
                    ?>
                    <?php $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="header__logo">
                                    <a class="header__link header__link__down header__link--hide" href="<?php echo site_url(); ?>">
                                        <?php $imagen = get_field('logo_ph'); ?>    
                                        <img src="<?php echo $imagen['url']; ?>" alt="" class="header__img">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <div class="header-nav">
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
                    </div>
                        
                    <a href="#!" class="btn-nav">
                        <p>Contáctanos</p>
                    </a> 
                    <ul class="movil-menu" style="display: none;">
                        <li>
                            <a id="abrir-side" class="btn-nav"><i class="ri-menu-line"></i></a>
                        </li>
                    </ul>

                </div>


                <div class="sidenav">
                    <div class="sidenav__content">
                        <div class="sidenav__head">
                            <div class="head__logo">
                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/logo-depsa.png" alt="" class="header__img">
                            </div>
                            <div class="head__cerrar head__cerrar--b-radius ">
                                <a class="" id="cerrar-side"><i class="close ri-close-line"></i></a>
                            </div>
                        </div>
                        <div class="sidenav__body">

                            <?php
                            $conf = [
                                'theme_location' =>  'header-menu', // este sera el nombre del menu que le tengamos asignado en functions.php usando register_nav_menu()
                                'menu' =>  '',
                                'menu_id' =>  'menu-content', // <ul id="navMenu">
                                'menu_class' => 'sidenav__list', // <ul class="navMenu">
                                'container' => 'nav', // <nav></nav>
                                'container_class' => '', // <nav class="navMenu">
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

                            <a href="#!" class="btn-nav">
                                <p>Contáctanos</p>
                            </a> 
                        </div>
                    </div>
                </div>

            </div>
        </header>

    