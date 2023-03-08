$(document).ready(function(){
	$('.slider_reviews').slick({

		infinite: false,
		arrows:true,
		dots:false,
		slidesToShow:3,
		speed:1000,
		autoplaySpeed:800,
		responsive:[
			{
				breakpoint: 1280,
				settings: {
					slidesToShow:3
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow:2
				}
			},
	
			{
				breakpoint: 760,
				settings: {
					slidesToShow:1,
					dots:false,
			
				}
			}
		]
	});
});

