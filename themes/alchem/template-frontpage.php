<?php
/*
  Template Name: Front Page
 */
get_header(); 
?>
<div id="alchem-home-sections">
<?php 
global $alchem_homepage_sections;
foreach(  $alchem_homepage_sections as $k=>$v ){
get_template_part('home-sections/section',$k);
}
?> 
</div>
<?php get_footer(); ?>