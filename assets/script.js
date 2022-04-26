$(document).ready(function () {

	$(".navmenu").click(function (e) {
		$(".navmenu").removeClass("activemenu");
		$(this).addClass("activemenu");
		e.preventDefault();
		let posLeft = $(this).offset().left;
		let width = $(this).width();

		$(".active").css("left",posLeft);
		$(".active").css("width",width);
		$(".active").css("height",width);
		$(".active").fadeIn(200);

		$(".activebar").fadeIn(200);
		$(".activebar").animate({
			left:posLeft,
			width:width,
		},300);
	});

	let time = 1;
	let terv = setInterval(function () {
		time--;
		if(time === 0)
		{
			$("#firstActive").click();
			clearInterval(terv);
		}
	},1000);
});