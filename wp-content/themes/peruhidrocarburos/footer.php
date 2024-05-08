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