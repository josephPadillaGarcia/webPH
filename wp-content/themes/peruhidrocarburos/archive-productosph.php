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
                        <a href="<?php echo site_url(); ?>/blog"><i class="ri-arrow-left-s-line"></i><span>Volver</span></a>
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