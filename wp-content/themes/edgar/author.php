<?php get_header(); ?> 
<div class="main-wrapper">
  <div class="content-wrapper">
    <div class="content-container">
      <div class="content-middle">
        <div class="breadcrum">
          <ul>
            <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
            <li><span>></span></li>
            <li><a href="<?php echo(home_url('/category/').$GrandparentCatSlug); ?>"><?php echo($GrandparentCatName); ?></a></li>
            <li><span>></span></li>
            <li><?php echo($postCategoryName); ?></li>
          </ul>
        </div>
        <div class="article-container">
          <div class="page-heading">
            <h1><?php echo($parentCategoryName); ?></h1>
          </div>
              <div class="search">
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
                          <div class="article-banner"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image');?>" alt=""></a> </div>
                          <div class="article-wrapper">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_field('short_description'); ?>
                          </div>
                        </div>
                    <?php } else if ( $postcount == 2 ) {  ?>
                    
                    
                    <div class="related-container">
                      <div class="article-wrapper article-col-2 news"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""></a>
                        <div class="article-wrapper">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <?php the_field('short_description'); ?>
                        </div>
                      </div>
                      
                      <?php } else if ( $postcount == 3 ) {  ?>
                      
                      <div class="article-co1-1">
                      
                        <div class="article-wrapper sports">
                          <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""></a> </div>
                          <div class="top-stories">
                          </div>
                          <div class="article-wrapper">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          </div>
                        </div>
                       
                       <?php } else if ( $postcount == 4 ) {  ?>
                        
                        <div class="article-wrapper beset-watches">
                          <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""></a> </div>
                          <div class="top-stories">
                          </div>
                          <div class="article-wrapper">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php } else if ( $postcount == 5 ) {  ?>
                    
                    <div class="article-wrapper article-col-2 news"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""></a>
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <div class="article-content">
                        <?php the_field('short_description'); ?>
                      </div>
                    </div>
                    
                    <?php } else if ( $postcount == 6 ) {  ?>
                    
                    <div class="article-co1-1 right-panel-articles">
                    
                      <div class="article-wrapper sports">
                        <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""></a> </div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                      
                      <?php } else if ( $postcount == 7 ) {  ?>
                      
                      <div class="article-wrapper beset-watches">
                        <div class="small-height"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image');?>" alt=""></a> </div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    
                    <?php } else if ( $postcount == 8 ) {  ?>
                    
                    <div class="article-wrapper misc-article">
              <div class="article-co1-1">
                <div class="article-wrapper style"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image');?>" alt=""></a>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </div>
              
              <?php } else if ( $postcount == 9 ) {  ?>
              
              <div class="article-co1-1">
                <div class="article-wrapper travel"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image');?>" alt=""></a>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </div>
              
              <?php } else if ( $postcount == 10 ) {  ?>
              
              <div class="article-co1-1">
                <div class="article-wrapper culture"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image');?>" alt=""></a>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </div>
            </div>
              
              <?php } else if ( $postcount >= 11 ) {  ?>      
                    
                    <div class="article-container bottom-article">
              <div class="article-co1-4">
                <div class="article-wrapper social"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image');?>" alt=""></a>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="article-content">
                    <?php the_field('short_description'); ?>
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
<?php get_footer(); ?>