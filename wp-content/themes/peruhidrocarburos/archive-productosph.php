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
                <!--div class="asideBlog">
                    <h3>Blog</h3>
                </div-->
            </div>

            <div class="grid-s-12 grid-m-9 grid-l-10">
                <div class="singleblog__content">

                    <div class="singleblog__header">
                        <?php dynamic_sidebar('filterproducts');?>
                        <a href="<?php echo site_url(); ?>/blog"><i class="ri-arrow-left-s-line"></i><span>Volver</span></a>
                    </div>  

                    <div class="blog__lista">
                        <div class="grid-col">
                                        
                            <div class="grid-s-12 grid-m-6 grid-l-6">
                                <div class="itemblog">
                                    <figure class="card__figure">
                                        <?php $imagen = get_field('imagen_post'); ?>
                                        <img class="card__image" src="<?php echo $imagen['url']; ?>">
                                    </figure>
                                    <div class="infoblog">
                                        <div class="autorblog">
                                            <i class="ri-user-fill"></i><p>por: <?php the_field('autor_post'); ?></p>
                                        </div>
                                        <div class="titleblog">
                                            <h4><?php the_title(); ?></h4>
                                        </div>
                                        <div class="enlaceblog">
                                            <a href="<?php the_permalink(); ?>">Leer Más</a>
                                            <p><?php the_field('fecha_post'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<?php 
get_footer(); 