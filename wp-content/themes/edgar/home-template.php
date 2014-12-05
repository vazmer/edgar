<?php
	/**
	* Template Name: Home
	* A custom page template for Home Page.
	*/
	require_once 'mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

    echo '<input type="hidden" value="'.$deviceType.'" class="device-type">';

	$scriptVersion = $detect->getScriptVersion();
	if ( $deviceType == "computer" || $deviceType == "tablet" ) {
	get_header(); 
?>
<div class="main-wrapper">
  <div class="content-wrapper">
    <div class="content-container">
      <div class="part-txt">
        <p>part of EDGAR Middle East</p>
      </div>
      <div class="content-middle">
        <div class="article-container">
          <div class="left-panel">
            <div class="sliding-article">
              <?php 
							// $slideCounter =1;
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
									}else if (  $postCategoryArticle == 385 || $postCategoryID  == 385) { 
										$postCategory_Name = 'breaking-news';
									}else if (  $postCategoryArticle == 401 || $postCategoryID  == 401) { 
										$postCategory_Name = 'women';
									}
						$articleCategory[2] = 'to-know';
						$articleCategory[4] = 'to-do';
						$articleCategory[5] = 'to-go';
						$articleCategory[3] = 'to-buy';
						$articleCategory[6] = 'to-see';
						$articleCategory[385] = 'breaking-news';
						$articleCategory[401] = 'women';
									
                            ?>
              <div class="sliding-article-content <?php echo($postCategory_Name);?>-wrapper ">
                <div class="article-banner"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image'); ?>" alt="">
                  <?php if ( in_category(69) ) { ?>
                  <div class="video-tag"></div>
                  <?php } ?>
                  </a> </div>
                <div class="top-stories"> <strong><a href="<?php echo(home_url('/category/').$postCategory_Name.'/'.$postCategorySlug); ?>"><?php echo($postCategoryName); ?></a><span style="display:none"><?php echo($postCategory[0]->cat_ID);?></span></strong> </div>
                <div class="article-wrapper">
                  <h2><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a></h2>
                  <div class="article-content">
                    <p>
                      <?php 
					  
					  		$post_sub_hear = get_field('post_sub_header');
						    $post_sub_hear = wp_strip_all_tags($post_sub_hear);
						  
						    if (strlen(  $post_sub_hear ) > 157) {
								echo substr(  $post_sub_hear , 0, 157). '...'; 
							} else { 
								echo($post_sub_hear);
							}
					  ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php   $slideCounter++; } 						
									endwhile; endif; ?>
            </div>
            <?php 	wp_reset_query();
                                        $postcount=1;
									$homeQuery = new WP_Query('showposts=20&cat=-1&order=desc'); 
									if($homeQuery->have_posts()) : 
									
										while($homeQuery->have_posts()) : $homeQuery->the_post(); 
										
                                       		if ( $postcount == 4 && !(get_field('main_banner')) ) { 
                                        
                                        ?>
            <div class="home-top-article-container">
              <?php 
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
              <div class="article-wrapper article-col-2 news <?php echo($articleCategory[$parent]); ?>-wrapper">
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
                    <?php the_field('post_sub_header'); ?>
                  </div>
                </div>
              </div>
              <?php } else if ( $postcount == 5 && !(get_field('main_banner')) ) { ?>
              <div class="article-co1-1">
                <?php 
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
                <div class="article-wrapper sports">
                  <div class="home-articles-content <?php echo($articleCategory[$parent]); ?>-wrapper">
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
                  </div>
                  <?php } else if ( $postcount == 6 && !(get_field('main_banner'))  ) { 
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
                  <div class="<?php echo($articleCategory[$parent]); ?>-wrapper">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } else if ( $postcount == 7 && !(get_field('main_banner'))   ) { ?>
            <div class="home-top-article-container">
              <?php 
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
              <div class="article-wrapper article-col-2 news <?php echo($articleCategory[$parent]); ?>-wrapper">
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
                    <?php the_field('post_sub_header'); ?>
                  </div>
                </div>
              </div>
              <?php } else if ( $postcount == 8 && !(get_field('main_banner'))   ) { 
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
              <div class="article-co1-1">
                <div class="article-wrapper beset-watches ">
                  <div class="home-articles-content <?php echo($articleCategory[$parent]); ?>-wrapper">
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
                  </div>
                  <?php } else if ( $postcount == 9 && !(get_field('main_banner'))   ) { 
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
                  <div class="<?php echo($articleCategory[$parent]); ?>-wrapper">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="article-wrapper misc-article">
              <div class="article-co1-1">
                <?php } else if ( $postcount == 10 && !(get_field('main_banner'))   ) { 
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
                <div class="article-wrapper style <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt="">
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
                  </div>
                </div>
              </div>
              <div class="article-co1-1">
                <?php } else if ( $postcount == 11 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper travel <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt="">
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
                  </div>
                </div>
              </div>
              <div class="article-co1-1">
                <?php } else if ( $postcount == 12 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper culture <?php echo($articleCategory[$parent]); ?>-wrapper"> <span style="display:none;"><?php echo(get_cat_name( $childCategory[1]->cat_ID)); ?></span>
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt="">
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
                  </div>
                </div>
              </div>
            </div>
            <div class="article-container bottom-article">
              <div class="article-co1-4">
                <?php } else if ( $postcount == 13 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper social <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image'); ?>" alt="">
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
                      <?php the_field('post_sub_header'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="article-wrapper misc-article">
              <div class="article-co1-1">
                <?php } else if ( $postcount == 14 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper style <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt="">
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
                  </div>
                </div>
              </div>
              <div class="article-co1-1">
                <?php } else if ( $postcount == 15 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper travel <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt="">
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
                  </div>
                </div>
              </div>
              <div class="article-co1-1">
                <?php } else if ( $postcount == 16 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper culture <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt="">
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
                  </div>
                </div>
              </div>
            </div>
            <div class="article-container bottom-article">
              <div class="article-co1-4">
                <?php } else if ( $postcount == 17 && !(get_field('main_banner'))   ) {
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
                <div class="article-wrapper social <?php echo($articleCategory[$parent]); ?>-wrapper">
                  <div class="home-articles-content">
                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>
                    <div class="article-image"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image'); ?>" alt="">
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
                      <?php the_field('post_sub_header'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
									}
									
									 if ( !(get_field('main_banner'))  ){ 
										 $postcount++;
									 }
								 endwhile; endif; 
							  ?>
            <?php if ( $postcount == 16 ) { ?>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<!-- Content Container End-->
</div>
<?php get_footer(); 
	}else 
	{
		include('mobile-header.php'); 
		
	$my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post();
	
	$before_banner_link = get_field('before_banner_link');
	$before_banner_image = get_field('before_banner_image');
	$before_script_for_banner = get_field('before_script_for_banner');
	  endwhile; ?>		
<div class="part-txt">
  <p>part of EDGAR Middle East</p>
</div>
<div class="container slider-wrapper">
  <div class="slider-container">
    <div id="slider" class="swipe">
      <ul>
        <?php wp_reset_query();
if ( get_field('center_banner_image') ) { 
?>
        <li class="slide right-slide"> <a href="<?php if ( get_field('banner_url') ){ the_field('banner_url'); } else { ?>javascript:void(0);<?php } ?>" rel="bookmark">
          <?php if ( get_field('center_banner_title') ) { ?>
          <div class="slide-title">
            <label>
              <?php the_field('center_banner_title'); ?>
            </label>
          </div>
          <?php } ?>
          <img src="<?php the_field('center_banner_image'); ?>" class="slider-imgg" alt="" />
          <div class="featured-text">
            <h3 class="right-slide-title">
              <?php the_field('center_banner_caption'); ?>
            </h3>
            <h2></h2>
            <div class="featured-excerpt">
              <p></p>
            </div>
            <!--featured-excerpt--> 
          </div>
          <!--featured-text--> 
          </a> </li>
        <?php	
} else {
$slideCounter =1;
$mainbanner = new WP_Query('showposts=-1&cat=-1,-69&order=desc'); 
if($mainbanner->have_posts()) : 
  while($mainbanner->have_posts()) : $mainbanner->the_post(); 
  if ( $slideCounter <= 1 && get_field('main_banner')) {
?>
        <li class="slide"> <a href="<?php the_permalink(); ?>" rel="bookmark"> <img src="<?php the_field('large_image'); ?>" alt="" />
          <div class="featured-text">
            <h3>
              <?php the_title(); ?>
            </h3>
            <h2></h2>
            <div class="featured-excerpt">
              <p></p>
            </div>
            <!--featured-excerpt--> 
          </div>
          <!--featured-text--> 
          </a> </li>
        <?php   
$slideCounter++;
}
endwhile; endif; 
wp_reset_query();
}
?>
        <li class="slide right-slide"> 
           <a href="<?php echo(home_url('/quotes/'));?>" rel="bookmark"> 
          <!--<a href="javascript:void(0);" rel="bookmark">--> 
          <?php if ( get_field('right_banner_title') ) { ?>
          <div class="slide-title">
            <label>
              <?php the_field('right_banner_title'); ?>
            </label>
          </div>
          <?php } ?>
          <img src="<?php the_field('right_banner_image'); ?>" class="slider-imgg" alt="" />
          <div class="featured-text">
            <?php 
                      
                              while( has_sub_field('right_banner_caption') ):
                              $tipDate = date("Ymd");
                               ?>
            <h3 class="right-slide-title">
              <?php the_sub_field('right_banner_caption_txt'); ?>
              <span>
              <?php the_sub_field('quote_author'); ?>
              </span> </h3>
            <?php 
                              break;
                              endwhile;
                          ?>
            <h2></h2>
            <div class="featured-excerpt">
              <p></p>
            </div>
            <!--featured-excerpt--> 
          </div>
          <!--featured-text--> 
          </a> </li>
        <li class="slide left-slide"> 
          <!-- <a href="<?php echo(home_url('/about-us/'));?>" rel="bookmark"> --> 
          <a href="javascript:void(0);" rel="bookmark">
          <?php if ( get_field('left_banner_title') ) { ?>
          <div class="slide-title">
            <label>
              <?php the_field('left_banner_title'); ?>
            </label>
          </div>
          <?php } ?>
          <img src="<?php the_field('left_banner_image'); ?>" class="slider-imgg" alt="" />
          <div class="featured-text">
            <h3 class="left-slide-title">
              <?php the_field('left_banner_caption'); ?>
            </h3>
            <h2></h2>
            <div class="featured-excerpt">
              <p></p>
            </div>
            <!--featured-excerpt--> 
          </div>
          <!--featured-text--> 
          </a> </li>
      </ul>
    </div>
</div>
<div class="left-panel">
  <?php wp_reset_query();
		$st = true;
		$postcount=1;
        $dfp_banner_count = 1;
        $homeQuery = new WP_Query('showposts=20&cat=-1&order=desc');

			while($homeQuery->have_posts()) : $homeQuery->the_post();
				if ( !(get_field('main_banner')) ) { 
				
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
									}else if (  $postCategoryArticle == 385 || $postCategoryID  == 385) { 
										$postCategory_Name = 'breaking-news';
									}else if (  $postCategoryArticle == 401 || $postCategoryID  == 401) { 
										$postCategory_Name = 'women';
									}
						$articleCategory[2] = 'to-know';
						$articleCategory[4] = 'to-do';
						$articleCategory[5] = 'to-go';
						$articleCategory[3] = 'to-buy';
						$articleCategory[6] = 'to-see';
						$articleCategory[385] = 'breaking-news';
						$articleCategory[401] = 'women';	
						
						 $childCategory = get_the_category($post->ID); 
                                        $childCategoryName = $childCategory[0]->name; 
                                        $childCategorySlug = $childCategory[0]->slug;
                                        $parent = $childCategory[0]->parent;
				if ( $childCategory[0]->cat_ID < 7 ) 
									{
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
			$post_sub_hear = get_field('post_sub_header');
		  	$post_sub_hear = wp_strip_all_tags($post_sub_hear);
		  
		  	if (strlen(  $post_sub_hear ) > 65) {echo substr(  $post_sub_hear , 0, 65). '...'; } else { echo($post_sub_hear);} 
				?>
      </div>
    </div>
  </div>
   
   <?php
	   if ( $postcount == 6 || $postcount == 12 || $postcount == 18 ) {  
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

           <?php }
		}
   
   }
			if ( $st == true ) { 
				$st = false;
			}else {
				$st = true;	
			}
			$postcount++;
		 endwhile; ?>
</div>
<?php 
		include('mobile-footer.php');
	}
?>