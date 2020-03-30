<?php
add_action('wp_enqueue_scripts','my_theme_enqueue_styles');
function my_theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
}
//prise en charge du menu
function enregistrement_du_menu(){
    register_nav_menus(
        array(
            'primary'=>'Menu Principal'
        )
    );
}

function fx_charger_banniere(){
    get_template_part('partials/content/','hero-banner');
}


add_action('init','enregistrement_du_menu');

add_action('__after_header','fx_charger_banniere');
