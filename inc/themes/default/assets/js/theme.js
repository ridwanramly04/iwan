/*global $ */

$(function () {
    
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 700);
                return false;
            }
        }
    });
    
    var scroll_nav, width;
    
    width = $(this).width();
    
    $(window).resize(function () {
           
        width = $(this).width();
            
    });
    
    $(window).scroll(function() {
             
        scroll_nav = $(".navigation").offset().top;
           
        if(scroll_nav != 0) {
            $(".navigation").addClass("scrollfor");
                  
            if(width >= 760) {
                $(".desktop").hide();
                $(".mobile").show(); 
                   
                $(".navs > li > .link").css({
                    color : '#333'
                });
            }
                
        } else {
            $("nav").removeClass("scrollfor");
                
            if(width >= 760) {
                $(".desktop").show();
                $(".mobile").hide();  
                $(".navs > li > .link").css({
                     color : '#fff'
                });
                    
            }
                
                
        }
            
    });
    
    $(".navs > li > a.link").mouseover(function(){

        $(this).delay(300).css({
            'color' : 'rgb(255,140,0)'
        });

    });
    
    $(".navs > li > a.link").mouseout(function(){

        if( width >= 760 && scroll_nav == 0 ) {
            $(this).css({
                color : '#fff'
            });
                
        } else {
                
            $(this).css({
                color : '#333'
            });
        }
                

    });
                
    
});
