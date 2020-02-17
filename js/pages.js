var $nav = $(".navbar");
var $logo = $("#logo");
$logo.toggleClass("d-none");
var $triggerDOM = $("#triggerHack");
var $hack = $("#hack");
var flag = false;

var gTriggerLoc = $triggerDOM.position().top;

function hacky(triggerLoc) {

	if (!flag && $hack.offset().top >= triggerLoc) {
		$nav.toggleClass("fixed-top scrolled");
		flag = true;
	} else if (flag && $hack.offset().top < triggerLoc) {
		$nav.toggleClass("fixed-top scrolled");
		flag = false;
	}
}

hacky(gTriggerLoc);

$(function () {
	$(document).scroll(function () {
		hacky(gTriggerLoc);
	});
})

$(function () {
	$(window).resize(function () {
		var flag = $nav.hasClass('fixed-top');
		if (flag) {
			$nav.toggleClass("fixed-top scrolled");
		}
		gTriggerLoc = $triggerDOM.position().top;
		hacky(gTriggerLoc);
		if (flag) {
			$nav.toggleClass("fixed-top scrolled");
		}
	});
})