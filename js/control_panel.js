/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.control_panel = {
    attach: function(context, settings) {
	$(window).scroll(function(e) {
	    $el = $('#panel-left'); 
            if ($(this).scrollTop() > 80 && $el.css('position') != 'fixed') { 
		$('#panel-left').css({'position': 'fixed', 'top': '0px'}); 
	    };
	    if ($(this).scrollTop() < 80 && $el.css('position') == 'fixed') {
		$('#panel-left').css({'position': 'static', 'top': '0px'}); 
	    };
	});

	$(".action-button").click(function() {
	    $("#pop-up-container").css("display","block");
	    $("#pop-up-text").text('Loading...');
	    if($(this).attr('id') == 'refresh-link') {
		link = "http://sandbox.chakafilms.com/sandbox/projectquipu/amarasync/push/null/" + settings.moderation_panel.NID;
		$("#pop-up-text").load(link);
	    };
	    $("#pop-up-close").click(function() {
		$("#pop-up-container").css("display", "none");
	    });
	});
	$("#general-tab").click(function() {
	    $("#general-panel").css("display", "block");
	    $("#subtitle-panel").css("display","none");
	    $(".tab-btn").removeClass("active");
	    $(this).addClass("active");
	});

	$("#subtitles-tab").click(function() {
	    $("#general-panel").css("display", "none");
	    $("#subtitle-panel").css("display","block");
	    $(".tab-btn").removeClass("active");
	    $(this).addClass("active");
	});

	$(".single-option label").click(function() {
	    $(".single-option input").prop("checked", false);
	    $(this).prop("checked", true);
	});
    }
}


})(jQuery, Drupal, this, this.document);
