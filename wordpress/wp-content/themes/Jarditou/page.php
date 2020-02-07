
<?= get_header(); ?>
<body>

<?php
//echo __FILE__; 
//<!--appelle du logo-->
get_template_part('logo'); 
//<!--appelle de ma navabarre-->
get_template_part('part_nav'); 



if ( have_posts() ) : the_post(); ?>
   
     
   <div><?php the_content(); ?></div>            
   <?php
   endif;
   ?>  

 

<?php get_footer(); ?>
