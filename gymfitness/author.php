<?php
get_header();
?>
<main class="seccion contenedor">
    <?php $autor = get_queried_object();
    ?>
    <h2 class="text-primary text-center">Autor: <?php echo $autor->data->display_name; ?> </h2>
    <ul class="listado-grid">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('templates-parts/blog');
        endwhile
        ?>
    </ul>
</main>

<?php
get_footer();
?>