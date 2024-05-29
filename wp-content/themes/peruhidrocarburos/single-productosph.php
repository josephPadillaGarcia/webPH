<?php

/**
 * Template Name: Single Blog
 */

get_header();

$post_id = get_the_ID(); // Reemplaza 123 con el ID de tu post
$post_title = get_the_title($post_id);

// Obtener todas las taxonomías asociadas con el post
$taxonomies = get_post_taxonomies($post_id);

// Verificar si hay taxonomías asociadas
/*if ($taxonomies) {
    echo '<ul>';
    // Iterar sobre cada taxonomía
    foreach ($taxonomies as $taxonomy) {
        // Obtener los términos asociados con esta taxonomía para el post dado
        $terms = get_the_terms($post_id, $taxonomy);
        
        // Verificar si hay términos y si no hay errores
        if ($terms && !is_wp_error($terms)) {
            // Mostrar el nombre de la taxonomía y los términos asociados
            echo '<li>' . $taxonomy . ': <ul>';
            foreach ($terms as $term) {
                echo '<li>' . $term->name . '</li>';
            }
            echo '</ul></li>';
        }
    }
    echo '</ul>';
} else {
    echo 'No hay taxonomías asociadas con este post.';
}*/


// ID del post del que deseas obtener la información
                                            

// Obtener los términos de la taxonomía 'tipo_producto' asociados al post
$tipoproducto_terms = wp_get_post_terms($post_id, 'marca_producto');

// Verificar si se encontraron términos
if (!empty($tipoproducto_terms)) {
// Mostrar el término de la taxonomía 'tipoproducto'
    /*echo '<div class="catproducto">';
    echo '<p>Marca: ' . $tipoproducto_terms[0]->name . '</p>'; // Suponiendo que solo hay un término
    echo '</div>';*/

    $marcaprod = $tipoproducto_terms[0]->name;
}

// Obtener los términos de la taxonomía 'tipo_producto' asociados al post
$tipoproducto_terms = wp_get_post_terms($post_id, 'tipo_producto');

// Verificar si se encontraron términos
if (!empty($tipoproducto_terms)) {

    $typeprod = $tipoproducto_terms[0]->name;
}


// Obtener los términos de la taxonomía 'tipo_producto' asociados al post
$tipoproducto_terms = wp_get_post_terms($post_id, 'tipo_gas_producto');

// Verificar si se encontraron términos
if (!empty($tipoproducto_terms)) {

    $typegasprod = $tipoproducto_terms[0]->name;
}


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

<section class="">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-3 grid-l-2">
                <div class="asideBlog">
                    <h3 class="category-title"><?php echo $typegasprod; ?></h3>

                    <?php
                        // Mostrar una nube de etiquetas para la taxonomía 'categoria'
                        $args = array(
                            'taxonomy' => 'tipo_gas_producto',
                        );
                        echo '<div class="taxonomia-cloud">';
                        wp_tag_cloud( $args );
                        echo '</div>';
                    ?>
                     
                </div>
            </div>
            <div class="grid-s-12 grid-m-9 grid-l-10">

                <div class="singleblog__content contentinfo">
                    <div class="grid-col">

                        <div class="grid-s-12 grid-m-12 grid-l-6">

                            <div class="singleblog__header">
                                <?php echo '<p>Productos/' . $typegasprod . '/' . $marcaprod . '/' . $typeprod . '/'. $post_title .'</p>' ?>
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

                        <div class="grid-s-12 grid-m-7 grid-l-6">
                            <div class="singleproducto__content">
                                <div class="singleproducto__header">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="singleproducto__catproducto">
                                    <p>Marca: <?php echo $marcaprod ?></p>
                                </div>

                                <div class="singleproducto__description">
                                    <?php the_field('descripcion_producto'); ?>
                                </div>

                                <div class="singleproducto__ficha">
                                    <a href="<?php the_field('archivo_pdf'); ?>"><i class="ri-file-pdf-2-line"></i>Ver ficha técnica</a>
                                </div>
                                
                                <div class="singleproducto__elegiropcion">
                                    <select name="" id="selecprod" class="input-group__select" onchange="ShowSelected();">
                                    <option value="">Elegir una opción</option>
                                    <?php if (have_rows('lista_producto')) { ?>
                                        <?php while (have_rows('lista_producto')) {
                                            the_row(); ?>
                                                <option value="<?php the_sub_field('codigo_producto'); ?>"><?php the_sub_field('opcion_de_producto'); ?></option>                               
                                            <?php } ?>
                                        <?php } ?>
                                    </select>

                                    <div class="singleproducto__prodcode">
                                        <p>Código de producto: <span id="prodcode"></span></p>                                    
                                    </div>
                                </div>

                                <div class="singleproducto__asesor">
                                    <a href="https://api.whatsapp.com/send?phone=51<?php the_field('asesor'); ?>&text=Hola, quisiera saber sobre el producto" target="_blank"><i class="ri-whatsapp-line"></i><span>Hablar con un asesor</span></a>
                                </div>

                                <div class="singleproducto__enlacecotizarprod">
                                <a href="<?php echo site_url(); ?>/cotizador">Cotizar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            
        </div>
    </div>
</section>

<?php get_footer();