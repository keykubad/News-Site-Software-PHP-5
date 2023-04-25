$(function(){
	
	/* Erbilen.NET - jQuery Dersleri */
	/*
		jQuery ile Slider Uygulaması
	*/

	var sure = 4000; // slider otomatik dönme süresi
	var toplamLi = $(".slider ul li").length;
	var liWidth = 332;
	var toplamWidth = liWidth * toplamLi;
	var liDeger = 0;
	$(".slider ul").css("width", toplamWidth + "px");

	$("a.sonraki").click(function(){
		if (liDeger < toplamLi - 1){
			liDeger++;
			yeniWidth = liWidth * liDeger;
			$(".slider ul").animate({marginLeft: "-" + yeniWidth + "px"}, 332);
		} /* else {
			liDeger = 0;
			$(".slider ul").animate({marginLeft: "0"}, 500);
		} */
		return false;
	})

	$("a.onceki").click(function(){
		if (liDeger > 0){
			liDeger--;
			yeniWidth = liWidth * liDeger;
			$(".slider ul").animate({marginLeft: "-" + yeniWidth + "px"}, 332);
		}
		return false;
	})

	/* Otomatik Dönme */
	$.Slider = function(){
		if (liDeger < toplamLi - 1){
			liDeger++;
			yeniWidth = liWidth * liDeger;
			$(".slider ul").animate({marginLeft: "-" + yeniWidth + "px"}, 332);
		} else {
			liDeger = 0;
			$(".slider ul").animate({marginLeft: "0"}, 332);
		}
	}

	var don = setInterval("$.Slider()", sure);

	$("#slider").hover(function(){
		clearInterval(don);
	}, function(){
		don = setInterval("$.Slider()", sure);
	})

});