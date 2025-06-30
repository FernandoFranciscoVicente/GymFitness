<?php
while(have_posts()): the_post();

//Añadimos clases y estilos al H1 desde el php
the_title('<h1 class="text-center texto-primario">', '</h1>');
//Comprobamos si existe un thumbnail
if(has_post_thumbnail()){
    //Mostrar la imagen destacada
    //Añadimos más clases para priorizar a las etiquetas que añade WordPress
    the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }

the_content();

endwhile;
?>