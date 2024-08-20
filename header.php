<?php
if (!isset($TopDir)) $TopDir = "";
$Description = (isset($Description)) ? $Description : "Our mission is to provide an outstanding Christian environment that focuses on the development of each individual child.";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Park's Edge Preschool<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="<?php echo $Description; ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PSND0QMJEY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-PSND0QMJEY');
    </script>
  </head>
  <body>

    <header>
      <div class="site-width">
        <a href="<?php echo $TopDir; ?>." id="logo"><img src="<?php echo $TopDir; ?>images/logo.webp" alt="Park's Edge Preschool" width="990" height="417"></a>

        <input type="checkbox" id="toggle-menu" role="button">
        <label for="toggle-menu">Menu</label>
        <nav id="main-menu">
          <ul>
            <li>
              <a href="<?php echo $TopDir; ?>about.php">Park's Edge</a>
              <ul>
                <li><a href="<?php echo $TopDir; ?>tour.php">Tour</a></li>
                <li><a href="<?php echo $TopDir; ?>about.php">Mission &amp; Vision</a></li>
                <li><a href="<?php echo $TopDir; ?>about.php#leadership">Leadership &amp; Staff</a></li>
                <li><a href="<?php echo $TopDir; ?>testimonials.php">Testimonials</a></li>
                <li><a href="<?php echo $TopDir; ?>about.php#accreditation">Accreditation</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo $TopDir; ?>programs.php">Programs</a>
              <ul>
                <li><a href="<?php echo $TopDir; ?>programs.php">Christian</a></li>
                <li><a href="<?php echo $TopDir; ?>programs-it.php">Infant / Toddler</a></li>
                <li><a href="<?php echo $TopDir; ?>programs-ps.php">Pre-School</a></li>
                <li><a href="<?php echo $TopDir; ?>programs-sa.php">School Age</a></li>
                <li><a href="<?php echo $TopDir; ?>pricing.php">Pricing</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo $TopDir; ?>careers.php">Careers</a>
              <ul>
                <li><a href="<?php echo $TopDir; ?>application.php">Job Application</a></li>
              </ul>
            </li>
            <li><a href="<?php echo $TopDir; ?>contact.php">Contact</a></li>
            <li class="penultimate"><a href="<?php echo $TopDir; ?>parents.php">Parents</a></li>
            <li class="donate"><a href="<?php echo $TopDir; ?>donate.php">Donate</a></li>
          </ul>
        </nav>
      </div> <!-- /.site-width -->
    </header>
