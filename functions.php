<?php

function support_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'support_theme' );
add_theme_support( 'menus' );

function responsivo_scripts(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri());
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'responsivo_scripts' )
?>