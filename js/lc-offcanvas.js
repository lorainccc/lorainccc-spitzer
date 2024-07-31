/**
 * 
 *	Checking for mobile screen size, alter top menu to function for mobile.
 * 
 * 
 */

 jQuery(document).ready(function( $ ){
	if ($(window).width() < 450 ){
        $('#offCanvas').removeAttr( "aria-hidden" );
		/**$('#s').attr('tabindex', '-1');
        $("input[name*='searchblogs']").attr('tabindex', '-1');
        $('#searchsubmit').attr('tabindex', '-1');
        $('.off-canvas > ul#menu-main-nav').removeAttr( "role" );
        $('.off-canvas > ul#menu-main-nav > li').removeAttr( "role" );**/
	}
 }); 