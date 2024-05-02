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
            <div class="banner__bloque banner__bloque--sidecontent">
                <div class="banner__mensaje">
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
</section>

<?php 
get_footer(); 