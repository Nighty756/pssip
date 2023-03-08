$(document).ready(function(){
	$('.rooms-slider').slick({
		infinite: false,
		arrows:true,
		dots:true,
		slidesToShow:4,
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
				breakpoint: 600,
				settings: {
					slidesToShow:1,
					dots:false,
	
				}
			}
		]
	});
});

