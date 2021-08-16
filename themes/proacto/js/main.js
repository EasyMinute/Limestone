(function($){

	$(".header__toggler").on('click', function(){
		$(".main-navigation").addClass('active');
	})
	$(".header__closer").on('click', function(){
		$(".main-navigation").removeClass('active');
	})

	$(".open_city_popoup").on('click', function() {
		var index = $(this).data('trigger');
		$(".open_city_popoup").removeClass('active');
		$('.where_buy__tab').fadeOut();
		$(this).addClass('active');
		$('.where_buy__tab[data-tab="'+ index +'"]').fadeIn();
	});
	$(".where_buy_children .open_city_popoup").on('click', function(){
		var index = $(this).data('trigger');
		$('.where_buy__popup__wrapper').addClass('active');
		$(".open_city_popoup").removeClass('active');
		$('.where_buy__tabs_control .open_city_popoup[data-trigger="'+ index +'"]').addClass('active');
	});
	$('.popup_close').on('click', function() {
		$(this).parents('.popup').removeClass('active');
	})
	$('.popup').on('click', function() {
		$(this).removeClass('active');
	})
	$('.where_buy__popup').on('click', function(e) {
		e.stopPropagation();
	})


	$(".filter_trigger").on('mouseup', function() {
		$(".filter_wrap").addClass('active');
	});
	$(".filter_wrap h3").on('click', function() {
		$(".filter_wrap").removeClass('active');
	});

	$('.filter_wrap').on('click', function() {
		$(".filter_wrap").removeClass('active');
	});



	$(document).ready(function(){

		var windowsize = $(window).width();

		// baner slider
		$('.baner_slider_wrap').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  dots: true,
		});

		$('.testi_slider__wrapper').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  dots: true,
		});

		// all dots zero add
		var dot = $('.slick-dots li button');
		dot.each(function(){
			var dot_text = $(this).text();
			$(this).text('0' + dot_text);
		});

		// position of tiles button
		if (windowsize > 920) {
			var tiles = $('.tiles__wrapper');
			tiles.each(function() {
				var post = $(this).find('.tiles__post:nth-child(4)');
				var button = $(this).find('.orange-button');
				// console.log(post.height());
				button.css('top', post.height());
			})

		}

		if(windowsize < 920){
			$('.tiles__posts').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  dots: false,
			  centerMode: true,
			});
		}
	})


	;
})(jQuery);