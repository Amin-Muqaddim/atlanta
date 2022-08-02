<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>

<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	let desktopHeader = document.getElementById("ast-desktop-header");
	let desktopHeaderLeft = document.querySelectorAll("#ast-desktop-header .site-header-primary-section-left aside > div")[0];
	let desktopHeaderRight = document.querySelectorAll("#ast-desktop-header .site-header-primary-section-right aside > div")[0];
	let menuLinks = document.querySelectorAll("#ast-desktop-header #ast-hf-menu-1 li a");
	let bodyTarget = document.getElementsByTagName("body")[0];
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		desktopHeader.style.backgroundColor = "#fff";
		desktopHeader.style.borderBottom = "2px solid #000";
		desktopHeaderLeft.style.display = "block";
		desktopHeaderRight.style.display = "block";
		for(var x = 0; x < menuLinks.length; x++) {
			menuLinks[x].style.color = "#000";
		}
	} else if(document.getElementsByTagName("body")[0].classList.contains("home") == true) {
   		desktopHeader.style.backgroundColor = "transparent";
		desktopHeader.style.borderBottom = "2px solid transparent";
		desktopHeaderLeft.style.display = "none";
		desktopHeaderRight.style.display = "none";
		for(var x = 0; x < menuLinks.length; x++) {
			if(bodyTarget.classList.contains("home")) {	
				menuLinks[x].style.color = "#fff";
			}
		 }
	}
}
</script>
<script>(function(o, p, t, i, x) {x = p.createElement(t);var m = p.getElementsByTagName(t)[0];x.async = 1;x.src = i;m.parentNode.insertBefore(x, m)})(window, document, 'script', 'https://atlblockchain.optixapp.com/web-plugin/optix.v1.js');</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=YdiSzv"></script>
	</body>
</html>