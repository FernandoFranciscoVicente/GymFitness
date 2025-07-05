<?php
/*
* Template Name: Listado de Clases
*/
//Llamamos al header.php modularmente
get_header();
?>
    <main class="contenedor seccion">
        <?php
        get_template_part('template-parts/pagina');
        ?>
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
            <!--Imprimie las imágenes destacadas de las clases-->
            <?php the_post_thumbnail(); ?>
                <div class="contenido">
                    <!--Retornar la ruta de un enlace dinámica-->
                    <a href="<?php the_permalink(); ?>">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    </a>
                    <!--Obtiene un valor y lo asigna a una variable-->
                    <?php $hora_inicio = get_field('hora_inicio'); ?>
                    <?php $hora_termino = get_field('hora_termino'); ?>
                    <p>
                        <?php the_field('dias_clase'); ?> - 
                        <?php echo $hora_inicio . " a " . $hora_termino ?>
                    </p>
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

