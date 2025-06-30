<?php
//Habilitar ciertas funciones desde wordpress
//El nombre de la función suele empezar con el tema

function gymfitness_setup(){
    //Imagenes destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup');


// --Registrando el menú dinámico--
function gymfitness_menus(){
    register_nav_menus( array(
        //Arreglo asociativo (clave-valor)
        //Aquí el gymfitness se refiere al Text Domain
        'menu-principal' => __('Menu principal', 'gymfitness')
    ) );
}

//Permite modificar la información
//Los hooks crean eventos
add_action('init', 'gymfitness_menus');


// --Registrando la hoja de estilos
function gymfitness_scripts_styles(){

    //Añadimos normalize
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), "8.0.1");
    //Función de Wp que recibe la ruta de una hoja de estilos
    //'style' es el identificador y get_stylesheet_uri() retorna la path de la hoja de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), "1.0.0");
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
?>

