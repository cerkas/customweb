<?php
function customweb_scripts(){
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() .'/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() .'/css/font-awesome.min.css' );
    wp_enqueue_style( 'carousel', get_stylesheet_directory_uri() .'/css/owl.carousel.min.css' );
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() .'/css/animate.css' );
    wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri() .'/css/stylesheet.css' );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js','','', true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js','','', true);
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js','','', true);
    wp_enqueue_script( 'h5validate', get_template_directory_uri() . '/js/jquery.h5validate.js','','', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js','','', true);

}
add_action( 'wp_enqueue_scripts', 'customweb_scripts' );
//меню
register_nav_menus(array(
    'header'    => 'Header',    //Название месторасположения меню в шаблоне
));