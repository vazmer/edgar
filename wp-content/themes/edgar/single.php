<?php 
	require_once 'mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();
	
	if ( $deviceType == "computer" || $deviceType == "tablet" ) {
	get_header(); 
 setPostViews(get_the_ID()); 
	$categories = get_the_category( $id );
	$category_id = $categories[0]->cat_ID;
	$parentobj = get_category($category_id);
	
	$postCategoryName = $categories[0]->cat_name;
	$postCategorySlug = $categories[0]->slug;
	
	if ( $category_id < 7 ) {
		$postCategoryName = $categories[1]->cat_name;
		$postCategorySlug = $categories[1]->slug;
		$parentobj = $categories[0]->cat_ID;
		
//		$postParent_name = get_cat_name($parentobj);
	
	}
	$ParentCatId = $parentobj->parent;
	
	$postParent_name = get_category($ParentCatId);
	$postParent_name = $postParent_name->cat_name;
	$postParent_slug = $postParent_name->slug;
	
	if ( $pageCategory == 2 || $ParentCatId == 2 || $category_id == 2) { 
		$category_name = 'to-know';
	}else if (  $pageCategory == 4 || $ParentCatId == 4 || $category_id == 4) { 
		$category_name = 'to-do';
	}else if (  $pageCategory == 5 || $ParentCatId == 5 || $category_id == 5) { 
		$category_name = 'to-go';
	}else if (  $pageCategory == 3 || $ParentCatId == 3 || $category_id == 3) { 
		$category_name = 'to-buy';
	}else if (  $pageCategory == 6 || $ParentCatId == 6 || $category_id == 6) { 
		$category_name = 'to-see';
	}
	if ( $category_id < 7 ) {
		
		$postParent_name = get_cat_name($parentobj);
	
	}	
?>
<div class="main-wrapper <?php echo($category_name); ?>-page">
<div class="content-wrapper">
    <div class="content-container">
        <div class="part-txt">
            <p>part of EDGAR Middle East</p>
        </div>
        <div class="content-middle">
      <div class="breadcrum"> <a href="<?php echo(home_url());?>">Home</a>
        <label>&gt;</label>
        <a href="<?php echo(home_url('/category/').$category_name);?>"><?php echo($postParent_name);?></a>
        <label>&gt;</label>
        <a href="<?php echo(home_url('/category/').$category_name.'/'.$postCategorySlug);?>"><?php echo($postCategoryName);?></a>
        <?php 
		  			wp_reset_query();
		  ?>
        <?php						
						$childCategory = get_the_category($post->ID);											
						$childCategoryID = $childCategory[3]->cat_ID;
						$childCategoryName = $childCategory[3]->name;
						$childCategorySlug = $childCategory[3]->slug;
						
						if ( ($childCategoryID == 2) || ($childCategoryID == 3) || ($childCategoryID == 4) || ($childCategoryID == 5) || ($childCategoryID == 6) || ($childCategoryID == "") ) { 
						//continue;						
						}
						else{
						?>
        <div class="categoryList"> <strong>Also in :</strong><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName);?></a> </div>
        <?php	}
					?>
      </div>
      <div class="article-container">
        <div class="left-panel">
          <div class="page-heading main-article">
            <h1>
              <?php the_title(); ?>
            </h1>
            <?php the_field('post_sub_header'); ?>
            <div class="article-author">By
              <?php if ( get_field('author_name') ) { the_field('author_name'); } else { the_author(); } ?>
            </div>
            <div class="article-date">
              <?php the_time('F j, Y'); ?>
            </div>
            <div class="post-sharing"> <?php echo( do_shortcode('[ssba]') ); ?> </div>
          </div>
          <div class="top-article single-content">
            <?php if ( !(in_category(69)) ) { ?>
            <div class="article-banner"> <img src="<?php the_field('large_image'); ?>" alt=""> </div>
            <?php if ( get_field('image_caption') ) { ?>
            <div class="image-caption"><span>
              <?php the_field('image_caption'); ?>
              </span></div>
            <?php } ?>
            <?php } ?>
            <div class="post-content">
              <?php  the_content(); ?>
              
              <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '' ), 'after' => '</div>' ) ); ?>
              
            </div>
            <div class="comment-container">
              <div class="comment-article">
                <div class="likes">
                  <?php if(function_exists('like_counter_p')) { like_counter_p('Likes'); } ?>
                </div>
                <div class="post-sharing post-sharing-bottom">
                  <?php mashsharer(); ?>
                </div>
              </div>
              <div class="article-comment">
                <?php //comments_template(); ?>
              <?php  echo do_shortcode('[fbcomments width="691" count="off" num="10" countmsg="wonderful comments!"]'); ?>
              </div>
              
            </div>
          </div>
          <div class="similar-stories">
            <h4>Similar Stories</h4>
            <div class="tab-content">
              <?php getRelatedPosts(); ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
    </div>
  
  <!-- Content Container End--> 
  
</div>
<?php get_footer(); 
	}
	else {
		
		include("mobile-header.php");
		
		
	$my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post();
	
		$before_banner_link = get_field('before_banner_link');
		$before_banner_image = get_field('before_banner_image');
		$before_script_for_banner = get_field('before_script_for_banner');
	  
	endwhile; 
	
	wp_reset_query();
		
	setPostViews(get_the_ID()); 
	$categories = get_the_category( $id );
	$category_id = $categories[0]->cat_ID;
	$parentobj = get_category($category_id);
	
	$postCategoryName = $categories[0]->cat_name;
	$postCategorySlug = $categories[0]->slug;
	
	if ( $category_id < 7 ) {
		$postCategoryName = $categories[1]->cat_name;
		$postCategorySlug = $categories[1]->slug;
		$parentobj = $categories[0]->cat_ID;
		
	}
	$ParentCatId = $parentobj->parent;
	
	$postParent_name = get_category($ParentCatId);
	$postParent_name = $postParent_name->cat_name;
	$postParent_slug = $postParent_name->slug;
	
	if ( $pageCategory == 2 || $ParentCatId == 2 || $category_id == 2) { 
		$category_name = 'to-know';
	}else if (  $pageCategory == 4 || $ParentCatId == 4 || $category_id == 4) { 
		$category_name = 'to-do';
	}else if (  $pageCategory == 5 || $ParentCatId == 5 || $category_id == 5) { 
		$category_name = 'to-go';
	}else if (  $pageCategory == 3 || $ParentCatId == 3 || $category_id == 3) { 
		$category_name = 'to-buy';
	}else if (  $pageCategory == 6 || $ParentCatId == 6 || $category_id == 6) { 
		$category_name = 'to-see';
	}
	if ( $category_id < 7 ) {
		
		$postParent_name = get_cat_name($parentobj);
	
	}	
		?>
<div class="<?php echo($category_name); ?>-page">
  <div class="left-panel">
    <div class="breadcrum"> <a href="<?php echo(home_url());?>">Home</a>
      <label>&gt;</label>
      <a href="<?php echo(home_url('/category/').$category_name);?>"><?php echo($postParent_name);?></a>
      <label>&gt;</label>
      <a href="<?php echo(home_url('/category/').$category_name.'/'.$postCategorySlug);?>"><?php echo($postCategoryName);?></a>
      <?php 
		  			wp_reset_query();
		  ?>
      <?php						
						$childCategory = get_the_category($post->ID);											
						$childCategoryID = $childCategory[3]->cat_ID;
						$childCategoryName = $childCategory[3]->name;
						$childCategorySlug = $childCategory[3]->slug;
						
						if ( ($childCategoryID == 2) || ($childCategoryID == 3) || ($childCategoryID == 4) || ($childCategoryID == 5) || ($childCategoryID == 6) || ($childCategoryID == "") ) { 
						//continue;						
						}
						else{
						?>
      <div class="categoryList"> <strong>Also in :</strong><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName);?></a> </div>
      <?php	}
					?>
    </div>
    <div class="page-heading main-article">
      <h1>
        <?php the_title(); ?>
      </h1>
      <?php the_field('post_sub_header'); ?>
      <div class="article-author">By
        <?php if ( get_field('author_name') ) { the_field('author_name'); } else { the_author(); } ?>
      </div>
      <div class="article-date">
        <?php the_time('F j, Y'); ?>
      </div>
      <div class="post-sharing"> <?php echo( do_shortcode('[ssba]') ); ?> </div>
    </div>
    <div class="top-article single-content">
      <?php if ( !(in_category(69)) ) { ?>
      <div class="article-banner"> <img src="<?php the_field('large_image'); ?>" alt=""> </div>
      <?php if ( get_field('image_caption') ) { ?>
      <div class="image-caption"><span>
        <?php the_field('image_caption'); ?>
        </span></div>
      <?php } ?>
      <?php } ?>
      <div class="post-content">
        <?php wp_reset_query(); the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '' ), 'after' => '</div>' ) ); ?>        
      </div>

        <div class="similar-stories mobile-stories">
            <h4>Similar Stories</h4>
            <div class="tab-content">
                <?php getRelatedMobilePosts(); ?>
            </div>
        </div>

        <?php if( $before_banner_link ) { ?>
            <div class="siderbar-container content-banner-insider">
                <div class="banner-insider"> <a href="<?php echo($before_banner_link); ?>"><img src="<?php echo($before_banner_image); ?>" alt=""></a> </div></div>
        <?php } elseif ( $before_script_for_banner ) { ?>

            <?php global $dfp_competition; ?>
            <?php if($dfp_competition):?>
                <div class="siderbar-container content-banner-insider">
                    <!-- adunit-300x250 -->
                    <div id='sidebar-300x250' style='width:300px; height:250px;'>
                        <script type='text/javascript'>
                            googletag.cmd.push(function() { googletag.display('sidebar-300x250>'); });
                        </script>
                    </div>
                    <?php $dfp_banner_count++;?>
                </div>
            <?php endif;?>

        <?php } 	?>

      <div class="comment-container">
        <div class="comment-article">
        	<div class="likes">
            	<?php if(function_exists('like_counter_p')) { like_counter_p('Likes'); } ?>
			</div>
          <div class="post-sharing post-sharing-bottom">
            <?php mashsharer(); ?>
          </div>
        </div>
        <div class="article-comment">
          <?php // comments_template(); ?>
        </div>
        <?php echo do_shortcode('[fbcomments width="691" count="off" num="10" mobile="true" countmsg="wonderful comments!"]'); ?>
      </div>

    </div>
  </div>
</div>
<?php		include ("mobile-footer.php");	
	}
?>