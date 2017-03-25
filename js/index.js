

$(document).ready(function() {

 
var navPos, winPos, navHeight;
  
function refreshVar() {
  navPos = $('nav').offset().top;
  navHeight = $('nav').outerHeight(true);
}

refreshVar();


$(window).scroll(function() {
  winPos = $(window).scrollTop();
  
  if (winPos >= navPos) {
    $('nav').addClass('fixed shadow');

     
    
  }  
  else {
    $('nav').removeClass('fixed shadow');
    
    
    
  }
});


$(".dropdown-button").dropdown({
  hover:true,
  belowOrigin:true,
  
}
  );


 $('.carousel.carousel-slider').carousel({fullWidth: true,indicators:true});
 
 autoplay();   
function autoplay() {
    $('.carousel.carousel-slider').carousel('next');
    setTimeout(autoplay, 4500);

}
});


