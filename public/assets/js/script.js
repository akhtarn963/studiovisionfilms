(function (window, document, $) {
	"use strict";
	
	$(window).on('load', function () {
		/* loader */
		$(".noo-spinner").fadeOut(500, function(){
            $(".noo-spinner").remove();
        });
	});
	
	/* On resize */
	$(window).on('resize', function () {
	});
	
	/* On scroll */
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 0) {
			$('.header-desktop').addClass('scrolling-menu');
		} else {
			$('.header-desktop').removeClass('scrolling-menu');
		}
		if ($(this).scrollTop() > 100) {
			$("#backtotop").addClass("show");
		} else {
			$("#backtotop").removeClass("show");
		}
	});
	
	$(document).ready(function($) {
		/* Search */
		var topSearch = $('.top-search');
		$('.top-search-btn').on('click', function() {
			if(! topSearch.hasClass('open')) {
				topSearch.addClass('open').slideDown();
				$('.top-search-input').focus();
			} else {
				topSearch.slideUp().removeClass('open');
			}
		});
		$(document).on('click', function(e) {
			if(($(e.target).closest(topSearch).length == 0) && ($(e.target).closest('.top-search-btn').length == 0)) {
				if(topSearch.hasClass('open')) {
					topSearch.slideUp().removeClass('open');
				}
			}
		});
		
		/* owl carousel */
		owlCarousel();
		
		/* photo gallery slider */
		slideSlick();
		
		//Animated Modal
		$(".md-trigger, .md-close").on('click', function() {
			$(".md-overlay").toggleClass("show");
		});
		
		/* icon boxes */
		$('.icon-boxes-bg').each(function() {
			if($(this).children('.icon-boxes-icon').attr("data-bg-image")) $(this).children('.icon-boxes-icon').css('background-image', 'url("' + $(this).children('.icon-boxes-icon').attr("data-bg-image") + '")');
		});
		
		/* slick banner slider */
		$('.film-post-slider .item').each(function() {
			if($(this).attr("data-bg-image")) $(this).css('background-image', 'url("' + $(this).attr("data-bg-image") + '")');
		});
		if($('.film-post-slider').length > 0) {
			bannerSlick();
		}
		
		/* tooltip */
		$('[data-toggle="tooltip"]').tooltip();
		
		/* gmap popup */
		$('.open-popup-link').magnificPopup({
		  type:'inline',
		  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});
		
		if ($(".gallery-item").length > 0) {
			$('.gallery-item').magnificPopup({
				gallery: {
					enabled: true
				}
			});
		}
		
		/* trigger right menu */
		$(".hamburger-menu").on('click', function() {
			$("body").addClass("open-right");
			$(".open-right-content").addClass("open");
		});
		
		/* close right menu */
		$(".open-right-close .ion-android-close").on('click', function() {
			$("body").removeClass("open-right");
			$(".open-right-content").removeClass("open");
		});
		
		/* counto */
		if ($('.counter-wraper').length > 0) {
			$('.counter-wraper').each(function(index) {
				var $this = $(this);
				var waypoint = $this.waypoint({
					handler: function(direction) {
						$this.find('.counter-digit:not(.counted)').countTo().addClass('counted');
					},
					offset: "90%"
				});
			});
		}
		
		/* film onepage */
		var $window_height = $(window).height();
		$('.film-one-page .film-one-page-item').css('height',$window_height+'px');
		
		$('.film-one-page .film-one-page-item').each(function() {
			var $film_onepage_inner = $(this).children('.film-one-page-item-inner').height();
			$(this).find('.col-md-6').css('height',$film_onepage_inner+'px');
		});
		
		if ($('.onepage-pagination').length > 0) $('.onepage-pagination').singlePageNav({ 'offset': 70, 'filter': '.onepage' });
		
		/* menu scroll */
		if ($('.team-filter-scroll').length > 0) {
			filterScroll();
		}
		
		/* toggle mobile menu */
		$('#open-left').on('click',function(e){
            $('.site').addClass('open');
			$('.slideout-menu').addClass('open');
        });
		$('.site').on('click',function(e){
            if ($(e.target).closest("#open-left").length === 0) {
				if ($('.site').hasClass("open")) {
					e.preventDefault();
				}
				$(this).removeClass("open");
				$('.slideout-menu').removeClass('open');
			}
        });
		$('.sub-menu-toggle').on('click',function(e){
            $(this).parent('li').toggleClass('expand');
			$(this).siblings('.sub-menu').slideToggle();
        });
		
		/* fullscreen */
		fullScreenHeight();
		
		/* google map */
		googleMap();
		
		//Progress Bars
		progressBar();
		
		/* back to top */
		$('#backtotop').on('click', function() {
			$("html, body").animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
		/* init revolution slider */
		if ($("#rev_slider").length > 0) {
			RevolutionInit();
		}
		
		if ($("#rev_slider_2").length > 0) {
			RevolutionInit2();
		}
		
		if ($("#rev_slider_3").length > 0) {
			RevolutionInit3();
		}
	});

})(window, document, jQuery);

/*=================================================================
	fullscreen section function
===================================================================*/
function fullScreenHeight() {
	var wh = $(window).height();
	$('.section-fullscreen').css({ height: wh });
}

/*=================================================================
	google map
===================================================================*/
function googleMap() {
	if ($("#googleMap").length > 0) {
		$obj = $("#googleMap");
		var myCenter = new google.maps.LatLng($obj.data("lat"), $obj.data("lon"));
		var myMaker = new google.maps.LatLng($obj.data("lat"), $obj.data("lon"));
		function initialize() {
			var mapProp = {
				center: myCenter,
				zoom: 16,
				scrollwheel: false,
				mapTypeControlOptions: {
					mapTypeIds: [ google.maps.MapTypeId.ROADMAP, "map_style" ]
				}
			};
			var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
			var marker = new google.maps.Marker({
				position: myMaker,
				icon: $obj.data("icon")
			});
			marker.setMap(map);
		}
		google.maps.event.addDomListener(window, "load", initialize);
	}
}

/*=================================================================
	owl carousel slider function
===================================================================*/
function owlCarousel(){
	if ($(".logo-carousel").length > 0) {
		$(".logo-carousel").each(function(){
			var autoplay = ($(this).attr("data-auto-play") === "true") ? true : false;
			$(this).owlCarousel({
				items: $(this).attr("data-desktop"),
				loop: true,
				mouseDrag: true,
				navigation: false,
				dots: false,
				pagination: false,
				autoPlay: autoplay,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				itemsDesktop: [1199, $(this).attr("data-desktop")],
				itemsDesktopSmall: [979, $(this).attr("data-laptop")],
				itemsTablet: [768, $(this).attr("data-tablet")],
				itemsMobile: [479, $(this).attr("data-mobile")]
			});
		});
	}
	if ($(".testimonial-carousel").length > 0) {
		$(".testimonial-carousel").each(function(){
			var autoplay = ($(this).attr("data-auto-play") === "true") ? true : false;
			$(this).owlCarousel({
				items: $(this).attr("data-desktop"),
				loop: true,
				mouseDrag: true,
				navigation: false,
				dots: false,
				pagination: false,
				autoPlay: autoplay,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				itemsDesktop: [1199, $(this).attr("data-desktop")],
				itemsDesktopSmall: [979, $(this).attr("data-laptop")],
				itemsTablet: [768, $(this).attr("data-tablet")],
				itemsMobile: [479, $(this).attr("data-mobile")]
			});
		});
	}
	if ($(".team-carousel").length > 0) {
		$(".team-carousel").each(function(){
			var autoplay = ($(this).attr("data-auto-play") === "true") ? true : false;
			$(this).owlCarousel({
				items: $(this).attr("data-desktop"),
				loop: true,
				mouseDrag: true,
				navigation: false,
				dots: true,
				pagination: true,
				autoPlay: autoplay,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				itemsDesktop: [1199, $(this).attr("data-desktop")],
				itemsDesktopSmall: [979, $(this).attr("data-laptop")],
				itemsTablet: [768, $(this).attr("data-tablet")],
				itemsMobile: [479, $(this).attr("data-mobile")]
			});
		});
	}
	if ($(".blog-carousel").length > 0) {
		$(".blog-carousel").each(function(){
			var autoplay = ($(this).attr("data-auto-play") === "true") ? true : false;
			$(this).owlCarousel({
				items: $(this).attr("data-desktop"),
				loop: true,
				mouseDrag: true,
				navigation: false,
				dots: false,
				pagination: false,
				autoPlay: autoplay,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				itemsDesktop: [1199, $(this).attr("data-desktop")],
				itemsDesktopSmall: [979, $(this).attr("data-laptop")],
				itemsTablet: [768, $(this).attr("data-tablet")],
				itemsMobile: [479, $(this).attr("data-mobile")]
			});
		});
	}
	if ($(".relate-film-carousel").length > 0) {
		$(".relate-film-carousel").each(function(){
			var autoplay = ($(this).attr("data-auto-play") === "true") ? true : false;
			$(this).owlCarousel({
				items: $(this).attr("data-desktop"),
				loop: true,
				mouseDrag: true,
				navigation: false,
				dots: false,
				pagination: true,
				autoPlay: autoplay,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				itemsDesktop: [1199, $(this).attr("data-desktop")],
				itemsDesktopSmall: [979, $(this).attr("data-laptop")],
				itemsTablet: [768, $(this).attr("data-tablet")],
				itemsMobile: [479, $(this).attr("data-mobile")]
			});
		});
	}
	if ($(".film-detail-info-carousel").length > 0) {
		$(".film-detail-info-carousel").each(function(){
			var autoplay = ($(this).attr("data-auto-play") === "true") ? true : false;
			$(this).owlCarousel({
				items: $(this).attr("data-desktop"),
				loop: true,
				mouseDrag: true,
				navigation: false,
				dots: false,
				pagination: true,
				autoPlay: autoplay,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				itemsDesktop: [1199, $(this).attr("data-desktop")],
				itemsDesktopSmall: [979, $(this).attr("data-laptop")],
				itemsTablet: [768, $(this).attr("data-tablet")],
				itemsMobile: [479, $(this).attr("data-mobile")]
			});
		});
	}
}

/*=================================================================
	slick slider
===================================================================*/

function slideSlick() {
	$('#film-gallery-carousel').slick({
		infinite: true,
		centerMode: true,
		variableWidth: true,
		slidesToShow: 3,
		dots: false,
		arrows: false,
		autoplay: false,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				centerMode: false,
				variableWidth: false,
			}
		}]
	});
}

function bannerSlick() {
	$('.film-post-slider .post-slider').slick({
		arrows: false,
	});
	
	$('.film-post-slider .post-slider').on('beforeChange',function(event,slick,currentSlide,nextSlide){var nav=$(this).next('.slider-nav-container').find('li[data-slide='+nextSlide+']');nav.css({display:'none'}).siblings().css({display:'block'});});jQuery('.slider-nav-container li').on('click',function(){jQuery('.film-post-slider .post-slider').slick('slickGoTo',$(this).data('slide'),false);});
}

/*=================================================================
	filter scroll
===================================================================*/
function filterScroll() {
	var thisFilter = $('.team-filter-scroll');
	var thisFilterUl = thisFilter.find('ul');
	var thW = 0;
	
	thisFilterUl.find('li').each(function(){
		thW+=$(this).outerWidth();
	});
	thisFilter.mousemove(function(e){
		var blW = thisFilter.outerWidth();
		if(thW > blW){
			var offset = thisFilter.offset();
			var mX = e.pageX - offset.left;
			var mM = (thW-blW)*mX/blW;
			thisFilterUl.css({marginLeft:-mM});
		}
	});
}

/*=================================================================
	progress bars
===================================================================*/
function progressBar() {
	$('.block-progressbar').each(function() {
		$(this).find('.progressbar').progressbar({ display_text: 'center' });
		$(this).find('.progressbar').css('background-color', $(this).find('.progressbar').attr('data-color'));
	});
}

/*=================================================================
	revolution slider function
===================================================================*/
function RevolutionInit() {
	$("#rev_slider").show().revolution({
		sliderType:"standard",
		sliderLayout:"fullscreen",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
			keyboardNavigation:"off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation:"off",
			mouseScrollReverse:"default",
			onHoverStop:"off",
			arrows: {
				style:"hebe",
				enable:true,
				hide_onmobile:false,
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				tmp:'<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span>    <span class="tp-arr-imgholder"></span> </div>',
				left: {
					h_align:"left",
					v_align:"center",
					h_offset:20,
					v_offset:0
				},
				right: {
					h_align:"right",
					v_align:"center",
					h_offset:20,
					v_offset:0
				}
			}
		},
		responsiveLevels:[1240,1024,778,480],
		visibilityLevels:[1240,1024,778,480],
		gridwidth:[1920,1024,778,480],
		gridheight:[1000,1000,1000,1000],
		lazyType:"none",
		shadow:0,
		spinner:"spinner3",
		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		shuffle:"off",
		autoHeight:"off",
		fullScreenAutoWidth:"off",
		fullScreenAlignForce:"off",
		fullScreenOffsetContainer: "",
		fullScreenOffset: "",
		hideThumbsOnMobile:"off",
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		debugMode:false,
		fallbacks: {
			simplifyAll:"off",
			nextSlideOnWindowFocus:"off",
			disableFocusListener:false,
		}
	});
}

function RevolutionInit2() {
	$("#rev_slider_2").show().revolution({
		sliderType:"standard",
		sliderLayout:"fullscreen",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
			onHoverStop:"off",
		},
		responsiveLevels:[1240,1024,778,480],
		visibilityLevels:[1240,1024,778,480],
		gridwidth:[1920,1024,778,480],
		gridheight:[900,768,960,720],
		lazyType:"none",
		shadow:0,
		spinner:"spinner3",
		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		shuffle:"off",
		autoHeight:"off",
		fullScreenAutoWidth:"off",
		fullScreenAlignForce:"off",
		fullScreenOffsetContainer: "",
		fullScreenOffset: "",
		disableProgressBar:"on",
		hideThumbsOnMobile:"off",
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		debugMode:false,
		fallbacks: {
			simplifyAll:"off",
			nextSlideOnWindowFocus:"off",
			disableFocusListener:false,
		}
	});
}
function RevolutionInit3() {
	$("#rev_slider_3").show().revolution({
		sliderType:"standard",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
			onHoverStop:"off",
		},
		visibilityLevels:[1240,1024,778,480],
		gridwidth:1920,
		gridheight:[1000,1000,1000,2000],
		lazyType:"none",
		parallax: {
			type:"mouse",
			origo:"enterpoint",
			speed:400,
			levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
		},
		shadow:0,
		spinner:"spinner3",
		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		shuffle:"off",
		autoHeight:"off",
		hideThumbsOnMobile:"off",
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		debugMode:false,
		fallbacks: {
			simplifyAll:"off",
			nextSlideOnWindowFocus:"off",
			disableFocusListener:false,
		}
	});
}