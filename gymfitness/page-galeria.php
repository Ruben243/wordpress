<?php
/*
* Template Name: Galeria
*/
get_header();
?>
<main class="contenedor seccion">
    <?php
    while (have_posts()) : the_post();
        //pone abre un h1 antes del titulo y cierra despues
        the_title('<h1 class="text-center text-primary">', '</h1>');
        //obtener galeria
        $galeria = get_post_gallery(get_the_ID(), false);

        //obtener los ids en un array
        $galeria_imagenes_ID = explode(",", $galeria["ids"]);
    ?>
        <ul class="galeria-imagenes">
            <?php
            foreach ($galeria_imagenes_ID as $id) {
                $imagen_grande = wp_get_attachment_image_src($id, 'large')[0];
                $imagen_full = wp_get_attachment_image_src($id, 'full')[0];
            ?>
                <li>
                    <a data-lightbox="galeria" href="<?php echo $imagen_full; ?>">
                        <img src="<?php echo $imagen_grande; ?>" alt="imagen galeria">
                    </a>
                </li>


            <?php


            }
            ?>
        </ul>

    <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
?>