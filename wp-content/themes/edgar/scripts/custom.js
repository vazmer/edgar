$(window).load(function(){$("#status").fadeOut();$("#preloader").delay(350).fadeOut("slow")});$(document).ready(function(){$(".show-sidebar").click(function(){$(".page-content").animate({left:"180px"},500,"easeInOutExpo",function(){});$(".show-sidebar").hide();$(".hide-sidebar").show();return false});$(".hide-sidebar").click(function(){$(".page-content").animate({left:"0px"},500,"easeInOutExpo");$(".show-sidebar").show();$(".hide-sidebar").hide();return false});$(".hide2-sidebar").click(function(){$(".page-content").animate({left:"0px"},500,"easeInOutExpo");$(".show-sidebar").show();$(".hide-sidebar").hide();return false});$(".page-content").click(function(){$(".page-content").animate({left:"0px"},500,"easeInOutExpo");$(".show-sidebar").show();$(".hide-sidebar").hide()});$(".deploy-submenu").click(function(){$(this).parent().find(".submenu").toggle(500,"easeInOutExpo");return false});$(".dropdown-hidden").hide();$(".dropdown-item").hide();$(".dropdown-deploy").click(function(){$(this).parent().parent().find(".dropdown-item").show(200);$(this).parent().parent().find(".dropdown-hidden").show();$(this).hide();return false});$(".dropdown-hidden").click(function(){$(this).parent().parent().find(".dropdown-item").hide(200);$(this).parent().parent().find(".dropdown-deploy").show();$(this).parent().parent().find(this).hide();return false});$(".sliding-door-top").click(function(){$(this).animate({left:"101%"},500,"easeInOutExpo");return false});$(".sliding-door-bottom a em").click(function(){$(this).parent().parent().parent().find(".sliding-door-top").animate({left:"0px"},500,"easeOutBounce");return false});$("#gallery-filtralbe li a").colorbox({transition:"fade",scalePhotos:"true",maxWidth:"100%",maxHeight:"100%",arrowKey:"false"});$(".portfolio-item-full-width a").colorbox({transition:"fade",scalePhotos:"true",maxWidth:"100%",maxHeight:"100%"});$(".portfolio-item-thumb a").colorbox({transition:"fade",scalePhotos:"true",maxWidth:"100%",maxHeight:"100%"});(function(e,t,n){if(n in t&&t[n]){var r,i=e.location,s=/^(a|html)$/i;e.addEventListener("click",function(e){r=e.target;while(!s.test(r.nodeName))r=r.parentNode;"href"in r&&(r.href.indexOf("http")||~r.href.indexOf(i.host))&&(e.preventDefault(),i.href=r.href)},!1)}})(document,window.navigator,"standalone");var e=new Swipe(document.getElementById("slider"));$(".next-but-swipe").click(function(){e.prev();return false});$(".prev-but-swipe").click(function(){e.next();return false});setInterval(function(){e.next();return false},5e3);var t=navigator.userAgent.toLowerCase().indexOf("iphone");var n=navigator.userAgent.toLowerCase().indexOf("ipad");var r=navigator.userAgent.toLowerCase().indexOf("ipod");var i=navigator.userAgent.toLowerCase().indexOf("android");if(t>-1){$(".ipod-detected").hide();$(".ipad-detected").hide();$(".iphone-detected").show();$(".android-detected").hide()}if(n>-1){$(".ipod-detected").hide();$(".ipad-detected").show();$(".iphone-detected").hide();$(".android-detected").hide()}if(r>-1){$(".ipod-detected").show();$(".ipad-detected").hide();$(".iphone-detected").hide();$(".android-detected").hide()}if(i>-1){$(".ipod-detected").hide();$(".ipad-detected").hide();$(".iphone-detected").hide();$(".android-detected").show()}$(".checkbox-v1").click(function(){$(this).toggleClass("checked-v1");return false});$(".checkbox-v2").click(function(){$(this).toggleClass("checked-v2");return false});$(".checkbox-v3").click(function(){$(this).toggleClass("checked-v3");return false});$(".checkbox-v4").click(function(){$(this).toggleClass("checked-v4");return false});$(".radio-v1").click(function(){$(this).toggleClass("balled-v1");return false});$(".radio-v2").click(function(){$(this).toggleClass("balled-v2");return false});$(".close-notification").click(function(){$(this).parent().hide(150);return false});$(".small-notification a").click(function(){$(this).parent().hide(150);return false});$(".show-toggle-v1").hide();$(".toggle-content-v1").hide();$(".show-toggle-v1").click(function(){$(this).hide();$(this).parent().find(".hide-toggle-v1").show();$(this).parent().find(".toggle-content-v1").fadeOut(100);return false});$(".hide-toggle-v1").click(function(){$(this).parent().find(".show-toggle-v1").show();$(this).hide();$(this).parent().find(".toggle-content-v1").fadeIn(200);return false});$(".show-toggle-v2").hide();$(".toggle-content-v2").hide();$(".show-toggle-v2").click(function(){$(this).hide();$(this).parent().find(".hide-toggle-v2").show();$(this).parent().find(".toggle-content-v2").fadeOut(100);return false});$(".hide-toggle-v2").click(function(){$(this).parent().find(".show-toggle-v2").show();$(this).hide();$(this).parent().find(".toggle-content-v2").fadeIn(200);return false});$(".show-toggle-v3").hide();$(".toggle-content-v3").hide();$(".show-toggle-v3").click(function(){$(this).hide();$(this).parent().find(".hide-toggle-v3").show();$(this).parent().find(".toggle-content-v3").fadeOut(100);return false});$(".hide-toggle-v3").click(function(){$(this).parent().find(".show-toggle-v3").show();$(this).hide();$(this).parent().find(".toggle-content-v3").fadeIn(200);return false});$(".show-toggle-v4").hide();$(".toggle-content-v4").hide();$(".show-toggle-v4").click(function(){$(this).hide();$(this).parent().find(".hide-toggle-v4").show();$(this).parent().find(".toggle-content-v4").fadeOut(100);return false});$(".hide-toggle-v4").click(function(){$(this).parent().find(".show-toggle-v4").show();$(this).hide();$(this).parent().find(".toggle-content-v4").fadeIn(200);return false});$(".show-toggle-v5").hide();$(".toggle-content-v5").hide();$(".show-toggle-v5").click(function(){$(this).hide();$(this).parent().find(".hide-toggle-v5").show();$(this).parent().find(".toggle-content-v5").fadeOut(100);return false});$(".hide-toggle-v5").click(function(){$(this).parent().find(".show-toggle-v5").show();$(this).hide();$(this).parent().find(".toggle-content-v5").fadeIn(200);return false});$(".header-notification strong").click(function(){$(this).parent().animate({height:"0px"},350,function(){});return false});$("#tab").tabify();$("#filter-all").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);return false});$("#filter-one").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);$(".filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",.4);return false});$("#filter-two").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);$(".filter-one, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",.4);return false});$("#filter-three").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);$(".filter-one, .filter-two, .filter-four, .filter-five, .filter-six").fadeTo("fast",.4);return false});$("#filter-four").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);$(".filter-one, .filter-two, .filter-three, .filter-five, .filter-six").fadeTo("fast",.4);return false});$("#filter-five").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-six").fadeTo("fast",.4);return false});$("#filter-six").click(function(){$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six").fadeTo("fast",1);$(".filter-one, .filter-two, .filter-three, .filter-four, .filter-five").fadeTo("fast",.4);return false});$("#gallery a").swipebox({useCSS:true,hideBarsDelay:3e3})})