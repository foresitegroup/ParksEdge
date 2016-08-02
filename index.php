<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Park's Edge Preschool<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Bitter:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        
        $("#return-to-top").hide();

        $(window).scroll(function () {
          if ($(this).scrollTop() > 200) {
            $("#return-to-top").fadeIn(500);
          } else {
            $("#return-to-top").fadeOut(500);
          }
        });
      });
    </script>
  </head>
  <body>

    <a href="#" id="return-to-top"><i class="fa fa-arrow-up"></i></a>

    <div class="pe-header">
      <div class="site-width">
        <a href="." id="logo"><img src="images/logo.png" alt="Park's Edge Preschool"></a>
        <div class="arrow-right"></div>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="menu">
          <ul>
            <li>
              <a href="#">Park's Edge</a>
              <ul>
                <li><a href="#">Mission &amp; Vision</a></li>
                <li><a href="#">Leadership &amp; Staff</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Accreditation</a></li>
              </ul>
            </li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Tour</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Parents</a></li>
            <li class="donate"><a href="#">Donate</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="home-banner">
      <div class="home-banner-slide" style="background-image: url(images/home-banner.jpg);">
        <div class="site-width">
          <h1>Providing families with exceptional child care services in a safe &amp; loving learning environment.</h1>

          <a href="#" class="button">LEARN MORE</a>
          <a href="#" class="button">TAKE THE TOUR</a>
        </div>
      </div>

      <div class="torn-banner"></div>
    </div>

    <div class="home-mission">
      <div class="site-width">
        <div class="col1">
          <h1>OUR MISSION</h1>
          Park's Edge Preschool's mission is to provide an outstanding Christian environment that focuses on the development of each individual child; spiritually, morally, physically, mentally, socially and emotionally.<br>
          <br>

          <a href="#" class="watch">WATCH VIDEO <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
        </div>

        <div class="col2">
          At <strong class="bluetext">Park's Edge Preschool &amp; Child Care Center</strong> we continually strive to be a valuable extension of the families that we serve. We seek to form a partnership with parents to create and maintain a superior learning environment for their Christian Values and traditions. We invite you to come and see this "home away from home" for your children and to learn about our special programs developed specifically to meet your family's needs.
        </div>
      </div>
    </div>

    <div class="home-programs">
      <div class="site-width">
        <div class="col1">
          <h1>OUR CHILD CARE PROGRAMS</h1>
          The core of our desire to provide the best possible care for your child special programs developed specifically to meet your families need. We realize that from the moment of birth, children start to learn and discover the world around them. We offer a series of programs for children age 6 weeks through pre-kindergarten who benefit from the use of a well-defined age appropriate daily curriculum to direct their learning experience.
        </div>

        <div class="col2">
          <br>
          <i class="fa fa-circle-o" aria-hidden="true"></i> CHRISTIAN PROGRAM<br>
          <br>
          <br>

          <i class="fa fa-circle-o" aria-hidden="true"></i> INFANT/TODDLER PROGRAM<br>
          <br>
          <br>

          <i class="fa fa-circle-o" aria-hidden="true"></i> PRE-SCHOOL PROGRAM<br>
          <br>
          <br>

          <i class="fa fa-circle-o" aria-hidden="true"></i> SCHOOL AGE PROGRAMS<br>
          <br>
          <br>

          <a href="#" class="button orange">PROGRAM DETAILS</a>
          <a href="#" class="pricing">PRICING +</a>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.carousel.slidenumbers.js"></script>

    <div class="home-slider">
      <div class="caro">
        <img src="images/home-slider1.jpg" alt="">
        <img src="images/home-slider2.jpg" alt="">
        <img src="images/home-slider3.jpg" alt="">
        <img src="images/home-slider4.jpg" alt="">
        <img src="images/home-slider5.jpg" alt="">
        <img src="images/home-slider6.jpg" alt="">
        <img src="images/home-slider7.jpg" alt="">
        <img src="images/home-slider8.jpg" alt="">
      </div>

      <div class="slider-buttons">
        <div class="site-width">
          <a href="#" id="prev"><i class="fa fa-play-circle-o fa-rotate-180" aria-hidden="true"></i></a>
          <a href="#" id="next"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="home-contact">
      <div class="site-width">
        For enrollment or to learn more about Park's Edge Preschool email or give us a call at <strong class="orangetext">414-427-9561</strong><br>
        <br>

        <a href="#" class="button">CONTACT BY EMAIL</a>
      </div>
    </div>

    <div class="home-testimonials">
      <div class="cycle-slideshow site-width" data-cycle-slides="> div" data-cycle-timeout="8000" data-cycle-pause-on-hover="true" data-cycle-pager-template="<span></span>">
        <p class="cycle-pager"></p>
        <div>
          "Thank you for all you do to keep us parents organized and on track. We barely arrive in the morning with our wits - let alone the kids. It's great to be met by smiling faces who know each and every child by name. Thanks!"<br>
          <br>
          <div class="attr">- PEP Parent</div>
        </div>

        <div>
          "This is a testimonial that is four lines long. This is a testimonial that is four lines long. This is a testimonial that is four lines long. This is a testimonial that is four lines long. This is a testimonial that is four lines long. This is a testimonial that is four lines long. This is a testimonial that is four lines long. This is a testimonial that is four lines long."<br>
          <br>
          <div class="attr">- PEP Parent</div>
        </div>

        <div>
          "This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long. This is a testimonial that is five lines long."<br>
          <br>
          <div class="attr">- PEP Parent</div>
        </div>

        <div>
          "This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long. This is a testimonial that is six lines long."<br>
          <br>
          <div class="attr">- PEP Parent</div>
        </div>

        <div>
          "This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long. This is a testimonial that is seven lines long."<br>
          <br>
          <div class="attr">- PEP Parent</div>
        </div>
      </div>
    </div>

    <div class="home-accreditation">
      <div class="site-width">
        <div class="col1">
          <h1>NAC ACCREDITATION</h1>
          <strong>The Association for Early Learning Leaders</strong>, formerly known as the National Association of Child Care Professionals is a nonprofit organization committed to excellence by promoting leadership development and enhancing program quality through the National Accreditation Commission's standards.<br>
          <br>
          <br>

          <a href="#">WHAT IS THIS?</a><br>
          <br>
          <br>

          <img src="images/logo-nac.png" alt="NAC">
        </div>

        <div class="col2">
          <h1>YOUNGSTAR 5 STAR PROVIDER RATING</h1>
          <strong>YoungStar</strong> is Wisconsin's child care quality rating and improvement system. We give parents the tools and information they need to raise happy, healthy kids. And, we help preschools, home-based programs, learning centers, and other child care providers give children safe, nurturing places to grow.<br>
          <br>
          <br>

          <a href="#">WATCH VIDEO <i class="fa fa-play-circle-o" aria-hidden="true"></i></a><br>
          <br>
          <br>

          <img src="images/logo-youngstar.png" alt="YoungStar">
        </div>
      </div>

      <div class="torn-accreditation"></div>
    </div>

    <div class="pe-footer">
      <div class="site-width">
        <div class="one-fourth bigger">
          <h2>RESOURCES</h2>
          <a href="#">CALENDARS</a><br>
          <a href="#">LUNCH MENU</a><br>
          <a href="#">FORMS</a><br>
          <a href="#">DONATE</a>
        </div>

        <div class="one-fourth bigger">
          <h2>FOLLOW US</h2>
          <a href="#">FACEBOOK</a><br>
          <a href="#">YOUTUBE</a><br>
          <a href="#">BLOG/NEWS</a>
        </div>

        <div class="one-fourth">
          <h2>STAY INFORMED</h2>
          with our Monthly Newsletter to recieve details on news, events and important dates.
          <a href="#" class="button-border">SIGN-UP!</a>
        </div>

        <div class="one-fourth">
          <h2>LOCATION</h2>
          10627 W. Forest Home Avenue<br>
          Hales Corners, WI 53130<br>
          <strong style="display: block; margin: 0.5em 0;">(414) 427-9561</strong>
          <a href="#">CONTACT US BY EMAIL</a>
        </div>
      </div>

      <div class="copyright">&copy; <?php echo date("Y"); ?> Park's Edge Preschool, Inc.</div>
    </div>

  </body>
</html>