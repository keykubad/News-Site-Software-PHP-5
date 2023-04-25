/*****************************************************************
 * **************************************************************
 * Table of Contents
 * 1-) Document Ready State
 *    a- Scroll Speed and Styling
 *    b- Family Filter Trigger
 *    c- Metro Slider Usage for First Opening
 *    d- Submenu Image Changer
 *    e- Go to top button
 *    f- Gmaps JS for Google Maps
 *    g- Post Share & Tags
 *    h- Responsive Navigation
 *    i- Php Ajax Contact Form
 * 2-) Window Load State
 *    a- 3 Block Carousel for News List
 *    b- Carousel for Photo Gallery block
 *    c- Image slider with captions
 *    d- Gallery Slider/Carousel
 *    e- Stock Market Slider/Carousel
 * 3-) Metro Slider
 *    a- Tinyscrollbar plugin for Metro-Slider
 * !Note: You can make search with one of the title above to find the block according to it
 * **************************************************************
 *****************************************************************/

/**
 * Document Ready state for jquery plugins
 * @usedPlugins jquery
 * @usedAt      global
 */
jQuery(document).ready(function($){

	/**
	 * Scroll Speed and Styling
	 * @usedPlugins jquery,nicescroll
	 * @usedAt      Every page that contains body tag with data-smooth-scrolling 1
	 */
	if($('body').attr('data-smooth-scrolling') == 1){
		$("html").niceScroll({
			scrollspeed: 60,
			mousescrollstep: 35,
			cursorwidth: 10,
			cursorborder: 0,
			cursorcolor: '#00AAAA',
			cursorborderradius: 0,
			autohidemode: false,
			background: '#EAEAEA'
		});
	}

	/**
	 * Family Filter Trigger
	 * @usedPlugins jquery
	 * @usedAt      Under the search icon on the left right of main menu
	 */
	$('.n_family_filter').click(function(){
		if($(this).children('.n_on_off_lock').hasClass('n_on_off_lock_open')){
			$(this).children('.n_on_off_lock').removeClass('n_on_off_lock_open');
		}else{
			$(this).children('.n_on_off_lock').addClass('n_on_off_lock_open');
		}
	});

	/**
	 * Metro Slider Usage for First Opening
	 * @usedPlugins jquery
	 * @usedAt      See the menu below main menu, Each category has it's own image
	 */
	metro_slider();

	/**
	 * Submenu Image Changer
	 * @usedPlugins jquery
	 * @usedAt      See the menu below main menu, Each category has it's own image
	 */
	$('.n_sub_menu_items > li > div > ul a').hover(function(){
		$(this).parents('ul').parent('div').children('img').attr('src',$(this).attr('data-menu-image')).stop().fadeOut('fast').fadeIn();
	});

	/**
	 * Go to top button
	 * @usedPlugins jquery
	 * @usedAt      Go to top link on footer's header
	 */
	$('.n_footer_back_to_top').click(function(e) {
		e.preventDefault();
		$('body,html').animate({scrollTop:0},800);
	});

	/**
	 * Gmaps JS for Google Maps
	 * @usedPlugins gmaps,gmaps sensor
	 * @usedAt      Contact page
	 */
	if($('#map').length > 0){
		var map = new GMaps({
			div: '#map',
			lat: -12.043333,
			lng: -77.028333
		});
		map.addMarker({
			lat: -12.043333,
			lng: -77.028333,
			title: 'MetCreative Office'
		});
	}

	/**
	 * Post Share & Tags
	 * @usedPlugins jquery
	 * @usedAt      Share and Tags links at 'post' page
	 */
	$('.n_post_share_trigger,.n_post_tags_trigger').click(function(){
		var n_post_tags_trigger = $('.n_post_tags_trigger' ),
			n_post_tags = $('.n_post_tags'),
			n_post_share = $('.n_post_share'),
			n_post_share_trigger = $('.n_post_share_trigger');
		if($(this).hasClass('n_post_share_trigger')){
			if(n_post_tags.css('display') == 'block'){
				n_post_tags.css('display','none');
				n_post_tags_trigger.html(
					n_post_tags_trigger.html().replace('-','+')
				);
			}
			if(n_post_share.css('display') == 'none'){
				n_post_share.fadeIn();
				n_post_share_trigger.html(
					n_post_share_trigger.html().replace('+','-')
				);
			}else{
				n_post_share.fadeOut();
				n_post_share_trigger.html(
					n_post_share_trigger.html().replace('-','+')
				);
			}
		}else{
			if(n_post_share.css('display') == 'block'){
				n_post_share.css('display','none');
				n_post_share_trigger.html(
					n_post_share_trigger.html().replace('-','+')
				);
			}
			if(n_post_tags.css('display') == 'none'){
				n_post_tags.fadeIn();
				n_post_tags_trigger.html(
					n_post_tags_trigger.html().replace('+','-')
				);
			}else{
				n_post_tags.fadeOut();
				n_post_tags_trigger.html(
					n_post_tags_trigger.html().replace('-','+')
				);
			}
		}
	});

	/**
	 * Responsive Navigation
	 * @usedPlugins jquery
	 * @usedAt      Every page that contains responsive navigation select elements
	 */
	$('.n_responsive_nav' ).on('change',function(){
		window.location = $(this).val();
	});

	/**
	 * Php Ajax Contact Form
	 * @usedPlugins jquery
	 * @usedAt      Contact Page
	 */
	$('.n_contact_form').bind('submit', function(){
		var form    = $(this);
		var me      = $(this).children('input[type=submit]');

		me.attr('disabled','disabled');

		$.ajax({
			type: "POST",
			url: "mail.php",
			data: form.serialize(),
			success: function(returnedInfo){

				var message = $('.n_contact_thank_you');
				returnedInfo == 1 ? message.show() : message.html('Our Mail Servers Are Currently Down').show();
				me.removeAttr('disabled');

			}
		});
		return false;
	});

});


/**
 * Window Load for Carousels/Sliders
 * @usedPlugins jquery
 * @usedAt      global
 */
$(window).load(function(){

	/**
	 * 3 Block Carousel for News List
	 * @usedPlugins jquery,caroufredsel
	 * @usedAt      3 Blocks news list for each category, mainly used at index page
	 */
	$(".met_carousel").carouFredSel({
		responsive: true,
		prev: {
			button : function(){
				return $(this).parent().parent().parent().children('.met_carousel_control').children('a:first-child')
			}
		},
		next:{
			button : function(){
				return $(this).parent().parent().parent().children('.met_carousel_control').children('a:last-child')
			}
		},
		width: '100%',
		circular: false,
		infinite: true,
		auto: {
			play : true,
			pauseDuration: 0,
			duration: 2000
		},
		scroll: {
			items: 1,
			duration: 400,
			wipe: true
		},
		items: {
			visible: {
				min: 1,
				max: 3  },
			width: 243,
			height: 'auto'
		}
	});

	/**
	 * Carousel for Photo Gallery block
	 * @usedPlugins jquery,caroufredsel
	 * @usedAt      PHOTO GALLERY block on Index Page
	 */
	$(".n_gallery_carousel").carouFredSel({
		responsive: true,
		prev: {
			button : function(){
				return $(this).parent().parent().parent().children('.met_carousel_control').children('a:first-child')
			}
		},
		next:{
			button : function(){
				return $(this).parent().parent().parent().children('.met_carousel_control').children('a:last-child')
			}
		},
		width: '100%',
		circular: false,
		infinite: true,
		auto: {
			play : true,
			pauseDuration: 0,
			duration: 2000
		},
		scroll: {
			items: 1,
			duration: 400,
			wipe: true
		},
		items: {
			visible: {
				min: 1,
				max: 8  },
			width: 67.5,
			height: 'auto'
		}
	});

	/**
	 * Image slider with captions
	 * @usedPlugins jquery,caroufredsel
	 * @usedAt      Big image slider in 'categories' page
	 */
	$(".n_carousel_with_captions").carouFredSel({
		responsive: true,
		prev: {
			button : function(){
				return $('.n_carousel_with_captions_wrapper').next().children('a:first-child')
			}
		},
		next:{
			button : function(){
				return $('.n_carousel_with_captions_wrapper').next().children('a:last-child')
			}
		},
		width: '100%',
		circular: false,
		infinite: true,
		auto: {
			play : true,
			pauseDuration: 0,
			duration: 2000
		},
		scroll: {
			items: 1,
			duration: 400,
			wipe: true
		},
		items: {
			visible: {
				min: 1,
				max: 1  },
			/*width: 243,*/
			height: 'auto'
		}
	});


	/**
	 * Gallery Slider/Carousel
	 * @usedPlugins jQuery,caroufredsel
	 * @speciality  Large images in 'large' folder, small images are in 'small' folder
	 * @usedAt      Big image slider with thumbnail images used at 'categories,gallery' pages
	 */
	$('img[data-href*="."]' ).click(function(){
		window.location = $(this ).attr('data-href');
	});

	var $carousel = $('#n_slider_carousel'),
		$pager = $('#n_slider_pager');

	function getCenterThumb() {
		var $visible = $pager.triggerHandler( 'currentVisible' ),
			center = Math.floor($visible.length / 2);

		return center;
	}

	$carousel.carouFredSel({
		responsive: true,
		items: {
			visible: 1,
			width: 750,
			height: "auto"
		},
		scroll: {
			fx: 'crossfade',
			onBefore: function( data ) {
				var src = data.items.visible.first().attr( 'src' );
				src = src.split( '/large/' ).join( '/small/' );

				$pager.trigger( 'slideTo', [ 'img[src="'+ src +'"]', -getCenterThumb() ] );
				$pager.find( 'img' ).removeClass( 'selected' );
			},
			onAfter: function() {
				$pager.find( 'img' ).eq( getCenterThumb() ).addClass( 'selected' );
			},
			duration: 400
		},
		auto: {
			play : true,
			pauseDuration: 0,
			duration: 2000
		}
	});
	$pager.carouFredSel({
		width: '100%',
		auto: false,
		height: 50,
		items: {
			visible: 'odd'
		},
		scroll: {
			duration: 400
		},
		onCreate: function() {
			var center = getCenterThumb();
			$pager.trigger( 'slideTo', [ -center, { duration: 0 } ] );
			$pager.find( 'img' ).eq( center ).addClass( 'selected' );
		}
	});
	$pager.find( 'img' ).click(function() {
		var src = $(this).attr( 'src' );
		src = src.split( '/small/' ).join( '/large/' );
		$carousel.trigger( 'slideTo', [ 'img[src="'+ src +'"]' ] );
	});

	/**
	 * Stock Market Slider/Carousel
	 * @usedPlugins jQuery,caroufredsel
	 * @usedAt      Stock market widget in header
	 */
	$('.n_stock_market').carouFredSel({
		width: '100%',
		items: {
			visible: 'odd+1'
		},
		scroll: {
			pauseOnHover: true,
			onBefore: function() {
				$(this).children().removeClass( 'hover' );
			}
		},
		auto: {
			items: 1,
			easing: 'linear',
			duration: 4000,
			timeoutDuration: 0
		}
	});

});

/**
 * Metro Slider
 * @usedPlugins jquery
 * @usedAt      Metro Slider at index page
 */
$(window).resize(function(){
	metro_slider();
});
function metro_slider(){

	var metroSlider = 0;
	$('.metro-slider .metro-row').each(function(){
		var rowWidth = 0;
		$(this).children('.metro-item').each(function(){
			if ($(this).hasClass('full')) {
				rowWidth = rowWidth + 660 + 5;
			} else {
				rowWidth = rowWidth + 330 + 5;
			}
		});
		rowWidth = rowWidth - 15;
		$(this).css('width', rowWidth + 'px');

		if (metroSlider < $(this).width()) metroSlider = $(this).width();
	});
	$('.metro-slider').css('width', metroSlider + 'px');

	/**
	 * Tinyscrollbar plugin for Metro-Slider
	 * @usedPlugins jquery,tinyscrollbar
	 * @usedAt      Metro Slider at index page
	 */
	$('.metro-wrapper').tinyscrollbar({
		axis: 'x',
		size: 'auto'
	});
}