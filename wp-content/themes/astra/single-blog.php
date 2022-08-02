<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
 /* 
 Template Name: single blog (Dynamic) 
 */  
   
 get_header();  
   ?>
   <br><br><br><br>
   <?php
   
  // Here is your custom form whatever you want to add field.  
  $loop = new WP_Query( array( 'p' => $id,'post_type' => 'blogs', 'posts_per_page' => 1 ) ); 

  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
  <div class="Inner_Blog_img">
  <?php the_post_thumbnail('default'); ?>
</div>
  <h1 class="Inner_Blog_h1 "> <?php the_title(); ?> </h1>
<div class="Inner_Blog_div"> <?php the_content(); ?> </div>

<?php endwhile; ?>
 <?php 
  
get_footer();
}
?>  