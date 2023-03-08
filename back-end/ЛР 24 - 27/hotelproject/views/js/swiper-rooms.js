$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
      effect: "fade",
      fadeEffect: {
        crossFade: true
      },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,

        },
      });
    
    
    $('.swiper-pagination-bullet').hover(function() {
        $( this ).trigger( "click" );
     });
  });