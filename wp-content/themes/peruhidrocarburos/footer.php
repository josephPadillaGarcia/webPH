<footer class="footer">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-6 grid-l-4">

                <?php
                    $args = array(
                        'post_type' => 'informacion_general',
                        'posts_per_page' => '0',
                    );
                ?>
                <?php $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="footer__logo">
                                <?php $imagen = get_field('logo_ph_blanco'); ?>    
                                <img src="<?php echo $imagen['url']; ?>" alt="" class="">
                            </div>
                            <div class="infocontactos">
                                <?php the_field('informacion_de_contacto'); ?>
                            </div>
                            <div class="redes">
                                <?php if (have_rows('item_redes')) { ?>
                                    <?php while (have_rows('item_redes')) {
                                    the_row(); ?>
                                        <div class="itemredes">
                                            <a href="<?php the_sub_field('link_redes'); ?>"><i class="ri-<?php the_sub_field('icon_redes'); ?>-fill"></i></a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

            <div class="grid-s-12 grid-m-6 grid-l-2">
                <div class="footer__title">
                    <h4>Menú</h4>
                </div>
                <div class="footer__nav">
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
            </div>

            <div class="grid-s-12 grid-m-6 grid-l-3">
                <div class="footer__title">
                    <h4>Ayuda</h4>
                </div>
                <div class="footer__nav">
                    <?php
                        $conf = [
                            'theme_location' =>  'footer-enlaces', // este sera el nombre del menu que le tengamos asignado en functions.php usando register_nav_menu()
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
            </div>

            <div class="grid-s-12 grid-m-6 grid-l-3">
                <div class="footer__title">
                    <h4>Contáctanos</h4>
                </div>

            </div>

        </div>

        <div class="copy">
            <p>Copyright ©2024 PH. All rights reserved.</p>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/fancy.min.css">
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.min.js"></script>

<script type="text/javascript">
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();
</script>
</body>
</html>