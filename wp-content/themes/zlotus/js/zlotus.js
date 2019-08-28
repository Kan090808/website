jQuery(document).ready(function($) {

	"use strict";
	
	// Menu
	$('#nav-wrapper .menu').slicknav({
		prependTo:'#slick-mobile-menu',
		label:'Show Menu',
		allowParentLinks: true
	});
	
	// Sticky Menu
	var $wpAdminBar = $('#wpadminbar');
	if ($wpAdminBar.length) {
		$("#top-bar").sticky({topSpacing:$wpAdminBar.height()});
	} else {
		$("#top-bar").sticky({topSpacing:0});
	}
	
	$('.top-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('#show-search').animate({width:'toggle'});
    });
	$('#show-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('#show-search').animate({width:'toggle'});
    });
	
	$('.post-img .bxslider').bxSlider({
	  adaptiveHeight: true,
	  mode: 'fade',
	  pager: false,
	  captions: true,
	  nextText: '<i class="fa fa-angle-right"></i>',
	  prevText: '<i class="fa fa-angle-left"></i>',
	  onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});
	
	// Fitvids
	$(document).ready(function(){
		$(".sp-container").fitVids();
	});
	
});