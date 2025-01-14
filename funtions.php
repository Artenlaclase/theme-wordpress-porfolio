<?php
// Habilitar soporte para miniaturas y título del sitio
function portfolio_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'portfolio_theme_setup');
?>