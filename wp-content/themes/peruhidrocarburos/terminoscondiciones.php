<?php
/*
template name: terminos y condiciones
*/
get_header();
?>

<?php $imagenbanner = get_field('banner_page_terminos'); ?>
<section class="bannerServicio" style="background-image: url(<?php echo $imagenbanner['url']; ?>);">
    <div class="container">
        <h2><?php the_title(); ?></h2>
    </div>
</section>

<section class="sectionlistaservicios">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-12 grid-l-12">
                <div class="editor">
                    <?php the_field('contenido_informacion'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer(); 