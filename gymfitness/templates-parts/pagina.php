    <?php
    while (have_posts()) : the_post();
        //pone abre un h1 antes del titulo y cierra despues
        the_title('<h1 class="text-center text-primary">', '</h1>');
        // comprueba si la pagina tiene una imagen-
        if (has_post_thumbnail()) {
            // Añadir clases a una imagen
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }

        the_content();
    endwhile;
    ?>