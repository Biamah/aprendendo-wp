<?php

function aprendendo_wp_post_customizado(){
    register_post_type('fichas',
        array(
            'labels' => array('name' => 'Fichas'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )
    );
}
add_action('init', 'aprendendo_wp_post_customizado');

function aprendendo_wp_recurso(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'aprendendo_wp_recurso');

function aprendendo_wp_menu(){
    register_nav_menu(
        location: 'menu',
        description: 'Menu'
    );
}
add_action('init', 'aprendendo_wp_menu');