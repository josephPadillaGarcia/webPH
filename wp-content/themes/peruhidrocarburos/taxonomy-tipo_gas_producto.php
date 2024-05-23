<?php
/*
template name: Blog
*/
get_header();
?>


<section class="section blog sectionSingleBlog">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-3 grid-l-2">
                <div class="asideBlog">
                    <?php $term = get_queried_object();  ?>
        
                    <h3 class="category-title"><?php echo $term->name; ?></h3>

                    <?php
                        // ID del término de la taxonomía 'Color' que servirá como referencia
                        $color_term_id = $term->term_id; // Reemplaza 123 con el ID del término de Color deseado

                        // Obtener los términos de la taxonomía 'Categoría' relacionados con el término de 'Color'
                        $categoria_terms = get_terms(array(
                            'taxonomy' => 'marca_producto',
                            'meta_query' => array(
                                array(
                                    'key' => 'color_relacionado', // Suponiendo que 'color_relacionado' es el nombre del campo personalizado que almacena el ID del término de 'Color'
                                    'value' => $color_term_id,
                                    'compare' => 'IN'
                                )
                            )
                        ));

                        // Verificar si se encontraron términos en la taxonomía 'Categoría' relacionados con el término de 'Color'
                        if (!empty($categoria_terms)) {
                            echo '<h2>Categorías relacionadas con el color seleccionado:</h2>';
                            echo '<ul>';
                            foreach ($categoria_terms as $term) {
                                echo '<li>' . $term->name . '</li>';
                            }
                            echo '</ul>';
                        } else {
                            echo 'No hay categorías relacionadas con el color seleccionado.';
                        }
                    ?>


                     
                </div>
            </div>

            <div class="grid-s-12 grid-m-9 grid-l-10">
                <div class="singleblog__content taxogas">
                    <?php $term = get_queried_object();  ?>
    
                    <h2 class="category-title"><?php echo $term->name; ?>
                        <span class="taxonomy-label"><?php /*echo $term->taxonomy; */?> (<?php echo $term->count; ?> productos registrados)</span>
                    </h2>

                    <div class="singleblog__header">
                        <?php dynamic_sidebar('filterproducts');?>
                    </div>  

                    <div class="blog__lista">
                        <div class="grid-col">
                        <?php if ( have_posts() ) : ?>

                            <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post();
                                        ?>
                            <div class="grid-s-12 grid-m-6 grid-l-4">
                                    <div class="contentproducto">
                                        <figure class="imgproducto">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>
                                        <div class="titleblog">
                                            <h4><?php the_title(); ?></h4>
                                        </div>
                                        <?php
                                            // ID del post del que deseas obtener la información
                                            $post_id = get_the_ID(); // Reemplaza 123 con el ID de tu post

                                            // Obtener los términos de la taxonomía 'tipo_producto' asociados al post
                                            $tipoproducto_terms = wp_get_post_terms($post_id, 'tipo_producto');

                                            // Verificar si se encontraron términos
                                            if (!empty($tipoproducto_terms)) {
                                                // Mostrar el término de la taxonomía 'tipoproducto'
                                                echo '<div class="catproducto">';
                                                echo '<p>Categoria: ' . $tipoproducto_terms[0]->name . '</p>'; // Suponiendo que solo hay un término
                                                echo '</div>';
                                            }
                                        ?>
                                        <div class="enlaceblog">
                                            <a href="<?php the_permalink(); ?>">Ver Producto</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;

                            the_posts_navigation();

                            else :

                            get_template_part( 'template-parts/content/content-none' );

                            endif;
                            ?>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>





<?php 
get_footer(); 