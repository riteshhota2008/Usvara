// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.5
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a}});function ws_carousel(d,l,o){var f=jQuery,h=f(this),p=f(".ws_list",o).css("opacity",0),s=(/iPhone|iPod|iPad|Android|BlackBerry/).test(navigator.userAgent),m=l.length,r=70,g=80,b=60,t=90,x=2,u=[];var i=f("<div>").addClass("ws_effect ws_carousel").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden",perspective:2000}).appendTo(o);var q=[];function k(y,A){for(var z=0;z<y;z++){var B=A?(l.length-y+z):z;while(B<0){B+=y-l.length}while(B>l.length-1){B-=y-l.length}q.push({item:f("<div>").append(f(l[B]).clone().css({outline:"1px solid transparent"})).css({position:"absolute",overflow:"hidden",top:0,left:0,width:"100%",height:"100%"}).appendTo(i),id:B});if(d.images){u.push(!d.images[B].noimage)}}}k(x,true);k(l.length);k(x);function e(){var z=f(l[0]);z={width:z.width(),height:z.height(),marginTop:parseFloat(z.css("marginTop")),marginLeft:parseFloat(z.css("marginLeft"))};for(var y in q){if(q[y].item){f(q[y].item).find("img").css(z)}}}function w(C){C*=-1;var y=[];for(var z in q){var B={};var A=x-z;y.push(A!=C?C-A:0)}return y}function c(B,A,y,z){wowAnimate(function(C){n(B,A,C)},0,1,y,z)}function v(A,z,y){return A+(z-A)*y}function a(z,y){if(d.support.transform){z.css({transform:"scale("+y.scale+") translate3d("+y.offset+"%,0,0) rotateY("+y.rotate+"deg)",zIndex:y.zIndex})}else{z.css({left:(100*(1-y.scale)/2+y.offset*0.85)+"%",top:(100*(1-y.scale)/2)+"%",width:(100*y.scale)+"%"})}}function n(F,G,E,C){if(!C){E=f.easing.easeInOutQuart(1,E,0,1,1,1)}for(var D in F){var A=v(F[D],G[D],E)*t;var H=r/100;var B=0;var z=F[D]*(F[D]>0?-1:1);var y=A>0?-1:1;if(E>0.5){z=G[D]*(G[D]>0?-1:1)}if(F[D]===0){H=v(g,r,E)/100;B=v(0,y*b,E)}if(G[D]===0){H=v(r,g,E)/100;B=v(y*b,0,E)}if(G[D]!==0&&F[D]!==0){B=y*b}a(q[D].item,{scale:H,offset:A,rotate:B,zIndex:z})}}var j=w(d.startSlide);c(j,j,0);e();f(window).on("load resize",e);this.go=function(z,B){e();p.css("opacity",0);if(d.images&&!u[z+x]){var A=z+x;u[A]=true;function y(C){return C.find("img").attr("src",d.images[z].src)}y(q[A].item);if(z<x){y(q[q.length-z].item)}if(z+x>=l.length){y(q[z+x-l.length].item)}}if(window.XMLHttpRequest){if(B==l.length-1&&z==0){z=B+1}if(B==0&&z==l.length-1){z=-1}c(w(B),w(z),d.duration,function(){h.trigger("effectEnd")})}else{p.stop(true).animate({left:(z?-z+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},d.duration,"easeInOutExpo",function(){h.trigger("effectEnd")})}};this.step=function(A,y){var z=A+(y<0?1:-1);if(y<0){y*=-1}n(w(A),w(z),y,true)}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.5
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"carousel",prev:"",next:"",duration:20*100,delay:20*100,width:1050,height:360,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:false,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:0});