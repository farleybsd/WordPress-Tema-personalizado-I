<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head();?>
</head>
<body>
    
<?php

the_custom_logo();

wp_nav_menu(
    array(
        'menu'=>'menu-navegacao'
    )
);
?>