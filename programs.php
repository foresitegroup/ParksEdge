<?php
$PageTitle = "Programs";
$Description = "At Park's Edge Preschool, grace is said before meals and bible stories from books and songs are taught within an atmosphere of Christian love and behavior.";
include "header.php";
?>

<div class="subheader" style="background-image: url(images/banner-programs-christian.webp);">
  <div class="site-width programs-subheader">
    Our Programs are NAC Accredited + 5 Star YoungStar Rating!
  </div> <!-- /.about-subheader -->
</div> <!-- /.subheader -->

<div class="site-width">
  <ul class="programs-menu">
    <li class="active"><a href="programs.php">Christian</a></li>
    <li><a href="programs-it.php">Infant / Toddler</a></li>
    <li><a href="programs-ps.php">Pre-School</a></li>
    <li><a href="programs-sa.php">School Age</a></li>
  </ul>
</div> <!-- /.site-width -->

<div class="site-width programs">
  <span class="intro">We provide the best possible care for your child through Christian-based values. At Park's Edge Preschool, Grace is said before meals and bible stories from books and songs are taught within an atmosphere of Christian love and behavior. We do not teach church doctrine, but we do educate every child enrolled at Park's Edge Preschool about the love God has for everyone and the importance of respecting others.</span><br>
  <br>

  <strong class="bluetext">Educational Policy:</strong> We realize that from the moment of birth children start to learn and discover the world around them. As Early Childhood Professionals one of our main goals is to help in providing a foundation for the young child to continue to learn and grow. Our staff provides a warm, nurturing atmosphere where children feel comfortable and confident to explore the world around them with safe limitations. Diversity is a very important element in our program planning. Our teachers plan their own thematic lesson plans for the week (includes the Wisconsin Model Early Learning Standards).<br>
  <br>

  <strong class="bluetext">A Flexible Balance</strong> of active/quiet; individual/group; and indoor/outdoor activities are prepared. Each child is offered free choice play, large and small manipulative activities, nutritious meals and snacks, stories, creative art, music, math, science, sensory experiences, large muscle activities and outdoor play.<br>
  <br>

  <strong class="bluetext">Learning Centers and Activities Offer Opportunities</strong> for social and self-awareness; pre-math, pre-reading, and other cognitive readiness skills; language skills; role-playing and imaginary play; construction and block play experiences.<br>
  <br>

  Developmentally appropriate practices are implemented to challenge each individual child at their own age level and ability. The following needs of each child are promoted and met: self-esteem and positive self-image, social interaction, self-expression and communication skills, creative development, large and small muscle development, intellectual development, and self-help skills.<br>
  <br>

  We stress the importance of play for every child. Although we have structured programs and adhere to a daily schedule we also recognize the utmost importance of free choice play. The learning that is derived from play for the young child is an important element in meeting the needs that make up the whole child by encouraging them to reach their full potential.<br>
  <br>

  <strong class="bluetext">Parent Involvement:</strong> We know that families are the strongest influence on young children and when early childhood educators partner with parents, children excel. Parent input is a key component to the program, so we ask our parents to evaluate our program several times a year. Also, parents are strongly encouraged to participate by: volunteering in their child's classroom, chaperoning field trips, participating in center activities and opportunities, annual celebrations (Mother's &amp; Father's Day Breakfast, AugustFest, Open House, Parent-Teacher Conferences, Parent Advisory Council, and more).<br>
  <br>

  <div class="links">
    <a href="tour.php" class="button">Take The Tour!</a>
    <a href="pricing.php">View Pricing</a>
  </div>
</div> <!-- /.site-width -->

<div id="programs-slider">
  <img src="images/programs-christian-slider1.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-christian-slider2.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-christian-slider3.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-christian-slider4.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-christian-slider5.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-christian-slider6.webp" alt="" width="600" height="340" class="f-carousel__slide">
</div> <!-- /#programs-slider -->

<div class="contact-section">
  <div class="site-width">
    For enrollment or to learn more about Park's Edge Preschool email or give us a call at <strong class="phone">414-427-9561</strong><br>
    <br>

    <a href="contact.php" class="button">Contact By Email</a>
  </div> <!-- /.site-width -->
</div> <!-- /.contact-section -->

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css">

<script>
  new Carousel(document.getElementById('programs-slider'), { Dots: false, Panzoom: { touch: false }, slidesPerPage: 1, initialSlide: 1 });
</script>

<?php include "footer.php"; ?>