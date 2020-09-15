<?php

function alura_intercambio_registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init','alura_intercambio_registrando_menu');