<?php $options = get_option( 'sample_theme_options' ); ?>
<div class="decoration"></div>
<p class="center-text" style="float:left;"><?php echo $options['copyright'] ?></p>
</div>
</div>
<?php
	$parentCategory[0] = get_category(2);
	$parentCategoryName[0] = $parentCategory[0]->name;
	$parentCategorySlug[0] = $parentCategory[0]->slug;
	$parentCategory[1] = get_category(3);
	$parentCategoryName[1] = $parentCategory[1]->name;
	$parentCategorySlug[1] = $parentCategory[1]->slug;
	$parentCategory[2] = get_category(4);
	$parentCategoryName[2] = $parentCategory[2]->name;
	$parentCategorySlug[2] = $parentCategory[2]->slug;
	$parentCategory[3] = get_category(5);
	$parentCategoryName[3] = $parentCategory[3]->name;
	$parentCategorySlug[3] = $parentCategory[3]->slug;
	$parentCategory[4] = get_category(6);
	$parentCategoryName[4] = $parentCategory[4]->name;
	$parentCategorySlug[4] = $parentCategory[4]->slug;
?>
<div class="page-sidebar">
  <div class="page-sidebar-scroll">
    <div class="sidebar-decoration"></div>
    <div class="clear"></div>
    <div class="main-nav left-menu">
      <ul>
        <li class="home-menu"><a href="<?php echo(home_url('/home/')); ?>">Home</a></li>
        <li class="to-know-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[0])?>"><?php echo($parentCategoryName[0]); ?></a>
          <ul>
            <?php wp_list_categories('child_of=2'); ?>
          </ul>
        </li>
        <li class="to-buy-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[1]); ?>"><?php echo($parentCategoryName[1]); ?></a>
          <ul>
            <?php wp_list_categories('child_of=3'); ?>
          </ul>
        </li>
      </ul>
    </div>
    <div class="main-nav right-menu">
      <ul>
        <li class="to-do-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[2])?>"><?php echo($parentCategoryName[2]); ?></a>
          <ul>
            <?php wp_list_categories('child_of=4'); ?>
          </ul>
        </li>
        <li class="to-see-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[4]) ?>"><?php echo($parentCategoryName[4]); ?></a>
          <ul>
            <?php wp_list_categories('child_of=6'); ?>
          </ul>
        </li>
        <li class="to-go-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[3]) ?>"><?php echo($parentCategoryName[3]); ?></a>
          <ul>
            <?php wp_list_categories('child_of=5'); ?>
          </ul>
        </li>
      </ul>
    </div>
    <div class="page-link">
      <ul>
        <li><a href="<?php echo(home_url('/contacting-us/')); ?>">Contact Us</a></li>
        <li><a href="<?php echo(home_url('/about-us/')); ?>">About Us</a></li>
        <li><a href="<?php echo(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
        <li><a href="<?php echo(home_url('/terms-and-conditions/')); ?>">Terms and Conditions</a></li>
      </ul>
    </div>
    <?php 
		wp_reset_query();
		$my_query = new WP_Query('pagename=social-management');
     	while ($my_query->have_posts()) : $my_query->the_post();
         	$fb_link = get_field('fb_link');
			$tt_link = get_field('tt_link');
			$in_link = get_field('in_link');
         	$email_link = get_field('email_link');
			
			$fb_icon = get_field('fb_mobile_icon');
			$tt_icon = get_field('tt_mobile_icon');
			$in_icon = get_field('in_mobile_icon');
         	$email_icon = get_field('email_mobile_icon');
			
			?>
    <div class="mobile-social">
      <ul>
        <li><a href="<?php echo ($fb_link); ?>" target="_blank"><img src="<?php echo($fb_icon); ?>" alt="" /></a></li>
        <li><a href="<?php echo ($tt_link); ?>" target="_blank"><img src="<?php echo($tt_icon); ?>" alt="" /></a></li>
        <li><a href="<?php echo ($in_link); ?>" target="_blank"><img src="<?php echo($in_icon); ?>" alt="" /></a></li>
        <li><a href="<?php echo ($email_link); ?>" target="_blank"><img src="<?php echo($email_icon); ?>" alt="" /></a></li>
      </ul>
    </div>
    <?php endwhile; ?>
    <div class="clear"></div>
  </div>
</div>
<div class="mobile-sidebar-content">
    <?php include('mobile-sidebar.php');?>
</div>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<link href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script>
<?php if ( is_page('home') ) { ?>
	
	$('#slider').height($('#slider').width()*0.80);	
	if ( $('#slider').width() > 600 ) {
		$('#slider').height($('#slider').width()*0.65);	
	}
	
	var articleWidth = $(window).width();
	var articleHeight = $(window).height();
	
	if ( articleWidth > articleHeight ){
		articleWidth *= 0.5;
		$('.article-wrapper').css("height",articleWidth);	
		$('.article-image').height($('.article-image').width()*0.65);	
	}	
	
	<?php } else if ( is_category() ) { ?>
	
	var articleWidth = $(window).width();
	var articleHeight = $(window).height();
	
	if ( articleWidth > articleHeight ){
		articleWidth *= 0.5;
		$('.article-wrapper').css("height",articleWidth);			
		$('.article-image').height($('.article-image').width()*0.65);		
		$('.top-story-category').css("height",articleWidth*1.5);		
	}
	
	<?php } else { ?>
	
	$('.post-content').find('p').find('iframe').width($('.left-panel').width);
	$('.post-content').find('p').find('iframe').height($('.post-content').find('iframe').width()*0.8);
	
	<?php } ?>
	
	jQuery(document).ready(function() {
	$('.editors-sliding').slidesjs({
			  play: {
			  active: false,
			  effect: "slide",
			  interval: 3000,
			  auto: false,
			  swap: true,
			  pauseOnHover: false,
			  restartDelay: 2500
			}
		  });
		  
		$('.sliding-article').slidesjs({
			  play: {
			  active: false,
			  effect: "slide",
			  interval: 5000,
			  auto: true,
			  swap: true,
			  pauseOnHover: false,
			  restartDelay: 4500
			}
		  });
	});
	
	var editorHeight = $(window).width();
	if ( $(window).width() > $(window).height() ) {
		editorHeight /= 1.3;
	}
		
	$('.editors-pick').css("width",editorHeight);
	$('.editors-sliding').css("height",editorHeight);
	$('.editors-sliding').find('.slidesjs-container').css("height",editorHeight*0.5);
	$('.slidesjs-container').find('.slidesjs-control').css("height",editorHeight*0.5);
	$('.editors-pick').css("height",editorHeight*1);		
	$('.slidesjs-container').css("height",editorHeight);			
	
	if ( $(window).width() > $(window).height() ) {
		$('.editor-img').css("height",editorHeight*0.8);
	}else{
		$('.editor-img').css("height",editorHeight*0.6350978593);
	}
	
	$( ".tab-info-2" ).fadeOut( "fast");
		
		$( ".tab-info-3" ).fadeOut( "fast");
		$( ".tab-info-1" ).fadeIn( "fast");
		$(".tab-list-1 a").click(function(){
			
			$(".tab-list-2").removeClass("active");
			
			$(".tab-list-3").removeClass("active");
			$(".tab-list-1").addClass("active");
			$( ".tab-info-2" ).fadeOut( "fast");
			
			$( ".tab-info-3" ).fadeOut( "fast");
			$( ".tab-info-1" ).fadeIn( "slow");
		  
		});
		
		$(".tab-list-2 a").click(function(){
			
			$(".tab-list-1").removeClass("active");
			
			$(".tab-list-3").removeClass("active");
			$(".tab-list-2").addClass("active");
			$( ".tab-info-1" ).fadeOut( "fast");
			
			$( ".tab-info-3" ).fadeOut( "fast");
			$( ".tab-info-2" ).fadeIn( "slow");
		});
		
		$(".tab-list-3 a").click(function(){
			
			$(".tab-list-1").removeClass("active");
			$(".tab-list-2").removeClass("active");
			
			$(".tab-list-3").addClass("active");
			$( ".tab-info-1" ).fadeOut( "fast");
			$( ".tab-info-2" ).fadeOut( "fast");
			
			$( ".tab-info-3" ).fadeIn( "slow");
		});
		
		$(".mobile-sidebar").click(function(){
			
			$('.mobile-sidebar-content').toggleClass('show');			
		});
		
		$(".show-sidebar").click(function(){
			
			$('.mobile-sidebar-content').removeClass('show');			
		});
		
		$(".hide-sidebar").click(function(){
			
			$('.mobile-sidebar-content').removeClass('show');			
		});
		
		$('.mobile-sidebar-content').css("height",$(window).innerHeight());
		$('.page-content-area').css("height",$(window).innerHeight());
	
function pageResize(){
	
	<?php if ( is_page('home') ) { ?>
	
	$('#slider').height($('#slider').width()*0.80);	
	if ( $('#slider').width() > 600 ) {
		$('#slider').height($('#slider').width()*0.65);	
	}
	
	var articleWidth = $(window).width();
	var articleHeight = $(window).height();
	
	if ( articleWidth > articleHeight ){
		articleWidth *= 0.5;
		$('.article-wrapper').css("height",articleWidth);	
		$('.article-image').height($('.article-image').width()*0.65);		
	}else{
		$('.article-wrapper').css("height","auto");	
		$('.article-image').height("height","auto");
	}	
	
	<?php } else if ( is_category() ) { ?>
	var articleWidth = $(window).width();
	var articleHeight = $(window).height();
	
	if ( articleWidth > articleHeight ){
		articleWidth *= 0.5;
		$('.article-wrapper').css("height",articleWidth);	
		$('.article-image').height($('.article-image').width()*0.65);
		$('.top-story-category').css("height",articleWidth*1.5);
	}else{
		$('.top-story-category').css("height",articleWidth);
	}	
	
	<?php } else { ?>
	
	$('.post-content').find('p').find('iframe').width($('.left-panel').width);
	$('.post-content').find('p').find('iframe').height($('.post-content').find('iframe').width()*0.8);
	
	<?php } ?>
	
	var editorHeight = $(window).width();
	if ( $(window).width() > $(window).height() ) {
		editorHeight /= 1.3;
	}
		
	$('.editors-pick').css("width",editorHeight);
	$('.editors-sliding').css("height",editorHeight);
	$('.editors-sliding').find('.slidesjs-container').css("height",editorHeight*0.5);
	$('.slidesjs-container').find('.slidesjs-control').css("height",editorHeight*0.5);
	$('.editors-pick').css("height",editorHeight*1);		
	$('.slidesjs-container').css("height",editorHeight);			
	
	if ( $(window).width() > $(window).height() ) {
		$('.editor-img').css("height",editorHeight*0.8);
	}else{
		$('.editor-img').css("height",editorHeight*0.6350978593);
	}
	
	$('.mobile-sidebar-content').css("height",$(window).innerHeight());
	$('.page-content-area').css("height",$(window).innerHeight());
}
</script>
<?php 
	if ($options['google_analytics'])
	{
		echo $options['google_analytics']; 
	} 
?>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
</body></html>