$(document).ready(function(){
  $('.home-slider').slick({
    prevArrow: '<a href="#" class="prev"><i class="fa fa-play-circle-o fa-rotate-180" aria-hidden="true"></i></a>',
    nextArrow: '<a href="#" class="next"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});