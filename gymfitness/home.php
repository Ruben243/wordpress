<?php
get_header();
?>
<main class="seccion contenedor">
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