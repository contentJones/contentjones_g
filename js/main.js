jQuery(document).ready(function() {
	
	'use strict';


	//OFF VIEWPORT MOBILE MENU
	jQuery('.toggle-nav').on('click', function() {
	    // Calling a function in case you want to expand upon this.
	    if (jQuery('#site-wrapper').hasClass('show-nav')) {
	    // Do things on Nav Close
	    jQuery('#site-wrapper').removeClass('show-nav');
	    jQuery('.home #site-canvas').removeClass('screened');
		} else {
	    // Do things on Nav Open
	    jQuery('#site-wrapper').addClass('show-nav');
	    jQuery('.home #site-canvas').addClass('screened');
	    }
	    
	});
		
});

	/*jshint devel:true */
	console.log( 'main.js has loaded' );


