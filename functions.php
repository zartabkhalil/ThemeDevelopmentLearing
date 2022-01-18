<?php
/**
    *  Theme Functions.  
    *
    *
    *@package theme1.4
*/

function theme1_4_enque_script_scripts(){
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory().'/style.css') );

}


add_action( 'wp_enqueue_scripts','theme1_4_enque_script_scripts');