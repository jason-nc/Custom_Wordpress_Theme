/* <![CDATA[ */
/*global $:false */
jQuery(document).ready(function() {         

    "use strict";

    // main rotators    
    jQuery('.main-rotator .slides').cycle({
        fx: 'fadeout',
        timeout: 6000,
        speed: 1200,
        slides: '> .slide',
        easing: 'easeInOutCirc',
        pager: '.main-rotator-pager',
        prev: '.main-rotator-prev',
        next: '.main-rotator-next'
    });
    jQuery('.main-rotator').hover(
        function() {
            jQuery(this).find('.slides').cycle('pause');
        },
        function() {
            jQuery(this).find('.slides').cycle('resume');
        }
    ); 

    // latest news calculations 
    var bodyWidth = jQuery('body').width();
    var viewallWidth = jQuery('.latest-news .view-all').width();
    var titleWidth = jQuery('.latest-news .title h3').width();
    var buttonWidth = jQuery('.latest-news .view-all a').width();
    jQuery('.latest-news .title .left-bg').css('width', ((bodyWidth-titleWidth)/2)-35+'px');
    jQuery('.latest-news .title .right-bg').css('width', ((bodyWidth-titleWidth)/2)-35+'px');
    jQuery('.latest-news .view-all .left-bg').css('width', ((viewallWidth-buttonWidth)/2)-35+'px');
    jQuery('.latest-news .view-all .right-bg').css('width', ((viewallWidth-buttonWidth)/2)-35+'px');
    jQuery(window).resize(function(){
        var bodyWidth = jQuery('body').width();
        var viewallWidth = jQuery('.latest-news .view-all').width();
        var titleWidth = jQuery('.latest-news .title h3').width();
        var buttonWidth = jQuery('.latest-news .view-all a').width();
        jQuery('.latest-news .title .left-bg').css('width', ((bodyWidth-titleWidth)/2)-35+'px');
        jQuery('.latest-news .title .right-bg').css('width', ((bodyWidth-titleWidth)/2)-35+'px');
        jQuery('.latest-news .view-all .left-bg').css('width', ((viewallWidth-buttonWidth)/2)-35+'px');
        jQuery('.latest-news .view-all .right-bg').css('width', ((viewallWidth-buttonWidth)/2)-35+'px');   
    });

    // search functions
    jQuery('.show-search').click(function(ev){
        ev.stopPropagation(); 
        if (jQuery(this).hasClass('active')) {  
            jQuery(this).removeClass('active');            
            var optHeight = jQuery('.search-form').height();  
            jQuery('.search-form').animate({
                'height': 0+'px'
              }, 600, 'easeInOutCirc', function() {
                jQuery(this).css('display', 'none');
                jQuery(this).css('height', optHeight+'px');
            });
            var val = jQuery('.search-form .field').val();
            if (val !== '') {
                jQuery(this).siblings('form').submit();    
            };
            jQuery('.site-header .container').animate({
                'paddingTop': 0+'px'
              }, 600, 'easeInOutCirc', function() {
            }); 
        } else {
            
            jQuery('.site-header .container').animate({
                'paddingTop': 40+'px'
              }, 600, 'easeInOutCirc', function() {
            }); 

            jQuery(this).addClass('active');            
            var optHeight = jQuery('.search-form').height();
            jQuery('.search-form').css('height', 0+'px');
            jQuery('.search-form').css('display', 'block');
            jQuery('.search-form').animate({
                'height': optHeight+'px'
              }, 600, 'easeInOutCirc', function() {
            }); 
            jQuery('.search-form form').find('input[type="text"]').focus();
        }
    });
    jQuery('.search-form .field').click(function(ev) {
        ev.stopPropagation(); 
    });
    jQuery('html').click(function() {
        jQuery('.show-search').removeClass('active');
        var optHeight = jQuery('.search-form').height();  
        jQuery('.search-form').animate({
            'height': 0+'px'
          }, 600, 'easeInOutCirc', function() {
            jQuery(this).css('display', 'none');
            jQuery(this).css('height', optHeight+'px');
        });
        jQuery('.site-header .container').animate({
            'paddingTop': 0+'px'
          }, 600, 'easeInOutCirc', function() {
        }); 
    });

    // main menu functions
    jQuery('.main-menu ul li').hover(
        function(){ 
            jQuery(this).children('ul').fadeIn(300);
        },
        function(){
            jQuery(this).children('ul').fadeOut(300);             
        }
    );

    // mobile-menu
    jQuery('#mobile-menu .show-submenu').click(function(){  
        if ( jQuery(this).hasClass('active')) {           
            jQuery(this).removeClass('active');

            var optHeight = jQuery(this).parents('.parent').siblings('.submenu').height();  
            jQuery(this).parents('.parent').siblings('.submenu').animate({
                'height': 0+'px'
              }, 600, 'easeInOutCirc', function() {
                jQuery(this).css('display', 'none');
                jQuery(this).css('height', optHeight+'px');
            }); 

            // animated bars
            var obj = jQuery(this);
            jQuery(obj).find('.active-bars').animateRotate(-90, {
                duration: 600,
                easing: 'easeInOutCirc',
                complete: function () {         
                    jQuery(obj).removeClass('completed');
                    jQuery(obj).find('.active-bars').animateRotate(0, {
                        duration: 0,
                        easing: 'linear',
                        complete: function () {},
                        step: function () {}
                    });   
                },
                step: function () {}
            });
        } else {
            jQuery(this).addClass('active'); 

            var optHeight = jQuery(this).parents('.parent').siblings('.submenu').height();
            jQuery(this).parents('.parent').siblings('.submenu').css('height', 0+'px');
            jQuery(this).parents('.parent').siblings('.submenu').css('display', 'block');
            jQuery(this).parents('.parent').siblings('.submenu').animate({
                'height': optHeight+'px'
              }, 600, 'easeInOutCirc', function() {
            }); 

            // animated bars
            var obj = jQuery(this);
            jQuery(obj).find('.bars').animateRotate(90, {
                duration: 600,
                easing: 'easeInOutCirc',
                complete: function () {         
                    jQuery(obj).addClass('completed');
                    jQuery(obj).find('.bars').animateRotate(0, {
                        duration: 0,
                        easing: 'linear',
                        complete: function () {},
                        step: function () {}
                    });    
                },
                step: function () {}
            });
        }
    });
    jQuery('.show-mobile-menu').click(function(ev){
        ev.stopPropagation(); 
        var MMwidth = jQuery('.mobile-menu').width();
        if ( jQuery(this).hasClass('active') ) {            
            jQuery('#page').animate({
                'margin-left': 0+'px'
              }, 500, function() {
                // Animation complete.
            });
            jQuery('#mobile-menu').animate({
                'right': -MMwidth+'px'
              }, 500, function() {
                // Animation complete.
            });
            jQuery('.show-mobile-menu').removeClass('active');
        } else {
            jQuery('#mobile-menu').animate({
                'right': 0+'px'
              }, 500, function() {
                // Animation complete.
            });            
            jQuery('#page').animate({
                'margin-left': -MMwidth+'px'
              }, 500, function() {
                // Animation complete.
            });
            jQuery('.show-mobile-menu').addClass('active');
        }
    });
    jQuery('#mobile-menu .close').click(function(ev){
        ev.stopPropagation();
        var MMwidth = jQuery('.mobile-menu').width(); 
        jQuery('#page').animate({
            'margin-left': 0+'px'
          }, 500, function() {
        });
        jQuery('#mobile-menu').animate({
            'right': -MMwidth+'px'
          }, 500, function() {
            // Animation complete.
        });
        jQuery('.show-mobile-menu').removeClass('active');
    });
    jQuery('#page').click(function(){
        var MMwidth = jQuery('.mobile-menu').width(); 
        jQuery('#page').animate({
            'margin-left': 0+'px'
          }, 500, function() {
        });
        jQuery('#mobile-menu').animate({
            'right': -MMwidth+'px'
          }, 500, function() {
        });
        jQuery('.show-mobile-menu').removeClass('active');
    });

    // sub-navigation
    jQuery('.show-related-items').click(function(){  
        if ( jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');
            jQuery(this).siblings('.related-items-ct').fadeOut(300);   
        } else {
            jQuery(this).addClass('active'); 
            jQuery(this).siblings('.related-items-ct').fadeIn(300);;
        }
    });
    jQuery('#page').click(function(){
        jQuery('.show-related-items').removeClass('active');
        jQuery('.show-related-items').siblings('.related-items-ct').fadeOut(300); 
    });
    jQuery('.related-items').click(function(ev){
        ev.stopPropagation();
    });

    // sort-archives
    jQuery('.sort-archives h4').click(function(){  
        if ( jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');            
            var optHeight = jQuery(this).siblings('ul').height();   
            jQuery(this).siblings('ul').animate({
                'height': 0+'px'
              }, 600, 'easeInOutCirc', function() {
                jQuery(this).css('display', 'none');
                jQuery(this).css('height', optHeight+'px');
            });
            // animated bars
            var obj = jQuery(this);
            jQuery(obj).find('.active-bars').animateRotate(-90, {
                duration: 600,
                easing: 'easeInOutCirc',
                complete: function () {         
                    jQuery(obj).find('.icon').removeClass('completed');
                    jQuery(obj).find('.active-bars').animateRotate(0, {
                        duration: 0,
                        easing: 'linear',
                        complete: function () {},
                        step: function () {}
                    });   
                },
                step: function () {}
            });
        } else {
            jQuery(this).addClass('active');             
            var optHeight = jQuery(this).siblings('ul').height();
            jQuery(this).siblings('ul').css('height', 0+'px');
            jQuery(this).siblings('ul').css('display', 'block');
            jQuery(this).siblings('ul').animate({
                'height': optHeight+'px'
              }, 600, 'easeInOutCirc', function() {
            });  
            // animated bars
            var obj = jQuery(this);
            jQuery(obj).find('.bars').animateRotate(90, {
                duration: 600,
                easing: 'easeInOutCirc',
                complete: function () {         
                    jQuery(obj).find('.icon').addClass('completed');
                    jQuery(obj).find('.bars').animateRotate(0, {
                        duration: 0,
                        easing: 'linear',
                        complete: function () {},
                        step: function () {}
                    });    
                },
                step: function () {}
            });
        }
    });

    // back to top
    jQuery('#back-to-top').click(function(){  
        jQuery("html, body").animate({scrollTop: 0}, 1000);
    }); 

    // projects functions
    jQuery('.projects .project').click(function(){  
        if ( jQuery(this).hasClass('active')) {           
            jQuery(this).removeClass('active');
        } else {
            jQuery('.projects .project').removeClass('active');
            jQuery(this).addClass('active'); 
        }
    });
    jQuery('.project-rotator .slides').cycle({
        fx: 'fadeout',
        timeout: 6000,
        speed: 1200,
        slides: '> .slide',
        easing: 'easeInOutCirc',
        pager: '.project-rotator-pager'
    });
    jQuery('.project-rotator').hover(
        function() {
            jQuery(this).find('.slides').cycle('pause');
        },
        function() {
            jQuery(this).find('.slides').cycle('resume');
        }
    );  

    // testimonials rotators    
    jQuery('.testimonials .slides').cycle({
        fx: 'scrollHorz',
        timeout: 6000,
        speed: 1200,
        easing: 'easeInOutCirc',
        slides: '> .slide',
        pager: '> .pager'
    });
    jQuery('.testimonials').hover(
        function() {
            jQuery(this).find('.slides').cycle('pause');
        },
        function() {
            jQuery(this).find('.slides').cycle('resume');
        }
    );  
    var Theights = new Array();
    var Tcount = 0;
    jQuery('.testimonials .slides .slide').each(function(){        
        Theights[Tcount] = jQuery(this).height();
        Tcount++;
    })
    var Theightmax = Math.max.apply( Math, Theights );
    jQuery('.testimonials .slides .slide').each(function(){
        jQuery(this).css('height', Theightmax+'px');
    }) 
    jQuery(window).resize(function(){
        jQuery('.testimonials .slides .slide').each(function(){
            jQuery(this).css('height', 'auto');
        })
        var Theights = new Array();
        var Tcount = 0;
        jQuery('.testimonials .slides .slide').each(function(){        
            Theights[Tcount] = jQuery(this).height();
            Tcount++;
        })
        var Theightmax = Math.max.apply( Math, Theights );
        jQuery('.testimonials .slides .slide').each(function(){
            jQuery(this).css('height', Theightmax+'px');
        })    
    });

});

// Rotate animation
$.fn.animateRotate = function(angle, duration, easing, complete) {
  var args = $.speed(duration, easing, complete);
  var step = args.step;
  return this.each(function(i, e) {
    args.complete = $.proxy(args.complete, e);
    args.step = function(now) {
      $.style(e, 'transform', 'rotate(' + now + 'deg)');
      if (step) return step.apply(e, arguments);
    };

    $({deg: 0}).animate({deg: angle}, args);
  });
};