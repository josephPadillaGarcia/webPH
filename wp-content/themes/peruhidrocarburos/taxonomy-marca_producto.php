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
                    <h3>GNV</h3>

                    <?php
                        // Mostrar una nube de etiquetas para la taxonomía 'categoria'
                        $args = array(
                            'taxonomy' => 'marca_producto',
                        );
                        echo '<div class="taxonomia-cloud">';
                        wp_tag_cloud( $args );
                        echo '</div>';
                    ?>
                     
                </div>
            </div>

            <div class="grid-s-12 grid-m-9 grid-l-10">
                <div class="singleblog__content">
                    <?php $term = get_queried_object();  ?>
    
                    <h1 class="category-title">Marca <?php echo $term->name; ?>
                        <span class="taxonomy-label"><?php /*echo $term->taxonomy; */?> (<?php echo $term->count; ?> productos registrados)</span>
                    </h1>

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
                            <div class="grid-s-12 grid-m-6 grid-l-6">
                                <div class="">

                                    <?php if (have_rows('lista_imagen_producto')) { ?>
                                        <?php while (have_rows('lista_imagen_producto')) {
                                            the_row(); ?>
                                                <figure class="">
                                                    <?php $imagen = get_sub_field('item_img_producto'); ?>
                                                    <img class="" src="<?php echo $imagen['url']; ?>">
                                                </figure>
                                        <?php } ?>
                                    <?php } ?>

                                    <div class="">
                                        <div class="titleblog">
                                            <h4><?php the_title(); ?></h4>
                                        </div>                                        
                                        <div class="">
                                            <?php the_field('descripcion_producto'); ?>
                                        </div>
                                        <div class="enlaceblog">
                                            <a href="<?php the_permalink(); ?>">Leer Más</a>
                                        </div>
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