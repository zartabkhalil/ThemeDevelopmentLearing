<?php
/**
    * Template-Part  Navbar
    *
    *
    * @package Theme1.4
*/
require_once AQUILA_DIR_PATH.'/inc/classes/aquila-menus.php';

$instance = Aqulia_Theme\Inc\Menus::get_instance();

$menuid = $instance->get_nav_menu_id( 'header-menu' );

$menu_list = wp_get_nav_menu_items( $menuid );
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

	<?php if(function_exists( 'the_custom_logo') )
		the_custom_logo(  );
      ?>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if( !empty($menu_list) && is_array($menu_list) ):
            ?>
			<ul class="navbar-nav mx-auto">
					<?php
						foreach($menu_list as $singlemenu):
							if( !$singlemenu->menu_item_parent){
								$childs = $instance->get_child_menu_items( $menu_list , $singlemenu->ID);
								$haschildren = ! empty($childs) && is_array($childs);
								if($haschildren){
					?>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<?php echo esc_html__( $singlemenu->title )?>
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<?php if(!empty( $childs ) && is_array( $childs )){
													foreach($childs as $singlechild){
											?>
														<a class="dropdown-item" href="<?php echo esc_html( $singlechild->url )?>"><?php echo esc_html( $singlechild->title )?></a>	
												
											<?php
													}
											
											
												}
											?>
											
											
										
										</div>
									</li>
						
					<?php
								}else{
					?>    
									<li class="nav-item active">
										<a class="nav-link" href="<?php echo esc_html( $singlemenu->url)?>"><?php echo esc_html( $singlemenu->title)?></a>
									</li>
					<?php
								}
					?>
		
					<?php
							}
						endforeach;
				
					endif;
					?>

			</ul>
			
	</div>
</nav>

