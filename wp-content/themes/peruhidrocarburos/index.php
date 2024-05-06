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
    <div class="title-general">
        <?php the_field('titulo_nuestros_servicios'); ?>
    </div>
    
    <div class="container">
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
                                        <img class="card__image" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" >
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








<?php 
get_footer(); 