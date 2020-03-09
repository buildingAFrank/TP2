<?php
add_action('wp_enqueue_scripts','my_theme_enqueue_styles');
function my_theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
}
//prise en charge du menu
function enregistrement_du_menu(){
    register_nav_menus(
        array(
            'primary'=>__('Menu Principal')
        )
    );

}


add_action('init','enregistrement_du_menu');