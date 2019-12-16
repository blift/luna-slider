jQuery(document).ready(function($) {
	$('.luna-post').owlCarousel({
    loop:true,		
    autoplay:true,
    autoplayTimeout:8000,
    nav:true,
    margin: 30,
    dots: false,
	slideTransition: 'linear',
	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        991:{
            items:2
        }
    }
})

});	
