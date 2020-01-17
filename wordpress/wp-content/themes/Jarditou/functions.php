<?php
function youpi_custom_logo_setup() 
{
   $aParams = array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
   );
 
   // Ajout du support 
   add_theme_support('custom-logo', $aParams );
}
 
add_action( 'after_setup_theme', 'youpi_custom_logo_setup' );  


add_theme_support('menus');
register_nav_menu("principal", "Menu principal");  

function register_navwalker() 
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
 
add_action( 'after_setup_theme', 'register_navwalker' );   
 ?>