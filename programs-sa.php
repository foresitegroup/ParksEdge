<?php
$PageTitle = "Programs | School Age";
$Description = "The school age program is available for children before and/or after school, days off and holidays, school closing and summer. Additional programs are available for school-age children through the age of twelve.";
include "header.php";
?>

<div class="subheader" style="background-image: url(images/banner-programs-school-age.webp);">
  <div class="site-width programs-subheader">
    Our Programs are NAC Accredited + 5 Star YoungStar Rating!
  </div> <!-- /.about-subheader -->
</div> <!-- /.subheader -->

<div class="site-width">
  <ul class="programs-menu">
    <li><a href="programs.php">Christian</a></li>
    <li><a href="programs-it.php">Infant / Toddler</a></li>
    <li><a href="programs-ps.php">Pre-School</a></li>
    <li class="active"><a href="programs-sa.php">School Age</a></li>
  </ul>
</div> <!-- /.site-width -->

<div class="site-width programs">
  <span class="intro">The school age program is available for children before and/or after school, days off and holidays, school closing and summer. Additional programs are available for school-age children through the age of twelve. Planned activities and secure, large special play areas allow the children the time and space to learn, play, and have fun. Transportation is available to and from many neighboring schools.</span><br>
  <br>

  The program offers the help and time for children to complete homework, art experiences, games and other activities. We understand that children are in a structured environment all day; therefore we provide free choice time to expend energy while providing a productive and safe environment. The children receive an afternoon snack and can choose their activity during free choice time. After free choice, children will go outside and will be encouraged to participate in group outdoor activities or to play in small groups. If parents wish, homework time will be available along with the help to complete it.<br>
  <br>

  <strong class="bluetext">School Age Summer Program/Camp:</strong> We have a wonderful summer program for school aged children where children get to plan the curriculum based on their interests so we know we are offering activities that are exciting to the children. Children are included in planning summer events and field trips. They will be able to participate in special field trips, art projects, and water play, cooking experiences, outside activities, educational activities, special guests, and much more!<br>
  <br>

  <div class="links">
    <a href="tour.php" class="button">Take The Tour!</a>
    <a href="pricing.php">View Pricing</a>
  </div>
</div> <!-- /.site-width -->

<div id="programs-slider">
  <img src="images/programs-school-age-slider1.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-school-age-slider2.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-school-age-slider3.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-school-age-slider4.webp" alt="" width="600" height="340" class="f-carousel__slide">
  <img src="images/programs-school-age-slider5.webp" alt="" width="600" height="340" class="f-carousel__slide">
</div> <!-- /#programs-slider -->

<div class="programs-staff">
  <div class="site-width">
    <h1>School Age Staff</h1>

    <h2>Slithering Snakes (School-Age)</h2>
    <strong>MS. ANNA</strong> started working at Park's Edge Preschool in 2015 "I completed Introduction to Early Childcare Profession, Skills &amp; Strategies for the Childcare Teacher and School Age Assistant Childcare Worker courses in addition to some Early Childhood Education college courses at Wisconsin Lutheran College. Registry level 7. I am excited to get to know both you and your children."<br>
    <br>

    <h2>Bus Drivers</h2>
    <strong>MS. DEE</strong> has been working at Park's Edge since October 1996. Ms. Dee opens our classrooms every morning with an energetic smile. "My childcare education consists of ECI &amp; ECII, Infant &amp; Toddler, School-Age and I have a CDA. In December 2009 I also obtained my CDL to drive the bus too. Dee transports our school age children to and from local elementary schools. Registry Level 6. In my spare time, I am an Instructor Trainee for Tae Kwon Do and have obtained my 2nd degree black belt."<br>
    <br>

    <strong>MS. MARIA</strong> has her CDL and is our back-up bus driver when Ms. Dee is not here. "I get great enjoyment being around children, watching them learn and grow."<br>
    <br>

    <h2>Support Staff</h2>
    <strong>MS. DORA</strong> has been the cook/food coordinator at Park's Edge Preschool since December 2012. "I have my Food Managers License that I maintain. My education also includes Early Childhood I and Early Childhood II which makes me qualified to be an Assistant Teacher too. I enjoy contributing to the Park's Edge Preschool program and serving the families here."<br>
    <br>

    <strong>MS. JESSICA</strong> has been working at Park's Edge since November 2016.  "I have my Bachelor's in Economics with a minor in Business. Working at Park's Edge has been a truly rewarding experience for me. It's been a really honor and pleasure getting to know all of the children and families that walk through the door and greet me every day."
  </div> <!-- /.site-width -->
</div> <!-- /.program-staff -->

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