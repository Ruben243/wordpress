<?php
/*
* Template Name: Listado Clases
*/
get_header();
?>
<!--Se añade en el panel de control -->
<main class="contenedor seccion">
    <?php
    get_template_part('templates-parts/pagina');

    gymfitness_lista_clases();
    ?>

    </ul>
</main>

<?php
get_footer();
?>