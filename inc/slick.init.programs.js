$(document).ready(function(){
  var q = document.URL.split('#')[1];

  if (q != undefined) {
    if (q == 'christian') { var initSlide = 0; }
    if (q == 'infant-toddler') { var initSlide = 1; }
    if (q == 'pre-school') { var initSlide = 2; }
    if (q == 'school-age') { var initSlide = 3; }

    history.pushState('data', '', 'programs.php');
  } else {
    var initSlide = 0;
  }

  $('.programs-slider').slick({
    arrows: false,
    dots: true,
    dotsClass: 'programs-menu',
    fade: true,
    cssEase: 'linear',
    adaptiveHeight: true,
    initialSlide: initSlide,
    customPaging: function (slider, i) {
      if (i == 0) var title = "CHRISTIAN";
      if (i == 1) var title = "INFANT / TODDLER";
      if (i == 2) var title = "PRE-SCHOOL";
      if (i == 3) var title = "SCHOOL AGE";
      return title;
    }
  });
});