<?php

/*Función que muestra el menu*/
function register_menu_header(){
	//register_nav_menu('header-menu','menu-depsa');

	register_nav_menus([
        'header-menu' => 'menu',
        'footer-enlaces' => 'footer',
    ]);
}

add_action('init','register_menu_header');


/*======================
Agregar estilos
=========================*/

function lista_estilos(){
    //Agregar el archivo estilos
    //wp_enqueue_style('style', get_stylesheet_uri(), wp_get_theme()->get('Version'));

    wp_enqueue_style('styleph', get_template_directory_uri().'/css/styleph.css');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('remixicon', get_template_directory_uri().'/css/remixicon.css');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
    //wp_enqueue_style('fancy', get_template_directory_uri().'/css/fancy.min.css');
}

add_action('wp_enqueue_scripts', 'lista_estilos');


/* Script personalizado sin dependencias, en cola en el encabezado */
function agregar_scripts_en_footer() {
    // Registra el archivo JavaScript
    wp_register_script('jquery_script', get_template_directory_uri() . '/js/jquery.js', array('jquery'), null, true); // El último parámetro es true para cargar el script en el footer

    // Enqueue the registered script
    wp_enqueue_script('jquery_script');
    

    // Registra el archivo JavaScript
    wp_register_script('general_script', get_template_directory_uri() . '/js/general.js', array('jquery'), null, true); // El último parámetro es true para cargar el script en el footer

    // Enqueue the registered script
    wp_enqueue_script('general_script');


    // Registra el archivo JavaScript
    wp_register_script('owlcarousel_script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true); // El último parámetro es true para cargar el script en el footer

    // Enqueue the registered script
    wp_enqueue_script('owlcarousel_script');


    // Registra el archivo JavaScript
    wp_register_script('wow_script', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null, true); // El último parámetro es true para cargar el script en el footer

    // Enqueue the registered script
    wp_enqueue_script('wow_script');


    // Registra el archivo JavaScript
    //wp_register_script('fancybox_script', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), null, true); // El último parámetro es true para cargar el script en el footer

    // Enqueue the registered script
    //wp_enqueue_script('fancybox_script');
}
add_action('wp_enqueue_scripts', 'agregar_scripts_en_footer');


add_action( 'widgets_init', 'filter_products' );

function filter_products () {
    register_sidebar( array(
    'name' => 'Filter Products',
    'id' => 'filterproducts',
    'class' => '',
    ) );
}

add_action( 'widgets_init', 'filter_marca_products' );

function filter_marca_products () {
    register_sidebar( array(
    'name' => 'Filter Marca Products',
    'id' => 'filtermarcaproducts',
    'class' => '',
    ) );
}



/*function custom_search_filter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'post');
        $query->set('s', ''); // Limpiar la consulta para que no busque en el contenido
        $query->set('title', $_GET['s']); // Realizar la búsqueda basada en el título de la publicación
    }
    return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');*/

