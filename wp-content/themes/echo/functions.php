<?php
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_styles(){
    wp_enqueue_style('header', get_template_directory_uri() . '/dist/header/index.css');
    wp_enqueue_style('general', get_template_directory_uri() . '/dist/general.css');
}
