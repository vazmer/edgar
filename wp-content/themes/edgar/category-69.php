<?php 
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
<div class="main-wrapper">
  <div class="content-wrapper">
    <div class="content-container">
      <div class="content-middle">
        <div class="breadcrum" style="display:none;">
          <ul>
            <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
            <li><span>></span></li>
            <li><?php echo($parentCategoryName); ?></li>
          </ul>
        </div>
        <div class="article-container">
          <div class="page-heading">
            <h1>Videos</h1>
          </div>
              <div class="search search2">
              <p>Part of EDGAR Middle East</p>
                <form onsubmit="return chkSearch();" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input name="s" type="text" id="s" value="" />
                    <input type="submit" name="submit" id="searchsubmit" value="search" />
                </form>
            </div>
          <div class="left-panel">
          
          	 <?php 	wp_reset_query();
			 		$postcount=1;
			 		if(have_posts()) : 
					
				    while(have_posts()) : the_post(); 
					
					if ( $postcount == 1 ) { 
					
					?>
                        <div class="top-article">
                          <div class="article-banner"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image');?>" alt=""><div class="video-tag"></div></a></div>
                          <div class="article-wrapper">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_field('post_sub_header'); ?>
                          </div>
                        </div>
                    <?php } else if ( $postcount == 2 ) {  ?>
                    
                    
                    <div class="related-container">
                      <div class="article-wrapper article-col-2 news"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><div class="video-tag"></div></a></div>
                        <div class="article-wrapper">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <?php the_field('post_sub_header'); ?>
                        </div>
                      </div>
                      
                      <?php } else if ( $postcount == 3 ) {  ?>
                      
                      <div class="article-co1-1">
                      
                        <div class="article-wrapper sports">
                          <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><div class="video-tag"></div></a></div>
                          <div class="top-stories">
                          </div>
                          <div class="article-wrapper">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          </div>
                        </div>
                       
                       <?php } else if ( $postcount == 4 ) {  ?>
                        
                        <div class="article-wrapper beset-watches">
                          <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><div class="video-tag"></div></a> </div>
                          <div class="top-stories">
                          </div>
                          <div class="article-wrapper">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php } else if ( $postcount == 5 ) {  ?>
                    
                    <div class="article-wrapper article-col-2 news"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><div class="video-tag"></div></a></div>
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <div class="article-content">
                        <?php the_field('post_sub_header'); ?>
                      </div>
                    </div>
                    
                    <?php } else if ( $postcount == 6 ) {  ?>
                    
                    <div class="article-co1-1 right-panel-articles">
                    
                      <div class="article-wrapper sports">
                        <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><div class="video-tag"></div></a></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                      
                      <?php } else if ( $postcount == 7 ) {  ?>
                      
                      <div class="article-wrapper beset-watches">
                        <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><div class="video-tag"></div></a></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    
                    <?php } else if ( $postcount == 8 ) {  ?>
                    
                    <div class="article-wrapper misc-article">
              <div class="article-co1-1">
                <div class="article-wrapper style"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image');?>" alt=""><div class="video-tag"></div></a></div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </div>
              
              <?php } else if ( $postcount == 9 ) {  ?>
              
              <div class="article-co1-1">
                <div class="article-wrapper travel"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image');?>" alt=""><div class="video-tag"></div></a></div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </div>
              
              <?php } else if ( $postcount == 10 ) {  ?>
              
              <div class="article-co1-1">
                <div class="article-wrapper culture"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image');?>" alt=""><div class="video-tag"></div></a></div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </div>
            </div>
              
              <?php } else if ( $postcount >= 11 ) {  ?>      
                    
                    <div class="article-container bottom-article">
              <div class="article-co1-4">
                <div class="article-wrapper social"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image');?>" alt=""><div class="video-tag"></div></a></div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="article-content">
                    <?php the_field('post_sub_header'); ?>
                  </div>
                </div>
              </div>
            </div>
                    <?php } ?>
                        
            <?php $postcount++; endwhile; twentytwelve_content_nav( 'nav-below' );endif; ?>
			<?php if ( $postcount == 2 || $postcount == 5 || $postcount == 6  ) { ?>  
            	</div>
            <?php } else if ( $postcount == 3 ) { ?> 
	            	</div>
                </div>
			<?php } else if ( $postcount == 4 ) { ?> 
            			</div>
	            	</div>
                </div>
<?php } else if ( $postcount == 7 ) { ?>
</div>
</div>
<?php } else if ( $postcount == 8 ) { ?>
</div>
<?php } else if ( $postcount == 9 || $postcount == 10 ) { ?>
</div>
</div>
<?php } else if ( $postcount >= 11 ) { ?>
<?php 
				
				if ( $postcount == 11 || $postcount == 16 || $postcount == 21 ) {
				}
				
				?>
</div>
<?php } ?>
<?php get_sidebar(); ?>
</div>
</div>
</div>
<!-- Content Container End-->
</div>
<?php get_footer(); 
	}else 
	{
		include("mobile-header.php"); 	
		
		$my_query = new WP_Query( 'pagename=ads-management' );
		while ($my_query->have_posts()) : $my_query->the_post();
		
			$before_banner_link = get_field('before_banner_link');
			$before_banner_image = get_field('before_banner_image');
			$before_script_for_banner = get_field('before_script_for_banner');
		  
		endwhile; 
		
		wp_reset_query();
			
		$parentobj = get_category($cat);
		$postCategoryName = get_cat_name( $cat ); 
		$ParentCatId = $parentobj->parent; 
		// Get Grandparent ID
		$grandparentobj = get_category($ParentCatId);
		$GrandparentCatName = $grandparentobj->cat_name;
		$GrandparentCatSlug = $grandparentobj->slug;
		?>
<div class="category-top-container">
  <div class="breadcrum">
    <ul>
      <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
      <li><span>></span></li>
      <li><a href="<?php echo($GrandparentCatSlug); ?>"><?php echo($GrandparentCatName); ?></a></li>
    </ul>
  </div>
  <div class="page-heading">
    <h1><?php echo($postCategoryName); ?></h1>
  </div>
</div>
<div class="left-panel">
  <?php 
			$st = true;
			$postcounter=1;
            $dfp_banner_count = 1;

            wp_reset_query();
			if(have_posts()) : 
			while(have_posts()) : the_post();
		?>
  <div class="article-wrapper article-col-2 news <?php if ( $postcounter == 1 || $postcounter == 12 || $postcounter == 22 || $postcounter == 32 || $postcounter == 42) { echo("top-story-category"); } else if ( $st == true ) { echo("right-article "); }?>" style="padding-bottom:15px;">
    <div class="post-image <?php if ( $postcounter == 1 || $postcounter == 12 || $postcounter == 22 ) { echo("top-story-category-image"); } ?>"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""><?php if ( in_category(69) ) { ?><div class="video-tag"></div><?php } ?></a></div>
    <div class="article-wrapper">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php $post_sub_hear = get_field('post_sub_header');
	  $post_sub_hear = wp_strip_all_tags($post_sub_hear);
	  
	   if (strlen(  $post_sub_hear ) > 65) {echo substr(  $post_sub_hear , 0, 65). '...'; } else { echo($post_sub_hear);} ?>
    </div>
  </div>
  <?php
		  
		  	if ( $postcounter != 1 || $postcounter != 12 || $postcounter != 22 || $postcounter != 32 || $postcounter != 42 ) { 
		  
		  	if ( $st == true ) { 
				$st = false;
			}else {
				$st = true;	
			}
			
		  }
			
			if ( $postcounter == 5 || $postcounter == 9 || $postcounter == 13 || $postcounter == 17 ) {  
		   if( $before_banner_link ) { ?>
			  <div class="siderbar-container content-banner-insider">
			  <div class="banner-insider"> <a href="<?php echo($before_banner_link); ?>"><img src="<?php echo($before_banner_image); ?>" alt=""></a> </div></div>
			  <?php } elseif ( $before_script_for_banner ) { ?>

               <?php global $dfp_competition; ?>
               <?php if($dfp_competition):?>
                   <div class="siderbar-container content-banner-insider">
                       <!-- adunit-300x250 -->
                       <div id='listing-300x250_<?php echo $dfp_banner_count;?>' style='width:300px; height:250px;'>
                           <script type='text/javascript'>
                               googletag.cmd.push(function() { googletag.display('listing-300x250_<?php echo $dfp_banner_count;?>'); });
                           </script>
                       </div>
                       <?php $dfp_banner_count++;?>
                   </div>
               <?php endif;?>

               <?php $dfp_banner_count++;?>
           <?php }
			  
		}
		$postcounter++;
			
		   endwhile;
		   //twentytwelve_content_nav( 'nav-below' ); 
		   if(function_exists('wp_paginate')) {
				wp_paginate();
		   }
		   endif; ?>
</div>
<?php		include("mobile-footer.php");
	}	
?>
