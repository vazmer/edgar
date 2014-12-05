<div class="sidebar-scroll">
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
          <div class="editor-img" style="width:100%;"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php 
	if (strlen(get_field('post_sub_header')) > 65) {echo substr(get_field('post_sub_header'), 0, 65) . '...'; } else {the_field('post_sub_header');}			
?>
          </div>
        </div>
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
          <div class="editor-img" style="width:100%;"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php if (strlen(get_field('post_sub_header')) > 65) {echo substr(get_field('post_sub_header'), 0, 65) . '...'; } else {the_field('post_sub_header');}			 ?>
          </div>
        </div>
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
          <div class="editor-img" style="width:100%;"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php if (strlen(get_field('post_sub_header')) > 65) {echo substr(get_field('post_sub_header'), 0, 65) . '...'; } else {the_field('post_sub_header');}			?>
          </div>
        </div>
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
          <div class="editor-img" style="width:100%;"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a> </div>
          <div class="editors-content">
            <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h5>
            <?php if (strlen(get_field('post_sub_header')) > 65) {echo substr(get_field('post_sub_header'), 0, 65) . '...'; } else {the_field('post_sub_header');}			 ?>
          </div>
        </div>
        <?php
				endwhile;
			 ?>
      </div>
    </div>
  </div>
  
  <?php  $my_query = new WP_Query( 'pagename=subscribe-management' );
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="siderbar-container">
  <div class="news-subscription">
    <h4>
      <?php the_field('tab_2_title'); ?>
    </h4>
    <div class="news-subscription-content">
      <?php dynamic_sidebar('twitter'); ?>
    </div>
  </div>
  </div>
  <?php endwhile; ?>
  
  
  <?php  
	
	$my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post();
	 ?>
  <?php if( get_field('before_banner_link')) { ?>
  <div class="siderbar-container">
  <div class="banner-insider"> <a href="<?php the_field('before_banner_link'); ?>"><img src="<?php the_field('before_banner_image'); ?>" alt=""></a> </div></div>
  <?php } elseif ( get_field('before_script_for_banner') ) { ?>
  <div class="siderbar-container">
  <div class="banner-insider">

      <?php global $dfp_competition; ?>
      <?php if($dfp_competition):?>
          <!-- adunit-300x250 -->
          <div id='sidebar-300x250' style='width:300px; height:250px;'>
              <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('sidebar-300x250'); });
              </script>
          </div>
      <?php endif;?>

    <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('before_script_for_banner'); ?>
      </div>
    </div>
  </div>
  </div>
  <?php } ?>
  <?php if ( get_field('after_banner_link_1') ) { ?>
  <div class="siderbar-container">
  	<div class="banner-insider"> <a href="<?php the_field('after_banner_link_1'); ?>"><img src="<?php the_field('after_banner_image_1'); ?>" alt=""></a> </div>
  </div>
  <?php } elseif ( get_field('after_banner_script_1') ) { ?>
  <div class="siderbar-container">
  <div class="banner-insider">
      <?php global $dfp_competition; ?>
      <?php if($dfp_competition):?>
          <!-- adunit-300x250 -->
          <div id='sidebar-300x250' style='width:300px; height:250px;'>
              <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('sidebar-300x250'); });
              </script>
          </div>
      <?php endif;?>
    <!--<div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content-1" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('after_banner_script_1'); ?>
      </div>
    </div>-->
  </div>
  </a>
  <?php } ?>
  <?php if ( get_field('after_banner_link_2') ) { ?>
  <div class="siderbar-container">
	  <div class="banner-insider"> <a href="<?php the_field('after_banner_link_2'); ?>"><img src="<?php the_field('after_banner_image_2'); ?>" alt=""></a> </div>
  </div>
  <?php } elseif ( get_field('after_banner_script_2') ) { ?>
  <div class="siderbar-container">
  <div class="banner-insider">
    <?php // the_field('after_banner_script_2'); ?>
      <?php global $dfp_competition; ?>
      <?php if($dfp_competition):?>
          <!-- adunit-300x250 -->
          <div id='sidebar-300x250' style='width:300px; height:250px;'>
              <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('sidebar-300x250'); });
              </script>
          </div>
      <?php endif;?>
      <div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
      <div id="temp-content-1" style="float:left; width:428px; height:230px; background:#fff; padding:25px;">
        <?php the_field('after_banner_script_2'); ?>
      </div>
    </div>
  </div>
  </div>
  <?php }
	
   ?>
  <?php endwhile; ?>
  
  
  <div class="siderbar-container" style="float:left; width:100%; text-align:center;">
<!--  <div class="news-subscription" style="background:none !important;"> <a href="http://edgardaily.com/competition/" target="_blank"><img src="--><?php //bloginfo('template_directory'); ?><!--/assets/images/newsletter-img.jpg"  style="opacity:1 !important;" /></a> </div>-->
  </div>
  
  
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
            <div class="custom-scroller">
              <ul>
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
          </div>
        </div>
        <div class="tab-content tab-info-2">
          <div class="right-side-stories">
            <div class="custom-scroller">
              <ul>
                <?php 	
			wp_reset_query();
				$colored = 1;
				
				$my_query = new WP_Query( 
array( 
'posts_per_page' => 10, 
'meta_key' => 'post_views_count', 
'orderby' => 'meta_value_num', 
'order' => 'DESC'  ) );
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
          </div>
        </div>
        <div class="tab-content tab-info-3">
          <div class="right-side-stories">
            <div class="custom-scroller">
              <ul>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php if ( is_page('home') ) { ?>
    <div class="article-container">
    	<div class="siderbar-container">  
        	<div class="cover-img">
				<?php wp_reset_query(); ?>
                <a href="<?php echo(home_url('/magazine-subscriber/'))?>"><img src="<?php the_field('cover_photo'); ?>" alt=""></a>
            </div>
		</div>
        <div class="siderbar-container poll-sidebar">  
			<div class="pool">
            	<?php get_poll();?>
			</div>
		</div>
    </div>
</div>  
  <?php } ?>
  
</div>