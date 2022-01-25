<?php

namespace Aqulia_Theme\Inc;

use  Aqlia_Theme\Inc\Traits\Singleton;


class Menus{

	use Singleton;

	protected function __construct(){
            $this->setup_hooks();
      }

      public function setup_hooks(){
      
            add_action( 'init', [$this,'register_nav_menu']);
	}

      public function register_nav_menu(){
		register_nav_menus([
		'header-menu'     => esc_html__( 'Header-Menu1', 'aquila' ),
		'Footer-menu'     => esc_html__( 'Footer-Menu', 'aquila' ),
		]);
	}
	
	
	public function get_nav_menu_id( $location ){
	
	
	$menuid =  get_nav_menu_locations()[ $location ];
	
	return ! empty($menuid)? $menuid : '';
	
	}
	
	public function get_child_menu_items( $menu_list, $ID){
	$result=array();
	
		foreach( $menu_list as $singlemenu )
		if( intval($singlemenu->menu_item_parent) == $ID ){
			
			array_push( $result,$singlemenu);
		}
	
	// echo "<pre>";
	// print_r($menu_list);
	// die;
	return $result;
	
	}
}