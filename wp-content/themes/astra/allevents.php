<?php

 /* 
 Template Name: All Events (Dynamic) 
 */  
   
 get_header();
 ?>
 <br><br><br><br><br><br>
 <?php  
 echo do_shortcode( '[events per_page="50000"]' );
?>   
<script>
    jQuery(function(){
        jQuery(".wpem-icon-stop2").click();
        jQuery(".wpem-event-layout-action-wrapper").hide();
        var filter = document.getElementById('event_filters');
        filter.style.display = 'none';
        
        

    })
</script>
<?php
get_footer();

?>  