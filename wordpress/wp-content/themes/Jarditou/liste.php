	
<?php
if ( have_posts() ) : // S'il y a des articles 
    while ( have_posts() ) : the_post() // Tant qu'il y a des articles, alors pour chaque article on affiche : 
       ?>
       <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>  
       <?php                        
       echo"<div>".the_excerpt()."</div>";
       echo"<hr>";
   endwhile;
endif;
?>