<?php
require_once 'Header.php';
if(have_posts()):
  while(have_posts()): the_post(); 
  the_post_thumbnail();
  the_title(); 
  the_content();
endwhile;
endif;
require_once 'Footer.php';
?>