<?php
$PageTitle = "About Park's Edge";
$Description = "Park's Edge Preschool & Child Care Center is a non-profit organization that was established in June of 1999 as an outreach program of the Emanuel United Church of Christ.";
include "header.php";
?>

<div class="subheader" style="background-image: url(images/banner-about.webp);">
  <div class="site-width about-subheader">
    <strong>Park's Edge Preschool's <span class="bluetext">Vision</span></strong> is to provide families with exceptional child care services in a safe and loving learning environment. Our <strong class="bluetext">Mission</strong> is to provide an outstanding Christian environment that focuses on the development of each individual child; spiritually, morally, physically, mentally, socially and emotionally.
  </div> <!-- /.about-subheader -->
</div> <!-- /.subheader -->

<div class="about site-width">
  <div class="intro">
    Park's Edge Preschool &amp; Child Care Center is a non-profit organization that was established in June of 1999 as an outreach program of the <a href="http://www.emanuel-ucc.org">Emanuel United Church of Christ</a>, which has been serving the Hales Corners community for over 100 years. Together we continually strive to be a valuable extension of the families that we serve. We seek to form a partnership with parents to create and maintain a superior learning environment for their Christian Values and traditions and invite you to come and see this "home away from home" for your children to learn about our special programs developed specifically to meet your families needs.<br>
    <br>

    We employ a highly trained, diverse and enthusiastic staff around a 12-hour day at Park's Edge Preschool. We schedule our staff in accordance with state licensing requirements. We offer a variety of programs that accommodate children from six weeks through twelve years of age. The Center is a special place distinctly designed with a number of features to promote an optimal atmosphere for the individual growth and development of your child.
  </div> <!-- /.intro -->

  <h1 id="leadership">PEP Leadership</h1>

  <div class="about-director">
    <h2>Ellen Kvalheim, <span class="bluetext">Center Director</span></h2>

    <div class="text">
      "For over 30 years, my professional experience encompasses working with children of all age groups, in various child care settings. My background includes owning and directing a group childcare center, which continues to successfully operate today. I chose directing at Park's Edge Preschool because it offered a Christian environment with dedicated staff and an excellent reputation.<br>
      <br>

      I earned an Early Childhood Administrative Credential from UWM and a Bachelor's Degree, with distinction, in Human Services from Ottawa University. Registry Level 15.<br>
      <br>

      I am proud of the accomplishments that the center and staff have made in the process; which is continual. I am anxious to meet and serve all the families at PEP and I look forward to a long-term commitment as the Director at Park's Edge Preschool."
    </div> <!-- /.text -->

    <img src="images/team-ellen.webp" alt="Ellen Kvalheim" width="700" height="700">
  </div> <!-- /.about-director -->

  <div class="about-team">
    <div class="person">
      <div class="image" style="background-image: url(images/team-kristin.webp);">
        <div class="text">
          "I truly enjoy working at Park's Edge, it is a pleasure to take care of the children and encourage them as they grow and mature throughout the years."
        </div> <!-- /.text-->
      </div> <!-- /.image-->

      <h2>Kristin Burr</h2>
      <h3>Assistant Director</h3>
    </div> <!-- /.person-->

    <div class="person">
      <div class="image" style="background-image: url(images/team-jenele.webp);">
        <div class="text">
          "I have been working at PEP since 2007 and graduated with my EC Associate's Degree in 2017. I am truly blessed to be working at Park's Edge Preschool."
        </div> <!-- /.text-->
      </div> <!-- /.image-->

      <h2>Jenele Baldwin</h2>
      <h3>Curriculum Coordinator</h3>
    </div> <!-- /.person-->

    <div class="person">
      <div class="image" style="background-image: url(images/team-melinda.webp);">
        <div class="text">
          "I have been a teacher at Park's Edge since September of 2005. I have my Associates Degree in Early Childhood from MATC which places me at Registry Level 12."
        </div> <!-- /.text-->
      </div> <!-- /.image-->

      <h2>Melinda Antoniewizc</h2>
      <h3>Safety Coordinator &amp; Preschool Teacher</h3>
    </div> <!-- /.person-->
  </div> <!-- /.about-team -->
</div> <!-- /.about -->

<div class="about-testimonials">
  <div class="site-width">
    "Thank you for all you do to keep us parents organized and on track. We barely arrive in the morning with our wits - let alone the kids. It's great to be met by smiling faces who know each and every child by name. Thanks!"
    <div class="attr">- PEP Parent</div>
  </div> <!-- /.site-width -->
</div> <!-- /.about-testimonials -->

<div class="about-accreditation" id="accreditation">
  <div class="site-width">
    <div>
      <img src="images/logo-nac-square.webp" alt="National Accreditation Commission" width="523" height="221"><br>

      <strong>The Association for Early Learning Leaders</strong>, formerly known as the National Association of Child Care Professionals is a nonprofit organization committed to excellence by promoting leadership development and enhancing program quality through the National Accreditation Commission's standards.<br>

      <a href="http://www.earlylearningleaders.org/?page=accreditation">What Is This?</a><br>
    </div>

    <div>
      <img src="images/logo-youngstar.webp" alt="YoungStar" width="600" height="186"><br>

      <strong>5 Star YoungStar Rating! YoungStar</strong> is Wisconsin's child care quality rating and improvement system. We give parents the tools and information they need to raise happy, healthy kids. And, we help preschools, home-based programs, learning centers, and other child care providers give children safe, nurturing places to grow.<br>

      <a href="https://www.youtube.com/watch?v=T3s7bcOmHpg" data-fancybox="youngstar" class="play" aria-label="Watch a video about YoungStar">Learn More</a><br>
    </div>
  </div> <!-- /.site-width -->
</div> <!-- /.about-accreditation -->

<div class="contact-section white">
  <div class="site-width">
    For enrollment or to learn more about Park's Edge Preschool email or give us a call at <strong class="phone">414-427-9561</strong><br>
    <br>

    <a href="contact.php" class="button">Contact By Email</a>
  </div> <!-- /.site-width -->
</div> <!-- /.contact-section -->

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

<script>
  const bios = document.querySelectorAll('.about-team .person .image');
  bios.forEach((bio) => {
    bio.addEventListener('touchstart', () => { bio.classList.add('hover'); });
    bio.addEventListener('touchend', () => { bio.classList.remove('hover'); });
  });

  Fancybox.bind('[data-fancybox]', { closeButton: true, Toolbar: { enabled: false } });
</script>

<?php include "footer.php"; ?>