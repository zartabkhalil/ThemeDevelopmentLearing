<?php
/**
    *  Theme Functions.  
    *
    *
    *@package theme1.4
*/

function theme1_4_enque_script_scripts(){
    //Register Style.
    wp_register_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory().'/style.css') ,'all');
    wp_register_style( 'bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [] , 'all' );
    
    //Register JS.
    wp_register_script( "boostrap-js", get_template_directory_uri().'/assets/src/library/js/bootstrap.js', [ 'jquery' ], true );
    
    wp_enqueue_style( 'stylesheet' );
    wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_script( 'boostrap-js' );
}


add_action( 'wp_enqueue_scripts','theme1_4_enque_script_scripts');