jQuery(document).ready(function(e){"use strict";function t(e){try{console.log("changed: "+(e.currentSlideNumber-1))}catch(t){}}e(document).ready(function(){e(".iosslider").iosSlider({snapToChildren:true,desktopClickDrag:true,infiniteSlider:true,snapSlideCenter:true,onSlideChange:t,navNextSelector:e(".next"),navPrevSelector:e(".prev"),autoSlide:false,autoSlideTimer:5e3,autoSlideHoverPause:true})});e("#mobi-nav select").change(function(){window.location=e(this).find("option:selected").val()});e("img.lazy").show().lazyload({effect:"fadeIn",threshold:200}).removeClass("lazy");e(document).ajaxStop(function(){"use strict";e("img.lazy").lazyload({effect:"fadeIn"}).removeClass("lazy")})})