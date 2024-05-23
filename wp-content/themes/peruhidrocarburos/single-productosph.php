<?php

/**
 * Template Name: Single Blog
 */

get_header();
?>

<!--div class="">
    <figure class="card__figure">
        <?php $imagen = get_field('imagen_post'); ?>
        <img class="card__image" src="<?php echo $imagen['url']; ?>">
    </figure>
    <p><?php the_title(); ?></p>
    <p><?php the_field('autor_post'); ?></p>
    <p><?php the_field('fecha_post'); ?></p>
    <p><?php the_field('contenido_post'); ?></p>
</div-->

<section class="sectionSingleproducto">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-5 grid-l-5">
                <div class="singleblog__header">
                    <p>Productos/GLP/Fisher/Reguladores/ Primera Etapa</p>
                </div>
                <div class="owl-imgproducto owl-carousel">
                    <?php if (have_rows('lista_imagen_producto')) { ?>
                        <?php while (have_rows('lista_imagen_producto')) {
                            the_row(); ?>
                            <div class="item">
                                <?php $imagen = get_sub_field('item_img_producto'); ?>
                                <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <div class="grid-s-12 grid-m-7 grid-l-7">
                <div class="singleproducto__content">
                    <div class="singleproducto__header">
                        <h3><?php the_title(); ?></h3>
                    </div>



                    <div class="singleproducto__description">
                        <?php the_field('descripcion_producto'); ?>
                    </div>

                    <div class="singleproducto__ficha">
                        <a href="<?php the_field('archivo_pdf'); ?>">Ver ficha técnica</a>
                    </div>
                    
                    <div class="singleproducto__elegiropcion">
                        <select name="" id="selector" class="input-group__select" onchange="">
                        <?php if (have_rows('lista_producto')) { ?>
                            <?php while (have_rows('lista_producto')) {
                                the_row(); ?>
                                    <option value="<?php the_sub_field('opcion_de_producto'); ?>"><?php the_sub_field('opcion_de_producto'); ?></option>                               
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="singleproducto__asesor">
                        <a href="https://api.whatsapp.com/send?phone=51<?php the_field('asesor'); ?>&text=Hola, quisiera saber sobre el producto" target="_blank"><i class="ri-whatsapp-line"></i><span>Hablar con un asesor</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();