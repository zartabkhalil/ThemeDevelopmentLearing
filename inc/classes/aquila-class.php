<?php
namespace Aqulia_Theme\Inc;

require AQUILA_DIR_PATH.'/inc/classes/aquila-assets.php';


use  Aqlia_Theme\Inc\Traits\Singleton;

 class Aquila_Theme_class{
    use Singleton;
    protected function __construct(){
        Assets::get_instance();
        $this->set_hooks();
    }


    protected function set_hooks(){
        add_action( 'after_setup_theme',[$this,'setup_theme']);
    }
    
    public function setup_theme(){
        add_theme_support( 'title-tag' );
    }



}
