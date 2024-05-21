<?php
/*
template name: Contactanos
*/
get_header();
?>

<section class="sectioncontacto">
    <div class="container">
        <div class="formcontacto">
            <div class="title-general">
                <?php the_field('informacion_contacto'); ?>
            </div>

            <div class="form">
                <!--div class="form__group grid-col">
                    <div class="input-group grid-s-12 grid-m-12 grid-l-12">
                        <input type="text" class="input-group__input" placeholder="Nombres y Apellidos">
                    </div>
                </div>
                
                <div class="form__group grid-col">
                    <div class="input-group grid-s-12 grid-m-12 grid-l-12">
                        <input type="text" class="input-group__input" placeholder="Email">
                    </div>
                </div>

                <div class="form__group grid-col">
                    <div class="input-group grid-s-12 grid-m-12 grid-l-6">
                        <input type="text" class="input-group__input" placeholder="Teléfono">
                    </div>
                    <div class="input-group grid-s-12 grid-m-12 grid-l-6">
                        <input type="text" class="input-group__input" placeholder="Empresa">
                    </div>
                </div>
                <div class="form__group grid-col">
                    <div class="input-group grid-s-12 grid-m-12 grid-l-12">
                        <textarea name="textarea" class="input-group__text-area" placeholder="Mensaje"></textarea>
                    </div>
                </div>
                <div class="form__action">
                    <button type="submit">Enviar</button>
                </div-->
                <?php echo do_shortcode( '[contact-form-7 id="c891d2d" title="Formulario de Contacto"]' ); ?>
            </div>

        </div>
    </div>
</section>

<?php 
get_footer(); 