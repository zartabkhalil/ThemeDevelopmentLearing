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
            add_theme_support( 'custom-logo', [
                  'header-text'     =>  ['site-tile','site-description'],
                  'height'          =>  100,
                  'width'           =>   200,
                  'flex-width'      =>  true,
                  'flex-height'     => true,
                  
                  ] );
                  
            add_theme_support('custom-background',[
                  'default-color'   => '#fff00',
			// 'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
			// 'default-position-x' => 'right',
			// 'default-position-y' => 'top',
			'default-repeat'     => 'no-repeat',
		]);
	}



}
