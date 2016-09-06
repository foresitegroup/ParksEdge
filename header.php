<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Park's Edge Preschool<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="<?php if (isset($Description)) echo $Description; ?>">
    <meta name="keywords" content="<?php if (isset($Keywords)) echo $Keywords; ?>">
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
              <a href="about.php">Park's Edge</a>
              <ul>
                <li><a href="about.php">Mission &amp; Vision</a></li>
                <li><a href="about.php#leadership">Leadership &amp; Staff</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="about.php#accreditation">Accreditation</a></li>
              </ul>
            </li>
            <li>
              <a href="programs.php">Programs</a>
              <ul>
                <li><a href="programs.php" onclick="location.reload();">Christian</a></li>
                <li><a href="programs.php#infant-toddler" onclick="location.reload();">Infant / Toddler</a></li>
                <li><a href="programs.php#pre-school" onclick="location.reload();">Pre-School</a></li>
                <li><a href="programs.php#school-age" onclick="location.reload();">School Age</a></li>
              </ul>
            </li>
            <li>
              <a href="tour.php">Tour</a>
              <ul>
                <li><a href="tour.php#infant-toddler">Infant / Toddler</a></li>
                <li><a href="tour.php#pssa">Pre-School &amp; School Age</a></li>
                <li><a href="tour.php#outdoor">Outdoor / Facility</a></li>
              </ul>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Parents</a></li>
            <li class="donate"><a href="#">Donate</a></li>
          </ul>
        </div>
      </div>
    </div>
