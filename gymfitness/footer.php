<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
        <?php
        $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav', //convierte el div por default en un nav
            'container_class' => 'menu-principal' //añade clases custom
        );


        // renderiza el menu
        wp_nav_menu($args);
        ?>
        <p class="copyright">&copy; Todos los derechos reservados.GymFitness
            <?php get_bloginfo();
            echo date('Y') ?></p>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>