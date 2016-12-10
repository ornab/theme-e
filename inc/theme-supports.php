<?php
/*
function theme_support(){

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

load_theme_textdomain ('logic', get_template_directory_uri(). '/languages');
    
    
  */  


    
    
    add_theme_support ('title-tag');
    add_theme_support ('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
    add_image_size('feature-img',570,340,true);
     
    
    
 
?>