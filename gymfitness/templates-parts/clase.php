    <?php
    while (have_posts()) : the_post();
        //pone abre un h1 antes del titulo y cierra despues
        the_title('<h1 class="text-center text-primary">', '</h1>');
        // comprueba si la pagina tiene una imagen-
        if (has_post_thumbnail()) {
            // Añadir clases a una imagen
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }

        $hora_inicio = get_field('hora_inicio');
        $hora_fin = get_field('hora_fin'); ?>
        <p class="informacion-clase"><?php the_field('dias_clase'); ?> -
            <?php echo $hora_inicio . ' a ' . $hora_fin ?></p>

    <?php

        the_content();
    endwhile;
    ?>