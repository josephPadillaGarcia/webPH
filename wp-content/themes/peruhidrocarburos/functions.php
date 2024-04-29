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
    wp_enqueue_style('style', get_stylesheet_uri(), wp_get_theme()->get('Version'));

    wp_enqueue_style('styleph', get_template_directory_uri().'/css/styleph.css');
}

add_action('wp_enqueue_scripts', 'lista_estilos')

?>
