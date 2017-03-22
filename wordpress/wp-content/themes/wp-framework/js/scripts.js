!function(e){"use strict";var t=e.Deferred();e(window).bind("load",function(){t.resolve()}),e(function(){function n(){var t=e(".ellipsis").hide();t.each(function(){var t=e(this);t.css({width:t.parent().outerWidth(),"white-space":"nowrap"}),t.show()})}if(e.fx.speeds._default=500,e.fn.css3Animate=function(t){return e(this).on("click",function(n){var i=t;e(this).toggleClass("active"),n.preventDefault(),i.hasClass("opened")?(i.removeClass("opened").addClass("closed"),setTimeout(function(){i.removeClass("closed")},500)):i.addClass("opened")})},e("#lang_button").css3Animate(e("#lang_button").next(".dropdown_list")),e("#currency_button").css3Animate(e("#currency_button").next(".dropdown_list")),e.fn.waypointInit=function(t,n,i,a){return e(this).waypoint(function(n){var o=e(this);"down"===n?i?setTimeout(function(){o.addClass(t)},i):o.addClass(t):1==a&&o.removeClass(t)},{offset:n})},e.fn.waypointSynchronise=function(t){function n(e,n){e.eq(n).addClass(t.classN)}var i=e(this);return i.closest(t.container).waypoint(function(e){i.each(function(a){"down"===e?void 0!=t.globalDelay?setTimeout(function(){setTimeout(function(){n(i,a)},a*t.delay)},t.globalDelay):setTimeout(function(){n(i,a)},a*t.delay):t.inv&&setTimeout(function(){i.eq(a).removeClass(t.classN)},a*t.delay)})},{offset:t.offset}),i},function(){t.done(function(){e(".products_container:not(.a_type_2) .photoframe.animate_ftb").waypointSynchronise({container:".products_container",delay:200,offset:700,classN:"animate_vertical_finished"}),e(".products_container.a_type_2 .photoframe.animate_ftb").waypointSynchronise({container:".products_container",delay:200,offset:700,classN:"animate_vertical_finished"}),e(".wfilter_carousel .photoframe.animate_ftb").waypointSynchronise({container:".wfilter_carousel",delay:200,offset:700,classN:"animate_vertical_finished"}),e(".bestsellers_carousel .photoframe.animate_ftb").waypointSynchronise({container:".bestsellers_carousel",delay:200,offset:700,globalDelay:400,classN:"animate_vertical_finished"}),e('.banner_type_2[class*="animate_ft"]').waypointSynchronise({container:".row",delay:200,offset:800,classN:"animate_vertical_finished"}),e(".animate_half_tc").waypointSynchronise({container:".row",delay:0,offset:830,classN:"animate_horizontal_finished"}),e(".heading2").waypointInit("animate_sj_finished animate_fade_finished","800px"),e(".nav_buttons_wrap.animate_fade").waypointInit("animate_sj_finished animate_fade_finished","800px"),e(".product_brands a.animate_fade").waypointSynchronise({container:".product_brands",delay:200,offset:830,classN:"animate_sj_finished animate_fade_finished"}),e(".blog_carousel a.photoframe").waypointSynchronise({container:".blog_animate.animate_ftr",delay:0,offset:830,classN:"animate_vertical_finished"}),e(".blog_carousel .mini_post_content > .animate_ftr").waypointSynchronise({container:".blog_animate.animate_ftr",delay:200,offset:830,classN:"animate_horizontal_finished"}),e(".blog_animate.animate_ftr").waypointInit("animate_horizontal_finished","800px"),e(".ti_animate.animate_ftr").waypointInit("animate_horizontal_finished","800px",1e3),e(".testiomials_carousel .animate_ftr:first").waypointInit("animate_horizontal_finished","851px",1200),e(".testiomials_carousel .animate_ftr:nth-child(2)").waypointInit("animate_horizontal_finished","973px",1400),e(".testiomials_carousel .animate_ftr:nth-child(3)").waypointInit("animate_horizontal_finished","987px",1600),e(".heading1.animate_ftr").waypointInit("animate_horizontal_finished","1000px"),e(".isotope_menu > li.animate_ftr").waypointSynchronise({container:".isotope_menu",delay:200,offset:1e3,classN:"animate_horizontal_finished"}),e(".flexslider.animate_ftr").waypointInit("animate_horizontal_finished","1000px"),setTimeout(function(){e(".s_banners .d_block.animate_ftr").waypointSynchronise({container:".s_banners",delay:300,offset:830,classN:"animate_horizontal_finished"})},200),e(".widget.animate_ftr").waypointInit("animate_horizontal_finished","800px",200),e(".heading5").waypointInit("animate_horizontal_finished","800px"),e(".banner.animate_ftr").waypointSynchronise({container:".row",delay:200,offset:1e3,globalDelay:800,classN:"animate_horizontal_finished"}),e(".nc_carousel .photoframe.animate_ftb").waypointSynchronise({container:".nc_carousel",delay:200,offset:700,classN:"animate_vertical_finished"}),e(".info_blocks_container .animate_ftr").waypointSynchronise({container:".info_blocks_container",delay:200,offset:700,classN:"animate_vertical_finished"}),e(".our_recent_work_carousel .animate_ftb").waypointSynchronise({container:".our_recent_work_carousel",delay:200,offset:700,classN:"animate_vertical_finished"}),e(".p_tables .animate_fade").waypointSynchronise({container:".p_tables",delay:200,offset:700,classN:"animate_fade_finished"}),e(".animate_corporate_container .animate_fade").waypointSynchronise({container:".animate_corporate_container",delay:200,offset:700,classN:"animate_fade_finished"}),window.sticky=function(){function t(){a.hasClass("type_2")&&a.css("width",a.parent().width())}var n=e("[role=banner] .h_bot_part"),i=n.closest('[role="banner"]').hasClass("type_5")?0:-n.outerHeight(),a=e(".menu_wrap"),o=a.outerHeight();console.log(o),n.waypoint(function(t){e(this);"down"==t?(a.addClass("sticky"),n.parent('[role="banner"]').css("border-bottom",o+"px solid transparent")):"up"==t&&(a.removeClass("sticky"),n.parent('[role="banner"]').css("border-bottom","none"))},{offset:i}),t(),e(window).on("resize",t)},sticky()})}(),function(){e(".jackbox[data-group]").length&&jQuery(".jackbox[data-group]").jackBox("init",{showInfoByDefault:!1,preloadGraphics:!0,fullscreenScalesContent:!0,autoPlayVideo:!0,flashVideoFirst:!1,defaultVideoWidth:960,defaultVideoHeight:540,baseName:".jackbox",className:".jackbox",useThumbs:!0,thumbsStartHidden:!1,thumbnailWidth:75,thumbnailHeight:50,useThumbTooltips:!0,showPageScrollbar:!1,useKeyboardControls:!0})}(),e('[role="banner"]').on("click",".close_product",function(){e(this).closest("li").animate({opacity:"0"},function(){e(this).slideUp(500)})}),e("#shopping_button").on("mouseenter",function(){e(this).css("z-index","300")}).on("mouseleave",function(){e(this).css("z-index","189")}),function(){e('[role="banner"]').on("click",".search_button",function(){e(".searchform_wrap").addClass("opened")}),e('[role="banner"]').on("click",".close_search_form",function(){e(".searchform_wrap").removeClass("opened").addClass("closed"),setTimeout(function(){e(".searchform_wrap").removeClass("closed")},400)})}(),function(){e("html").hasClass("ie9")&&e("input[placeholder]").each(function(){e(this).val(e(this).attr("placeholder"));var t=e(this).val();e(this).on("focus",function(){e(this).val()===t&&e(this).val("")}).on("blur",function(){""==e(this).val()&&e(this).val(t)})})}(),e(".r_slider").length){var i=e(".r_slider").revolution({delay:5e3,startwidth:1140,startheight:288,autoHeight:"off",fullScreenAlignForce:"off",onHoverStop:"on",thumbWidth:100,thumbHeight:50,thumbAmount:3,hideThumbsOnMobile:"off",hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResoluition:0,hideTimerBar:"on",hideThumbs:0,navigationType:"bullet",navigationArrows:"solo",navigationStyle:"round",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:15,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:40,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:40,soloArrowRightVOffset:0,touchenabled:"on",stopAtSlide:-1,stopAfterLoops:-1,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,hideSliderAtLimit:0,dottedOverlay:"none",fullWidth:"off",forceFullWidth:"off",fullScreen:"off",fullScreenOffsetContainer:"#topheader-to-offset",shadow:0});i.bind("revolution.slide.onloaded",function(t,n){var i=e(".revolution_slider");i.find(".tp-leftarrow").append('<i class="fa fa-angle-left"></i>'),i.find(".tp-rightarrow").append('<i class="fa fa-angle-right"></i>'),function(){for(var t=e(".r_slider [data-custom-thumb]"),n=t.length,i=e(".tp-bullets .bullet"),a=0;a<n;a++)i.eq(a).append('<div class="custom_thumb tr_all_hover"><img src="'+t.eq(a).data("custom-thumb")+'" alt=""></div>')}(),e(".tp-bullets .bullet").each(function(){var t=e(this);t.on("mouseenter mouseleave",function(){t.children(".custom_thumb").toggleClass("active")})})})}!function(){var t=e(".camera_wrap");t.length&&(t.camera({height:"41%",navigation:!0,pagination:!0,playPause:!1,thumbnails:!1,time:4e3,transPeriod:1e3,navigationHover:!1,onLoaded:function(){var t=e(".camera_wrap .camera_src > [data-src]"),n=t.length,i=e(".camera_wrap .camera_pag_ul > li");if(!i.find(".custom_thumb").length){for(var a=0;a<n;a++)i.eq(a).append('<div class="custom_thumb tr_all_hover"><img src="'+t.eq(a).data("custom-thumb")+'" alt=""></div>');i.on("mouseenter mouseleave",function(){e(this).children(".custom_thumb").toggleClass("active")})}}}),t.find(".camera_prev").append('<i class="fa fa-angle-left"></i>'),t.find(".camera_next").append('<i class="fa fa-angle-right"></i>'))}(),e("body").on("click",".rating_list li",function(){e(this).siblings().removeClass("active"),e(this).addClass("active").prevAll().addClass("active")}),function(){e("#go_to_top").waypointInit("animate_horizontal_finished","0px",0,!0),e("#go_to_top").on("click",function(){e("html,body").animate({scrollTop:0},500)})}(),function(){e(".sw_button").on("click",function(){e(this).parent().toggleClass("opened").siblings().removeClass("opened")})}(),window.rmenu=function(){var t=e('nav[role="navigation"]'),n=e('[role="banner"]'),i=new Object;i.init=function(){i.scrollWidth=i.checkScrollWidth(),i.checkWindowSize(),e(window).on("resize",i.checkWindowSize)},i.checkScrollWidth=function(){var e=document.createElement("div");return e.className="scrollwidth",document.body.appendChild(e),e.offsetWidth-e.clientWidth},i.checkWindowSize=function(){e(window).width()+i.scrollWidth<768?(i.Activate(),t.find(".touch_open_sub,.current_click").removeClass("touch_open_sub current_click").children("a").removeClass("prevented")):e(window).width()+i.scrollWidth>767&&i.Deactivate()},i.Activate=function(){e("html").hasClass("md_touch")&&n.off(".touch"),n.off("click").on("click.responsivemenu","#menu_button",i.openClose),n.on("click.responsivemenu",".main_menu li a",i.openCloseSubMenu),e(".sub_menu_wrap").hide(),t.find(".touch_open_sub").removeClass("touch_open_sub").children("a").removeClass("prevented")},i.Deactivate=function(){n.off(".responsivemenu"),t.show().find("li").removeClass("current_click").end().find(".sub_menu_wrap").show().end().find(".prevented").removeClass("prevented").end().find(".touch_open_sub").removeClass("touch_open_sub"),e("#menu_button").removeClass("color_grey_light_2").addClass("color_blue"),e("html").hasClass("md_touch")&&n.off("click").on("click.touch",".main_menu li a",i.touchOpenSubMenu)},i.openClose=function(){e(this).toggleClass("active"),t.stop().slideToggle()},i.openCloseSubMenu=function(t){var n=e(this);n.next(".sub_menu_wrap").length&&(n.parent().addClass("current_click").siblings().removeClass("current_click").children(":not(a)").slideUp(),n.next().stop().slideToggle(),n.parent().siblings().children("a").removeClass("prevented"),n.hasClass("prevented")?n.removeClass("prevented"):(t.preventDefault(),n.addClass("prevented")))},i.touchOpenSubMenu=function(t){var n=e(this);n.next(".sub_menu_wrap").length&&(n.hasClass("prevented")?n.removeClass("prevented"):(t.preventDefault(),n.addClass("prevented")),e(this).parent().toggleClass("touch_open_sub").siblings().removeClass("touch_open_sub").children("a").removeClass("prevented").parent().find(".touch_open_sub").removeClass("touch_open_sub").children("a").removeClass("prevented"))},i.init()},rmenu(),function(){e(".custom_select").each(function(){var t=e(this).children("ul"),n=e(this).find("select"),i=e(this).find(".select_title");if(i.css("min-width",i.outerWidth()),e(this).find("[data-filter]").length)for(var a=0,o=n.children("option").length;a<o;a++)t.append('<li data-filter="'+n.children("option").eq(a).data("filter")+'" class="tr_delay_hover">'+n.children("option").eq(a).text()+"</li>");else for(var a=0,o=n.children("option").length;a<o;a++)t.append('<li class="tr_delay_hover">'+n.children("option").eq(a).text()+"</li>");n.hide(),i.on("click",function(){t.slideToggle(400),e(this).toggleClass("active")}),t.on("click","li",function(){var a=e(this).text();i.text(a),t.slideUp(400),n.val(a),i.toggleClass("active")})})}(),function(){e(".select_color").on("click",function(){e(this).addClass("active").parent().siblings().children("button").removeClass("active")});e(".close_fieldset").on("click",function(){e(this).closest("fieldset").animate({opacity:"0"},function(){e(this).slideUp()})}),e(".categories_list").on("click","a",function(t){e(this).parent().children("ul").length&&(e(this).parent().toggleClass("active").end().next().slideToggle(),t.preventDefault())}),e(".categories_list > li > a").on("click",function(t){e(this).parent().children("ul").length&&(e(this).toggleClass("scheme_color").toggleClass("color_dark"),t.preventDefault())})}(),function(){e(".quantity").on("click","button",function(){var t=e(this).data("direction"),n=e(this).parent().children('input[type="text"]'),i=n.val();if("up"==t)i++,n.val(i);else if("down"==t){if(1==i)return;i--,n.val(i)}})}(),function(){e("[data-popup]").length&&e("body").on("click","[data-popup]",function(t){var n=e(this).data("popup"),i=e(n).find(".popup"),a=e(".popup > .close"),o=e(this).data("href");console.log(o),e.post("",{msquickview:o},function(t){if("undefined"!=typeof t.output){e(i).html(t.output);var n=e(".popup_wrap .qv_preview > img");e(".popup_wrap .qv_carousel .owl-item:first-child li").addClass("active"),e(".popup_wrap .qv_carousel").on("click","li:not(.active)",function(){e(this).addClass("active").parent().siblings().children("li").removeClass("active");var t=e(this).data("src");e("html").hasClass("ie9")?n.attr("src",t):(n.addClass("hide"),setTimeout(function(){n.attr("src",t).removeClass("hide")},400)),e('.popup_wrap [class*="qv_carousel"]').each(function(){var t=e(this).closest(".qv_carousel_wrap").prev(".qv_preview").children("img");e(this).on("click","li",function(){var n=e(this).data("src");e("html").hasClass("ie9")?t.attr("src",n):(t.addClass("hide"),setTimeout(function(){t.attr("src",n).removeClass("hide")},400))})})});var a=setTimeout(function(){var t=e(i).outerHeight()/-2,n=e(i).outerWidth()/-2;console.log(t),console.log(n),e(i).css({"margin-left":n,"margin-top":t}),clearTimeout(a)},100)}},"json")&&(console.log("loaded content"),console.log("end position")),a.on("click",function(){e(this).closest(".popup_wrap").fadeOut()}),e(n).fadeIn(function(){var t=e(".custom_scrollbar");if(t.length)var i=setInterval(function(){t.is(":visible")&&(t.customScrollbar({preventDefaultScroll:!0}),clearInterval(i))},150);e(n).on("click",function(t){e(t.target).hasClass("popup_wrap")&&e(this).fadeOut()})}),t.preventDefault()})}(),function(){var t=e(".tabs");t.length&&t.tabs({hide:{effect:"fadeOut",duration:450},show:{effect:"fadeIn",duration:450}})}(),function(){var t=e(".accordion:not(.toggle) .accordion_item"),n=t.find(".a_title"),i=e(".accordion.toggle .accordion_item"),a=i.find(".a_title");t.add(i).children(".a_title").not(".active").next().hide(),n.on("click",function(){e(this).removeClass("bg_light_color_1 color_dark").addClass("active color_light").next().stop().slideDown().parent().siblings().children(".a_title").removeClass("active color_light").addClass("bg_light_color_1 color_dark").next().stop().slideUp()}),a.on("click",function(){e(this).toggleClass("active color_light bg_light_color_1 color_dark").next().stop().slideToggle()})}(),function(){var t=e(".block_select");t.each(function(){var t=e(this);t.find('input[type="radio"]').is(":checked")&&t.addClass("selected")}),t.on("click",function(){e(this).addClass("selected").find('input[type="radio"]').prop("checked",!0).end().siblings(".selected").removeClass("selected")})}(),n(),e(window).on("resize",n),function(){var t=e("#contactform");t.append('<div class="message_container d_none m_top_20"></div>'),t.on("submit",function(n){var i,a=e(this),o=e.ajax({url:"bat/mail.php",type:"post",data:a.serialize()});o.then(function(n){"1"==n?(i="Your message has been sent successfully!",t.find('input:not([type="submit"]),textarea').val(""),e(".message_container").html('<div class="alert_box r_corners color_green success"><i class="fa fa-smile-o"></i><p>'+i+"</p></div>").delay(150).slideDown(300).delay(4e3).slideUp(300,function(){e(this).html("")})):(t.find("textarea").val().length<20&&(i="Message must contain at least 20 characters!"),""==t.find("input").val()&&(i="All required fields must be filled!"),e(".message_container").html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>'+i+"</p></div>").delay(150).slideDown(300).delay(4e3).slideUp(300,function(){e(this).html("")}))},function(){e(".message_container").html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>Connection to server failed!</p></div>').delay(150).slideDown(300).delay(4e3).slideUp(300,function(){e(this).html("")})}),n.preventDefault()})}(),function(){var t=e("#newsletter");t.append('<div class="message_container_subscribe d_none m_top_20"></div>');var n,i=e(".message_container_subscribe");t.on("submit",function(t){var a=e(this);""==a.find('input[type="email"]').val()?(n="Please enter your e-mail!",i.html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>'+n+"</p></div>").slideDown().delay(4e3).slideUp(function(){e(this).html("")})):(a.find("span.error").hide(),e.ajax({type:"POST",url:"bat/newsletter.php",data:a.serialize(),success:function(t){"1"==t?(n="Your email has been sent successfully!",i.html('<div class="alert_box r_corners color_green success"><i class="fa fa-smile-o"></i><p>'+n+"</p></div>").slideDown().delay(4e3).slideUp(function(){e(this).html("")}).prevAll('input[type="email"]').val("")):(n="Invalid email address!",i.html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>'+n+"</p></div>").slideDown().delay(4e3).slideUp(function(){e(this).html("")}))}})),t.preventDefault()})}(),function(){if(e("[data-zoom-image]").length){var t=e('.qv_preview [class*="button_type_"]');e("#zoom_image").elevateZoom({gallery:"qv_carousel_single",zoomWindowFadeIn:500,zoomWindowFadeOut:500}),t.on("click",function(t){var n=e("#zoom_image").data("elevateZoom");e.fancybox(n.getGalleryList()),t.preventDefault()})}}(),function(){var t=e('[class*="first_letter"]');t.each(function(){var t=e(this),n=t.text().charAt(0);t.text(t.text().substr(1)).prepend('<span class="fl r_corners t_align_c f_left d_block">'+n+"</span>")})}()}),e(window).load(function(){function t(t,n){var i=n,a=[],o=i.length;if(i.removeClass("random"),".random"===t){for(var s=0;s<o;s++)a.push(+(Math.random()*o).toFixed());e.each(a,function(e,t){n.eq(Math.floor(Math.random()*t-1)).addClass("random")})}}!function(){if(e(".products_container").length){var n=e(".products_container");n.isotope({itemSelector:".product_item",layoutMode:"fitRows"}),e(".isotope_menu").on("click","button",function(){var i=e(this),a=i.attr("data-filter");t.call(i,i.data("filter"),n.find(".product_item")),i.closest("li").addClass("active").siblings().removeClass("active"),n.isotope({filter:a})})}if(e(".portfolio_isotope_container").length){var n=e(".portfolio_isotope_container");n.isotope({itemSelector:".portfolio_item",layoutMode:"fitRows"}),e("#filter_portfolio").on("click","li",function(){var t=e(this),i=t.data("filter");n.isotope({filter:i})})}if(e(".portfolio_masonry_container").length){var i=e(".portfolio_masonry_container");i.isotope({itemSelector:".portfolio_item",layoutMode:"masonry",masonry:{columnWidth:10,gutter:0}}),e("#filter_portfolio").on("click","li",function(){var t=e(this),n=t.data("filter");i.isotope({filter:n})})}}(),function(){var t=e(".flexslider:not(.simple_slide_show)");t.length&&t.flexslider({animation:"slide",animationSpeed:1e3,prevText:"<i class='fa fa-angle-left'></i>",nextText:"<i class='fa fa-angle-right'></i>",slideshow:!1,start:function(){for(var t=e(".flexslider [data-custom-thumb]"),n=t.length,i=e(".flex-control-nav li"),a=0;a<n;a++)i.eq(a).append('<div class="custom_thumb tr_all_hover"><img src="'+t.eq(a).data("custom-thumb")+'" alt=""></div>');e(".flex-control-nav li").each(function(){var t=e(this);t.on("mouseenter mouseleave",function(){t.children(".custom_thumb").toggleClass("active")})}),i.find(".custom_thumb").on("click",function(){return!1})}})}(),function(){function t(){var t=e(this),n=t.data("flexslider").currentSlide;t.find(".slides").children("li").eq(n+1).children(".simple_s_caption").addClass("active").parent().siblings().children(".simple_s_caption").removeClass("active")}var n=e(".simple_slide_show");n.length&&n.each(function(){var n=e(this);n.flexslider({animation:"slide",animationSpeed:1e3,prevText:"<i class='fa fa-angle-left'></i>",nextText:"<i class='fa fa-angle-right'></i>",slideshow:!0,controlNav:!1,start:function(){t.call(n)},after:function(){t.call(n)}})})}()})}(jQuery),$(".home .products_container .product_item:nth-child(3n+2)").addClass("hit"),$(".home .products_container .product_item:nth-child(3n+1)").addClass("new"),$(".home .products_container .product_item:nth-child(3n)").addClass("specials"),$(document).ready(function(){$(".archive").hasClass("home")&&$(".products_container").removeClass("col-md-9")}),$(document).ready(function(){$(".archive").hasClass("home")&&$(".products_container").removeClass("col-lg-9")}),$(document).ready(function(){$(".archive").hasClass("home")&&$(".products_container").removeClass("col-sm-9")}),$(document).ready(function(){var e=$("#owl-demo");e.owlCarousel({navigation:!0,navigationText:["<",">"],slideSpeed:300,paginationSpeed:400,singleItem:!0,loop:!0,autoplay:!0,autoplayTimeout:4500,items:1}),e.on("changed.owl.carousel",function(e){$(".slider-text").css("opacity","1"),$(".slider-text").css("transform","translateY(50px)"),$(".slider-button").css("opacity","1"),$(".slider-button").css("transform","translateY(-50px)")})});
//# sourceMappingURL=maps/scripts.js.map
