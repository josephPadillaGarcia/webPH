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
                <div class="singleblog__content">

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