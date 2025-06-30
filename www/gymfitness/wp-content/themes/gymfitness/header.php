<!--Coloca el lenguaje en que se instaló WordPress-->
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtsh=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <!--Obtener la ruta de manera dinámica con PHP-->
                <img src="
                <?php echo get_template_directory_uri(); ?>
                /img/logo.svg"
                alt="imagen logotipo">
            </div>
        <!--Navegación dinámica-->
        <?php
        $args = array(
            //Especificar el id del menú se requiere agregar 
            'theme_location' => 'menu-principal',
            //Cambiamos el div por un nav que contendrá el menú
            'container' => 'nav',
            //Especificamos la(s) clase(s) que tendrá el elemento nav
            'container_class' => 'menu-principal'
        );
        //Nos permite mostrar un menú
        wp_nav_menu($args);
        ?>
        
        </div>
    </header>