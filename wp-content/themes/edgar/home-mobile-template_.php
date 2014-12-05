<?php 
/**
	* Template Name: Home Mobile
	* A custom page template for Home Mobile Page.
	*/
include('mobile-header.php'); 
?>
<!-- ovo bi trebalo da se vidi -->
  	<div class="part-txt">
        <p>part of EDGAR Middle East</p>
	</div>
    <div class="container slider-wrapper mobile-slider">
      <div class="slider-container">
        <div id="slider" class="swipe" style="display:none !important;">
          <ul>
<?php wp_reset_query();
if ( get_field('center_banner_image') ) { 
?>
<li class="slide right-slide">
<a href="<?php if ( get_field('banner_url') ){ the_field('banner_url'); } else { ?>javascript:void(0);<?php } ?>" rel="bookmark">

<?php if ( get_field('center_banner_title') ) { ?>
<div class="slide-title">
<label>  <?php the_field('center_banner_title'); ?>  </label>
</div>
<?php } ?>
<img src="<?php the_field('center_banner_image'); ?>" class="slider-imgg" alt="" />
<div class="featured-text"> <h3 class="right-slide-title"> <?php the_field('center_banner_caption'); ?> </h3>
<h2></h2>
<div class="featured-excerpt"><p></p></div>
<!--featured-excerpt--> 
</div>
<!--featured-text--> 
</a>
</li>
<?php	
} else {
$slideCounter =1;
$mainbanner = new WP_Query('showposts=-1&cat=-1,-69&order=desc'); 
if($mainbanner->have_posts()) : 
  while($mainbanner->have_posts()) : $mainbanner->the_post(); 
  if ( $slideCounter <= 1 && get_field('main_banner')) {
?>
<li class="slide"> 
<a href="<?php the_permalink(); ?>" rel="bookmark"> <img src="<?php the_field('large_image'); ?>" alt="" />
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
</a> 
</li>
<?php   
$slideCounter++;
}
endwhile; endif; 
wp_reset_query();
}
?>

<li class="slide right-slide"> 
<!-- <a href="<?php echo(home_url('/quotes/'));?>" rel="bookmark"> --> 
<a href="javascript:void(0);" rel="bookmark">
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
                              // if ( has_sub_field('right_banner_caption') )
                              
                              $tipDate = date("Ymd");
                              // if ( $tipDate == get_sub_field('right_banner_caption_date') ) { 
                               ?>
  <h3 class="right-slide-title">
    <?php the_sub_field('right_banner_caption_txt'); ?>
    <span><?php the_sub_field('quote_author'); ?></span>
  </h3>
  <?php // } 
                              //	}
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
              </a> 
</li>

</ul>
        </div>
        <a href="#" class="next-but-swipe"><img width="22" src="<?php bloginfo('template_directory'); ?>/images/top-stories-right-arrow.png" alt=""></a> <a href="#" class="prev-but-swipe"><img width="22" src="<?php bloginfo('template_directory'); ?>/images/top-stories-left-arrow.png" alt=""></a> </div>
    </div>
    
    <div class="left-panel">
    <?php 	wp_reset_query();
			
			$st = true;
			
		$homeQuery = new WP_Query('showposts=20&cat=-1&order=desc'); 
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