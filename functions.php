<?php
/**
    *  Theme Functions.  
    *
    *
    *@package theme1.4
*/


if( !defined( 'AQUILA_DIR_PATH' )){
    define( 'AQUILA_DIR_PATH' , untrailingslashit( get_template_directory() ) );
}

if( !defined( 'AQUILA_DIR_URI' )){
    define( 'AQUILA_DIR_URI' , untrailingslashit( get_template_directory_uri() ) );
}

require AQUILA_DIR_PATH.'/inc/classes/aquila-class.php';
 
Aqulia_Theme\Inc\Aquila_Theme_class::get_instance();




function theme1_4_enque_script_scripts(){
    
   
   
   
}


