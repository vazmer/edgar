(function(e){if(typeof define==="function"&&define.amd){define(jQuery||["jquery"],e)}else if(typeof exports==="object"){e(jQuery||require("jquery"))}else{e(jQuery)}})(function(e){function r(r,i){function E(){s.update();s.move(s.slideCurrent);S();return s}function S(){if(s.options.buttons){l.click(function(){s.move(--m);return false});f.click(function(){s.move(++m);return false})}e(window).resize(s.update);if(s.options.bullets){r.on("click",".bullet",function(){s.move(m=+e(this).attr("data-slide"));return false})}}function x(){if(s.options.buttons&&!s.options.infinite){l.toggleClass("disable",s.slideCurrent<=0);f.toggleClass("disable",s.slideCurrent>=s.slidesTotal-d)}if(s.options.bullets){c.removeClass("active");e(c[s.slideCurrent]).addClass("active")}}this.options=e.extend({},n,i);this._defaults=n;this._name=t;var s=this,o=r.find(".viewport:first"),u=r.find(".overview:first"),a=0,f=r.find(".next:first"),l=r.find(".prev:first"),c=r.find(".bullet"),h=0,p={},d=0,v=0,m=0,g=this.options.axis==="x",y=g?"Width":"Height",b=g?"left":"top",w=null;this.slideCurrent=0;this.slidesTotal=0;this.update=function(){u.find(".mirrored").remove();a=u.children();h=o[0]["offset"+y];v=a.first()["outer"+y](true);s.slidesTotal=a.length;slideCurrent=s.options.start||0;d=Math.ceil(h/v);u.append(a.slice(0,d).clone().addClass("mirrored"));u.css(y.toLowerCase(),v*(s.slidesTotal+d));return s};this.start=function(){if(s.options.interval){clearTimeout(w);w=setTimeout(function(){s.move(++m)},s.options.intervalTime)}return s};this.stop=function(){clearTimeout(w);return s};this.move=function(e){m=e;s.slideCurrent=m%s.slidesTotal;if(m<0){s.slideCurrent=m=s.slidesTotal-1;u.css(b,-s.slidesTotal*v)}if(m>s.slidesTotal){s.slideCurrent=m=1;u.css(b,0)}p[b]=-m*v;u.animate(p,{queue:false,duration:s.options.animation?s.options.animationTime:0,always:function(){r.trigger("move",[a[s.slideCurrent],s.slideCurrent])}});x();s.start();return s};return E()}var t="tinycarousel",n={start:0,axis:"x",buttons:true,bullets:false,interval:false,intervalTime:3e3,animation:true,animationTime:1e3,infinite:true};e.fn[t]=function(n){return this.each(function(){if(!e.data(this,"plugin_"+t)){e.data(this,"plugin_"+t,new r(e(this),n))}})}})