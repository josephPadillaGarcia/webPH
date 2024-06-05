<?php
/*
template name: Inicio
*/
get_header();
?>

<section class="banner" style="">

    <div class="owl-banner owl-carousel">
        <?php if (have_rows('banner_home')) { ?>
            <?php while (have_rows('banner_home')) {
                the_row(); ?>
                <div class="item">
                    <?php $imagen = get_sub_field('item_img_banner'); ?>
                    <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                </div>
            <?php } ?>
        <?php } ?>
    </div>

    <div class="banner__mensaje boton boton--naranja absolute">
        <?php the_field('contenido_banner'); ?>
    </div>

</section>

<section class="section-servicios">    
    <div class="container wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1s"> 
        <div class="title-general">
            <?php the_field('titulo_nuestros_servicios'); ?>
        </div>
        <div class="grid-col">

                <?php
                    $args = array(
                        'post_type' => 'newservicios',
                        'posts_per_page' => '0',
                    );
                ?>
                <?php $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            

                        <div class="grid-s-12 grid-m-6 grid-l-4">
                            <div class="cardServicio cardServicio--<?php the_field('color_servicio'); ?>">
                                <div class="contentCardServicio">
                                    <div class="cardServicio_icon">
                                        <?php $imagen = get_field('icon_servicio'); ?>
                                        <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" >
                                    </div>
                                    <div class="cardServicio__title">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                    <div class="cardServicio_informacion">
                                        <?php the_field('contenido_nuevo_servicio'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

        </div>
    </div>
            

</section>

<section class="section-marcas">
    <div class="container wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1s">
        <div class="title-general">
            <?php the_field('titulo_marcas'); ?>
        </div>

        <!--div class="owl-general owl-carousel owl-theme owl-general--bottom-dots owl-banner"-->
        <div class="owl-marcas owl-carousel">
            <?php if (have_rows('marcas')) { ?>
                <?php while (have_rows('marcas')) {
                    the_row(); ?>
                    <div class="item">
                        <?php $imagen = get_sub_field('img_marca'); ?>
                        <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="section-escogernos">
    <div class="container ">
        <div class="escoger-info wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1s">
            <?php the_field('titulo_escogernos'); ?>
        </div>

        <div class="grid-col">
            <div class="grid-s-12 grid-m-4 grid-l-4">
            <?php $imagenempleado = get_field('imagen_fondo_empleado'); ?>
                <div class="moreempleados wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1s" style="background-image: url(<?php echo $imagenempleado['url']; ?>);">
                    <div class="contentMoreEmpleados">
                        <div class="moreempleados__info">
                            <?php the_field('contenido_empleado'); ?>
                        </div>
                        <div class="moreempleados__empleados">
                            <div class="listempleados">
                                <?php if (have_rows('empleado')) { ?>
                                    <?php while (have_rows('empleado')) {
                                    the_row(); ?>
                                        <?php $imagen = get_sub_field('imagen_empleado'); ?>
                                        <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">                                    
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-s-12 grid-m-8 grid-l-8">
                <?php $imagenvideo = get_field('imagen_video'); ?>
                <div class="empresavideo wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1s" style="background-image: url(<?php echo $imagenvideo['url']; ?>);">
                    <h3><?php the_field('texto_video'); ?></h3>
                    <a data-fancybox href="<?php the_field('video'); ?>"><i class="ri-play-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section class="section-somosph">
    <div class="container">
        <div class="content-somosph">
            <div class="title-somoph wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1s">
                <?php the_field('titulo_somos_ph'); ?>
            </div>
            <div class="caracteristicas-ph wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1s">
                <?php if (have_rows('caracteristicas_ph')) { ?>
                    <?php while (have_rows('caracteristicas_ph')) {
                    the_row(); ?>

                        <div class="carac-item">
                            <?php $imagencarac = get_sub_field('icon_caracteristicas'); ?>
                            <img class="" src="<?php echo $imagencarac['url']; ?>" alt="<?php echo $imagencarac['title']; ?>">
                            <div class="info-carac">
                                <?php the_sub_field('contenido_caracteristicas'); ?>
                            </div>
                        </div>                    
                                
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        
    </div>
</section>

<section class="section-politica">
    <div class="container wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1s">        
        <div class="title-general">
            <?php the_field('titulo_politica'); ?>
        </div>
        <div class="content-politica">

            <div class="grid-col">             
                <?php if (have_rows('lista_video_politica')) { ?>
                    <?php while (have_rows('lista_video_politica')) {
                    the_row(); ?>

                        <div class="grid-s-12 grid-m-6 grid-l-4">
                            <div class="itempolitica itempolitica--<?php the_sub_field('color'); ?>">
                                <div class="titlepolitica">
                                    <?php the_sub_field('titulo_item_politica'); ?>
                                </div>
                                <div class="videopolitica">
                                    <?php $imagenpolitico = get_sub_field('imagen_politica'); ?>
                                    <img class="" src="<?php echo $imagenpolitico['url']; ?>" alt="<?php echo $imagenpolitico['title']; ?>">
                                    <a class="iconpolitica iconpolitica--<?php the_sub_field('color'); ?>" data-fancybox href="<?php the_sub_field('video_politica'); ?>"><i class="ri-play-fill"></i></a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>

        </div>
    </div>
</section>

<section class="section-comprar">
    <div class="container ">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-6 grid-l-6">
                <?php $imagen = get_field('img_comprar'); ?>
                <img class="img-comprar wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1s" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
            </div>
            <div class="grid-s-12 grid-m-6 grid-l-6">
                <div class="info-comprar wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1s">
                    <?php the_field('contenido_comprar'); ?>
                </div>
            </div>
        </div>                        
    </div>
</section>

<section class="section-blog">
    <div class="container wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1s">
        <div class="title-general title-general--left">
            <?php the_field('titulo_blog'); ?>
        </div>

        <div class="contentblog">
            <div class="grid-col">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '0',
                );
            ?>
            <?php $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        
                        <div class="grid-s-12 grid-m-6 grid-l-4">
                            <div class="itemblog">
                                <figure class="card__figure">
                                    <?php $imagen = get_field('imagen_post'); ?>
                                    <img class="card__image" src="<?php echo $imagen['url']; ?>">
                                </figure>
                                <div class="infoblog">
                                    <div class="autorblog">
                                        <i class="ri-user-fill"></i><p>por: <?php the_field('autor_post'); ?></p>
                                    </div>
                                    <div class="titleblog">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                    <div class="enlaceblog">
                                        <a href="<?php the_permalink(); ?>">Leer Más</a>
                                        <p><?php the_field('fecha_post'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>


            </div>
        </div>
    </div>
</section>


<?php 
get_footer(); 