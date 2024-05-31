<?php

/**
 * Template Name: Single Blog
 */

get_header();

$post_id = get_the_ID(); // Reemplaza 123 con el ID de tu post
$post_title = get_the_title($post_id);

// Obtener todas las taxonomías asociadas con el post
$taxonomies = get_post_taxonomies($post_id);

// Obtener los términos de la taxonomía 'tipo_producto' asociados al post
$marcaproducto_terms = wp_get_post_terms($post_id, 'marca_producto');

// Verificar si se encontraron términos
if (!empty($marcaproducto_terms)) {
// Mostrar el término de la taxonomía 'marcaproducto'
    $marcaprod = $marcaproducto_terms[0]->name;
}

// Obtener los términos de la taxonomía 'tipo_producto' asociados al post
$tipoproducto_terms = wp_get_post_terms($post_id, 'tipo_producto');

// Verificar si se encontraron términos
if (!empty($tipoproducto_terms)) {

    $typeprod = $tipoproducto_terms[0]->name;
}


// Obtener los términos de la taxonomía 'tipo_producto' asociados al post
$gasproducto_terms = wp_get_post_terms($post_id, 'tipo_gas_producto');

// Verificar si se encontraron términos
if (!empty($gasproducto_terms)) {

    $typegasprod = $gasproducto_terms[0]->name;
}


?>



<section class="">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-3 grid-l-2">
                <div class="asideBlog">

                    <h3 class="category-title title-gas"><?php echo $typegasprod; ?></h3>

                        <?php
                            // Obtener el término "Gas" en la taxonomía "Tipo de Energía"
                            $term_gas = get_term_by('name', $typegasprod, 'tipo_gas_producto');

                            if ($term_gas) {
                                // Obtener los posts relacionados con el término "Gas"
                                $related_posts = get_posts(array(
                                    'post_type' => 'productosph', // Reemplaza 'post' con el tipo de post que tienes
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'tipo_gas_producto',
                                            'field' => 'term_id',
                                            'terms' => $term_gas->term_id,
                                        ),
                                    ),
                                ));

                                $all_terms = array(); // Almacenar todos los términos de las otras taxonomías

                                foreach ($related_posts as $post) {
                                    // Obtener los términos de otras taxonomías asociadas a cada post
                                    $post_terms = wp_get_post_terms($post->ID, array('marca_producto')); // Reemplaza 'otra_taxonomia_1' y 'otra_taxonomia_2' con los nombres de tus otras taxonomías

                                    // Almacenar los términos de cada post en un array
                                    foreach ($post_terms as $term) {
                                        $all_terms[$term->term_id] = $term->name;
                                    }
                                }
                                

                                // Mostrar los términos de las otras taxonomías y el término "Gas"
                                echo '<ul>';
                                foreach ($all_terms as $term_id => $term_name) {
                                    //echo '<li><a href="' . get_term_link($term_id) . '">' . $term_name . '</a></li>';
                                    echo '<li><a href="'.site_url().'/tipo_gas_producto/'.$typegasprod.'/?_marca='.$term_name.'">' . $term_name . '</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                echo 'No se encontró el término en la taxonomía "Tipo de Energía".';
                            }
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
                            <?php 
                            
                            $args = array(
                                'p' => $post_id, // Reemplaza 123 con el ID del post que quieres obtener
                                'post_type' => 'productosph' // Reemplaza 'custom_post_type' con el nombre de tu custom post type
                            );

                            $product_posts = get_posts($args);
                            ?>
                            <div class="owl-imgproducto owl-carousel">
                                <?php if (have_rows('lista_imagen_producto', $post_id)) { ?>
                                    <?php while (have_rows('lista_imagen_producto', $post_id)) {
                                        the_row(); ?>
                                        <div class="item">
                                            <?php $imagen = get_sub_field('item_img_producto'); ?>
                                            <img class="" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>">
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="grid-s-12 grid-m-12 grid-l-6">
                            <div class="singleproducto__content">
                                <div class="singleproducto__header">
                                    <h3><?php echo $post_title ?></h3>
                                </div>
                                <div class="singleproducto__catproducto">
                                    <p>Marca: <strong><?php echo $marcaprod ?></strong></p>
                                </div>

                                <div class="singleproducto__description">
                                    <?php the_field('descripcion_producto', $post_id); ?>
                                </div>

                                <?php
                                    $file = get_field('archivo_pdf', $post_id);
                                    if( $file ): ?>
                                        <div class="singleproducto__ficha">
                                            <a href="<?php echo $file['url']; ?>" target="__blank"><i class="ri-file-pdf-2-line"></i> Ver ficha técnica</a>
                                        </div>
                                <?php endif; ?>
                                    
                                
                                <div class="singleproducto__elegiropcion">
                                    <select name="" id="selecprod" class="input-group__select" onchange="ShowSelected();">
                                    <option value="">Elegir una opción</option>
                                    <?php if (have_rows('lista_producto', $post_id)) { ?>
                                        <?php while (have_rows('lista_producto', $post_id)) {
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
                                    <a href="https://api.whatsapp.com/send?phone=51<?php the_field('asesor', $post_id); ?>&text=Hola, quisiera saber sobre el producto" target="_blank"><i class="ri-whatsapp-line"></i><span>Hablar con un asesor</span></a>
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