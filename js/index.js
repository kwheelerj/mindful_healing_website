var $nav = $(".navbar");
var $logo = $("#logo");
var $triggerDOM = $("#triggerHack");
var $hack = $("#hack");
var $oldParallaxTarget = $("#oldParallaxTarget");
var $newParallaxTarget = $("#newParallaxTarget");
var flag = false;

var gTriggerLoc = $triggerDOM.position().top;

function hacky(triggerLoc) {

	if (!flag && $hack.offset().top >= triggerLoc) {
		$nav.toggleClass("fixed-top scrolled");
		$logo.toggleClass("d-none");
		$oldParallaxTarget.toggleClass("parallax_top");
		$newParallaxTarget.toggleClass("parallax_top");
		flag = true;
	} else if (flag && $hack.offset().top < triggerLoc) {
		$nav.toggleClass("fixed-top scrolled");
		$logo.toggleClass("d-none");
		$oldParallaxTarget.toggleClass("parallax_top");
		$newParallaxTarget.toggleClass("parallax_top");
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
			$logo.toggleClass("d-none");
			$oldParallaxTarget.toggleClass("parallax_top");
			$newParallaxTarget.toggleClass("parallax_top");
		}
		gTriggerLoc = $triggerDOM.position().top;
		hacky(gTriggerLoc);
		if (flag) {
			$nav.toggleClass("fixed-top scrolled");
			$logo.toggleClass("d-none");
			$oldParallaxTarget.toggleClass("parallax_top");
			$newParallaxTarget.toggleClass("parallax_top");
		}
	});
})