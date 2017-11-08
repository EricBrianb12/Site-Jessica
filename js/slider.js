$(function(){

	var curSlide = 0;
	var maxSlide =  $('.banner-single').length -1;
	var delay = 6;

	initSLider();
	changeSlide();

	function initSLider(){
		$('.banner-single').hide();
		$('.banner-single').eq(0).show();
	}

	function changeSlide(){
		setInterval(function(){
			$('.banner-single').eq(curSlide).fadeOut(2000);
			curSlide++;
			if(curSlide > maxSlide)
				curSlide = 0;
			$('.banner-single').eq(curSlide).fadeIn(2000);
		},delay * 1000);
	}
})