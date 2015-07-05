$(document).ready(function() {
	$(".expand-summary").click(function () {
		if ($(this).parent().find(".expand-details").hasClass("expand-less")) {
			$(this).html("Hide Details <i class='fa fa-chevron-up'></i>");
			$(this).parent().find(".expand-details").removeClass("expand-less");
		} else {
			$(this).html("View Details <i class='fa fa-chevron-down'></i>");
			$(this).parent().find(".expand-details").addClass("expand-less");
		}
		return false;
	});
});