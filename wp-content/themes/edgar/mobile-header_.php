<!DOCTYPE html>
<head>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Page Title -->
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?></title>

<!-- Stylesheet Load -->
<link href="<?php bloginfo('template_directory'); ?>/styles/style.css"				    rel="stylesheet" 	type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/styles/framework-style.css" 		rel="stylesheet" 	type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/styles/framework.css" 			  	rel="stylesheet" 	type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/styles/icons.css"				    rel="stylesheet" 	type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/styles/retina.css" 				    rel="stylesheet" 	type="text/css" 	media="only screen and (-webkit-min-device-pixel-ratio: 2)" />

<link rel='stylesheet' id='mvp-style-css'  href='<?php bloginfo('template_directory'); ?>/styles/style7e2e.css?ver=3.8.1' type='text/css' media='all' />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_144.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_72.png">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_57.png">

<!--Page Scripts Load -->
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery-ui-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/contact.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/swipe.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/swipebox.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/colorbox.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/twitter.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/retina.js"	type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/custom.js"	type="text/javascript"></script>
<style>
body {
		/* background:#000; */
		background:url(<?php bloginfo('template_directory');
?>/assets/images/main-nav-bg.jpg);
}
.web-banner {
/*background:url(<?php bloginfo('template_directory'); ?>/assets/images/web-banner.png) no-repeat fixed center top;*/
	}
<?php $my_query = new WP_Query('pagename=social-management');
 while ($my_query->have_posts()) : $my_query->the_post();
 $fb_link = get_field('fb_link');
 $tt_link = get_field('tt_link');
 $in_link = get_field('in_link');
 $email_link = get_field('email_link');
 $fb_icon = get_field('fb_icon');
 $tt_icon = get_field('tt_icon');
 $in_icon = get_field('in_icon');
 $email_icon = get_field('email_icon');
 ?>  .to-buy-container ul li.fb-icon a {
 background:url(<?php echo($fb_icon);
?>) no-repeat left top;
}
.to-buy-container ul li.fb-icon:hover a {
 background:url(<?php echo($fb_icon);
?>) no-repeat left bottom;
}
.to-buy-container ul li.tt-icon a {
 background:url(<?php echo($tt_icon);
?>) no-repeat left top;
}
.to-buy-container ul li.tt-icon:hover a {
 background:url(<?php echo($tt_icon);
?>) no-repeat left bottom;
}
.to-buy-container ul li.in-icon a {
 background:url(<?php echo($in_icon);
?>) no-repeat left top;
}
.to-buy-container ul li.in-icon:hover a {
 background:url(<?php echo($in_icon);
?>) no-repeat left bottom;
}
.to-buy-container ul li.email-icon a {
 background:url(<?php echo($email_icon);
?>) no-repeat left top;
}
.to-buy-container ul li.email-icon:hover a {
 background:url(<?php echo($email_icon);
?>) no-repeat left bottom;
}
 <?php endwhile;
?>  <?php $my_query = new WP_Query('pagename=category-info');
 while ($my_query->have_posts()) : $my_query->the_post();
 while( has_sub_field('category_info') ):
 $category_name_info = get_sub_field('category_name_info');
 $category_color_info = get_sub_field('category_color_info');
 if ( $category_name_info == 2 ) {
?>  .to-know-page blockquote {
 border-left:3px solid <?php echo($category_color_info);
?>;
 border-right:3px solid <?php echo($category_color_info);
?>;
}
 .to-know-page blockquote > p:before, .to-know-page blockquote > p:after, .to-know-page .post-content li a, .to-know-page .post-content p a, .to-know-page .post-content a {
 color:<?php echo($category_color_info);
?>;
}
 .to-know-page .top-stories strong {
 color:<?php echo($category_color_info);
?>;
}
 .to-know-menu .sub-menu-detail {
 border-bottom:3px solid <?php echo($category_color_info);
?>;
}
 .to-know-page h1, .to-know-page .article-comment h3, .to-know-page .commentmetadata a {
 color:<?php echo($category_color_info);
?>;
}
 .to-know-page .breadcrum ul li {
 color:<?php echo($category_color_info);
?>;
 font-weight:bold;
}
 .to-know-page .top-article .article-wrapper h2 a:hover, .to-know-page .article-wrapper h2 a:hover, .to-know-page .tab-content ul li strong a:hover, .to-know-page .editors-content h5 a:hover, .to-know-page .related-articles strong a:hover, .to-know-page .tab-content ul li span a:hover p, .to-know-page .tab-content ul li a:hover strong, .to-know-page .tab-content ul li a:hover span p, .to-know-page .similar-stories .tab-content ul li a:hover strong, .to-know-page .similar-stories .tab-content ul li a:hover span p, .to-know-page .related-articles-content a:hover span p, .to-know-page .related-articles-content a:hover strong {
 color:<?php echo($category_color_info);
?>;
}
 .main-nav ul li.to-know-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
 background:url("<?php the_sub_field('category_hover_image');?>") no-repeat right 11px !important;
}
 .main-nav ul li.to-know-menu .menu-more a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-know-menu:hover .menu-block:hover, .main-nav ul li.to-know-menu:hover .menu-block:hover a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-know-menu ul li a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-know-wrapper h3 {
 background:<?php echo($category_color_info);
?> !important;
}
 .to-know-page .tab-content ul li:hover {
/* background:<?php echo($category_color_info); ?> !important;	 */
			}
 .footer-block.to-know-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-know-wrapper h2 a:hover, .to-know-wrapper .top-stories strong a {
 color:<?php echo($category_color_info);
?> !important;
}
 <?php
}
else if ( $category_name_info == 4 ) {
?>  .to-do-page blockquote {
 border-left:3px solid <?php echo($category_color_info);
?>;
 border-right:3px solid <?php echo($category_color_info);
?>;
}
 .to-do-page blockquote > p:before, .to-do-page blockquote > p:after, .to-do-page .post-content li a, .to-do-page .post-content p a, .to-do-page .post-content a {
 color:<?php echo($category_color_info);
?>;
}
 .to-do-page .top-stories strong {
 color:<?php echo($category_color_info);
?>;
}
 .to-do-menu .sub-menu-detail {
 border-bottom:3px solid <?php echo($category_color_info);
?>;
}
 .to-do-page h1, .to-do-page .article-comment h3, .to-do-page .commentmetadata a {
 color:<?php echo($category_color_info);
?>;
}
 .to-do-page .breadcrum ul li {
 color:<?php echo($category_color_info);
?>;
 font-weight:bold;
}
 .to-do-page .top-article .article-wrapper h2 a:hover, .to-do-page .article-wrapper h2 a:hover, .to-do-page .tab-content ul li strong a:hover, .to-do-page .editors-content h5 a:hover, .to-do-page .related-articles strong a:hover, .to-do-page .tab-content ul li span a:hover p, .to-do-page .tab-content ul li a:hover strong, .to-do-page .tab-content ul li a:hover span p, .to-do-page .similar-stories .tab-content ul li a:hover strong, .to-do-page .similar-stories .tab-content ul li a:hover span p, .to-do-page .related-articles-content a:hover span p, .to-do-page .related-articles-content a:hover strong {
 color:<?php echo($category_color_info);
?>;
}
 .main-nav ul li.to-do-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
 background:url("<?php the_sub_field('category_hover_image');?>") no-repeat right 11px !important;
}
 .main-nav ul li.to-do-menu .menu-more a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-do-menu:hover .menu-block:hover, .main-nav ul li.to-do-menu:hover .menu-block:hover a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-do-menu ul li a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-do-wrapper h3 {
 background:<?php echo($category_color_info);
?> !important;
}
 .to-do-page .tab-content ul li:hover {
/* background:<?php echo($category_color_info); ?> !important;	 */
			}
 .footer-block.to-do-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-do-wrapper h2 a:hover, .to-do-wrapper .top-stories strong a {
 color:<?php echo($category_color_info);
?> !important;
}
 <?php
}
else if ( $category_name_info == 3 ) {
?>  .to-buy-page blockquote {
 border-left:3px solid <?php echo($category_color_info);
?>;
 border-left:3px solid <?php echo($category_color_info);
?>;
}
 .to-buy-page blockquote > p:before, .to-buy-page blockquote > p:after, .to-buy-page .post-content li a, .to-buy-page .post-content p a, .to-buy-page .post-content a {
 color:<?php echo($category_color_info);
?>;
}
 .to-buy-page .top-stories strong {
 color:<?php echo($category_color_info);
?>;
}
 .to-buy-menu .sub-menu-detail {
 border-bottom:3px solid <?php echo($category_color_info);
?>;
}
 .to-buy-page h1, .to-buy-page .article-comment h3, .to-buy-page .commentmetadata a {
 color:<?php echo($category_color_info);
?>;
}
 .to-buy-page .breadcrum ul li {
 color:<?php echo($category_color_info);
?>;
 font-weight:bold;
}
 .to-buy-page .top-article .article-wrapper h2 a:hover, .to-buy-page .article-wrapper h2 a:hover, .to-buy-page .tab-content ul li strong a:hover, .to-buy-page .editors-content h5 a:hover, .to-buy-page .related-articles strong a:hover, .to-buy-page .tab-content ul li span a:hover p, .to-buy-page .tab-content ul li a:hover strong, .to-buy-page .tab-content ul li a:hover span p, .to-buy-page .similar-stories .tab-content ul li a:hover strong, .to-buy-page .similar-stories .tab-content ul li a:hover span p, .to-buy-page .related-articles-content a:hover span p, .to-buy-page .related-articles-content a:hover strong {
 color:<?php echo($category_color_info);
?>;
}
 .main-nav ul li.to-buy-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
 background:url("<?php the_sub_field('category_hover_image');?>") no-repeat right 11px !important;
}
 .main-nav ul li.to-buy-menu .menu-more a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-buy-menu:hover .menu-block:hover, .main-nav ul li.to-buy-menu:hover .menu-block:hover a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-buy-menu ul li a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-buy-wrapper h3 {
 background:<?php echo($category_color_info);
?> !important;
}
 .to-buy-page .tab-content ul li:hover {
/* background:<?php echo($category_color_info); ?> !important;	 */
			}
 .footer-block.to-buy-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-buy-wrapper h2 a:hover, .to-buy-wrapper .top-stories strong a {
 color:<?php echo($category_color_info);
?> !important;
}
 <?php
}
else if ( $category_name_info == 5 ) {
?>  .to-go-page blockquote {
 border-left:3px solid <?php echo($category_color_info);
?>;
 border-left:3px solid <?php echo($category_color_info);
?>;
}
 .to-go-page blockquote > p:before, .to-go-page blockquote > p:after, .to-go-page .post-content li a, .to-go-page .post-content p a, .to-go-page .post-content a {
 color:<?php echo($category_color_info);
?>;
}
 .to-go-page .top-stories strong {
 color:<?php echo($category_color_info);
?>;
}
 .to-go-menu .sub-menu-detail {
 border-bottom:3px solid <?php echo($category_color_info);
?>;
}
 .to-go-page h1, .to-go-page .article-comment h3, .to-go-page .commentmetadata a {
 color:<?php echo($category_color_info);
?>;
}
 .to-go-page .breadcrum ul li {
 color:<?php echo($category_color_info);
?>;
 font-weight:bold;
}
 .to-go-page .top-article .article-wrapper h2 a:hover, .to-go-page .article-wrapper h2 a:hover, .to-go-page .tab-content ul li strong a:hover, .to-go-page .editors-content h5 a:hover, .to-go-page .related-articles strong a:hover, .to-go-page .tab-content ul li span a:hover p, .to-go-page .tab-content ul li a:hover strong, .to-go-page .tab-content ul li a:hover span p, .to-go-page .similar-stories .tab-content ul li a:hover strong, .to-go-page .similar-stories .tab-content ul li a:hover span p, .to-go-page .related-articles-content a:hover span p, .to-go-page .related-articles-content a:hover strong {
 color:<?php echo($category_color_info);
?>;
}
 .main-nav ul li.to-go-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
 background:url("<?php the_sub_field('category_hover_image');?>") no-repeat right 11px !important;
}
 .main-nav ul li.to-go-menu .menu-more a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-go-menu:hover .menu-block:hover, .main-nav ul li.to-go-menu:hover .menu-block:hover a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-go-menu ul li a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-go-wrapper h3 {
 background:<?php echo($category_color_info);
?> !important;
}
 .to-go-page .tab-content ul li:hover {
/* background:<?php echo($category_color_info); ?> !important;	 */
			}
 .footer-block.to-go-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-go-wrapper h2 a:hover, .to-go-wrapper .top-stories strong a {
 color:<?php echo($category_color_info);
?> !important;
}
 <?php
}
else if ( $category_name_info == 6 ) {
?>  .to-see-page blockquote {
 border-left:3px solid <?php echo($category_color_info);
?>;
 border-left:3px solid <?php echo($category_color_info);
?>;
}
 .to-see-page blockquote > p:before, .to-see-page blockquote > p:after, .to-see-page .post-content li a, .to-see-page .post-content p a, .to-see-page .post-content a {
 color:<?php echo($category_color_info);
?>;
}
 .to-see-page .top-stories strong {
 color:<?php echo($category_color_info);
?>;
}
 .to-see-menu .sub-menu-detail {
 border-bottom:3px solid <?php echo($category_color_info);
?>;
}
 .to-see-page h1, .to-see-page .article-comment h3, .to-see-page .commentmetadata a {
 color:<?php echo($category_color_info);
?>;
}
 .to-see-page .breadcrum ul li {
 color:<?php echo($category_color_info);
?>;
 font-weight:bold;
}
 .to-see-page .top-article .article-wrapper h2 a:hover, .to-see-page .article-wrapper h2 a:hover, .to-see-page .tab-content ul li strong a:hover, .to-see-page .editors-content h5 a:hover, .to-see-page .related-articles strong a:hover, .to-see-page .tab-content ul li span a:hover p, .to-see-page .tab-content ul li a:hover strong, .to-see-page .tab-content ul li a:hover span p, .to-see-page .similar-stories .tab-content ul li a:hover strong, .to-see-page .similar-stories .tab-content ul li a:hover span p, .to-see-page .related-articles-content a:hover span p, .to-see-page .related-articles-content a:hover strong {
 color:<?php echo($category_color_info);
?>;
}
 .main-nav ul li.to-see-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
 background:url("<?php the_sub_field('category_hover_image');?>") no-repeat right 11px !important;
}
 .main-nav ul li.to-see-menu .menu-more a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li.to-see-menu:hover .menu-block:hover, .main-nav ul li.to-see-menu:hover .menu-block:hover a {
 background:<?php echo($category_color_info);
?> !important;
}
 .main-nav ul li .menu-more a:hover {
 color:#fff !important;
}
 .main-nav ul li.to-see-menu ul li a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-see-wrapper h3 {
 background:<?php echo($category_color_info);
?> !important;
}
 .to-see-page .tab-content ul li:hover {
/* background:<?php echo($category_color_info); ?> !important;	 */
			}
 .footer-block.to-see-menu a:hover {
 color:<?php echo($category_color_info);
?> !important;
}
 .to-see-wrapper h2 a:hover, .to-see-wrapper .top-stories strong a {
 color:<?php echo($category_color_info);
?> !important;
}
 <?php
}
else if ( $category_name_info == 69 ) {
?>  <?php
}
 endwhile;
 $siteLogo = get_field('website_logo');
 ?> 			
			/* .landing-page .tab-content ul li:hover, .page-template .tab-content ul li:hover{
				background:<?php echo(get_field('default_color')); ?> !important;	
			} */
<?php  ?>  <?php endwhile;
?>  .inner-page .tab-content ul li:hover span a p, .inner-page .tab-content ul li:hover a strong, .inner-page .tab-content ul li:hover a span p, .inner-page .tab-content ul li.colored:hover span a p, .inner-page .tab-content ul li.colored:hover a strong, .inner-page .tab-content ul li.colored:hover a span p, .main-nav .menu-block a:hover span p, .landing-page .tab-content ul li:hover span a p, .landing-page .tab-content ul li:hover a strong, .landing-page .tab-content ul li:hover a span p, .landing-page .tab-content ul li.colored:hover span a p, .landing-page .tab-content ul li.colored:hover a strong, .landing-page .tab-content ul li.colored:hover a span p, .landing-page .tab-content ul li.colored:hover a span p span, .inner-page .tab-content ul li.colored:hover a span p {
		/*color:#fff !important;*/
		
		opacity:0.65;
 filter:alpha(opacity=65); /* For IE8 and earlier */
}
.main-nav .menu-block a:hover span p {
	color:#fff !important;
}
.tab-content ul li img {
	-webkit-transition:all 200ms ease-in;
	-o-transition:all 200ms ease-in;
	-moz-transition:all 200ms ease-in;
	-ms-transition:all 200ms ease-in;
	transition: all 0.2s linear 0s;
}
</style>
<?php 
	if ( !(is_single()) ) { 
	
		$pageCategory = $cat;
	
		$parentobj = get_category($cat);
		$ParentCatId = $parentobj->parent; 
	}else {
		
		$parentobj = get_the_category($categories);
		$ParentCatId = $parentobj->parent;		
	}
	
	if ( $pageCategory == 2 || $ParentCatId == 2) { 
		$category_name = 'to-know';
	}else if (  $pageCategory == 4 || $ParentCatId == 4) { 
		$category_name = 'to-do';
	}else if (  $pageCategory == 5 || $ParentCatId == 5) { 
		$category_name = 'to-go';
	}else if (  $pageCategory == 3 || $ParentCatId == 3) { 
		$category_name = 'to-buy';
	}else if (  $pageCategory == 6 || $ParentCatId == 6) { 
		$category_name = 'to-see';
	}	
?>
<script>
	function chkSearch(){
		var chks = document.getElementById('s').value;
		if ( chks == "" ){
			return false;
		}	
	}
	
</script>
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();	
?>
<?php if ( is_single() ) { 
wp_reset_query();

//$shareDescription = wp_strip_all_tags(get_field('post_sub_header'));
//$shareDescription = get_field('post_sub_header');

$shareDescription = wp_strip_all_tags( get_field('post_sub_header') );


?>
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php the_field('large_image'); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="<?php echo($shareDescription); ?>" />
<?php } ?>
</head>

<body onResize="pageResize();">
<div id="preloader">
  <div id="status">
    <p class="center-text"> Loading the content... <em>Loading depends on your connection speed!</em> </p>
  </div>
</div>
<div class="page-content">
<?php 
	wp_reset_query();
							
	$my_query = new WP_Query('pagename=home');
	while ($my_query->have_posts()) : $my_query->the_post();
	
		$center_banner_image = get_field('center_banner_image');
		$center_banner_link = get_field('center_banner_link');
		$center_banner_title= get_field('center_banner_title');
		$center_banner_caption = get_field('center_banner_caption');
		
		//$left_banner_image = get_field('left_banner_image');
		//$left_banner_link = get_field('left_banner_link');
		//$left_banner_title= get_field('left_banner_title');
		//$left_banner_caption = get_field('left_banner_caption');
		
		$right_banner_image = get_field('right_banner_image');
		$right_banner_link = get_field('right_banner_link');
		$right_banner_title= get_field('right_banner_title');
		$right_banner_caption = get_field('right_banner_caption');

	endwhile;
?>


<div class="top-banner-container">
        <div id="featured-wrapper" class="iosslider">
      
          <ul class="featured-items slider">
                <?php 
                                
                                
                                if ( $center_banner_image ) { ?>
                <li class="slide right-slide"> <a href="<?php if ( $center_banner_link ) { echo ( $center_banner_link); } else { ?>javascript:void(0);<?php } ?>" rel="bookmark">
                  <?php if ( $center_banner_title ) { ?>
                  <div class="slide-title">
                    <label>
                      <?php echo ($center_banner_title); ?>
                    </label>
                  </div>
                  <?php } ?>
                  <img src="<?php echo( $center_banner_image); ?>" alt="" />
                  <div class="featured-text">
                    <h3 class="right-slide-title">
                      <?php echo ($center_banner_caption); ?>
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
                                }else {
                                
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
                <?php   $slideCounter++; } 						
                            endwhile; endif; 
                            wp_reset_query();
                            
                            }
                                
                            
                            ?>
                <li class="slide right-slide"> 
                  <!-- <a href="<?php echo(home_url('/quotes/'));?>" rel="bookmark"> --> 
                  <a href="javascript:void(0);" rel="bookmark">
                  <?php if ( $right_banner_title ) { ?>
                  <div class="slide-title">
                    <label>
                      <?php echo ($right_banner_title); ?>
                    </label>
                  </div>
                  <?php } ?>
                  <img src="<?php echo($right_banner_image); ?>" alt="" />
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
                  <?php if ( $left_banner_title ) { ?>
                  <div class="slide-title">
                    <label>
                      <?php echo($left_banner_title); ?>
                    </label>
                  </div>
                  <?php } ?>
                  <img src="<?php echo($left_banner_image); ?>" alt="" />
                  <div class="featured-text">
                    <h3 class="left-slide-title">
                      <?php echo($left_banner_caption); ?>
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
      
      <div class="featured-shade">
        <div class="left-shade"></div>
        <div class="right-shade"></div>
      </div>
      <!--featured-shade-->
      
      <div class="prev">&lt;</div>
      <div class="next">&gt;</div>
    </div>

</div>


  <div class="header">
  	<a href="#" class="show-sidebar"></a>
    <a href="#" class="hide-sidebar"></a>
    <div class="site-logo">
    	<a href="<?php echo(home_url()); ?>"><img src="<?php echo($siteLogo);?>" alt=""></a>
	</div>
  </div>