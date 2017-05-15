// JavaScript Document
/**
* @author Perfectus Web Designs
* @author website www.elegantdesignhub.com
* @copyright Copyright 2013-2014 Perfectus Web Designs
* JS Document
*/
//Scroll to top Script
var jq=jQuery.noConflict();jq(function(){jq.fn.scrollToTop=function(){jq(this).hide().removeAttr("href");if(jq(window).scrollTop()!="0"){jq(this).fadeIn("slow")}var a=jq(this);jq(window).scroll(function(){if(jq(window).scrollTop()>"350"){jq(a).fadeIn("slow")}else{jq(a).fadeOut("slow")}});jq(this).click(function(){jq("html, body").animate({scrollTop:0},"slow")})}});jq(function(){jq("#w2b-StoTop").scrollToTop()});var acc=jQuery.noConflict();acc(document).ready(function(){acc(".accordian-content").hide();acc(".accordian-header:first").addClass("active").next().show();acc(".accordian-header").click(function(){if(acc(this).next().is(":hidden")){acc(".accordian-header").removeClass("active").next().slideUp();acc(this).toggleClass("active").next().slideDown()}return false})});


var sap = jQuery.noConflict();
sap('.sp-plus').on('click', function(){
 var oldVal = sap('.quantity-input').val();
    var newVal = (parseInt(sap('.quantity-input').val(),10) +1);
  sap('.quantity-input').val(newVal);
});

sap('.sp-minus').on('click', function(){
 var oldVal = sap('.quantity-input').val();
    var newVal = (parseInt(sap('.quantity-input').val(),10) -1);
    if (oldVal > 1) {
            var newVal = parseFloat(oldVal) - 1;
        } else {
            var newVal = 1;
        }
  sap('.quantity-input').val(newVal);
});

var filternoconflict=jQuery.noConflict();
            filternoconflict(document).ready(function(){
                filternoconflict('html').niceScroll({zindex : 9999,touchbehavior:false,cursorcolor:"#404040",cursoropacitymax:0.6,cursorwidth:10,cursorborder:0,cursorborderradius:0,background:'#f8f8f8'});
     });


var filterproductsnoconflict=jQuery.noConflict();
            filterproductsnoconflict(document).ready(function(){
                filterproductsnoconflict('.dFilterScroll').niceScroll({zindex : 9999,touchbehavior:false,cursorcolor:"#CCCCCC",cursoropacitymax:0.6,cursorwidth:5,cursorborder:0,cursorborderradius:0,background:'#f8f8f8',autohidemode:false});
     });


var car = jQuery.noConflict();
car('.sp-plus').on('click', function(){
var oldVal = car('.cart-input').val();
var newVal = (parseInt(car('.cart-input').val(),10) +1);
car('.cart-input').val(newVal);
});

car('.sp-minus').on('click', function(){
var oldVal = car('.cart-input').val();
var newVal = (parseInt(car('.cart-input').val(),10) -1);
if (oldVal > 1) {
var newVal = parseFloat(oldVal) - 1;
} else {
var newVal = 1;
}
car('.cart-input').val(newVal);
});



var $ = jQuery.noConflict();
$(document).ready(function() {

      var owl = $("#specials-slider");
      owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1400,4], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1199,3], // 3 items betweem 1024px and 901px
      itemsTablet: [900,2], //2 items between 900 and 481;
      itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#featured-slider");
      owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1400,4], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1199,3], // 3 items betweem 1024px and 901px
      itemsTablet: [900,2], //2 items between 900 and 481;
      itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#new-slider");
      owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1400,4], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1199,3], // 3 items betweem 1024px and 901px
      itemsTablet: [900,2], //2 items between 900 and 481;
      itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  /*-----------------------------------*/
	  var owl = $("#featured-slider-inner");
      owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
	  itemsDesktop : [1400,3], //5 items between 1400px and 1025px
	  itemsDesktopSmall : [1199,2], // 3 items betweem 1024px and 901px
	  itemsTablet: [900,2], //2 items between 900 and 481;
	  itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#alsopurchased_products");
      owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1400,3], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1199,2], // 3 items betweem 1024px and 901px
      itemsTablet: [900,2], //2 items between 900 and 481;
      itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  /*----------------------------*/
	  var owl = $("#additionalimages-slider");
      owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1400,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
      itemsTablet: [600,3], //2 items between 600 and 0;
      itemsMobile : [480,3],
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $(".categories");
      owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1400,3], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1024,3], // 3 items betweem 1024px and 901px
      itemsTablet: [900,2], //2 items between 900 and 481;
      itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  var owl = $(".brands");
      owl.owlCarousel({
      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1400,4], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1024,4], // 3 items betweem 1024px and 901px
      itemsTablet: [900,3], //2 items between 900 and 481;
      itemsMobile : [480,2], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  /*-----------------------------------*/
});

$(document).ready(function(){
    $("a.product_cart_image").tooltip({
        placement : 'left'
    });
    $(".product_image a").tooltip({
        placement : 'top'
    });
	$(".header-social-icons li > a").tooltip({
        placement : 'bottom'
    });
	$(".arrow-down a").tooltip({
        placement : 'left'
    });
	$("#product_info_display h4.title i.fa").tooltip({
        placement : 'top'
    });
	$(".product-details-review .smallProductImage a").tooltip({
        placement : 'top'
    });
	$(".product-details-review .product-review-default h4 a").tooltip({
        placement : 'top'
    });
	$(".product-details-review .product-review-default p a").tooltip({
        placement : 'top'
    });
	$(".social_bookmarks li a, .dFilterClear a, a.clear_all_filters").tooltip({
        placement : 'top'
    });
    $("a.compare_remove, #wishlist .extendedDelete a, a.addtocompare, a.wishlink").tooltip({
        placement : 'top'
    });
});


$(document).ready(function() { 
	    $("#select-filter_id").select2({
			width:"element"
    	});
    	$("#select-alpha_filter_id").select2({
    		width:"element"
    	});
		$("#select-zone_country_id, #shippingEstimatorContent #country, #shippingEstimatorContent #stateZone").select2({
    		width:"element"
    	});
		$("#disp-order-sorter").select2({
    		width:"element"
    	});
		$("#select-categories_id").select2({
    		width:"element"
    	});
		$("#select-manufacturers_id").select2({
    		width:"element"
    	});
		$(".product_attributes select, .dFilterDrop, #select-zone_id").select2({
    		width:"element"
    	});
});

/*BOF New Menu JS, Update*/
$("#cssmenu").menumaker({
		title: "",
		format: "multitoggle"
	});
/*EOF New Menu JS, Update*/

  $(document).ready(function() {
    $('a.moduleBox').click(function() { // show selected module(s)
    // variables
      var popID = $(this).attr('rel');
      var popNAV = $(this).attr('class');
    // clear out menu styles and apply active
      $('a.moduleBox').css('background', '');
      $(this).css('background', '');
    // hide all wrappers and display the one selected
      $('.centerBoxWrapper').hide();
      // check if all or single selection
      if (popID != 'viewAll') {
        $('#' + popID).show();
      } else {
       $('.centerBoxWrapper').show();
      }
    });
	
	$('a.navOne').click(function() {
		$('a.navOne').addClass('active');
		$('a.navTwo').removeClass('active');
		$('a.navThree').removeClass('active');
	});
	
	$('a.navTwo').click(function() {
		$('a.navOne').removeClass('active');
		$('a.navTwo').addClass('active');
		$('a.navThree').removeClass('active');
	});
	
	$('a.navThree').click(function() {
		$('a.navOne').removeClass('active');
		$('a.navTwo').removeClass('active');
		$('a.navThree').addClass('active');
	});
	
  });
  

/*OWL CAROUSEL*/
$(document).ready(function () {

	var dragging = true;
	var owlElementID = '#main-slideshow';

	function fadeInReset() {
        if (!dragging) {
            $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
        }
    }
    
    function fadeInDownReset() {
        if (!dragging) {
            $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
        }
    }
    
    function fadeInUpReset() {
        if (!dragging) {
            $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
        }
    }
    
    function fadeInLeftReset() {
        if (!dragging) {
            $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
        }
    }
    
    function fadeInRightReset() {
        if (!dragging) {
            $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
        }
    }
    
    function fadeIn() {
        $(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
    }
    
    function fadeInDown() {
        $(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInDown-2").stop().delay(900).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1300).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
    }
    
    function fadeInUp() {
        $(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
    }
    
    function fadeInLeft() {
        $(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
    }
    
    function fadeInRight() {
        $(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        $(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    $("#main-slideshow").owlCarousel({
		autoPlay: 5000,
        stopOnHover: true,
        navigation: true,
        pagination: true,
        singleItem: true,
        addClassActive: true,
		slideSpeed: 500,
	  	paginationSpeed: 800,
	  	//rewindSpeed: 00,
		rewindNav: true,
        //transitionStyle: "fade",
        //lazyLoad : true,

		afterInit: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },
            
        afterMove: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
            
        },
        
        afterUpdate: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },
        
        startDragging: function() {
            dragging = true;
        },
        
        afterAction: function() {
            fadeInReset();
            fadeInDownReset();
            fadeInUpReset();
            fadeInLeftReset();
            fadeInRightReset();
            dragging = false;

        }
	});

});

  
  
  
/*Facebook JS*/
(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

/*Twitter JS*/
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");


var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

