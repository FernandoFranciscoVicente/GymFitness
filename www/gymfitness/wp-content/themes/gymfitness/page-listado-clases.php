<?php
/*
* Template Name: Listado de Clases
*/
//Llamamos al header.php modularmente
get_header();
?>
    <main class="contenedor seccion">
        <ul class="listado-grid">
            <?php
            //Arreglo asociativo
            $args = array(
            'post_type' => 'gymfitness_clases');


            //Variable para consultar la base de datos de WP
            //La función WP_Query permite modificar las consultas
            $clases = new WP_Query($args);
            while($clases -> have_posts()){
                $clases -> the_post();
            ?>
            <!--Imprimie el título de la consulta a la  BD-->
            <li class="card">
                <div class="contenido">
                    <!--Imprimie las imágenes destacadas de las clases-->
                    <?php the_post_thumbnail(); ?>
                    <!--Retornar la ruta de un enlace dinámica-->
                    <a href="<?php the_permalink(); ?>">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    </a>
                </div>
            </li>
            <?php
            }
            //Informar que finalizó la consulta para resetear la consultas
            wp_reset_postdata();
            ?>
            
        </ul>
    </main>

    <?php
    get_footer();
    ?>

