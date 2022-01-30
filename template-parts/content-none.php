<?php
/**
    * Content-None Template
    *
    *
    * @package Theme1.4
*/
?>
<div class="container mt-5">
    <div class="row">
        <h1><?php esc_html_e("Nothing Found",'aquila')?></h1>
    </div>
    
    <div class="row mt-5">
        <?php
            if(is_home() && current_user_can( 'publish_posts' ) ){
                printf(
                    wp_kses( __('Ready to publish your first Post ? <a href="%s">Click here</a>','aquila'),
                        [
                            'a'=>[
                                "href" =>[]
                            ]
                        ]
                ),
                    esc_url(admin_url('post-new.php'))
            );
            }else{
             wpautop( "No post found");
            }
        ?>
    </div>
</div>