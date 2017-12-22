
jQuery(function(jQuery) { // DOM is now read and ready to be manipulated
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     jQueryel,
     topPosition = 0;
 jQuery(container).each(function() {

   jQueryel = jQuery(this);
   jQuery(jQueryel).height('auto')
   topPostion = jQueryel.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = jQueryel.height();
     rowDivs.push(jQueryel);
   } else {
     rowDivs.push(jQueryel);
     currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

jQuery(window).load(function() {
  equalheight('.eq-blocks');
});


jQuery(window).resize(function(){
  equalheight('.eq-blocks');
});

});







function main() {
	
	
	/*====================================
    counter
    ======================================*/

(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+jQuery/.test(i),u=/^[0-9]+\.[0-9]+jQuery/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);

	

(function () {
   'use strict';





jQuery(window).resize(function(){

    jQuery('#home-banner .content,.entry-header .content').css({
        position:'relative',
        left: (jQuery(window).width() - jQuery('#home-banner .content,.entry-header .content').outerWidth())/2,
        top: (jQuery(window).height() - jQuery('#home-banner .content,.entry-header .content ').outerHeight())/2
    });

});

// To initially run the function:
jQuery(window).resize();







    /*====================================
    Show Menu on Book
    ======================================*/
    jQuery(window).bind('scroll', function() {
        var navHeight = jQuery(window).height() - 10;
        if (jQuery(window).scrollTop() > navHeight) {
            jQuery('.navbar-default').addClass('on');
        } else {
            jQuery('.navbar-default').removeClass('on');
        }
    });

    jQuery('body').scrollspy({ 
        target: '.navbar-default',
        offset: 10
    })

  	
  


	/*====================================
    top -menu
    ======================================*/

jQuery('#top-menu.navbar-default li:has(ul)').addClass('menu-item-has-children');



jQuery('#home-banner h1 span').addClass('liner');







/*creating click event*/
jQuery(document).ready(function(){
  jQuery('a#nav-icon').click(function(){
    jQuery('#nav-top').toggleClass('nav-view');
  });
  
  jQuery("#testimonial").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
        });
  
});


/*nav-icon*/
jQuery(document).ready(function(){
	jQuery('#nav-icon').click(function(){
		jQuery(this).toggleClass('open');
	});
});


jQuery(document).ready(function() {     
    jQuery('#nav-top li , #nav-top li ul li ').hover(function(){     
        jQuery('#nav-top').addClass('drop-show');    
    },     
    function(){    
        jQuery('#nav-top').removeClass('drop-show');     
    });
});   



jQuery('.guide-block .nav-tabs > li > a').hover(function() {
  jQuery(this).tab('show');
});

  	/*====================================
    Portfolio Isotope Filter
    ======================================*/
    jQuery(window).load(function() {
        var jQuerycontainer = jQuery('#lightbox');
        jQuerycontainer.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        jQuery('.cat a').click(function() {
            jQuery('.cat .active').removeClass('active');
            jQuery(this).addClass('active');
            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });



}());


}
main();