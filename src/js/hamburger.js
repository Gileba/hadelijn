var $hamburger = jQuery(".hamburger");
var $menu = jQuery(".mobilemenu");
var $left = jQuery(".left");
var $social = jQuery(".social");

$hamburger.on("click", function () {
	$hamburger.toggleClass("is-active");
	$menu.toggleClass("open");
	$left.toggleClass("wide");
	$social.toggleClass("wide");
});
