<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();  ?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <!-- Lleva a la raiz de tu proyecto -->
                <a href="<?php echo site_url('/') ?>">
                    <!-- Añade dinamicamente la ruta de la imagenes -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
                </a>
            </div>
            <?php
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav', //convierte el div por default en un nav
                'container_class' => 'menu-principal' //añade clases custom
            );


            // renderiza el menu
            wp_nav_menu($args);
            ?>
        </div>

    </header>