<?php

/*Función que muestra el menu*/
function register_menu_header(){
	//register_nav_menu('header-menu','menu-depsa');

	register_nav_menus([
        'header-menu' => 'menu',
        //'top-menu' => 'Topmenu',
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
}

add_action('wp_enqueue_scripts', 'lista_estilos');


/* Script personalizado sin dependencias, en cola en el encabezado */
add_action('wp_enqueue_scripts', 'my_enqueue_custom_js');
function my_enqueue_custom_js() {
    wp_enqueue_script('general_script', get_stylesheet_directory_uri().'/js/general.js');
}





function custom_search_filter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'post');
        $query->set('s', ''); // Limpiar la consulta para que no busque en el contenido
        $query->set('title', $_GET['s']); // Realizar la búsqueda basada en el título de la publicación
    }
    return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');

