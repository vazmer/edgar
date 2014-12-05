<?php
	/**
	* Template Name: Competition thanks
	* A custom page template for Thank You Page.
	*/
	
	require_once 'mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();
	
	if ( $deviceType == "computer" || $deviceType == "tablet" ) {
	get_header(); 
	
	$parentobj = get_category($cat);
	$postCategoryName = get_cat_name( $cat ); 
	$ParentCatId = $parentobj->parent; 
	
	// Get Grandparent ID
	$grandparentobj = get_category($ParentCatId);
	$GrandparentCatName = $grandparentobj->cat_name;
	$GrandparentCatSlug = $grandparentobj->slug;
	
	?>
<div class="main-wrapper inner-page page-template thank-you-page">
<div class="content-wrapper">
  <div class="content-container">
    <div class="content-middle">
      <div class="breadcrum">
        <ul>
          <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
          <li><span>></span></li>
          <li>Competition</li>
        </ul>
      </div>
      <div class="article-container">
        <div class="page-heading" >
          <h1 style="display:none;">Thank You</h1>
        </div>
        <div class="left-panel" style="min-height:100px;">
          <?php 	
			 	wp_reset_query();
				the_content();
			 ?>
          <!--<img src="<?php bloginfo('template_directory'); ?>/assets/images/comp-thanks-bg.png" style="margin-top:50px;" class="competition-thanks-img" /> -->
          
              <?php
              if (has_post_thumbnail()) {
                  the_post_thumbnail( 'full' );
              }
              ?>
            
        </div>
<style>
.competition-thanks-img:hover{
	opacity:1;
}
</style>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <!-- Content Container End--> 
</div>
<?php get_footer(); }
else{
	
	include("mobile-header.php");
	
	$parentobj = get_category($cat);
	$postCategoryName = get_cat_name( $cat ); 
	$ParentCatId = $parentobj->parent; 
	
	// Get Grandparent ID
	$grandparentobj = get_category($ParentCatId);
	$GrandparentCatName = $grandparentobj->cat_name;
	$GrandparentCatSlug = $grandparentobj->slug;
	
	?>
<div class="left-panel">
  <div class="breadcrum">
    <?php  if(function_exists('theme_breadcrumbs')) theme_breadcrumbs(); 
	  			wp_reset_query();
		  ?>
  </div>
    <div class="page-heading main-article">
    <h1 style="display:none;">
      <?php the_title(); ?>
    </h1>
  </div>
  <div class="top-article single-content">
    <div class="post-content">
      <?php  the_content(); ?>
<img src="<?php bloginfo('template_directory'); ?>/assets/images/comp-thanks-bg-mobile.png" class="competition-thanks-img" />
    </div>
  </div>
  
</div>
<?php	
	include("mobile-footer.php");
	}?>