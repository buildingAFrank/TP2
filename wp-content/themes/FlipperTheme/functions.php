<?php

if(!function_exists('flipper_setup')):
    function flipper_setup(){
    // permet a WP de gerer les tags de titre
        add_theme_support('tittle-tag');
    }
    endif;
    add_action('after_setup_theme', 'flipper_setup');

    /* -- prendre en charge le menu */

function register_flipper_menus(){
    register_nav_menus(
      array(
          'primary' =>__('Primary Menu')
      )
    );
}

add_action('init', 'register_flipper_menus');

/* Ajouter la feuille de style */

function flipper_scripts(){
    wp_enqueue_style('flipper_styles',get_stylesheet_uri());
    wp_enqueue_style('flipper_google_fonts','https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}

add_action('wp_enqueue_scripts','flipper_scripts');
