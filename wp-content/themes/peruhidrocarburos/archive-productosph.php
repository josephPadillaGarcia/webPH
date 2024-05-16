<?php
get_header();
?>

<h3>Hola Archive productos</h3>

<?php dynamic_sidebar('filterproducts');?>

<?php
                            $args = array(
                                'post_type' => 'productosph',
                                'posts_per_page' => '0',
                            );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="grid-s-12 grid-m-6 grid-l-6">
                                        <div class="itemblog">
                                            <div class="infoblog">
                                                <div class="titleblog">
                                                    <h4><?php the_title(); ?></h4>
                                                </div>
                                                <div class="enlaceblog">
                                                    <a href="<?php the_permalink(); ?>">Ver Más</a>
                                                    <p><?php the_field('taxonomia_producto'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

<?php 
get_footer(); 