<?php

namespace Aqulia_Theme\Inc;

require AQUILA_DIR_PATH.'/inc/traits/singleton-trait.php';
use  Aqlia_Theme\Inc\Traits\Singleton;

class Assets{

    use Singleton;
    
    protected function __construct(){
        $this->setup_hooks();
    }

    public function setup_hooks(){
        
        add_action( 'wp_enqueue_scripts',[$this,'register_styles' ]);
        add_action( 'wp_enqueue_scripts',[$this,'register_script' ]);
    }
    
    public function register_styles(){
        //Register Style.
        wp_register_style( 'stylesheet', AQUILA_DIR_URI, [], filemtime( get_template_directory().'/style.css') ,'all');
        wp_register_style( 'bootstrap-css', AQUILA_DIR_URI.'/assets/src/library/css/bootstrap.min.css', [] , 'all' );
        
        wp_enqueue_style( 'stylesheet' );
        wp_enqueue_style( 'bootstrap-css' );
    }
    
    public function register_script(){
        //Register JS.
        wp_register_script( "boostrap-js", AQUILA_DIR_URI.'/assets/src/library/js/bootstrap.js', [ 'jquery' ], true );
    
        wp_enqueue_script( 'boostrap-js' );
    }
}