<?php
/*
template name: Inicio
*/
get_header();
?>

<?php $imagenbanner = get_field('banner_home'); ?>
<section class="banner " style="background-image: url(<?php echo $imagenbanner['url']; ?>);">
    <div class="container">
        <div class="banner__contenido banner__contenido--posicion">
            <div class="banner__bloque">
                <div class="banner__mensaje boton boton--naranja">
                    <?php the_field('contenido_banner'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-servicios">    
    <div class="container"> 
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
    <div class="container">
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
    <div class="container">
        <div class="escoger-info">
            <?php the_field('titulo_escogernos'); ?>
        </div>

        <div class="grid-col">
            <div class="grid-s-12 grid-m-6 grid-l-4">
            <?php $imagenempleado = get_field('imagen_fondo_empleado'); ?>
                <div class="moreempleados" style="background-image: url(<?php echo $imagenempleado['url']; ?>);">
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

            <div class="grid-s-12 grid-m-6 grid-l-8">
                <?php $imagenvideo = get_field('imagen_video'); ?>
                <div class="empresavideo" style="background-image: url(<?php echo $imagenvideo['url']; ?>);">
                    <h3><?php the_field('texto_video'); ?></h3>
                </div>
            </div>
        </div>
    </div>
    
</section>




<?php 
get_footer(); 