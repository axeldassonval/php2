<?php       
$custom_logo_id = get_theme_mod('custom_logo');
 
$aLogo = wp_get_attachment_image_src($custom_logo_id , 'medium');
 
if (has_custom_logo()) 
{ // Si un logo a été défini
    echo '<img src="'.esc_url($aLogo[0]).'" alt="'.get_bloginfo('name').'" class="class-fluid">';
} 
else 
{   // Sinon on affiche le nom du site
    echo '<h1>'.get_bloginfo('name').'</h1>';
}
?>