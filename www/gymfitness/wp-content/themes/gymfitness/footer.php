<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
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

        <p class="copyright">
            <!--Colocamos la fecha dinámica con PHP-->
            <!--Colocamos el título del website dinámicamente-->
            Todos los derechos reservados.
            <?php echo get_bloginfo('name') . " " . date ('Y');?>
        </p>
    </div>
</footer>

<?php wp_footer();?>

</body>
</html>