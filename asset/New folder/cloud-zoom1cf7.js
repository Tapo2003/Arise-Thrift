(function($){$(document).ready(function(){$(".cloud-zoom, .cloud-zoom-gallery").CloudZoom()});function format(str){for(var i=1;i<arguments.length;i++)str=str.replace("%"+(i-1),arguments[i]);return str}function CloudZoom(jWin,opts2){var sImg=$("img",jWin),img1,img2,zoomDiv=null,$mouseTrap=null,lens=null,$tint=null,softFocus=null,$ie6Fix=null,zoomImage,controlTimer=0,cw,ch,destU=0,destV=0,currV=0,currU=0,filesLoaded=0,mx,my,ctx=this,zw;setTimeout(function(){if($mouseTrap===null){var w=jWin.width();jWin.parent().append(format('<div style="width:%0px;position:absolute;top:75%;left:%1px;text-align:center" class="cloud-zoom-loading" >Loading...</div>',w/3,w/2-w/6)).find(":last").css("opacity",.5)}},200);var ie6FixRemove=function(){$ie6Fix!==null&&($ie6Fix.remove(),$ie6Fix=null)};this.removeBits=function(){lens&&(lens.remove(),lens=null),$tint&&($tint.remove(),$tint=null),softFocus&&(softFocus.remove(),softFocus=null),ie6FixRemove(),$(".cloud-zoom-loading",jWin.parent()).remove()},this.destroy=function(){jWin.data("zoom",null),$mouseTrap&&($mouseTrap.unbind(),$mouseTrap.remove(),$mouseTrap=null),zoomDiv&&(zoomDiv.remove(),zoomDiv=null),this.removeBits()},this.fadedOut=function(){zoomDiv&&(zoomDiv.remove(),zoomDiv=null),this.removeBits()},this.controlLoop=function(){if(lens){var x=mx-sImg.offset().left-cw*.5>>0,y=my-sImg.offset().top-ch*.5>>0;x<0?x=0:x>sImg.outerWidth()-cw&&(x=sImg.outerWidth()-cw),y<0?y=0:y>sImg.outerHeight()-ch&&(y=sImg.outerHeight()-ch),lens.css({left:x,top:y}),lens.css("background-position",-x+"px "+-y+"px"),destU=x/sImg.outerWidth()*zoomImage.width>>0,destV=y/sImg.outerHeight()*zoomImage.height>>0,currU+=(destU-currU)/opts2.smoothMove,currV+=(destV-currV)/opts2.smoothMove,zoomDiv.css("background-position",-(currU>>0)+"px "+(-(currV>>0)+"px"))}controlTimer=setTimeout(function(){ctx.controlLoop()},30)},this.init2=function(img,id){filesLoaded++,id===1&&(zoomImage=img),filesLoaded===2&&this.init()},this.init=function(){$(".cloud-zoom-loading",jWin.parent()).remove(),$mouseTrap=jWin.parent().append(format("<div class='mousetrap' style='background-image:url(\""+opts2.transparentImage+"\");z-index:999;position:absolute;width:%0px;height:%1px;left:%2px;top:%3px;'></div>",sImg.outerWidth(),sImg.outerHeight(),0,0)).find(":last"),$mouseTrap.bind("mousemove",this,function(event){mx=event.pageX,my=event.pageY}),$mouseTrap.bind("mouseleave",this,function(event){return clearTimeout(controlTimer),lens&&lens.fadeOut(299),$tint&&$tint.fadeOut(299),softFocus&&softFocus.fadeOut(299),zoomDiv.fadeOut(300,function(){ctx.fadedOut()}),!1}),$mouseTrap.bind("mouseenter",this,function(event){mx=event.pageX,my=event.pageY,zw=event.data,zoomDiv&&(zoomDiv.stop(!0,!1),zoomDiv.remove());var xPos=opts2.adjustX,yPos=opts2.adjustY,siw=sImg.outerWidth(),sih=sImg.outerHeight(),w=opts2.zoomWidth,h=opts2.zoomHeight;opts2.zoomWidth=="auto"&&(w=siw),opts2.zoomHeight=="auto"&&(h=sih);var appendTo=jWin.parent();switch(opts2.position){case"top":yPos-=h;break;case"right":xPos+=siw;break;case"bottom":yPos+=sih;break;case"left":xPos-=w;break;case"inside":w=siw,h=sih;break;default:appendTo=$("#"+opts2.position),appendTo.length?(w=appendTo.innerWidth(),h=appendTo.innerHeight()):(appendTo=jWin,xPos+=siw,yPos+=sih)}zoomDiv=appendTo.append(format('<div id="cloud-zoom-big" class="cloud-zoom-big" style="display:none;position:absolute;left:%0px;top:%1px;width:%2px;height:%3px;background-image:url(\'%4\');z-index:99;"></div>',xPos,yPos,w,h,zoomImage.src)).find(":last"),sImg.attr("title")&&opts2.showTitle&&zoomDiv.append(format('<div class="cloud-zoom-title">%0</div>',sImg.attr("title"))).find(":last").css("opacity",opts2.titleOpacity);var browserCheck=/(msie) ([\w.]+)/.exec(navigator.userAgent);browserCheck&&(browserCheck[1]||"")=="msie"&&(browserCheck[2]||"0")<7&&($ie6Fix=$('<iframe frameborder="0" src="#"></iframe>').css({position:"absolute",left:xPos,top:yPos,zIndex:99,width:w,height:h}).insertBefore(zoomDiv)),zoomDiv.fadeIn(500),lens&&(lens.remove(),lens=null),cw=sImg.outerWidth()/zoomImage.width*zoomDiv.width(),ch=sImg.outerHeight()/zoomImage.height*zoomDiv.height(),lens=jWin.append(format("<div class = 'cloud-zoom-lens' style='display:none;z-index:98;position:absolute;width:%0px;height:%1px;'></div>",cw,ch)).find(":last"),$mouseTrap.css("cursor",lens.css("cursor"));var noTrans=!1;opts2.tint&&(lens.css("background",'url("'+sImg.attr("src")+'")'),$tint=jWin.append(format('<div style="display:none;position:absolute; left:0px; top:0px; width:%0px; height:%1px; background-color:%2;" />',sImg.outerWidth(),sImg.outerHeight(),opts2.tint)).find(":last"),$tint.css("opacity",opts2.tintOpacity),noTrans=!0,$tint.fadeIn(500)),opts2.softFocus&&(lens.css("background",'url("'+sImg.attr("src")+'")'),softFocus=jWin.append(format('<div style="position:absolute;display:none;top:2px; left:2px; width:%0px; height:%1px;" />',sImg.outerWidth()-2,sImg.outerHeight()-2,opts2.tint)).find(":last"),softFocus.css("background",'url("'+sImg.attr("src")+'")'),softFocus.css("opacity",.5),noTrans=!0,softFocus.fadeIn(500)),noTrans||lens.css("opacity",opts2.lensOpacity),opts2.position!=="inside"&&lens.fadeIn(500),zw.controlLoop()})},img1=new Image,$(img1).load(function(){ctx.init2(this,0)}),img1.src=sImg.attr("src"),img2=new Image,$(img2).load(function(){ctx.init2(this,1)}),img2.src=jWin.attr("href")}$.fn.CloudZoom=function(options){try{document.execCommand("BackgroundImageCache",!1,!0)}catch(e){}return this.each(function(){var relOpts,opts;eval("var	a = {"+$(this).attr("rel")+"}"),relOpts=a,$(this).is(".cloud-zoom")?(opts=$.extend({},$.fn.CloudZoom.defaults,options),opts=$.extend({},opts,relOpts),$(this).css({position:"relative",display:"block"}),$("img",$(this)).css({display:"block"}),!$(this).parent().hasClass("cloud-zoom-wrap")&&opts.useWrapper&&$(this).wrap('<div class="cloud-zoom-wrap"></div>'),$(this).data("zoom",new CloudZoom($(this),opts))):$(this).is(".cloud-zoom-gallery")&&(opts=$.extend({},relOpts,options),$(this).data("relOpts",opts),$(this).bind("click",$(this),function(event){var data=event.data.data("relOpts");return $("#"+data.useZoom).data("zoom").destroy(),$("#"+data.useZoom).attr("href",event.data.attr("href")),$("#"+data.useZoom+" img").attr("src",event.data.data("relOpts").smallImage),$("#"+event.data.data("relOpts").useZoom).CloudZoom(),!1}))}),this},$.fn.CloudZoom.defaults={zoomWidth:"auto",zoomHeight:"auto",position:"right",transparentImage:".",useWrapper:!0,tint:!1,tintOpacity:.5,lensOpacity:.5,softFocus:!1,smoothMove:1,showTitle:!0,titleOpacity:.5,adjustX:0,adjustY:0}})(jQuery),jQuery(function($2){"use strict";var $mainContainer=$2(".container"),$section=$2(".products-list"),$links=$2(".quick-view:not(.fancybox)"),$view=$2(".product-view-ajax"),$container=$2(".product-view-container",$view),$loader=$2(".ajax-loader",$view),$layar=$2(".layar",$view),$slider,initProductView=function($productView){var $slider2=$2(".flexslider-large",$productView),$nav=$2(".flexslider-thumb",$productView),$navvertical=$2(".flexslider-thumb-vertical",$productView),$close=$2(".close-view",$productView);$productView&&$productView.length&&$2.initSelect($productView.find(".btn-select")),$navvertical.each(function(){var jcarousetItemsNumber=$2(this).find("ul li").size();jcarousetItemsNumber>3&&$2(this).flexVSlider({animation:"slide",direction:"vertical",move:1,keyboard:!1,controlNav:!1,animationLoop:!1,slideshow:!1,prevText:"",nextText:""})}),$nav.each(function(){var jcarousetItemsNumber=$2(this).find("ul li").size();jcarousetItemsNumber>3&&$2(this).flexslider({animation:"slide",keyboard:!1,controlNav:!1,animationLoop:!1,slideshow:!1,prevText:"",nextText:"",itemWidth:98,itemMargin:10})}),$slider2.flexslider({animation:"slide",keyboard:!1,controlNav:!0,directionNav:!0,animationLoop:!1,slideshow:!1,prevText:"",nextText:""}),$close.click(function(e){e.preventDefault(),$container.slideUp(500,function(){$container.empty(),$view.hide(),$container.show()})})};$links.click(function(e){if($2(".hidden-xs").is(":visible")){e.preventDefault();var $this=$2(this),url=$this.attr("href");$this.closest(".product-carousel").length>0?$this.closest(".row").find(".product-view-ajax-container").first().append($view):$this.parent().parent().nextAll(".product-view-ajax-container").first().append($view),$view.show(),$layar.show(),$loader.show(),$2.ajax({url:url,cache:!1,success:function(data){var $data=$2(data);initProductView($data),$loader.hide(),$layar.hide(),$container.text()?$container.empty().append($data):($data.hide(),$container.empty().append($data),$data.slideDown(500))},complete:function(){$2(".various").length>0&&$2(".various").fancybox({maxWidth:800,maxHeight:600,fitToView:!1,width:"70%",height:"70%",autoSize:!1,closeClick:!1,openEffect:"none",closeEffect:"none"}),console.log("ajax complete"),CloudZoom.quickStart()},error:function(jqXHR,textStatus,errorThrown){$loader.hide(),$container.html(textStatus)}})}}),initProductView();var productCarousel=$2(".product-carousel"),container=$2(".container");productCarousel.length>0&&productCarousel.each(function(){var items2=4,itemsDesktop2=4,itemsDesktopSmall2=3,itemsTablet2=2,itemsMobile2=1;if($2("body").hasClass("noresponsive")){var items2=4,itemsDesktop2=4,itemsDesktopSmall2=4,itemsTablet2=4,itemsMobile2=4;if($2(this).closest("section.col-md-8.col-lg-9").length>0)var items2=3,itemsDesktop2=3,itemsDesktopSmall2=3,itemsTablet2=3,itemsMobile2=3;else if($2(this).closest("section.col-lg-9").length>0)var items2=3,itemsDesktop2=3,itemsDesktopSmall2=3,itemsTablet2=3,itemsMobile2=3;else if($2(this).closest("section.col-sm-12.col-lg-6").length>0)var items2=2,itemsDesktop2=2,itemsDesktopSmall2=2,itemsTablet2=2,itemsMobile2=2;else if($2(this).closest("section.col-lg-6").length>0)var items2=2,itemsDesktop2=2,itemsDesktopSmall2=2,itemsTablet2=2,itemsMobile2=12;else if($2(this).closest("section.col-sm-12.col-lg-3").length>0)var items2=1,itemsDesktop2=1,itemsDesktopSmall2=1,itemsTablet2=1,itemsMobile2=1;else if($2(this).closest("section.col-lg-3").length>0)var items2=1,itemsDesktop2=1,itemsDesktopSmall2=1,itemsTablet2=1,itemsMobile2=1}else if($2(this).closest("section.col-md-8.col-lg-9").length>0)var items2=3,itemsDesktop2=3,itemsDesktopSmall2=2,itemsTablet2=2,itemsMobile2=1;else if($2(this).closest("section.col-lg-9").length>0)var items2=3,itemsDesktop2=3,itemsDesktopSmall2=2,itemsTablet2=2,itemsMobile2=1;else if($2(this).closest("section.col-sm-12.col-lg-6").length>0)var items2=2,itemsDesktop2=2,itemsDesktopSmall2=3,itemsTablet2=2,itemsMobile2=1;else if($2(this).closest("section.col-lg-6").length>0)var items2=2,itemsDesktop2=2,itemsDesktopSmall2=2,itemsTablet2=2,itemsMobile2=1;else if($2(this).closest("section.col-sm-12.col-lg-3").length>0)var items2=1,itemsDesktop2=1,itemsDesktopSmall2=3,itemsTablet2=2,itemsMobile2=1;else if($2(this).closest("section.col-lg-3").length>0)var items2=1,itemsDesktop2=1,itemsDesktopSmall2=2,itemsTablet2=2,itemsMobile2=1;$2(this).owlCarousel({items:items2,itemsDesktop:[1199,itemsDesktop2],itemsDesktopSmall:[980,itemsDesktopSmall2],itemsTablet:[768,itemsTablet2],itemsTabletSmall:!1,itemsMobile:[360,itemsMobile2],navigation:!0,pagination:!1,rewindNav:!1,navigationText:["",""],scrollPerPage:!0,slideSpeed:500,beforeInit:function(el){$2("body").hasClass("rtl")&&el.children().each(function(i,e){$2(e).parent().prepend($2(e))})},afterInit:function(el){$2("body").hasClass("rtl")&&this.jumpTo(1e3)}})});var productsListSmall=$2(".products-list-small .slides");if(productsListSmall.length>0){var items=12,itemsDesktop=12,itemsDesktopSmall=8,itemsTablet=6,itemsMobile=3;if($2("body").hasClass("noresponsive"))var items=12,itemsDesktop=12,itemsDesktopSmall=12,itemsTablet=12,itemsMobile=12;productsListSmall.owlCarousel({items:items,itemsDesktop:[1199,itemsDesktop],itemsDesktopSmall:[980,itemsDesktopSmall],itemsTablet:[768,itemsTablet],itemsTabletSmall:!1,itemsMobile:[360,itemsMobile],navigation:!0,pagination:!1,rewindNav:!1,navigationText:["",""],scrollPerPage:!0,slideSpeed:500,beforeInit:function(el){$2("body").hasClass("rtl")&&el.children().each(function(i,e){$2(e).parent().prepend($2(e))})},afterInit:function(el){$2("body").hasClass("rtl")&&this.jumpTo(1e3)}})}var brandsCarousel=$2(".brands-carousel ul"),brandsCarouselMax=6;$2(".content-center .brands-carousel ul").length>0&&(brandsCarouselMax=4),brandsCarousel.length>0&&brandsCarousel.carouFredSel({responsive:!0,width:"100%",scroll:1,prev:"#brands-carousel-prev",next:"#brands-carousel-next",items:{width:170,height:"30%",visible:{min:1,max:brandsCarouselMax}}});var productWidgets=$2(".product-widgets");productWidgets.length>0&&productWidgets.owlCarousel({items:1,navigation:!0,pagination:!1,rewindNav:!1,navigationText:["",""],scrollPerPage:!0,slideSpeed:300});var $contentcenter=$2(".content-center"),$contentaside=$2(".content-aside");$2(".visible-xs").is(":visible")&&$contentcenter.insertBefore($contentaside),$2(window).resize(function(){var $contentcenter2=$2(".content-center"),$contentaside2=$2(".content-aside");$2(".visible-xs").is(":visible")?$contentcenter2.insertBefore($contentaside2):$contentaside2.insertBefore($contentcenter2)})});
//# sourceMappingURL=/cdn/shop/t/2/assets/cloud-zoom.js.map?v=89117528290539160361449141650
