<?php
/*
template name: Blog
*/
get_header();
$termgas = get_queried_object();
$namegas = $termgas->name;
?>


<section class="section blog sectionSingleBlog">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-3 grid-l-2">
                <div class="asideBlog">
                    <?php $termgas = get_queried_object();  ?>
        
                    <h3 class="category-title title-gas"><?php echo $namegas; ?></h3>

                    <?php
                        // Obtener el término "Gas" en la taxonomía "Tipo de Energía"
                        $term_gas = get_term_by('name', $namegas, 'tipo_gas_producto');

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
                                echo '<li><a href="'.site_url().'/tipo_gas_producto/'.$namegas.'/?_marca='.$term_name.'">' . $term_name . '</a></li>';
                            }
                            echo '</ul>';
                        } else {
                            echo 'No se encontró el término "Gas" en la taxonomía "Tipo de Energía".';
                        }
                    ?>
                     
                </div>
            </div>

            <div class="grid-s-12 grid-m-9 grid-l-10">
                <div class="singleblog__content taxogas">


                    <?php
                    
                        // Obtener la descripción de la taxonomía `marca` si está presente en la URL
                        if (isset($_GET['_marca'])) {
                            $marca_slug = sanitize_text_field($_GET['_marca']);
                            $taxonomy = 'marca_producto';
                            $marca_term = get_term_by('slug', $marca_slug, $taxonomy);

                            if (!is_wp_error($marca_term)) {
                                echo '<h2 class="term-title">Marca ' . esc_html($marca_term->name) . '</h2>';
                                echo '<div class="term-description">' . esc_html($marca_term->description) . '</div>';
                            }
                        }else{
                            
                            $term = get_queried_object();
        
                            echo '<h2 class="category-title">'.$term->name.'<span class="taxonomy-label">('.$term->count.'productos registrados)</span></h2>';
                        }

                    ?>

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