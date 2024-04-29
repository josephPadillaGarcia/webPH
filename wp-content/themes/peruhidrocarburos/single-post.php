<?php

/**
 * Template Name: Single Blog
 */

get_header();
?>

<div class="">
    <figure class="card__figure">
        <?php $imagen = get_field('imagen_post'); ?>
        <img class="card__image" src="<?php echo $imagen['url']; ?>">
    </figure>
    <p><?php the_title(); ?></p>
    <p><?php the_field('autor_post'); ?></p>
    <p><?php the_field('fecha_post'); ?></p>
    <p><?php the_field('contenido_post'); ?></p>
</div>

<?php get_footer(); ?>