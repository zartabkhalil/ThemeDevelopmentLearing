<?php
/**
    *  Template for Post Entry header
    *
    *
    * @package Theme1.4
*/
$the_post_id = get_the_ID();
$has_post_thumnail =get_the_post_thumbnail(  ); 

?>

<header class="entry-header">

    <?php 
        if( $has_post_thumnail ){
    ?>
            <div class="entry-image mb-3">
                <a href="<?php echo esc_url( get_permalink(  ))?>">
    <?php
                    the_post_custom_thumbail(
                        $the_post_id,
                        'featured-thumbnail',
                        [
                            'sizes' =>'(max-width:150px) 150px 214px',
                            'class' => 'cusotm-featured-image'
                        ]
                    );
    ?>           
                </a>
            </div>
    
    <?php
        }
    ?>
    


</header>