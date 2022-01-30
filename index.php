<?php
/**
    * Index File
    *
    *
    * @package Theme1.4
*/

get_header(  );
?>


<div class="container mt-5">
    <?php 
        if( have_posts() ):
            //showing page tile on exclduing front-page
            if( is_home() && ! is_front_page() ):
    ?>
                <header>
                <h1><?php  single_post_title(  )?></h1>
                </header>
            
    <?php
            endif;
        
        
            while( have_posts() ): the_post(  );
                the_title(  );
                the_excerpt();
                echo "<br>";
            
            endwhile;
            endif;
    ?>
</div>

<?php
    get_footer();
?>