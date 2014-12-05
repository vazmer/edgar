<?php
	/**
	* Template Name: ThankYou
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
<div class="main-wrapper inner-page page-template">
  <div class="content-wrapper">
    <div class="content-container">
        <div class="part-txt">
            <p>part of EDGAR Middle East</p>
        </div>
      <div class="content-middle">
        <div class="breadcrum">
          <ul>
            <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
            <li><span>></span></li>
            <li>Thank You</li>
          </ul>
        </div>
        <div class="article-container">
          <div class="page-heading" >
            <h1>Thank You</h1>
          </div>
          <div class="left-panel" style="min-height:100px;">
          
          	 <?php 	
			 
			 	wp_reset_query();
				
				the_content();
			 
			 ?>
             
			 </div>	                
          
          <?php get_sidebar(); ?>
          
        </div>
      </div>
    </div>
    <!-- Content Container End--> 
    
  </div>
<?php get_footer(); }
else{
	
	include("mobile-header.php");
	?>
<div class="left-panel">
  <div class="breadcrum">
    <?php  if(function_exists('theme_breadcrumbs')) theme_breadcrumbs(); 
	  			wp_reset_query();
		  ?>
  </div>
  <div class="page-heading main-article">
    <h1>
      <?php the_title(); ?>
    </h1>
  </div>
  <div class="top-article single-content">
    <div class="post-content">
      <?php  the_content(); ?>
    </div>
  </div>
</div>
<?php	
	include("mobile-footer.php");
	}?>