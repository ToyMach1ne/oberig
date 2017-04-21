// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

// on document ready
(function($) {
  "use strict";

  var globalDfd = $.Deferred();
  $(window).bind('load', function() {
    // after loading all the scripts
    globalDfd.resolve();
  });

  $(function() {

    $.fx.speeds._default = 500;

    // open dropdown

    $.fn.css3Animate = function(element) {
      return $(this).on('click', function(e) {
        var dropdown = element;
        $(this).toggleClass('active');
        e.preventDefault();
        if (dropdown.hasClass('opened')) {
          dropdown.removeClass('opened').addClass('closed');
          setTimeout(function() {
            dropdown.removeClass('closed')
          }, 500);
        } else {
          dropdown.addClass('opened');
        }
      });
    }
    $('#lang_button').css3Animate($('#lang_button').next('.dropdown_list'));
    $('#currency_button').css3Animate($('#currency_button').next('.dropdown_list'));

    // waypoints helper functions

    $.fn.waypointInit = function(classN, offset, delay, inv) {
      return $(this).waypoint(function(direction) {
        var current = $(this);
        if (direction === 'down') {
          if (delay) {
            setTimeout(function() {
              current.addClass(classN);
            }, delay);
          } else {
            current.addClass(classN);
          }
        } else {
          if (inv == true) {
            current.removeClass(classN);
          }
        }
      }, {
        offset: offset
      })
    };

    // synchronise

    $.fn.waypointSynchronise = function(config) {
      var element = $(this);

      function addClassToElem(el, eq) {
        el.eq(eq).addClass(config.classN);
      }
      element.closest(config.container).waypoint(function(direction) {
        element.each(function(i) {
          if (direction === 'down') {

            if (config.globalDelay != undefined) {
              setTimeout(function() {
                setTimeout(function() {
                  addClassToElem(element, i);
                }, i * config.delay);
              }, config.globalDelay);
            } else {
              setTimeout(function() {
                addClassToElem(element, i)
              }, i * config.delay);
            }

          } else {

            if (config.inv) {
              setTimeout(function() {
                element.eq(i).removeClass(config.classN);
              }, i * config.delay);
            }

          }
        });
      }, {
        offset: config.offset
      });
      return element;
    };

    // animation main page

    (function() {
      globalDfd.done(function() {
        $('.products_container:not(.a_type_2) .photoframe.animate_ftb').waypointSynchronise({
          container: '.products_container',
          delay: 200,
          offset: 700,
          classN: "animate_vertical_finished"
        });
        $('.products_container.a_type_2 .photoframe.animate_ftb').waypointSynchronise({
          container: '.products_container',
          delay: 200,
          offset: 700,
          classN: "animate_vertical_finished"
        });
        $('.wfilter_carousel .photoframe.animate_ftb').waypointSynchronise({
          container: '.wfilter_carousel',
          delay: 200,
          offset: 700,
          classN: "animate_vertical_finished"
        });
        $('.bestsellers_carousel .photoframe.animate_ftb').waypointSynchronise({
          container: '.bestsellers_carousel',
          delay: 200,
          offset: 700,
          globalDelay: 400,
          classN: "animate_vertical_finished"
        });
        $('.banner_type_2[class*="animate_ft"]').waypointSynchronise({
          container: '.row',
          delay: 200,
          offset: 800,
          classN: "animate_vertical_finished"
        });
        $('.animate_half_tc').waypointSynchronise({
          container: '.row',
          delay: 0,
          offset: 830,
          classN: "animate_horizontal_finished"
        });
        $('.heading2').waypointInit('animate_sj_finished animate_fade_finished', '800px');
        $('.nav_buttons_wrap.animate_fade').waypointInit('animate_sj_finished animate_fade_finished', '800px');
        $('.product_brands a.animate_fade').waypointSynchronise({
          container: '.product_brands',
          delay: 200,
          offset: 830,
          classN: "animate_sj_finished animate_fade_finished"
        });
        $('.blog_carousel a.photoframe').waypointSynchronise({
          container: '.blog_animate.animate_ftr',
          delay: 0,
          offset: 830,
          classN: "animate_vertical_finished"
        });
        $('.blog_carousel .mini_post_content > .animate_ftr').waypointSynchronise({
          container: '.blog_animate.animate_ftr',
          delay: 200,
          offset: 830,
          classN: "animate_horizontal_finished"
        });
        $('.blog_animate.animate_ftr').waypointInit('animate_horizontal_finished', '800px');
        $('.ti_animate.animate_ftr').waypointInit('animate_horizontal_finished', '800px', 1000);
        $('.testiomials_carousel .animate_ftr:first').waypointInit('animate_horizontal_finished', '851px', 1200);
        $('.testiomials_carousel .animate_ftr:nth-child(2)').waypointInit('animate_horizontal_finished', '973px', 1400);
        $('.testiomials_carousel .animate_ftr:nth-child(3)').waypointInit('animate_horizontal_finished', '987px', 1600);
        $('.heading1.animate_ftr').waypointInit('animate_horizontal_finished', '1000px');
        $('.isotope_menu > li.animate_ftr').waypointSynchronise({
          container: '.isotope_menu',
          delay: 200,
          offset: 1000,
          classN: "animate_horizontal_finished"
        });
        $('.flexslider.animate_ftr').waypointInit('animate_horizontal_finished', '1000px');
        setTimeout(function() {
          $('.s_banners .d_block.animate_ftr').waypointSynchronise({
            container: '.s_banners',
            delay: 300,
            offset: 830,
            classN: "animate_horizontal_finished"
          });
        }, 200);
        $('.widget.animate_ftr').waypointInit('animate_horizontal_finished', '800px', 200);
        $('.heading5').waypointInit('animate_horizontal_finished', '800px');
        $('.banner.animate_ftr').waypointSynchronise({
          container: '.row',
          delay: 200,
          offset: 1000,
          globalDelay: 800,
          classN: "animate_horizontal_finished"
        });
        $('.nc_carousel .photoframe.animate_ftb').waypointSynchronise({
          container: '.nc_carousel',
          delay: 200,
          offset: 700,
          classN: "animate_vertical_finished"
        });
        $('.info_blocks_container .animate_ftr').waypointSynchronise({
          container: '.info_blocks_container',
          delay: 200,
          offset: 700,
          classN: "animate_vertical_finished"
        });
        $('.our_recent_work_carousel .animate_ftb').waypointSynchronise({
          container: '.our_recent_work_carousel',
          delay: 200,
          offset: 700,
          classN: "animate_vertical_finished"
        });
        $('.p_tables .animate_fade').waypointSynchronise({
          container: '.p_tables',
          delay: 200,
          offset: 700,
          classN: "animate_fade_finished"
        });
        $('.animate_corporate_container .animate_fade').waypointSynchronise({
          container: '.animate_corporate_container',
          delay: 200,
          offset: 700,
          classN: "animate_fade_finished"
        });

        // sticky menu

        window.sticky = function() {
          var container = $('[role=banner] .h_bot_part'),
            offset = container.closest('[role="banner"]').hasClass('type_5') ? 0 : -container.outerHeight(),
            menu = $('.menu_wrap'),
            mHeight = menu.outerHeight();
          console.log(mHeight);
          container.waypoint(function(direction) {
            var _this = $(this);
            if (direction == "down") {
              menu.addClass('sticky');
              container.parent('[role="banner"]').css('border-bottom', mHeight + "px solid transparent");
            } else if (direction == "up") {
              menu.removeClass('sticky');
              container.parent('[role="banner"]').css('border-bottom', 'none');
            }
          }, {
            offset: offset
          });

          function getMenuWidth() {
            if (menu.hasClass('type_2')) {
              menu.css('width', menu.parent().width());
            }
          }
          getMenuWidth();
          $(window).on('resize', getMenuWidth);
        };
        sticky();

      });
    })();

    // jackbox

    (function() {

      if ($(".jackbox[data-group]").length) {
        jQuery(".jackbox[data-group]").jackBox("init", {
          showInfoByDefault: false,
          preloadGraphics: true,
          fullscreenScalesContent: true,
          autoPlayVideo: true,
          flashVideoFirst: false,
          defaultVideoWidth: 960,
          defaultVideoHeight: 540,
          baseName: ".jackbox",
          className: ".jackbox",
          useThumbs: true,
          thumbsStartHidden: false,
          thumbnailWidth: 75,
          thumbnailHeight: 50,
          useThumbTooltips: true,
          showPageScrollbar: false,
          useKeyboardControls: true
        });
      }

    })();

    // remove products from shopping cart

    $('[role="banner"]').on('click', '.close_product', function() {
      $(this).closest('li').animate({
        'opacity': '0'
      }, function() {
        $(this).slideUp(500);
      });
    });

    // shopping cart hover

    $('#shopping_button').on('mouseenter', function() {
      $(this).css('z-index', '300');
    }).on('mouseleave', function() {
      $(this).css('z-index', '189');
    });

    // searchform

    (function() {
      $('[role="banner"]').on('click', '.search_button', function() {
        $('.searchform_wrap').addClass('opened');
      });
      $('[role="banner"]').on('click', '.close_search_form', function() {
        $('.searchform_wrap').removeClass('opened').addClass('closed');
        setTimeout(function() {
          $('.searchform_wrap').removeClass('closed');
        }, 400)
      });
    })();

    // ie9 placeholder

    (function() {
      if ($('html').hasClass('ie9')) {
        $('input[placeholder]').each(function() {
          $(this).val($(this).attr('placeholder'));
          var v = $(this).val();
          $(this).on('focus', function() {
            if ($(this).val() === v) {
              $(this).val("");
            }
          }).on("blur", function() {
            if ($(this).val() == "") {
              $(this).val(v);
            }
          });
        });

      }
    })();

    // revolution slider

    if ($('.r_slider').length) {
      var api = $('.r_slider').revolution({
        delay: 5000,
        startwidth: 1140,
        startheight: 288,
        autoHeight: "off",
        fullScreenAlignForce: "off",

        onHoverStop: "on",

        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 3,

        hideThumbsOnMobile: "off",
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResoluition: 0,

        hideTimerBar: "on",
        hideThumbs: 0,

        navigationType: "bullet",
        navigationArrows: "solo",
        navigationStyle: "round",

        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 15,

        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 40,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 40,
        soloArrowRightVOffset: 0,


        touchenabled: "on",

        stopAtSlide: -1,
        stopAfterLoops: -1,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        hideSliderAtLimit: 0,

        dottedOverlay: "none",

        fullWidth: "off",
        forceFullWidth: "off",
        fullScreen: "off",
        fullScreenOffsetContainer: "#topheader-to-offset",

        shadow: 0

      });
      api.bind("revolution.slide.onloaded", function(e, data) {
        var container = $('.revolution_slider');
        container.find('.tp-leftarrow').append('<i class="fa fa-angle-left"></i>');
        container.find('.tp-rightarrow').append('<i class="fa fa-angle-right"></i>');
        // $('.tp-leftarrow,.tp-rightarrow').fadeIn(1500);

        // create custom thumbs

        (function() {
          var image = $('.r_slider [data-custom-thumb]'),
            len = image.length,
            bullet = $('.tp-bullets .bullet');
          for (var i = 0; i < len; i++) {
            bullet.eq(i).append('<div class="custom_thumb tr_all_hover"><img src="' + image.eq(i).data('custom-thumb') + '" alt=""></div>');
          }
        })();

        $('.tp-bullets .bullet').each(function() {
          var curr = $(this);
          curr.on("mouseenter mouseleave", function() {
            curr.children('.custom_thumb').toggleClass('active')
          });
        });
      });

    }

    // carousel with filter


    // camera slideshow

    (function() {
      var cs = $('.camera_wrap');

      if (cs.length) {

        cs.camera({
          height: '41%',
          navigation: true,
          pagination: true,
          playPause: false,
          thumbnails: false,
          time: 4000,
          transPeriod: 1000,
          navigationHover: false,
          onLoaded: function() {
            var image = $('.camera_wrap .camera_src > [data-src]'),
              len = image.length,
              bullet = $('.camera_wrap .camera_pag_ul > li');
            if (bullet.find('.custom_thumb').length) return;
            for (var i = 0; i < len; i++) {
              bullet.eq(i).append('<div class="custom_thumb tr_all_hover"><img src="' + image.eq(i).data('custom-thumb') + '" alt=""></div>');
            }
            bullet.on("mouseenter mouseleave", function() {
              $(this).children('.custom_thumb').toggleClass("active");
            });
          }
        });

        cs.find('.camera_prev').append('<i class="fa fa-angle-left"></i>');
        cs.find('.camera_next').append('<i class="fa fa-angle-right"></i>');
      }
    })();

    // rating

    $('body').on('click', '.rating_list li', function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active').prevAll().addClass('active');
    });

    // product brands carousel


    // go to top button

    (function() {
      $('#go_to_top').waypointInit('animate_horizontal_finished', '0px', 0, true);
      $('#go_to_top').on('click', function() {
        $('html,body').animate({
          scrollTop: 0
        }, 500);
      });
    })();

    // social widgets

    (function() {
      $('.sw_button').on('click', function() {
        $(this).parent().toggleClass('opened').siblings().removeClass('opened');
      });
    })();

    // responsive menu

    window.rmenu = function() {

      var nav = $('nav[role="navigation"]'),
        header = $('[role="banner"]');

      var rMenu = new Object();

      rMenu.init = function() {
        rMenu.scrollWidth = rMenu.checkScrollWidth();
        rMenu.checkWindowSize();
        $(window).on('resize', rMenu.checkWindowSize);
      }

      rMenu.checkScrollWidth = function() {

        var element = document.createElement("div");
        element.className = "scrollwidth";
        document.body.appendChild(element);
        return element.offsetWidth - element.clientWidth;

      }

      rMenu.checkWindowSize = function() {

          if ($(window).width() + rMenu.scrollWidth < 768) {
            rMenu.Activate();
            nav.find('.touch_open_sub,.current_click').removeClass('touch_open_sub current_click').children('a').removeClass('prevented');
          } else if ($(window).width() + rMenu.scrollWidth > 767) {
            rMenu.Deactivate();
          }

        }
        // add click events
      rMenu.Activate = function() {

          if ($('html').hasClass('md_touch')) header.off('.touch');

          header.off('click').on('click.responsivemenu', '#menu_button', rMenu.openClose);

          header.on('click.responsivemenu', '.main_menu li a', rMenu.openCloseSubMenu);

          $('.sub_menu_wrap').hide();

          nav.find('.touch_open_sub').removeClass('touch_open_sub').children('a').removeClass('prevented');

        }
        // remove click events
      rMenu.Deactivate = function() {

        header.off('.responsivemenu');

        nav.show().find('li').removeClass('current_click')
          .end().find('.sub_menu_wrap').show().end().find('.prevented').removeClass('prevented').end()
          .find('.touch_open_sub').removeClass('touch_open_sub');

        $('#menu_button').removeClass('color_grey_light_2').addClass('color_blue');

        if ($('html').hasClass('md_touch')) header.off('click').on('click.touch', '.main_menu li a', rMenu.touchOpenSubMenu);

      }

      rMenu.openClose = function() {

        $(this).toggleClass('active');
        nav.stop().slideToggle();

      }

      rMenu.openCloseSubMenu = function(e) {

        var self = $(this);

        if (self.next('.sub_menu_wrap').length) {
          self.parent()
            .addClass('current_click')
            .siblings()
            .removeClass('current_click')
            .children(':not(a)')
            .slideUp();
          self.next().stop().slideToggle();
          self.parent().siblings().children('a').removeClass('prevented');

          if (!(self.hasClass('prevented'))) {
            e.preventDefault();
            self.addClass('prevented');
          } else {
            self.removeClass('prevented');
          }
        }

      }

      rMenu.touchOpenSubMenu = function(event) {
        var self = $(this);

        if (self.next('.sub_menu_wrap').length) {

          if (!(self.hasClass('prevented'))) {
            event.preventDefault();
            self.addClass('prevented');
          } else {
            self.removeClass('prevented');
          }

          $(this).parent().toggleClass('touch_open_sub').siblings().removeClass('touch_open_sub').children('a').removeClass('prevented')
            .parent().find('.touch_open_sub').removeClass('touch_open_sub').children('a').removeClass('prevented');

        }
      }

      rMenu.init();
    }

    rmenu();

    // custom select

    (function() {

      $('.custom_select').each(function() {
        var list = $(this).children('ul'),
          select = $(this).find('select'),
          title = $(this).find('.select_title');
        title.css('min-width', title.outerWidth());

        // select items to list items

        if ($(this).find('[data-filter]').length) {
          for (var i = 0, len = select.children('option').length; i < len; i++) {
            list.append('<li data-filter="' + select.children('option').eq(i).data('filter') + '" class="tr_delay_hover">' + select.children('option').eq(i).text() + '</li>')
          }
        } else {
          for (var i = 0, len = select.children('option').length; i < len; i++) {
            list.append('<li class="tr_delay_hover">' + select.children('option').eq(i).text() + '</li>')
          }
        }
        select.hide();

        // open list

        title.on('click', function() {
          list.slideToggle(400);
          $(this).toggleClass('active');
        });

        // selected option

        list.on('click', 'li', function() {
          var val = $(this).text();
          title.text(val);
          list.slideUp(400);
          select.val(val);
          title.toggleClass('active');
        });

      });

    })();

    // widgets

    (function() {
      /*var slider;
      if($('#price').length){
        slider = $('#price').slider({
          orientation: "horizontal",
          range: true,
          values: [ 0, 237 ],
          min: 0,
          max: 250,
          slide : function(event ,ui){
            $(this).next().find('.first_limit').val('$' + ui.values[0]);
            $(this).next().find('.last_limit').val('$' + ui.values[1]);
          }
        });
      }*/

      var color = $('.select_color').on('click', function() {
        $(this).addClass('active').parent().siblings().children('button').removeClass('active');
      });

      $('.close_fieldset').on('click', function() {
        $(this).closest('fieldset').animate({
          'opacity': '0'
        }, function() {
          $(this).slideUp();
        });
      });

      /*$('button[type="reset"]:not(#styleswitcher button[type="reset"])').on('click',function(){
        color.eq(0).addClass('active').parent().siblings().children('button').removeClass('active');
        slider.slider( "option", "values", [ 0, 237 ] );
      }); */

      $('.categories_list').on('click', 'a', function(e) {
        if ($(this).parent().children('ul').length) {
          $(this).parent().toggleClass('active').end().next().slideToggle();
          e.preventDefault();
        }
      });

      $('.categories_list > li > a').on('click', function(e) {
        if ($(this).parent().children('ul').length) {
          $(this).toggleClass('scheme_color').toggleClass('color_dark');
          e.preventDefault();
        }
      });

    })();

    // twitter
    /*
      (function(){
        $('.twitterfeed').tweet({
          username: 'fanfbmltemplate',
          modpath : 'twitter/',
              count: 2,
              loading_text: 'loading twitter feed...',
              template: '<a class="color_dark" href="{user_url}">@{screen_name}</a> {text}<div>{time}</div><ul class="horizontal_list clearfix tw_buttons"><li>{reply_action}</li><li class="m_left_5">{retweet_action}</li><li class="m_left_5">{favorite_action}</li></ul>'
          });
      })();
    */

    // quantity

    (function() {

      $('.quantity').on('click', 'button', function() {
        var data = $(this).data('direction'),
          i = $(this).parent().children('input[type="text"]'),
          val = i.val();
        if (data == "up") {
          val++;
          i.val(val);
        } else if (data == "down") {
          if (val == 1) return;
          val--;
          i.val(val);
        }
      });

    })();

    // popup

    (function() {
      /*
      $('.popup').on('popup/position',function(){
        //позиционирование окна
        console.log("position start");

        var _this = $(this),
        pos = setTimeout(function(){
          var mt = _this.outerHeight() / -2,
            ml = _this.outerWidth() / -2;
          _this.css({
            'margin-left':ml,
            'margin-top':mt
          });
          clearTimeout(pos);
        },100);
      });
      */
      if ($('[data-popup]').length) {
        $("body").on('click', '[data-popup]', function(e) {
          //открытие окна
          var popup = $(this).data('popup'),
            pc = $(popup).find('.popup');
          var close = $('.popup > .close');
          var id_product = $(this).data('href');
          console.log(id_product);
          if ($.post("", {
              msquickview: id_product
            }, function(response) {
              if (typeof response.output !== "undefined") {
                $(pc).html(response.output);

                var pr = $('.popup_wrap .qv_preview > img');
                $('.popup_wrap .qv_carousel .owl-item:first-child li').addClass('active');
                $('.popup_wrap .qv_carousel').on('click', 'li:not(.active)', function() {
                  $(this).addClass('active').parent().siblings().children('li').removeClass('active');
                  var src = $(this).data('src');
                  if (!($('html').hasClass('ie9'))) {
                    pr.addClass('hide');
                    setTimeout(function() {
                      pr.attr('src', src).removeClass('hide');
                    }, 400);
                  } else {
                    pr.attr('src', src);
                  }
                  $('.popup_wrap [class*="qv_carousel"]').each(function() {
                    var pr = $(this).closest('.qv_carousel_wrap').prev('.qv_preview').children('img');
                    $(this).on('click', 'li', function() {
                      var src = $(this).data('src');
                      if (!($('html').hasClass('ie9'))) {
                        pr.addClass('hide');
                        setTimeout(function() {
                          pr.attr('src', src).removeClass('hide');
                        }, 400);
                      } else {
                        pr.attr('src', src);
                      }
                    });
                  });
                });

                var pos = setTimeout(function() {
                  var mt = $(pc).outerHeight() / -2,
                    ml = $(pc).outerWidth() / -2;
                  console.log(mt);
                  console.log(ml);
                  $(pc).css({
                    'margin-left': ml,
                    'margin-top': mt
                  });
                  clearTimeout(pos);
                }, 100);



              }
            }, "json")) {

            console.log("loaded content");
            //pc.trigger('popup/position');


            console.log("end position");
          }

          //console.log("after trigger");}

          close.on('click', function() {
            $(this).closest('.popup_wrap').fadeOut();
          });


          $(popup).fadeIn(function() {
            var scroll = $('.custom_scrollbar');
            if (scroll.length) {
              var isVisible = setInterval(function() {
                if (scroll.is(':visible')) {
                  scroll.customScrollbar({
                    preventDefaultScroll: true
                  });
                  clearInterval(isVisible);
                }
              }, 150);

            }

            //клик по оберткt для закрытия
            $(popup).on('click', function(e) {
              if ($(e.target).hasClass('popup_wrap')) {
                $(this).fadeOut();
              }
            });
          });
          e.preventDefault();
        });
      }

    })();

    // tabs

    (function() {
      var tabs = $('.tabs');
      if (tabs.length) {
        tabs.tabs({
          hide: {
            effect: "fadeOut",
            duration: 450
          },
          show: {
            effect: "fadeIn",
            duration: 450
          }
        });
      }
    })();

    // accordion & toggle

    (function() {

      var aItem = $('.accordion:not(.toggle) .accordion_item'),
        link = aItem.find('.a_title'),
        aToggleItem = $('.accordion.toggle .accordion_item'),
        tLink = aToggleItem.find('.a_title');

      aItem.add(aToggleItem).children('.a_title').not('.active').next().hide();


      link.on('click', function() {

        $(this).removeClass('bg_light_color_1 color_dark')
          .addClass('active color_light')
          .next().stop().slideDown()
          .parent().siblings()
          .children('.a_title')
          .removeClass('active color_light')
          .addClass('bg_light_color_1 color_dark')
          .next().stop().slideUp();

      });

      tLink.on('click', function() {
        $(this).toggleClass('active color_light bg_light_color_1 color_dark')
          .next().stop().slideToggle();

      })

    })();

    // block select

    (function() {
      var b = $('.block_select');

      b.each(function() {
        var _this = $(this);
        if (_this.find('input[type="radio"]').is(':checked')) _this.addClass('selected');
      });
      b.on('click', function() {
        $(this)
          .addClass('selected')
          .find('input[type="radio"]')
          .prop('checked', true)
          .end()
          .siblings('.selected')
          .removeClass('selected')
      });

    })();

    // special carousel

    function ellipsis() {
      var el = $('.ellipsis').hide();
      el.each(function() {
        var self = $(this);
        self.css({
          'width': self.parent().outerWidth(),
          'white-space': 'nowrap'
        });
        self.show();
      });
    }
    ellipsis();
    $(window).on('resize', ellipsis);

    // contact form

    (function() {

      var cf = $('#contactform');
      cf.append('<div class="message_container d_none m_top_20"></div>');

      cf.on("submit", function(event) {

        var self = $(this),
          text;

        var request = $.ajax({
          url: "bat/mail.php",
          type: "post",
          data: self.serialize()
        });

        request.then(function(data) {
          if (data == "1") {

            text = "Your message has been sent successfully!";

            cf.find('input:not([type="submit"]),textarea').val('');

            $('.message_container').html('<div class="alert_box r_corners color_green success"><i class="fa fa-smile-o"></i><p>' + text + '</p></div>')
              .delay(150)
              .slideDown(300)
              .delay(4000)
              .slideUp(300, function() {
                $(this).html("");
              });

          } else {
            if (cf.find('textarea').val().length < 20) {
              text = "Message must contain at least 20 characters!"
            }
            if (cf.find('input').val() == "") {
              text = "All required fields must be filled!";
            }
            $('.message_container').html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>' + text + '</p></div>')
              .delay(150)
              .slideDown(300)
              .delay(4000)
              .slideUp(300, function() {
                $(this).html("");
              });
          }
        }, function() {
          $('.message_container').html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>Connection to server failed!</p></div>')
            .delay(150)
            .slideDown(300)
            .delay(4000)
            .slideUp(300, function() {
              $(this).html("");
            });
        });


        event.preventDefault();
      });

    })();

    // newsletter

    (function() {

      var subscribe = $('#newsletter');
      subscribe.append('<div class="message_container_subscribe d_none m_top_20"></div>');
      var message = $('.message_container_subscribe'),
        text;

      subscribe.on('submit', function(e) {
        var self = $(this);

        if (self.find('input[type="email"]').val() == '') {
          text = "Please enter your e-mail!";
          message.html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>' + text + '</p></div>')
            .slideDown()
            .delay(4000)
            .slideUp(function() {
              $(this).html("");
            });

        } else {
          self.find('span.error').hide();
          $.ajax({
            type: "POST",
            url: "bat/newsletter.php",
            data: self.serialize(),
            success: function(data) {
              if (data == '1') {
                text = "Your email has been sent successfully!";
                message.html('<div class="alert_box r_corners color_green success"><i class="fa fa-smile-o"></i><p>' + text + '</p></div>')
                  .slideDown()
                  .delay(4000)
                  .slideUp(function() {
                    $(this).html("");
                  })
                  .prevAll('input[type="email"]').val("");
              } else {
                text = "Invalid email address!";
                message.html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>' + text + '</p></div>')
                  .slideDown()
                  .delay(4000)
                  .slideUp(function() {
                    $(this).html("");
                  });
              }
            }
          });
        }
        e.preventDefault();
      });

    })();


    (function() {

      if ($('[data-zoom-image]').length) {

        var button = $('.qv_preview [class*="button_type_"]');

        $("#zoom_image").elevateZoom({
          gallery: 'qv_carousel_single',
          zoomWindowFadeIn: 500,
          zoomWindowFadeOut: 500
        });

        button.on("click", function(e) {
          var ez = $('#zoom_image').data('elevateZoom');
          $.fancybox(ez.getGalleryList());
          e.preventDefault();
        });
      }

    })();

    // first letter

    (function() {

      var dp = $('[class*="first_letter"]');

      dp.each(function() {
        var self = $(this),
          fl = self.text().charAt(0);
        self.text(self.text().substr(1)).prepend('<span class="fl r_corners t_align_c f_left d_block">' + fl + '</span>');
      });

    })();

  });

  $(window).load(function() {

    function randomSort(selector, items) {

      var sel = selector,
        it = items,
        random = [],
        len = it.length;
      it.removeClass('random');
      if (selector === ".random") {
        for (var i = 0; i < len; i++) {
          random.push(+(Math.random() * len).toFixed());
        }
        $.each(random, function(i, v) {
          items.eq(Math.floor(Math.random() * v - 1)).addClass('random');
        });
      }

    }

    // isotope
    (function() {

      if ($('.products_container').length) {

        var container = $('.products_container');

        container.isotope({
          itemSelector: '.product_item',
          layoutMode: 'fitRows'
        });


        //container.on('change',function(){$('.products_container').isotope({itemSelector : '.product_item',layoutMode : 'fitRows'});} );

        // filter items when filter link is clicked

        $('.isotope_menu').on('click', 'button', function() {
          var self = $(this),
            selector = self.attr('data-filter');
          randomSort.call(self, self.data('filter'), container.find('.product_item'));
          self.closest('li').addClass('active').siblings().removeClass('active');
          container.isotope({
            filter: selector
          });
        });
      }

      // portfolio

      if ($('.portfolio_isotope_container').length) {

        var container = $('.portfolio_isotope_container');

        container.isotope({
          itemSelector: '.portfolio_item',
          layoutMode: 'fitRows'
        });

        $('#filter_portfolio').on('click', 'li', function() {
          var self = $(this),
            selector = self.data('filter');
          container.isotope({
            filter: selector
          });
        });

      }

      if ($('.portfolio_masonry_container').length) {

        var container1 = $('.portfolio_masonry_container');

        container1.isotope({
          itemSelector: '.portfolio_item',
          layoutMode: 'masonry',
          masonry: {
            columnWidth: 10,
            gutter: 0
          }
        });

        $('#filter_portfolio').on('click', 'li', function() {
          var self = $(this),
            selector = self.data('filter');
          container1.isotope({
            filter: selector
          });
        });

      }

    })();

    // flexslider

    (function() {
      var flx = $('.flexslider:not(.simple_slide_show)');

      if (flx.length) {
        flx.flexslider({
          animation: "slide",
          animationSpeed: 1000,
          prevText: "<i class='fa fa-angle-left'></i>",
          nextText: "<i class='fa fa-angle-right'></i>",
          slideshow: false,
          start: function() {
            var image = $('.flexslider [data-custom-thumb]'),
              len = image.length,
              bullet = $('.flex-control-nav li');
            for (var i = 0; i < len; i++) {
              bullet.eq(i).append('<div class="custom_thumb tr_all_hover"><img src="' + image.eq(i).data('custom-thumb') + '" alt=""></div>');
            }
            $('.flex-control-nav li').each(function() {
              var curr = $(this);
              curr.on("mouseenter mouseleave", function() {
                curr.children('.custom_thumb').toggleClass('active')
              });
            });
            bullet.find('.custom_thumb').on('click', function() {
              return false;
            });
          }
        });
      }

    })();

    // simple slideshow

    (function() {

      var flx = $('.simple_slide_show');

      function showTitle() {
        var f = $(this),
          c = f.data('flexslider').currentSlide;

        f.find('.slides')
          .children('li')
          .eq(c + 1)
          .children('.simple_s_caption')
          .addClass('active')
          .parent()
          .siblings()
          .children('.simple_s_caption')
          .removeClass('active');
      }
      if (flx.length) {
        flx.each(function() {
          var curr = $(this);
          curr.flexslider({
            animation: "slide",
            animationSpeed: 1000,
            prevText: "<i class='fa fa-angle-left'></i>",
            nextText: "<i class='fa fa-angle-right'></i>",
            slideshow: true,
            controlNav: false,
            start: function() {
              showTitle.call(curr);
            },
            after: function() {
              showTitle.call(curr);
            }
          });
        });
      }

    })();

  });

})(jQuery);


$(".home .products_container .product_item:nth-child(3n+2)").addClass("hit")
$(".home .products_container .product_item:nth-child(3n+1)").addClass("new")
$(".home .products_container .product_item:nth-child(3n)").addClass("specials")


$(document).ready(function() {
  if ($('.archive').hasClass("home")) {
    $('.products_container').removeClass('col-md-9');
  }

});
$(document).ready(function() {
  if ($('.archive').hasClass("home")) {
    $('.products_container').removeClass('col-lg-9');
  }

});
$(document).ready(function() {
  if ($('.archive').hasClass("home")) {
    $('.products_container').removeClass('col-sm-9');
  }

});


$(document).ready(function() {
  var owl = $("#owl-demo");
  owl.owlCarousel({
    navigation: true, // Show next and prev buttons
    navigationText: ["<",
      ">"
    ],
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4500,
    items: 1,

  })

  owl.on('changed.owl.carousel', function(event) {
    $(".slider-text").css("opacity", "1");
    $(".slider-text").css("transform", "translateY(50px)");
    $(".slider-button").css("opacity", "1");
    $(".slider-button").css("transform", "translateY(-50px)");
  })
});



