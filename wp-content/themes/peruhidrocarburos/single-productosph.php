<?php

/**
 * Template Name: Single Blog
 */

get_header();
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

<section class="sectionSingleBlog">
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
                        <p>Productos/GLP/Fisher/Reguladores/ Primera Etapa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();