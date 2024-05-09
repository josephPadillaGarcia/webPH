<?php
/*
template name: Servicio
*/
get_header();
?>

<?php $imagenbanner = get_field('banner_servicio'); ?>
<section class="bannerServicio" style="background-image: url(<?php echo $imagenbanner['url']; ?>);">
    <div class="container">
        <?php the_field('title_page'); ?>
    </div>
</section>

<section class="sectionlistaservicios">
    <div class="container">
        <div class="grid-col">


            <?php
                $args = array(
                    'post_type' => 'newservicios',
                    'posts_per_page' => '0',
                );
            ?>
            <?php $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
                    <div class="grid-s-12 grid-m-6 grid-l-4">
                        <div class="servicios">
                            <figure class="servicios__image">
                                <?php $imagen = get_field('img_nuevo_servicio'); ?>
                                <img class="card__image" src="<?php echo $imagen['url']; ?>">
                                <a class="servicios__iconplay" data-fancybox href="<?php the_field('video_imagen'); ?>"><i class="ri-play-fill"></i></a>
                            </figure>
                            <div class="servicios__title">
                                <h4><?php the_title(); ?></h4>
                            </div>
                            <div class="servicios__informacion">
                                <?php the_field('contenido_nuevo_servicio'); ?>
                            </div>
                            <div class="servicios__action">
                                <a href="#!">Cotizar</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php 
get_footer(); 