<?php

function aprendendo_wp_recurso(){
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'aprendendo_wp_recurso');

function aprendendo_wp_menu(){
    register_nav_menu(
        location: 'menu',
        description: 'Menu'
    );
}
add_action('init', 'aprendendo_wp_menu');