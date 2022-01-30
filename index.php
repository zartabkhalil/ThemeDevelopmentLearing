<?php
/**
    * Index File
    *
    *
    * @package Theme1.4
*/

get_header(  );
?>



    <?php 
        if( !have_posts() ):
    ?>
        <div class="container mt-5">
    <?php
            //showing page tile on exclduing front-page
            if( is_home() && ! is_front_page() ):
    ?>
                <header>
                <h1><?php  single_post_title(  )?></h1>
                </header>
            
    <?php
            endif;
    ?>
            <div class="row">
    <?php
            $index=0;
            $no_of_colums=3;
            while(have_posts() ): the_post(  );
            
                if(0 ===$index % $no_of_colums ):
    ?>
                    <div class="col-lg-4 col-md-6">
    <?php
                endif;
    
            
                get_template_part( 'template-parts/content' );
            
            $index++;
            if( 0 !=$index && 0===$index % $no_of_colums):
    ?>
                </div>
    <?php
            endif;
            endwhile;
    ?>
        
            </div>
        </div>
    <?php
        else:
            get_template_part( 'template-parts/content-none');
        endif;
    ?>
    


<?php
    get_footer();
?>