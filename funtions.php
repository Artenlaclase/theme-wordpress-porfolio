<?php
// Registrar un Custom Post Type llamado "Proyectos"
function portfolio_register_post_type() {
    register_post_type('proyectos', array(
        'labels' => array(
            'name' => 'Proyectos',
            'singular_name' => 'Proyecto',
            'add_new' => 'Añadir Nuevo',
            'add_new_item' => 'Añadir Nuevo Proyecto',
            'edit_item' => 'Editar Proyecto',
            'new_item' => 'Nuevo Proyecto',
            'view_item' => 'Ver Proyecto',
            'search_items' => 'Buscar Proyectos',
            'not_found' => 'No se encontraron proyectos',
            'not_found_in_trash' => 'No se encontraron proyectos en la papelera',
            'all_items' => 'Todos los Proyectos',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // Permite el uso con el editor Gutenberg
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'proyectos'),
    ));
}
add_action('init', 'portfolio_register_post_type');