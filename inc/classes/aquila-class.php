<?php
namespace Aqulia_Theme\Inc;


use  Aqlia_Theme\Inc\Traits\Singleton;

class Aquila_Theme_class{
      use Singleton;
      protected function __construct(){
            Assets::get_instance();
            Menus::get_instance();
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
		add_theme_support( 'post-thumbnails',);
		/**
			*Register Image size
		*/
		add_image_size( 'featured-thumbnail', 350, 233, true );
		
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5',[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style'
		] );
		
		//add custom style to tynimc editor
		add_editor_style(  );
		add_theme_support('wp-block-styles');
		
		//align of gutenberg block
		add_theme_support( 'align-wide' );
	}



}
