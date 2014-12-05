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
<div class="footer-wrapper">
    <div class="footer-container">
        <div class="footer-block to-know-menu">
            <h4><a href="<?php echo(home_url('/category/').$parentCategorySlug[0])?>"><?php echo($parentCategoryName[0]); ?></a></h4>
            <ul>
                <?php wp_list_categories('child_of=2'); ?>
            </ul>
        </div>
        <div class="footer-block to-buy-menu">
            <h4><a href="<?php echo(home_url('/category/').$parentCategorySlug[1])?>"><?php echo($parentCategoryName[1]); ?></a></h4>
            <ul>
                <?php wp_list_categories('child_of=3'); ?>
            </ul>
        </div>
        <div class="footer-block to-do-menu">
            <h4><a href="<?php echo(home_url('/category/').$parentCategorySlug[2])?>"><?php echo($parentCategoryName[2]); ?></a></h4>
            <ul>
                <?php wp_list_categories('child_of=4'); ?>
            </ul>
        </div>
        <div class="footer-block to-see-menu">
            <h4><a href="<?php echo(home_url('/category/').$parentCategorySlug[4])?>"><?php echo($parentCategoryName[4]); ?></a></h4>
            <ul>
                <?php wp_list_categories('child_of=6'); ?>
            </ul>
        </div>
        <div class="footer-block to-go-menu">
            <h4><a href="<?php echo(home_url('/category/').$parentCategorySlug[3])?>"><?php echo($parentCategoryName[3]); ?></a></h4>
            <ul>
                <?php wp_list_categories('child_of=5'); ?>
            </ul>
        </div>
        <div class="footer-block contact-listing">
            <h5 class="contact-link" style="display:none;"><a href="<?php echo(home_url('/contacting-us/')); ?>">Contact Us</a></h5>
            <div>
                <ul>
                    <li><a href="<?php echo(home_url('/contacting-us/')); ?>">Contact Us</a></li>
                    <li><a href="<?php echo(home_url('/about-us/')); ?>">About Us</a></li>
                    <li><a href="<?php echo(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo(home_url('/terms-and-conditions/')); ?>">Terms and Conditions</a></li>
                </ul>
            </div>
            <div class="follow-container">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1494550007423060&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div style="float: left;padding:0;" class="fb-like" data-href="https://www.facebook.com/EDGARdaily.ME" data-width="158" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                <div style="float: left; padding: 0 0 0 5px;"> <a href="https://twitter.com/EDGARdaily" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" style="margin-top:8px;">Follow @EDGARMagazine</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <div style="float: left; padding: 0 0 0 5px;">
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
                    <div class="g-follow" data-annotation="none" data-href="https://plus.google.com/112642918026049291510" data-rel="author" data-height="20"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollTop"> <a href="javascript:bookmarkscroll.scrollTo('page-top')"><img src="<?php bloginfo('template_directory'); ?>/assets/images/scroll-top.png" alt=""></a> </div>
</div>
<?php $options = get_option( 'sample_theme_options' ); ?>
<div class="copyright-wrapper">
    <div class="copyright-container">
        <p><?php echo $options['copyright'] ?></p>
    </div>
</div>
<?php  $my_query = new WP_Query( 'pagename=subscribe-management' );
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div class="subscribe-container">
    <div class="subscribe-content">
        <div class="subscribe-content-tab-container"> <a href="javascript:void(0);" class="magazine-btn active">
                <?php the_field('tab_1_title'); ?>
            </a> <a href="javascript:void(0);" class="newsletter-btn">
                <?php the_field('tab_2_title'); ?>
            </a> </div>
        <div class="subscribe-tab-content subscribe-tab-1">
            <?php the_field('tab_1_content'); ?>
        </div>
        <div class="subscribe-tab-content subscribe-tab-2">
            <?php dynamic_sidebar('twitter'); ?>
        </div>
    </div>
    <?php endwhile;
    $my_query = new WP_Query('pagename=category-info');
    while ($my_query->have_posts()) : $my_query->the_post();


        $subscribeBtn = get_field('subscribe_button');

    endwhile;
    ?>
    <div class="subscribe-btn"> <a href="javascript:void(0);" class="btn-subscribe"><img src="<?php echo($subscribeBtn); ?>" alt=""></a> </div>
</div>
<div class="bottom-content" style="visibility:hidden; height:0; width:0; overflow:hidden;">
    <div id="edgar-form" class="custom-scroller content">
        <h4>Edgar Magazine Subscription</h4>
        <?php echo ( do_shortcode('[contact-form-7 id="18" title="Magazine Form"]') ); ?> </div>
</div>
</div>
<!--Main Container End-->
<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */
wp_footer();
?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.slides.min.js"></script>
<!-- End SlidesJS Required -->
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/assets/js/jquery.iosslider7e2e.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/assets/js/scripts7e2e.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/assets/js/jquery.lazyload7e2e.js'></script>
<!-- End SlidesJS Required -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fancybox.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bookmarkscroll.js"></script>
<?php if ( is_category() || is_single() || !(is_page('home')) ) { ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.tinycarousel.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/tinycarousel.css" type="text/css" media="screen"/>
<?php } ?>
<script>
var documentHeight;
var scrollStatus=false;
jQuery(document).ready(function() {

    var winWidth = $(window).innerWidth();
    var winHeight = $(window).innerHeight();

    <?php if ( is_page('home') ) { ?>

    var winHeightNew = $('.screen-height').height()-50;
    var bannerNewHeight = $('.screen-height').height()-50;

    $(".banner-bottom-container").css("top",0);

    <?php } ?>

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

    $(".magazine-btn").click(function(){

        $(".newsletter-btn").removeClass("active");
        $(".magazine-btn").addClass("active");
        $( ".subscribe-tab-2" ).fadeOut( "fast");
        $( ".subscribe-tab-1" ).fadeIn( "slow");
    });


    $(".closeContent").click(function(){
        $(".related-articles").removeClass("active");

        scrollStatus = true;
    });

    $(".newsletter-btn").click(function(){

        $(".magazine-btn").removeClass("active");
        $(".newsletter-btn").addClass("active");
        $( ".subscribe-tab-1" ).fadeOut( "fast");
        $( ".subscribe-tab-2" ).fadeIn( "slow");
    });
    $(".background-btn").click(function(){
        $(".subscribe-container").removeClass("drawer");
    });
    var bannerLeftMargin = ($(window).width()-1001)/2;
    <?php if ( is_page('home') ) { ?>
    $( ".banner-fading-effect" ).hover(function() {
        $(".banner-caption").addClass('active');
    });

    $( ".banner-fading-effect" ).mouseout(function() {
        $(".banner-caption").removeClass('active');
    });

    <?php } ?>

    $('.sliding-banner').slidesjs({
        play: {
            active: false,
            effect: "slide",
            interval: 3000,
            auto: false,
            swap: true,
            pauseOnHover: false,
            restartDelay: 2500,
            width: 440,
            height: 160

        }
    });

    $('.sliding-article').slidesjs({
        play: {
            active: false,
            effect: "slide",
            interval: 5000,
            auto: true,
            swap: true,
            pauseOnHover: true,
            restartDelay: 2500,
            width: 440,
            height: 160

        }

    });


    $('.editors-sliding').slidesjs({
        play: {
            active: false,
            effect: "slide",
            interval: 3000,
            auto: false,
            swap: true,
            pauseOnHover: false,
            restartDelay: 2500,
            width: 250,
            height: 360

        }
    });

    function getBgUrl(el) {
        var bg = "";
        if (el.currentStyle) { // IE
            bg = el.currentStyle.backgroundImage;
        } else if (document.defaultView && document.defaultView.getComputedStyle) { // Firefox
            bg = document.defaultView.getComputedStyle(el, "").backgroundImage;
        } else { // try and get inline style
            bg = el.style.backgroundImage;
        }
        return bg.replace(/url\(['"]?(.*?)['"]?\)/i, "$1");
    }

    var image = document.createElement('img');
    image.src = getBgUrl(document.getElementById('main-bg'));
    image.onload = function () {
        $("body").addClass("pageLoaded");
    };

    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

    var isIE = navigator.userAgent.toLowerCase().indexOf('msie');
    <?php if ( (is_category()) || is_single() )  { ?>
    var s = $(".latest-stories-sticker");

    <?php } else {  ?>

    var s = $(".latest-stories-sticker1");

    <?php } ?>
    var navTop = $(".banner-bottom-container").offset().top;
    var stickyTop;
    var stickermax;
    var stickermax_new;

    <?php if ( is_single() || ( !(is_page('home')) && is_page()) ) { ?>
    //stickyTop = 690;
    stickyTop = 940;
    <?php } else if ( is_category() ) {  ?>
    //stickyTop = 970;
    stickyTop = 1230;
    <?php } ?>

    <?php
        $my_query = new WP_Query('pagename=ads-management');
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php if( get_field('top_banner_image') ) { ?>
    stickyTop = stickyTop - 100;

    <?php } ?>
    <?php if( get_field('before_banner_script') && is_category() ) { ?>
    stickyTop = stickyTop + 285;
    <?php } ?>

    <?php if( get_field('after_banner_script_1') && is_category() ) { ?>
    stickyTop = stickyTop + 285;
    <?php } ?>

    <?php if( get_field('after_banner_script_2') && is_category() ) { ?>
    stickyTop = stickyTop + 285;
    <?php } ?>
    <?php endwhile;?>


    <?php if ( is_user_logged_in() ) { ?>
    stickyTop = stickyTop-20;
    <?php } ?>

    if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)){ //test for Firefox/x.x or Firefox x.x (ignoring remaining digits);
        stickyTop = stickyTop;

    }else{
        <?php if ( is_category() && is_user_logged_in() ) { ?>
        stickyTop = stickyTop+20;
        <?php } else if ( is_user_logged_in() ) { ?>
        stickyTop = stickyTop;
        <?php } else { ?>
        stickyTop = stickyTop- 10;
        <?php } ?>
    }

    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();

        if ( $(window).scrollTop() > navTop ) {
            $('.banner-bottom-outter').addClass('StickyNav');
            $('.content-middle').addClass('stickcontent');
        }else {
            $('.banner-bottom-outter').removeClass('StickyNav');
            $('.content-middle').removeClass('stickcontent');
        }


        if ( $(window).scrollTop() >= stickyTop  ) {
            s.addClass("stick");
        }else {

            s.removeClass("stick");
        }

        <?php if ( is_single() ) { ?>
        var MyWindowHeight = $(window).innerHeight() - 50;
        var relatedpos = $('.comment-container').offset().top - MyWindowHeight;
        if ($(this).scrollTop() > relatedpos && scrollStatus == false) {
            $(".related-articles").addClass('active');
            scrollStatus = true;
        }else if ($(this).scrollTop() < relatedpos && scrollStatus == true) {
            $(".related-articles").removeClass('active');
            scrollStatus = false;
        }
        <?php } ?>
    });

    $( ".btn-subscribe" ).click(function() {
        $(".subscribe-container").toggleClass("drawer");
    });

    $('html').click(function(e) {
        if(!$(e.target).closest($('.subscribe-container.drawer')).length){
            $(".subscribe-container").removeClass("drawer");
        }
    });

    // $(".btn-subscribe").blur(function() {
    //	$(".subscribe-container.drawer").removeClass("drawer");
    // });

    $(".custom-scroller").mCustomScrollbar({
        scrollButtons:{
            enable:true
        }
    });

    jQuery('.fancybox').fancybox();
    documentHeight =$(document).innerHeight();
    $('#featured-wrapper').fadeIn('slow');

    <?php if ( is_category() || is_single() || !(is_page('home')) )  { ?>
    $(".right-side-stories").tinycarousel({
        axis   : "y"
    });
    <?php } ?>

    captionHeight = $('.right-slide-title').height();
    captionTop = (captionHeight) / 2;
    $('.right-slide-title').css("margin-bottom",captionTop);
});

function reSizeWindow(){
    var bannerLeftMargin = ($(window).width()-1001)/2;
    var logoLeft = ($(window).width()-321)/2;
}
</script>
<?php $options = get_option( 'sample_theme_options' ); ?>
<?php
if ($options['google_analytics'])
{
    echo $options['google_analytics'];
}
?>
</body></html>