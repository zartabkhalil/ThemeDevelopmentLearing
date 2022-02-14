<?php

function get_the_post_custom_thumbail( $postid, $size='featured-thumbnail' ,$additional_attribute=[]){
    

    
    $custom_thumbail = '';
    
    if( null===$postid){
    
        $postid = get_the_ID();
    }
    
    if( has_post_thumbnail(  $post_id ) ){
        
        $default_attribute = [
            'loading' => 'lazy'
        ];
        
        $attributes = array_merge($additional_attribute,$default_attribute);
        
        
        $custom_thumbail = wp_get_attachment_image( 
            get_post_thumbnail_id( $postid ), 
            $size, 
            false, 
            $attributes 
        );
        
    }
   
    return $custom_thumbail;
    

}


function the_post_custom_thumbail( $postid, $size='featured-thumbnail' ,$additional_attribute=[]){


    echo get_the_post_custom_thumbail ( $postid, $size ,$additional_attribute );
   
}