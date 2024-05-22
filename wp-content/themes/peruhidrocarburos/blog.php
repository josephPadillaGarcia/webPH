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
                    <h3>Blog</h3>
                    <?php
                        // Obtener las categorías de los posts
                        $categories = get_categories();

                        // Comprobar si hay categorías
                        if ($categories) {
                            //echo '<pre>'.json_encode($categories).'</pre>';
                            echo '<ul>';
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                                //echo '<pre>'.$category->name.'</pre>';
                            }
                            echo '</ul>';
                        }
                    ?>
                </div>
            </div>

            <div class="grid-s-12 grid-m-9 grid-l-10">
                <div class="singleblog__content">

                    <div class="singleblog__header">
                        <div class="title-general title-general--left">
                            <?php the_field('titulo_pagina_blog'); ?>
                        </div>
                        <a href="<?php echo site_url(); ?>/blog"><i class="ri-arrow-left-s-line"></i><span>Volver</span></a>
                    </div>
                <div class="blog__lista">
                    <div class="grid-col">

                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '0',
                            );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
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


                                <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                    </div>
                </div>

                </div>

            </div>
        </div>
    </div>
</section>


<?php 
get_footer(); 