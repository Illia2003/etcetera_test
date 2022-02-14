<?php

function bootstrap_enqueue_scripts(){
    wp_enqueue_style("parent_style", get_template_directory_uri() . '/style.css');
    //wp_enqueue_style("child_style", get_stylesheet_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts', 11);
