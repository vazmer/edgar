<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content=""/>
<meta name="keywords" content="" />
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
?>
</title>
<!-- Responsive Start -->
<meta name="HandheldFriendly" content="True">
<!-- Stops zooming of Blackberry devices -->
<meta name="MobileOptimized" content="320">
<!-- IE Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!-- ios and android -->
<?php	if ( is_single() ) {  	?>
<meta property="og:image" content="<?php the_field('middle_image'); ?>" />
<?php 
	} else {     
    $my_query = new WP_Query( 'pagename=ads-management' );
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
<meta property="og:image" content="<?php the_field('after_banner_image_1'); ?>" />
<?php 	endwhile;  } ?>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_144.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_72.png">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon_57.png">
<!-- Responsive Start -->
<link rel='stylesheet' id='mvp-style-css'  href='<?php bloginfo('template_directory'); ?>/assets/style7e2e.css?ver=3.8.1' type='text/css' media='all' />
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />
<script>
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			//return navigator.userAgent.match(/iPhone|iPad|iPod/i);
			return navigator.userAgent.match(/iPhone|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

if( isMobile.any() ) window.location="http://edgardaily.com/mobile/index.html";
	
</script>
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
<body id="main-bg" onResize="reSizeWindow();"  <?php if ( is_page('home') ) { ?> class="landing-page" <?php } else if (is_category() || is_search() )  { ?> class="inner-page <?php echo($category_name);?>-page category-page" <?php } else if (is_single() )  { ?> class="inner-page <?php echo($categories_id.''.$category_name);?>-page article-page" <?php } ?> >

<div class="beta"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/beta_img.png" alt=""/> </div>
<a name="page-top" id="page-top"></a> 
<!--Main Container Start-->
<div class="main-wrapper <?php if ( !(is_page('home')) ) { ?>other-page<?php } ?>">
  <?php  	$my_query = new WP_Query('pagename=ads-management'); 
                while ($my_query->have_posts()) : $my_query->the_post(); 
        ?>
  <style>
			<?php if ( get_field('main_banner_image') ) { ?>
            .web-banner{
                background:url(<?php the_field('main_banner_image');?>) no-repeat fixed center top;
            }
			<?php } ?>
       </style>
  <div class="web-banner">
    <?php if ( get_field('main_banner_link') ) { ?>
    <a href="<?php if ( get_field('main_banner_link') ) { ?>javascript:void(0);<?php } else { the_field('main_banner_link'); } ?>" target="_blank" class="background-btn"></a>
    <?php } ?>
  </div>
  <div class="banner-top-container">
    <?php if( get_field('top_banner_image') ) { ?>
    <div class="banner-top-content"> <a href="<?php the_field('top_banner_link') ?>"> <img src="<?php the_field('top_banner_image') ?>" alt=""> </a> </div>
    <?php } ?>
  </div>
  <?php endwhile;?>
</div>
<?php if ( is_page('home') ) { ?>
<div class="main-wrapper banner-wrapper">
<?php } else { ?>
<div class="main-wrapper banner-bottom-outter">
  <?php } ?>
  <div class="content-wrapper"> 
    <!-- Content Container Start-->
    <div class="content-container">
      <?php if ( is_page('home') ) { ?>
      <div class="screen-height">
        <div id="featured-wrapper" class="iosslider">
          <ul class="featured-items slider">
            <?php 
							wp_reset_query();
							
							if ( get_field('center_banner_image') ) { ?>
            <li class="slide right-slide"> <a href="<?php if ( get_field('center_banner_link') ) { the_field('center_banner_link'); } else { ?>javascript:void(0);<?php } ?>" rel="bookmark">
              <?php if ( get_field('center_banner_title') ) { ?>
              <div class="slide-title">
                <label>
                  <?php the_field('center_banner_title'); ?>
                </label>
              </div>
              <?php } ?>
              <img src="<?php the_field('center_banner_image'); ?>" alt="" />
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
              <?php if ( get_field('right_banner_title') ) { ?>
              <div class="slide-title">
                <label>
                  <?php the_field('right_banner_title'); ?>
                </label>
              </div>
              <?php } ?>
              <img src="<?php the_field('right_banner_image'); ?>" alt="" />
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
              <img src="<?php the_field('left_banner_image'); ?>" alt="" />
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
          <div class="featured-shade">
            <div class="left-shade"></div>
            <div class="right-shade"></div>
          </div>
          <!--featured-shade-->
          <div class="prev"></div>
          <div class="next"></div>
        </div>
      </div>
      <?php } 
				
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
      <?php if ( is_page('home') ) { ?>
    </div>
  </div>
</div>
<div class="main-wrapper banner-bottom-outter">
  <div class="content-wrapper"> 
    <!-- Content Container Start-->
    <div class="content-container">
      <?php } ?>
      <div class="banner-bottom-container">
        <div class="banner-logo"> <a href="<?php echo(home_url()); ?>"><img src="<?php echo($siteLogo);?>" alt=""></a> </div>
        <div class="menu-wrapper">
          <div class="menu-container">
            <div class="main-nav left-menu">
              <ul>
                <li class="home-menu"><a href="<?php echo(home_url()); ?>">Home</a></li>
                <li class="to-know-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[0])?>"><?php echo($parentCategoryName[0]); ?></a>
                  <ul>
                    <?php wp_list_categories('child_of=2'); ?>
                  </ul>
                  <div class="sub-menu-detail">
                    <?php
												//get all categories then display all posts in each term
												$taxonomy = 'category';
												$param_type = 'category__in';
												$term_args=array(
													'orderby' => 'name',
													'order' => 'ASC',
													'parent' => '0'
												);
												$terms = get_terms($taxonomy,$term_args);
												if ($terms) {
													foreach( $terms as $term ) {
														$args=array(
															"$param_type" => array($term->term_id),
															'post_type' => 'post',
															'post_status' => 'publish',
															'posts_per_page' => -1,
															'caller_get_posts'=> 1
														);
														$my_query = null;
														$my_query = new WP_Query($args);
														if( $my_query->have_posts() ) {  ?>
                    <?php
															$countter=1;
															while ($my_query->have_posts()) : $my_query->the_post(); 
                                                            	if ( $term->slug == 'to-know' && $countter < 5 ) {  ?>
                    <div class="menu-block"> <a href="<?php the_permalink(); ?>">
                      <div class="post-thumb"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></div>
                      <strong>
                      <?php the_title(); ?>
                      </strong> <span>
                      <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                      </span> </a> </div>
                    <?php
                                                                    $countter++;
																}
																else{
																	break;	
																}															
															endwhile;
															?>
                    <?php
														}
													}
												}
												wp_reset_query();  // Restore global post data stomped by the_post().
                                            ?>
                    <div class="menu-more"> <a href="<?php echo(home_url('/category/').$parentCategorySlug[0]) ?>">more</a> </div>
                  </div>
                </li>
                <li class="to-buy-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[1]); ?>"><?php echo($parentCategoryName[1]); ?></a>
                  <ul>
                    <?php wp_list_categories('child_of=3'); ?>
                  </ul>
                  <div class="sub-menu-detail">
                    <?php
												//get all categories then display all posts in each term
												$taxonomy = 'category';
												$param_type = 'category__in';
												$term_args=array(
													'orderby' => 'name',
													'order' => 'ASC',
													'parent' => '0'
												);
												$terms = get_terms($taxonomy,$term_args);
												if ($terms) {
													foreach( $terms as $term ) {
														$args=array(
															"$param_type" => array($term->term_id),
															'post_type' => 'post',
															'post_status' => 'publish',
															'posts_per_page' => -1,
															'caller_get_posts'=> 1
														);
														$my_query = null;
														$my_query = new WP_Query($args);
														if( $my_query->have_posts() ) {  ?>
                    <?php
															$countter=1;
															while ($my_query->have_posts()) : $my_query->the_post(); 
                                                            	if ( $term->slug == 'to-buy' && $countter < 5 ) {  ?>
                    <div class="menu-block"> <a href="<?php the_permalink(); ?>">
                      <div class="post-thumb"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></div>
                      <strong>
                      <?php the_title(); ?>
                      </strong> <span>
                      <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                      </span> </a> </div>
                    <?php
                                                                    $countter++;
																}
																else{
																	break;	
																}															
															endwhile;
															?>
                    <?php
														}
													}
												}
												wp_reset_query();  // Restore global post data stomped by the_post().
                                            ?>
                    <div class="menu-more"> <a href="<?php echo(home_url('/category/').$parentCategorySlug[1]) ?>">more</a> </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="main-nav right-menu">
              <ul>
                <li class="to-do-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[2])?>"><?php echo($parentCategoryName[2]); ?></a>
                  <ul>
                    <?php wp_list_categories('child_of=4'); ?>
                  </ul>
                  <div class="sub-menu-detail">
                    <?php
												//get all categories then display all posts in each term
												$taxonomy = 'category';
												$param_type = 'category__in';
												$term_args=array(
													'orderby' => 'name',
													'order' => 'ASC',
													'parent' => '0'
												);
												$terms = get_terms($taxonomy,$term_args);
												if ($terms) {
													foreach( $terms as $term ) {
														$args=array(
															"$param_type" => array($term->term_id),
															'post_type' => 'post',
															'post_status' => 'publish',
															'posts_per_page' => -1,
															'caller_get_posts'=> 1
														);
														$my_query = null;
														$my_query = new WP_Query($args);
														if( $my_query->have_posts() ) {  ?>
                    <?php
															$countter=1;
															while ($my_query->have_posts()) : $my_query->the_post(); 
                                                            	if ( $term->slug == 'to-do' && $countter < 5 ) {  ?>
                    <div class="menu-block"> <a href="<?php the_permalink(); ?>">
                      <div class="post-thumb"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></div>
                      <strong>
                      <?php the_title(); ?>
                      </strong> <span>
                      <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                      </span> </a> </div>
                    <?php
                                                                    $countter++;
																}
																else{
																	break;	
																}															
															endwhile;
															?>
                    <?php
														}
													}
												}
												wp_reset_query();  // Restore global post data stomped by the_post().
                                            ?>
                    <div class="menu-more"> <a href="<?php echo(home_url('/category/').$parentCategorySlug[2]) ?>">more</a> </div>
                  </div>
                </li>
                <li class="to-see-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[4]) ?>"><?php echo($parentCategoryName[4]); ?></a>
                  <ul>
                    <?php wp_list_categories('child_of=6'); ?>
                  </ul>
                  <div class="sub-menu-detail">
                    <?php
												//get all categories then display all posts in each term
												$taxonomy = 'category';
												$param_type = 'category__in';
												$term_args=array(
													'orderby' => 'name',
													'order' => 'ASC',
													'parent' => '0'
												);
												$terms = get_terms($taxonomy,$term_args);
												if ($terms) {
													foreach( $terms as $term ) {
														$args=array(
															"$param_type" => array($term->term_id),
															'post_type' => 'post',
															'post_status' => 'publish',
															'posts_per_page' => -1,
															'caller_get_posts'=> 1
														);
														$my_query = null;
														$my_query = new WP_Query($args);
														if( $my_query->have_posts() ) {  ?>
                    <?php
															$countter=1;
															while ($my_query->have_posts()) : $my_query->the_post(); 
                                                            	if ( $term->slug == 'to-see' && $countter < 5 ) {  ?>
                    <div class="menu-block"> <a href="<?php the_permalink(); ?>">
                      <div class="post-thumb"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></div>
                      <strong>
                      <?php the_title(); ?>
                      </strong> <span>
                      <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                      </span> </a> </div>
                    <?php
                                                                    $countter++;
																}
																else{
																	break;	
																}															
															endwhile;
															?>
                    <?php
														}
													}
												}
												wp_reset_query();  // Restore global post data stomped by the_post().
                                            ?>
                    <div class="menu-more"> <a href="<?php echo(home_url('/category/').$parentCategorySlug[4]) ?>">more</a> </div>
                  </div>
                </li>
                <li class="to-go-menu sub-category"><a href="<?php echo(home_url('/category/').$parentCategorySlug[3]) ?>"><?php echo($parentCategoryName[3]); ?></a>
                  <ul>
                    <?php wp_list_categories('child_of=5'); ?>
                  </ul>
                  <div class="sub-menu-detail">
                    <?php
												//get all categories then display all posts in each term
												$taxonomy = 'category';
												$param_type = 'category__in';
												$term_args=array(
													'orderby' => 'name',
													'order' => 'ASC',
													'parent' => '0'
												);
												$terms = get_terms($taxonomy,$term_args);
												if ($terms) {
													foreach( $terms as $term ) {
														$args=array(
															"$param_type" => array($term->term_id),
															'post_type' => 'post',
															'post_status' => 'publish',
															'posts_per_page' => -1,
															'caller_get_posts'=> 1
														);
														$my_query = null;
														$my_query = new WP_Query($args);
														if( $my_query->have_posts() ) {  ?>
                    <?php
															$countter=1;
															while ($my_query->have_posts()) : $my_query->the_post(); 
                                                            	if ( $term->slug == 'to-go' && $countter < 5 ) {  ?>
                    <div class="menu-block"> <a href="<?php the_permalink(); ?>">
                      <div class="post-thumb"><img src="<?php if( get_field('thumb_image') ) { the_field('thumb_image');} else { ?><?php bloginfo('template_directory'); ?>/assets/images/default-tab.jpg<?php } ?>" alt=""></div>
                      <strong>
                      <?php the_title(); ?>
                      </strong> <span>
                      <?php myfieldcontent(10,get_field('post_sub_header')); ?>
                      </span> </a> </div>
                    <?php
                                                                    $countter++;
																}
																else{
																	break;	
																}															
															endwhile;
															?>
                    <?php
														}
													}
												}
												wp_reset_query();  // Restore global post data stomped by the_post().
                                            ?>
                    <div class="menu-more"> <a href="<?php echo(home_url('/category/').$parentCategorySlug[3]) ?>">more</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="to-buy-container">
          <ul>
            <li class="fb-icon"><a href="<?php echo ($fb_link); ?>" target="_blank">&nbsp;</a></li>
            <li class="tt-icon"><a href="<?php echo ($tt_link); ?>" target="_blank">&nbsp;</a></li>
            <li class="in-icon"><a href="<?php echo ($in_link); ?>" target="_blank">&nbsp;</a></li>
            <li class="email-icon"><a href="<?php echo ($email_link); ?>" target="_blank">&nbsp;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>