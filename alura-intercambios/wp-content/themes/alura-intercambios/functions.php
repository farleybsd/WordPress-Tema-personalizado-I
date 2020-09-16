<?php

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
