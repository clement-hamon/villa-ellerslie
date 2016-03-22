jQuery(function($){

	var BRUSHED = window.BRUSHED || {};

	/* ==================================================
	   Slider Options
	================================================== */

	BRUSHED.slider = function(){
		$.supersized({
			// Functionality
			slideshow               :   1,			// Slideshow on/off
			autoplay				:	1,			// Slideshow starts playing automatically
			start_slide             :   1,			// Start slide (0 is random)
			stop_loop				:	0,			// Pauses slideshow on last slide
			random					: 	0,			// Randomize slide order (Ignores start slide)
			slide_interval          :   5000,		// Length between transitions
			transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	500,		// Speed of transition
			new_window				:	1,			// Image links open in new window/tab
			pause_hover             :   0,			// Pause slideshow on hover
			keyboard_nav            :   1,			// Keyboard navigation on/off
			performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
			image_protect			:	1,			// Disables image dragging and right click with Javascript
													   
			// Size & Position						   
			min_width		        :   0,			// Min width allowed (in pixels)
			min_height		        :   0,			// Min height allowed (in pixels)
			vertical_center         :   1,			// Vertically center background
			horizontal_center       :   1,			// Horizontally center background
			fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
			fit_portrait         	:   1,			// Portrait images will not exceed browser height
			fit_landscape			:   0,			// Landscape images will not exceed browser width
													   
			// Components							
			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			thumb_links				:	0,			// Individual thumb links for each slide
			thumbnail_navigation    :   0,			// Thumbnail navigation
			slides 					:  	[			// Slideshow Images
												{image : '../images/villa/big/interieur03.jpg', title : '<div class="slide-content"><h1>Villa Ellerslie</h1><div class=\'separator\'></div><h2>Chambres d\'hotes de charmes</h2></div>', thumb : '', url : ''},
												{image : '../images/villa/big/exterieur03.jpg', title : '<div class="slide-content"><h1>Villa Ellerslie</h1><div class=\'separator\'></div><h2>Chambres d\'hotes de charmes</h2></div>', thumb : '', url : ''},
												{image : '../images/villa/big/vue01.jpg', title : '<div class="slide-content"><h1>Villa Ellerslie</h1><div class=\'separator\'></div><h2>Chambres d\'hotes de charmes</h2></div>', thumb : '', url : ''},
												{image : '../images/villa/big/bateau01.jpg', title : '<div class="slide-content"><h1>Villa Ellerslie</h1><div class=\'separator\'></div><h2>Chambres d\'hotes de charmes</h2></div>', thumb : '', url : ''},

										],
										
			// Theme Options			   
			progress_bar			:	0,			// Timer for each slide							
			mouse_scrub				:	0
			
		});

	}

	/* ==================================================
		Init
	================================================== */

	BRUSHED.slider();

	$(document).ready(function(){
		Modernizr.load([
		{
			test: Modernizr.placeholder,
			nope: '_include/js/placeholder.js', 
			complete : function() {
					if (!Modernizr.placeholder) {
							Placeholders.init({
							live: true,
							hideOnFocus: false,
							className: "yourClass",
							textColor: "#999"
							});    
					}
			}
		}
		]);
		
		// Preload the page with jPreLoader
		$('body').jpreLoader({
			splashID: "#jSplash",
			showSplash: true,
			showPercentage: true,
			autoClose: true,
			splashFunction: function() {
				$('#circle').delay(250).animate({'opacity' : 1}, 500, 'linear');
			}
		});
		
		BRUSHED.nav();
		BRUSHED.mobileNav();
		BRUSHED.listenerMenu();
		BRUSHED.menu();
		BRUSHED.goSection();
		BRUSHED.goUp();
		BRUSHED.filter();
		BRUSHED.fancyBox();
		BRUSHED.contactForm();
		BRUSHED.tweetFeed();
		BRUSHED.scrollToTop();
		BRUSHED.utils();
		BRUSHED.accordion();
		BRUSHED.toggle();
		BRUSHED.toolTip();
	});

});
