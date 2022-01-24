<?php
namespace Aqulia_Theme\Inc;

require AQUILA_DIR_PATH.'/inc/classes/aquila-assets.php';


use  Aqlia_Theme\Inc\Traits\Singleton;

 class Aquila_Theme_class{
    use Singleton;
    protected function __construct(){
        Assets::get_instance();
    }


    protected function set_hooks(){
        
    }




}
