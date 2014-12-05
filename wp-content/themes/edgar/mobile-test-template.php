<?php 
/**
	* Template Name: Mobile Test
	* A custom page template for Mobile Test Page.
	*/
include('mobile-header.php'); 
?>

  	<div class="part-txt">
        <p>part of EDGAR Middle East</p>
	</div>
    <div class="container slider-wrapper">
      <div class="slider-container">
        <div id="slider" class="swipe">
          <ul>

			<?php 
                 $slideCounter =1;
                wp_reset_query();
                $mainbanner = new WP_Query('showposts=4&cat=-1&order=desc'); 
                if($mainbanner->have_posts()) : 
                    while($mainbanner->have_posts()) : $mainbanner->the_post(); 
                    if ( $slideCounter < 3 && !(get_field('main_banner')) ) {
                        $postCategory = get_the_category($post->ID); 
                        $postCategoryID = $postCategory[0]->cat_ID;
                        $postCategoryName = $postCategory[0]->cat_name;
                        $postCategorySlug = $postCategory[0]->slug;
                        if ( $postCategoryID < 7 ) {
                            
                            $postCategoryName = $postCategory[1]->cat_name;
                            $postCategorySlug = $postCategory[1]->slug;
                            
                        }
                        $postParent = $postCategory[0]->parent;
                        $postParent_name = get_category($parent);
                        $postParent_name = $postParent_name->cat_name;
                        $postCategoryArticle = $postParent;
                        if ( $postCategoryArticle == 2 || $postCategoryID == 2 ) { 
                            $postCategory_Name = 'to-know';
                        }else if (  $postCategoryArticle == 4 || $postCategoryID  == 4) { 
                            $postCategory_Name = 'to-do';
                        }else if (  $postCategoryArticle == 5 || $postCategoryID  == 5) { 
                            $postCategory_Name = 'to-go';
                        }else if (  $postCategoryArticle == 3 || $postCategoryID  == 3) { 
                            $postCategory_Name = 'to-buy';
                        }else if (  $postCategoryArticle == 6 || $postCategoryID  == 6) { 
                            $postCategory_Name = 'to-see';
                        }
                $articleCategory[2] = 'to-know';
                $articleCategory[4] = 'to-do';
                $articleCategory[5] = 'to-go';
                $articleCategory[3] = 'to-buy';
                $articleCategory[6] = 'to-see';
                                
                        ?>
              
               <li class="<?php echo($postCategory_Name);?>-wrapper" >
                  <div class="slider-image">
                  	 <a href="<?php the_permalink(); ?>"><img class="swipe-img" src="<?php the_field('large_image'); ?>" alt="">
						<?php if ( in_category(69) ) { ?>
	                        <div class="video-tag"></div>
                        <?php } ?>
                     </a>
                    <div class="top-stories"> <strong><a href="<?php echo(home_url('/category/').$postCategory_Name.'/'.$postCategorySlug); ?>"><?php echo($postCategoryName); ?></a><span style="display:none"><?php echo($postCategory[0]->cat_ID);?></span></strong> </div>
                    <div class="article-wrapper">
                      <h2><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a></h2>
                      <div class="article-content">
                        <p>
                          <?php 
						  
							  myfieldcontent2(20,get_field('post_sub_header')); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
              
              <?php   $slideCounter++; } 						
					endwhile; endif; ?>
          </ul>
        </div>
        <a href="#" class="next-but-swipe"><img width="22" src="<?php bloginfo('template_directory'); ?>/images/top-stories-right-arrow.png" alt=""></a> <a href="#" class="prev-but-swipe"><img width="22" src="<?php bloginfo('template_directory'); ?>/images/top-stories-left-arrow.png" alt=""></a> </div>
    </div>
    
    <div class="left-panel">
    <?php 	wp_reset_query();
			
			$st = true;
			
		$homeQuery = new WP_Query('showposts=10&offset=3&cat=-1&order=desc'); 
		if($homeQuery->have_posts()) : 
		
			while($homeQuery->have_posts()) : $homeQuery->the_post(); 			
				if ( !(get_field('main_banner')) ) { 
				
				
				
				 $childCategory = get_the_category($post->ID); 
    
                                        $childCategoryName = $childCategory[0]->name; 
    
                                        $childCategorySlug = $childCategory[0]->slug;
    
                                        $parent = $childCategory[0]->parent;
if ( $childCategory[0]->cat_ID < 7 ) {
										$childCategoryName = $childCategory[1]->name;
										$childCategorySlug = $childCategory[1]->slug;
										$parent = $childCategory[1]->parent;
									}    
			?>
    
        <div class="article-wrapper article-col-2 news <?php if ( $st == false ) { echo("right-article "); } echo($articleCategory[$parent]); ?>-wrapper">
            <div class="home-articles-content">
              <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
              <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt="">
                <?php if ( in_category(69) ) { ?>
                <div class="video-tag"></div>
                <?php } ?>
                </a> </div>
              <h2><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h2>
              <div class="article-date">
                <?php the_time('F j, Y'); ?>
              </div>
              <div class="article-content">
                <?php 
				
			if (strlen(get_field('post_sub_header')) > 65) {echo substr(get_field('post_sub_header'), 0, 65) . '...'; } else {the_field('post_sub_header');}
				
//				myfieldcontent2(15,get_field('post_sub_header')); 
				?>
              </div>
            </div>
        </div>
        
        <?php }
		
			if ( $st == true ) { 
				$st = false;
			}else {
				$st = true;	
			}
		
		 endwhile; endif; ?>
		
    </div>
    
    <?php  // include ("mobile-sidebar.php"); ?>

<?php 
		include('mobile-footer.php');
	
?>