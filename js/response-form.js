(function($) {
    $(document).ready(function() {
	$("#form-next-btn").click(function() {
	    $("#response-form-1").css("display","none");
	    $("#response-form-2").css("display","block");
	    $("#response-form-2").css("opacity","1");
	});
	$('#edit-title').keyup(function() {
	    var cs = $(this).val().length;
	    if(cs>0) {
		$("#form-next-btn").css("opacity","1");
	    } else {
		$("#form-next-btn").css("opacity","0");
	    }
	});
	$("#edit-field-terms-and-conditions-und").change(function() {
	    if($(this).is(":checked")) {
		if($(".media-recorder-preview").length) {
		    $("#edit-submit").css("opacity","1");
		};
	    }
	});
    })
}(jQuery));