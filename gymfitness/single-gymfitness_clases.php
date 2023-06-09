<?php
get_header();
?>
<main class="contenedor seccion con-sidebar">
    <section class="contenido-principal">
        <?php
        get_template_part('templates-parts/clase');
        ?>
    </section>
    <?php
    get_sidebar('clase');
    ?>
</main>

<?php
get_footer();
?>