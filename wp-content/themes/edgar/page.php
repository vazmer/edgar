<?php 
	require_once 'mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();
	
	if ( $deviceType == "computer" || $deviceType == "tablet" ) {
get_header(); ?>
<div class="main-wrapper inner-page page-template">
<div class="content-wrapper">
  <div class="content-container">
    <div class="content-middle">
        <div class="part-txt">
            <p>part of EDGAR Middle East</p>
        </div>
      <div class="breadcrum">
        <?php  if(function_exists('theme_breadcrumbs')) theme_breadcrumbs(); 
		  			wp_reset_query();
		  ?>
      </div>
      <div class="article-container">
        <div class="left-panel">
          <div class="page-heading main-article">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
          <div class="top-article single-content">
            <div class="post-content">
              <?php  the_content(); ?>
	      <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '' ), 'after' => '</div>' ) ); ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  
  <!-- Content Container End--> 
  
</div>
<?php 
get_footer(); } else{
	
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
<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '' ), 'after' => '</div>' ) ); ?>
    </div>
  </div>
</div>
<?php	
	include("mobile-footer.php");
	}?>