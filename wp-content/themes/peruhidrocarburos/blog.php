<?php
/*
template name: Blog
*/
get_header();
?>

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

<hr>
<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => '0',
    );
?>
<?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="">
            <figure class="card__figure">
                <?php $imagen = get_field('imagen_post'); ?>
                <img class="card__image" src="<?php echo $imagen['url']; ?>">
            </figure>
            <p><?php the_field('title_post'); ?></p>
            <p><?php the_field('autor_post'); ?></p>
            <p><?php the_field('fecha_post'); ?></p>

            <?php
                // Obtenemos las categorías del post actual
                $categories = get_the_category();

                // Comprobamos si hay categorías
                if ($categories) {
                foreach ($categories as $category) {?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo esc_html($category->name) ?></a>
                    
                    <?php
                    }
                }
            ?>

            <p><a href="<?php the_permalink(); ?>">LEER MAS</a></p>
        </div>

        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php 
get_footer(); 
?>