<?php
/*
template name: Blog
*/
get_header();
?>

<div>
    <?php
    get_categories();
    ?>
</div>


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
            <a href="<?php the_permalink(); ?>">LEER MAS</a>
        </div>

        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 
get_footer(); 
?>