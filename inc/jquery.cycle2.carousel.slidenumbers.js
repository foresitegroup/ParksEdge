$(window).load(function(){
  function buildCarousel(visibleSlides) {
    $('.caro').cycle({
      fx: 'carousel',
      timeout: 0,
      slides: 'img',
      carouselVisible: visibleSlides,
      carouselFluid: true,
      next: '#next',
      prev: '#prev'
    });

    if (visibleSlides < 3) { $('.caro').cycle('goto', 1); }
  }

  function initCycle() {
    var width = $(window).width();

    var destroyCarousel = function() { $('.caro').cycle('destroy'); }

    if (width < 601) {
      destroyCarousel();
      buildCarousel(1);
    } else if (width > 600 && width < 801) {
      destroyCarousel();
      buildCarousel(2);
    } else {
      destroyCarousel();
      buildCarousel(3);
    }
  }

  var reinitTimer;
  $(window).resize(function() {
    clearTimeout(reinitTimer);
    reinitTimer = setTimeout(initCycle, 100);
  });

  $(document).ready(function(){ initCycle(); });
});