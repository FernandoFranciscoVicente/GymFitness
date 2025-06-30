<?php
//Llamamos al header.php modularmente
get_header();
?>

    <main class="contenedor seccion">
        <?php
        while(have_posts()): the_post();

            the_title('<h1 class="text-center texto-primario">', '</h1>');

            the_post_thumbnail();
            the_content();

        endwhile;
        ?>
    </main>
    
</body>
</html>

