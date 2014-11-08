/*
 * Shorten the events in the events list and provide a more/less link
 */
var showChar = 150;
var ellipsestext = "...";
var moretext = "show more";
var lesstext = "show less";
$('.more').each(function (index) {
	var content = $(this).html();
	if (content.length > showChar) {
		var c = content.substr(0, showChar);
		var h = content.substr(showChar, content.length - showChar);
		var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span>' +
			'<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink" id="event-more-' + index + '">' + moretext + '</a></span>';
		$(this).html(html);
	}
});

$(".morelink").click(function () {
	if ($(this).hasClass("less")) {
		$(this).removeClass("less");
		$(this).html(moretext);
	} else {
		$(this).addClass("less");
		$(this).html(lesstext);
	}
	$(this).parent().prev().toggle();
	$(this).prev().toggle();
	return false;
});
