<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '3.7.3' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '3.6.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
//custom post type for blog
add_action( 'init', 'ht_custom_post_custom_article' );
// The custom function to register a custom article post type
function ht_custom_post_custom_article() {
// Set the labels, this variable is used in the $args array
$labels = array(
'name'               => __( 'Blogs' ),
'singular_name'      => __( 'Blogs' ),
'add_new'            => __( 'Add New blog' ),
'add_new_item'       => __( 'Add New blog' ),
'edit_item'          => __( 'Edit blog' ),
'new_item'           => __( 'New blog' ),
'all_items'          => __( 'All blog' ),
'view_item'          => __( 'View blog' ),
'search_items'       => __( 'Search blog' ),
'featured_image'     => 'Poster',
'set_featured_image' => 'Add Poster'
);
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
$args = array(
'labels'            => $labels,
'description'       => 'Holds our blog post specific data',
'public'            => true,
'menu_position'     => 5,
'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
'has_archive'       => true,
'show_in_admin_bar' => true,
'show_in_nav_menus' => true,
'query_var'         => 'blog',
);
// Call the actual WordPress function
// Parameter 1 is a name for the post type
// Parameter 2 is the $args array
register_post_type( 'blogs', $args);
}
//end custom post for blog
//shortcode for blogs
function blogs_shortcode(){
	$the_query = new WP_Query( array('posts_per_page'=>6, 'post_type'=>'blogs','offset'=>1));
	$single_query = new WP_Query( array('posts_per_page'=>1, 'post_type'=>'blogs')); 
	$paged = get_query_var('paged');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$loop = new WP_Query( array( 'p' => $id,'post_type' => 'blogs', 'posts_per_page' => 1 ) ); 

		while ( $loop->have_posts() ) : $loop->the_post();
		?>
<div class="Blog_img">
		<?php the_post_thumbnail('default'); ?>
</div>
		<h1 class="Inner_blog_h1 "> <?php the_title(); ?> </h1>
	  <div class="Inner_blog_div">
	  <?php the_content(); ?>
	</div>
	  
	  <?php endwhile; 
	}else{
	if($paged==0){
		
	?>
	<div class="row latest_blog">
	<h1 class="learn_heading">Learn and Grow</h1>	
	<h4 class="latesth4">LATEST ARTICLES</h4>
	<?php
	while ($single_query -> have_posts()) : $single_query -> the_post();
?>
 <div class="col-md-8 latest_image">
	 <div class="Blog_img">
			<?php the_post_thumbnail('default'); ?>
	 </div>
            </div>
            <div class="col-md-4 latest_text">
                <h3 class="Blog_head"><?php the_title(); ?></h3>
                <div class="excerpt_div">
				<?php the_excerpt(); ?>
				</div>
                <a class="Blog_button hover_button" href="single-blog?id=<?php the_ID() ?>">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
<?php
endwhile;
	?>
	</div>
	<?php
	}else{
		$the_query = new WP_Query( array('posts_per_page'=>6, 'post_type'=>'blogs','paged' => get_query_var('paged') ? get_query_var('paged') : 1));
		//aaj ka else hai
		?>
		<div class="container Blogs">  
<div class="row recent_articles">
		<h4 class="articlesh4">MORE RECENT ARTICLES</h4>
	<?php
	$c = 0;
	while ($the_query -> have_posts()) : $the_query -> the_post();
	$c = $c+1; 
	$cid = get_the_ID();
	//if($cid!=6463){
	//inner link
	$id = get_the_ID();
	$link = $_SERVER['REQUEST_URI']."?".
             http_build_query(
                Array('useraction' => 'blogs_shortcode', 'id' => $id) 
                + $_GET);
 ?>  
            <div class="col-md-6">
				<div class="Blog_img">
			<?php the_post_thumbnail('default'); ?>
				</div>
                <h3 class="Blog_head"><?php the_title(); ?></h3>
                <div class="excerpt_div">
				<?php the_excerpt(); ?>
			 </div>
				<a class="Blog_button hover_button" href="<?php echo $link ?>">Read more<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div> 
 
 <?php
	//}
 endwhile;
 ?>
   </div>
    </div>
		<?php
		//aaj ka else end
	}
	if($paged==0){
	?>
<div class="container Blogs">  
<div class="row recent_articles">
		<h4 class="articlesh4">MORE RECENT ARTICLES</h4>
	<?php
	$c = 0;
	while ($the_query -> have_posts()) : $the_query -> the_post();
	$c = $c+1; 
	$cid = get_the_ID();
	//if($cid!=6463){
	//inner link
	$id = get_the_ID();
	$link = $_SERVER['REQUEST_URI']."?".
             http_build_query(
                Array('useraction' => 'blogs_shortcode', 'id' => $id) 
                + $_GET);
 ?>  
            <div class="col-md-6">
				<div class="Blog_img">
			<?php the_post_thumbnail('default'); ?>
				</div>
                <h3 class="Blog_head"><?php the_title(); ?></h3>
                <div class="excerpt_div">
				<?php the_excerpt(); ?>
			 </div>
				<a class="Blog_button hover_button" href="<?php echo $link ?>">Read more<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div> 
 
 <?php
	//}
 endwhile;
 ?>
   </div>
    </div>
        
 <?php
	}
$big = 999999999; // need an unlikely integer
?>
<div class="pagination">
<?php
$total_pages = $the_query->max_num_pages;
$current_page = get_query_var('paged');
if($current_page==0){
	echo "<span class='prev page-numbers'><i class='fa fa-arrow-left' aria-hidden='true'></i> Back </span>";
	}
echo paginate_links( array(
'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
'format' => '?paged=%#%',
'prev_text' => __("<span><i class='fa fa-arrow-left' aria-hidden='true'></i> Back </span>"),
'next_text' => __("<span>Next <i class='fa fa-arrow-right' aria-hidden='true'></i></span>"),
'current' => max( 1, get_query_var('paged') ),
'total' => $the_query->max_num_pages
) );
if($current_page==$total_pages){
echo "<span class='next page-numbers'> Next <i class='fa fa-arrow-right' aria-hidden='true'></i></span>";
}
	}
?>
</div>
<?php
wp_reset_postdata();
}
add_shortcode('blogs','blogs_shortcode');
//end shortcode
//add homejavascript
function js_code_page() {
	if (is_page ('1212')) { 
	?>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		//jQuery(".wpem-icon-menu").click();
	});
	</script>
	<?php
	}


	if (is_page ('5929')) { 
		?>
<link rel="stylesheet" id="font-awesome-5-all-css" href="https://atlantablockchaincenter.dglinks.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=4.5.7" media="all">

<?php
	}

	if (is_page ('6265')) { 
		?>
<style>
	.entry-title{
		display:none !important;
	}
</style>
<?php

	}
	$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  
	if ( false !== strpos( $url, 'event' ) ) {
		?>
		<link rel="stylesheet" id="font-awesome-5-all-css" href="https://atlantablockchaincenter.dglinks.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=4.5.7" media="all">

		<?php
	} 

	}
	add_action('wp_head', 'js_code_page');
	//end js for homepage
	


	add_filter( 'event_manager_event_listing_data_fields', 'custom_event_manager_event_listing_data_fields' );
 
	function custom_event_manager_event_listing_data_fields( $fields ) {
	 
		// Here we target one of the event fields (location) and change it's placeholder
		$fields['_event_location']['options'] = ['Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','Washington DC','West Virginia','Wisconsin','Wyoming'];
	 
		// And return the modified fields
		return $fields;
	}

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';
