<?php
/*
template name: Cotizador
*/
get_header();
?>

<section class="sectioncontacto">
    <div class="container">
        <div class="formcontacto">
            <div class="title-general">
                <?php the_field('informacion_formulario_cotizar'); ?>
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
                    <div class="input-group grid-s-12 grid-m-12 grid-l-6">
                        <input type="text" class="input-group__input" placeholder="Nombre del Producto">
                    </div>
                    <div class="input-group grid-s-12 grid-m-12 grid-l-6">
                        <input type="text" class="input-group__input" placeholder="Código">
                    </div>
                </div>

                <div class="form__action">
                    <button type="submit">Enviar</button>
                </div-->

                <?php echo do_shortcode( '[contact-form-7 id="42bb7e9" title="Formulario Cotizador"]' ); ?>
            </div>

        </div>
    </div>
</section>

<?php 
get_footer(); 