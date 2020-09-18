<?php

function alura_intercambio_taxomia()
{
    register_taxonomy(
        'paises',
        'destinos',
        array(
            'labels'=> array('name'=>'Países'),
            'hierarchical'=> true
        )
    );
}

add_action('init','alura_intercambio_taxomia');

function alura_intercambio_registrando_post_customiado()
{
    register_post_type('destinos',
    array(
        'labels'=> array('name'=>'Destinos'),
        'public' => true,
        'menu_position'=> 0,
        'supports' => array('title','editor','thumbnail'),
        'menu_icon' => 'dashicons-admin-site'
    )
);
}
add_action('init','alura_intercambio_registrando_post_customiado');

function alura_intercambio_adicionando_recurso_ao_tema()
{
   add_theme_support('custom-logo'); 
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','alura_intercambio_adicionando_recurso_ao_tema');

function alura_intercambio_registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init','alura_intercambio_registrando_menu');

function alura_intercambios_registrando_post_customizado_banner()
{
    register_post_type(
        'banners',
        array(
          'labels' => array('name' => 'Banner'),
          'public' => true,
          'menu_position' => 1,
          'menu_icon' => 'dashicons-format-image',
          'supports'=> array('title','thumbnail')
        )
    );
}

add_action('init','alura_intercambios_registrando_post_customizado_banner');