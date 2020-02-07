
<?= get_header(); ?>
<body>

<?php
echo __FILE__; 
//<!--appelle du logo-->
get_template_part('logo'); 
//<!--appelle de ma navabarre-->
get_template_part('part_nav'); 
get_template_part('front-page');

?>
<p>erreur</p>
 

<?php get_footer(); ?>
