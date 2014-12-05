<?php
/**
 * The sidebar containing the main widget area
 */
 
 function filter_where( $where = '' ) {
    // posts in the last 14 days
    $where .= " AND post_date > '" . date('Y-m-d', strtotime('-14 days')) . "'";
    return $where;
}
?>
<div class="right-panel">
  <?php if(is_page() || is_single() ) { ?>
  <div class="search">
    <?php if( !(is_single()) ) { ?>
    <p style="display:none;">part of EDGAR Middle East</p>
    <?php } ?>
    <form onsubmit="return chkSearch();"  method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input name="s" type="text" id="s" value="" placeholder="<?php esc_attr_e( '', 'twentyeleven' ); ?>" />
      <input type="submit" name="submit" id="searchsubmit" value="search" />
    </form>
  </div>
  <?php } ?>

  <div class="editors-pick">
    <h4>Editor's Pick</h4>
    <div class="editors-container">
      <div class="editors-sliding">
        <?php
				wp_reset_query();
				$my_query = new WP_Query( 'pagename=editors-pick' );
				while ($my_query->have_posts()) : $my_query->the_post();	
				
				
				$order1 = get_field('order_1');
				$order2 = get_field('order_2');
				$order3 = get_field('order_3');
				$order4 = get_field('order_4');
				endwhile;
				
				wp_reset_query();
				$my_query = new WP_Query( 'pagename=editors-pick' );
				while ($my_query->have_posts()) : $my_query->the_post();	
				
				if( $order1 == 1 ) {
					$post_object = get_field('editors_pick_post_1');
				}else if ( $order1 == 2)  {
					$post_object = get_field('editors_pick_post_2');
				}else if ( $order1 == 3)  {
					$post_object = get_field('editors_pick_post_3');
				}else if ( $order1 == 4)  {
					$post_object = get_field('editors_pick_post_4');
				}
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                    ?>
        <div class="editors-sliding-content">
          <div class="editor-img"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php the_field('post_sub_header'); ?>
          </div>
        </div>
        <?php // wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php
			endwhile;
			 ?>
        <?php
				wp_reset_query();
				$my_query = new WP_Query( 'pagename=editors-pick' );
				while ($my_query->have_posts()) : $my_query->the_post();	
				if( $order2 == 1 ) {
					$post_object = get_field('editors_pick_post_1');
				}else if ( $order2 == 2)  {
					$post_object = get_field('editors_pick_post_2');
				}else if ( $order2 == 3)  {
					$post_object = get_field('editors_pick_post_3');
				}else if ( $order2 == 4)  {
					$post_object = get_field('editors_pick_post_4');
				}
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                    ?>
        <div class="editors-sliding-content">
          <div class="editor-img"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php the_field('post_sub_header'); ?>
          </div>
        </div>
        <?php // wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php
			endwhile;
			 ?>
        <?php
				wp_reset_query();
				$my_query = new WP_Query( 'pagename=editors-pick' );
				while ($my_query->have_posts()) : $my_query->the_post();	
			 if( $order3 == 1 ) {
					$post_object = get_field('editors_pick_post_1');
				}else if ( $order3 == 2)  {
					$post_object = get_field('editors_pick_post_2');
				}else if ( $order3 == 3)  {
					$post_object = get_field('editors_pick_post_3');
				}else if ( $order3 == 4)  {
					$post_object = get_field('editors_pick_post_4');
				}
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                    ?>
        <div class="editors-sliding-content">
          <div class="editor-img"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php the_field('post_sub_header'); ?>
          </div>
        </div>
        <?php // wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php
				endwhile;
			 ?>
        <?php
				wp_reset_query();
				$my_query = new WP_Query( 'pagename=editors-pick' );
				while ($my_query->have_posts()) : $my_query->the_post();	
			if( $order4 == 1 ) {
					$post_object = get_field('editors_pick_post_1');
				}else if ( $order4 == 2)  {
					$post_object = get_field('editors_pick_post_2');
				}else if ( $order4 == 3)  {
					$post_object = get_field('editors_pick_post_3');
				}else if ( $order4 == 4)  {
					$post_object = get_field('editors_pick_post_4');
				}
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                    ?>
        <div class="editors-sliding-content">
          <div class="editor-img"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php the_field('post_sub_header'); ?>
          </div>
        </div>
        <?php // wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php
				endwhile;
			 ?>
      </div>
    </div>
  </div>

  <?php global $dfp_competition; ?>
  <?php if($dfp_competition):?>
      <div class="sidebar-ad">
          <!-- adunit-300x250 -->
          <div id='sidebar-300x250' style='width:300px; height:250px;'>
              <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('sidebar-300x250'); });
              </script>
          </div>
      </div>
  <?php endif;?>

  <?php
  
    $my_query = new WP_Query( 'pagename=subscribe-management' );
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="news-subscription">
    <h4>
      <?php the_field('tab_2_title'); ?>
    </h4>
    <div class="news-subscription-content">
      <?php // the_field('tab_2_content'); ?>
      <?php dynamic_sidebar('twitter'); ?>
    </div>
  </div>
  <?php endwhile; ?>
  <!--<div class="news-subscription" style="background:none !important;"><a href="http://edgardaily.com/competition/" target="_blank"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png"  style="opacity:1 !important;" /></a> </div>-->
  <?php  
	if ( is_category() )  { 
	
	$my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post();
	 ?>
  <?php if( get_field('before_banner_link')) { ?>
  <!--<div class="banner-insider"> <a href="<?php // the_field('before_banner_link'); ?>"><img src="<?php // the_field('before_banner_image'); ?>" alt=""></a> </div>-->
  <?php } elseif ( get_field('before_script_for_banner') ) { ?>
  <div class="banner-insider">
    <?php // the_field('before_script_for_banner'); ?>
    <!--<a href="http://edgardaily.com/competition/" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('before_script_for_banner'); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if ( get_field('after_banner_link_1') ) { ?>
  <div class="banner-insider"> <a href="<?php the_field('after_banner_link_1'); ?>"><img src="<?php the_field('after_banner_image_1'); ?>" alt=""></a> </div>
  <?php } elseif ( get_field('after_banner_script_1') ) { ?>
  <div class="banner-insider">
    <?php // the_field('after_banner_script_1'); ?>
    <!--<a href="#temp-content-1" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content-1" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('after_banner_script_1'); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if ( get_field('after_banner_link_2') ) { ?>
  <div class="banner-insider"> <a href="<?php the_field('after_banner_link_2'); ?>"><img src="<?php the_field('after_banner_image_2'); ?>" alt=""></a> </div>
  <?php } elseif ( get_field('after_banner_script_2') ) { ?>
  <div class="banner-insider">
    <?php // the_field('after_banner_script_2'); ?>
    <!--<a href="#temp-content-1" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content-1" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('after_banner_script_2'); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php endwhile;  } ?>
  <?php  
	if ( is_front_page() )  { 
	
	wp_reset_query();
	$my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <?php if( get_field('before_banner_link')) { ?>
  <div class="banner-insider"> <a href="<?php the_field('before_banner_link'); ?>"><img src="<?php the_field('before_banner_image'); ?>" alt=""></a> </div>
  <?php } else if ( get_field('before_script_for_banner') ) { ?>
  <div class="banner-insider">
    <?php // the_field('before_script_for_banner'); ?>
    <!--<a href="http://edgardaily.com/competition/" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('before_script_for_banner'); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if ( get_field('after_banner_link_1') ) { ?>
  <div class="banner-insider"> <a href="<?php the_field('after_banner_link_1'); ?>"><img src="<?php the_field('after_banner_image_1'); ?>" alt=""></a> </div>
  <?php } else if ( get_field('after_banner_script_1') ) { ?>
  <div class="banner-insider">
    <?php // the_field('after_banner_script_1'); ?>
    <!--<a href="#temp-content-1" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content-1" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php // the_field('after_banner_script_1'); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if ( get_field('after_banner_link_2') ) { ?>
  <div class="banner-insider"> <a href="<?php the_field('after_banner_link_2'); ?>"><img src="<?php the_field('after_banner_image_2'); ?>" alt=""></a> </div>
  <?php } else if ( get_field('after_banner_script_2') ) { ?>
  <div class="banner-insider">
    <?php // the_field('after_banner_script_1'); ?>
    <!--<a href="temp-content-2" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content-2" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('after_banner_script_2'); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php endwhile;  } ?>
  <span class="chk-height"></span>
  <div class="latest-stories-sticker">
    <?php if ( (is_category() )  ) { ?>
    <div class="tabs-container">
      <div class="tabs-controls">
        <ul>
          <li class="tab-list-1 active"><a href="javascript:void(0);">latest</a></li>
          <li class="tab-list-2"><a href="javascript:void(0);">popular</a></li>
          <li class="tab-list-3"><a href="javascript:void(0);">Videos</a></li>
        </ul>
      </div>
      <div class="tab-container">
        <div class="tab-content tab-info-1">
          <div class="right-side-stories">
            <div class="viewport">
              <ul class="overview">
                <?php 	
				wp_reset_query();
				$colored = 1;
			 	$my_query = new WP_Query('showposts=10&cat=-1&orderby=ID&order=DESC');
                 while ($my_query->have_posts()) : $my_query->the_post(); 
				  if ( $colored == 1 ) { $colored= -1;}
				 ?>
                <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
                  <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
                  <a href="<?php the_permalink(); ?>"><strong>
                  <?php the_title(); ?>
                  </strong> <span>
                  <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                  </span></a> </li>
                <?php $colored++; endwhile; ?>
              </ul>
            </div>
            <div class="tab-more"><a class="buttons next" href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
          </div>
        </div>
        <div class="tab-content tab-info-2">
          <div class="right-side-stories">
            <div class="viewport">
              <ul class="overview">
                <?php 	
		
			wp_reset_query();
				$colored = 1;
				
				
				add_filter( 'posts_where', 'filter_where' );
				$my_query = new WP_Query( 
array( 
'posts_per_page' => 10, 
'meta_key' => 'post_views_count', 
'orderby' => 'meta_value_num', 
'order' => 'DESC'  ) );
remove_filter( 'posts_where', 'filter_where' );
                 while ($my_query->have_posts()) : $my_query->the_post(); 
				  if ( $colored == 1 ) { $colored= -1;}
				 ?>
                <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
                  <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
                  <a href="<?php the_permalink(); ?>"><strong>
                  <?php the_title(); ?>
                  </strong> <span>
                  <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                  </span></a> </li>
                <?php $colored++; endwhile; ?>
              </ul>
            </div>
            <div class="tab-more"><a class="buttons next" href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
          </div>
        </div>
        <div class="tab-content tab-info-3">
          <div class="right-side-stories">
            <div class="viewport">
              <ul class="overview">
                <?php 
				$videostory = new WP_Query('showposts=10&cat=69&orderby=ID&order=DESC'); ?>
                <?php while ( $videostory->have_posts() ) : $videostory->the_post(); ?>
                <li>
                  <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
                  <a href="<?php the_permalink(); ?>"><strong>
                  <?php the_title(); ?>
                  </strong> <span>
                  <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                  </span></a> </li>
                <?php endwhile; ?>
              </ul>
              <a href="<?php echo(home_url('/category/video-category/')); ?>" class="video-link" style="display:none;">More Videos</a> </div>
            <div class="tab-more"><a class="buttons next" href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } else if( is_page() ) { ?>
    <div class="tabs-container home-tabs">
      <div class="tabs-controls">
        <ul>
          <li class="tab-list-1 active"><a href="javascript:void(0);">popular</a></li>
          <li class="tab-list-2"><a href="javascript:void(0);">videos</a></li>
        </ul>
      </div>
      <div class="tab-container">
        <div class="tab-content tab-info-1">
          <ul>
            <?php 	
		
			wp_reset_query();
				$colored = 1;
add_filter( 'posts_where', 'filter_where' );				
	$my_query = new WP_Query( 
array( 
'posts_per_page' => 10, 
'meta_key' => 'post_views_count', 
'orderby' => 'meta_value_num', 
'order' => 'DESC'  ) );
remove_filter( 'posts_where', 'filter_where' );				
//				$my_query = new WP_Query('showposts=10&cat=-69,-1&orderby=ID&order=DESC');
                 while ($my_query->have_posts()) : $my_query->the_post(); 
				 
				  if ( $colored == 1 ) { $colored= -1;}
				 ?>
            <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
              <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
              <a href="<?php the_permalink(); ?>"><strong>
              <?php the_title(); ?>
              </strong> <span>
              <?php myfieldcontent(10,get_field('post_sub_header')); ?>
              </span></a> </li>
            <?php $colored++; endwhile; ?>
          </ul>
          <div class="tab-more"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
        </div>
        <div class="tab-content tab-info-2">
          <ul>
            <?php 	
		
			wp_reset_query();
				$colored = 1;
				
				$my_query = new WP_Query('showposts=10&cat=69&orderby=ID&order=DESC');
                 while ($my_query->have_posts()) : $my_query->the_post(); 
				 
				  if ( $colored == 1 ) { $colored= -1;}
				 ?>
            <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
              <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
              <a href="<?php the_permalink(); ?>"><strong>
              <?php the_title(); ?>
              </strong> <span>
              <?php myfieldcontent(10,get_field('post_sub_header')); ?>
              </span></a> </li>
            <?php $colored++; endwhile; ?>
          </ul>
          <a href="<?php echo(home_url('/category/video-category/')); ?>" class="video-link">View All Videos</a>
          <div class="tab-more"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
    <?php } else if( is_single() ) {
		$postCategory = get_the_category($post->ID); 
		$postCategoryName = $postCategory[0]->cat_name;
		$postCategorySlug = $postCategory[0]->slug;
	?>
    <div class="tabs-container">
      <div class="tabs-controls">
        <ul>
          <li class="tab-list-1 active"><a href="javascript:void(0);">latest</a></li>
          <li class="tab-list-2"><a href="javascript:void(0);">popular</a></li>
          <li class="tab-list-3"><a href="javascript:void(0);">videos</a></li>
        </ul>
      </div>
      <div class="tab-container">
        <div class="tab-content tab-info-1">
          <div class="right-side-stories">
            <div class="viewport">
              <ul class="overview">
                <?php 
					$colored = 1;
				 		$recentposts = new WP_Query('showposts=-1&cat=-1&order=DESC');
						if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); 
						
						if ( $colored == 1 ) { $colored= -1;}
						
						?>
                <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
                  <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
                  <a href="<?php the_permalink(); ?>"><strong>
                  <?php the_title(); ?>
                  </strong> <span>
                  <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                  </span></a> </li>
                <?php $colored++; endwhile; endif; ?>
              </ul>
            </div>
            <div class="tab-more"><a class="buttons next" href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
          </div>
        </div>
        <div class="tab-content tab-info-2">
          <div class="right-side-stories">
            <div class="viewport">
              <ul class="overview">
                <?php $colored = 1;
				 
add_filter( 'posts_where', 'filter_where' );				 
	$my_query = new WP_Query( 
array( 
'posts_per_page' => -1, 
'meta_key' => 'post_views_count', 
'orderby' => 'meta_value_num', 
'order' => 'DESC'  ) );	
remove_filter( 'posts_where', 'filter_where' );		 
//				 		$recentposts = new WP_Query('showposts=5&cat='.$cat.'&order=DESC');
						if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); 
						if ( $colored == 1 ) { $colored= -1;}
						?>
                <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
                  <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
                  <a href="<?php the_permalink(); ?>"><strong>
                  <?php the_title(); ?>
                  </strong> <span>
                  <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                  </span></a> </li>
                <?php $colored++; endwhile; endif; ?>
              </ul>
            </div>
            <div class="tab-more"><a class="buttons next" href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
          </div>
        </div>
        <div class="tab-content tab-info-3">
          <div class="right-side-stories">
            <div class="viewport">
              <ul class="overview">
                <?php 
				 	$colored = 1;
				 		$recentposts = new WP_Query('showposts=-1&cat=69&order=DESC');
						if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); 
						if ( $colored == 1 ) { $colored= -1;}
						?>
                <li <?php if ( $colored == 0 ) { ?>class="colored" <?php } ?>>
                  <div class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></a></div>
                  <a href="<?php the_permalink(); ?>"><strong>
                  <?php the_title(); ?>
                  </strong> <span>
                  <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                  </span></a> </li>
                <?php $colored++; endwhile; endif; ?>
              </ul>
            </div>
            <a href="<?php echo(home_url('/category/video-category/')); ?>" class="video-link">View All Videos</a>
            <div class="tab-more"><a class="buttons next" href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/assets/images/tab-more-btn.jpg" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } 
	 if ( is_page('home') )  { 
	 
	 wp_reset_query();
	 $my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post();
		$aftet_banner_link2 = get_field('after_banner_link_2');
		$aftet_banner_image2 = get_field('after_banner_image_2');
		
		$aftet_banner_script2 = get_field('after_banner_script_2');
		
	 ?>
    <?php if ( get_field('after_banner_link_1') ) { ?>
    <div class="banner-insider"> <a href="<?php the_field('after_banner_link_1'); ?>"><img src="<?php the_field('after_banner_image_1'); ?>" alt=""></a> </div>
    <?php } else if ( get_field('after_banner_script_1') ) { ?>
    <div class="banner-insider">
      <?php // the_field('after_banner_script_1'); ?>
      <!--<a href="#temp-content-1" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
      <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
        <div id="temp-content-1" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
          <?php the_field('after_banner_script_1'); ?>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="article-container">
      <div class="cover-img">
        <?php wp_reset_query(); ?>
        <a href="#edgar-form" class="fancybox close-subscribe"><img src="<?php the_field('cover_photo'); ?>" alt=""></a> </div>
      <div class="pool">
        <?php get_poll();?>
      </div>
    </div>
    <?php if ( $aftet_banner_link2 ) { ?>
    <div class="banner-insider"> <a href="<?php echo($aftet_banner_link2); ?>"><img src="<?php echo($aftet_banner_image2); ?>" alt=""></a> </div>
    <?php } else if ( $aftet_banner_script2 ) { ?>
    <div class="banner-insider">
      <?php // the_field('after_banner_script_1'); ?>
      <!--<a href="#temp-content-2" class="fancybox"><img src="<?php // bloginfo('template_directory'); ?>/assets/images/ad-new-image.png" alt="" /></a>-->
      <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
        <div id="temp-content-2" style="float:left; width:428px; height:230px; background:#fff; padding:25px;"> <?php echo($aftet_banner_script2); ?> </div>
      </div>
    </div>
    <?php } ?>
    <?php endwhile;  
	
	} ?>
  </div>
</div>