<?php
// includes widgets
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/querys.php';

// Menus Dinamicos
function gymFitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Pincipal', 'gymfitness')
    ));
}
// hook de init cuando carga wordpress
// agrega la funcion al hook
add_action('init', 'gymFitness_menus');

//agregar script y css
function gymFitness_scripts_styles() {
    //Funcion de WordPress a la que le pasas la ubicacion del archivo,
    //dependencias y version.El nombre tiene que ser unico,si repites el nombre 
    //tomara el ultimo.La ubucacion de la puedes pasar dinamicamente con
    //get_stylesheet_uri().Las dependecias se indican con array(),si no tiene 
    //dependencias lo dejas vacio.La version se usa para mantener al dia las 
    //versiones de cache reemplazando la version antigua por la nueva
    wp_enqueue_style('normalize', get_stylesheet_uri(), array(), '8.0.1');
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.1.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    // Archivos js
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.3', true);

    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.1.1', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js'), '1.0.0', true);
}

//Inyección de nuestro código.El wp_enqueue_scripts es un trigger de WordPress 
//que se activa cuando se carga el front-end del sitio. Por lo general, se usa
//para agregar estilos y scripts personalizados al front-end del sitio.
add_action('wp_enqueue_scripts', 'gymFitness_scripts_styles');


function gymfitness_setup() {
    // imagenes destacadas
    add_theme_support('post-thumbnails');
    // TITULOS PAGINA
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');


// Definir zona dse widget
function gymfitness_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'gymfitness_widgets');
function gymfitness_widgets2() {
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'gymfitness_widgets2');

// Crear shortcode
function gymFitness_ubicacion_shortcode() {
?>
    <div class="mapa">
        <?php
        if (is_page('contacto')) {
            the_field('ubicacion_');
        }
        ?>
    </div>
    <h2 class="text-center text-primary">Formulario de Contacto</h2>
<?php

    echo do_shortcode('[contact-form-7 id="96" title="Formulario de contacto 1"]');
}

add_shortcode('gymFitness_ubicacion', 'gymFitness_ubicacion_shortcode');
