<?php
/*
template name: Nosotros
*/
get_header();
?>

<section class="informacionnosotros">
    <div class="container">
        <div class="infobanner">
            <?php the_field('banner_texto'); ?>
        </div>
    </div>
</section>

<section class="sectionlista">
    <div class="container">
        <div class="grid-col">

            <?php if (have_rows('lista_info_ph')) { ?>
                <?php while (have_rows('lista_info_ph')) {
                the_row(); ?>
                    <div class="grid-s-12 grid-m-6 grid-l-4">
                        <div class="infolistaph infolistaph__<?php echo get_row_index(); ?>">
                            <?php $imagen = get_sub_field('icon_ph'); ?>
                            <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                            <?php the_sub_field('info_ph'); ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>

<section class="sectiontrabajos">
    <div class="container">
        <div class="title-general">
            <?php the_field('titulo_nuestros_trabajos'); ?>
        </div>

        <div class="owl-trabajos owl-carousel">
            <?php if (have_rows('carrousel_imagen')) { ?>
                <?php while (have_rows('carrousel_imagen')) {
                    the_row(); ?>
                    <div class="item">
                        <?php $imagen = get_sub_field('item_imagen'); ?>
                        <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="sectionconviertete">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-6 grid-l-4">
                <div class="infoconviertete">
                    <?php the_field('informacion_convierte'); ?>
                </div>
            </div>
            <div class="grid-s-12 grid-m-6 grid-l-4">
                <div class="convierteteimg">
                    <?php $imagenconviertete = get_field('imagen_convierte'); ?>
                    <img class="" src="<?php echo $imagenconviertete['url']; ?>" alt="<?php echo $imagenconviertete['title']; ?>">
                </div>
            </div>
            <div class="grid-s-12 grid-m-6 grid-l-4">
                <div class="conviertetelista">
                    <ul>                                
                        <?php if (have_rows('item_convierte')) { ?>
                            <?php while (have_rows('item_convierte')) {
                                the_row(); ?>
                                    <li><h2><?php the_sub_field('item'); ?></h2></li>                                    
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sectionequipo">
    <div class="container">
        
        <div class="title-general">
            <?php the_field('titulo_equipo'); ?>
        </div>
        <div class="owl-equipo owl-carousel">
            <?php if (have_rows('lista_equipos')) { ?>
                <?php while (have_rows('lista_equipos')) {
                    the_row(); ?>
                    <div class="item">
                        <div class="imgtrabajador">
                            <?php $imagen = get_sub_field('imagen_trabajador'); ?>
                            <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                        </div>
                        <div class="nombretrabajador">
                            <h4><?php the_sub_field('nombre_trabajador'); ?></h4>
                        </div>
                        <div class="cargotrabajador">
                            <p><?php the_sub_field('cargo_trabajador'); ?></p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>


<?php 
get_footer(); 