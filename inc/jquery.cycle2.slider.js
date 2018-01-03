$(document).ready(function() {
  function buildCarousel(slides) {
    var slides = 3;
    if (window.innerWidth < 801) slides = 2;
    if (window.innerWidth < 601) slides = 1;

    $('.img-slider').cycle({
      timeout: 0,
      prev: "#prev",
      next: "#next",
      fx: 'carousel',
      carouselFluid: 'true',
      carouselVisible: slides
    });
  }

  function resizeCarousel() {
    $('.img-slider').cycle('destroy');
    buildCarousel();
  }

  buildCarousel();
  
  $(window).resize(function(){
    setTimeout(function() { resizeCarousel(); },100);
  });
});