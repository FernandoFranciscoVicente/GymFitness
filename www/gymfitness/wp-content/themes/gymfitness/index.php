<h1>Hola mundo en WordPress</h1>

<!--Coloca el lenguaje en que se instaló WordPress-->
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtsh=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
    </header>
    <main>

        <?php
        while(have_posts()): the_post();
        the_title();
        the_content();

        endwhile;
        ?>

    </main>
    
</body>
</html>

