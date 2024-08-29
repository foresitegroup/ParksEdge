<?php
include_once "../inc/dbconfig.php";
$TopDir = "../";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Park's Edge Preschool<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <link rel="stylesheet" href="../inc/main.css">
    <link rel="stylesheet" href="inc/admin.css">
  </head>
  <body>

    <header>
      <div class="site-width">
        <a href="." id="logo"><img src="<?php echo $TopDir; ?>images/logo.webp" alt="Park's Edge Preschool" width="990" height="417"></a>

        <input type="checkbox" id="toggle-menu" role="button">
        <label for="toggle-menu">Menu</label>
        <nav id="main-menu">
          <?php if ($PageTitle != "Login") { ?>
          <ul>
            <li><a href="menu.php">Menu</a></li>
            <!-- <li><a href="calendar.php">Calendar</a></li> -->
            <li><a href="newsletter.php">Newsletter</a></li>
            <!-- <li><a href="lesson-plans.php">Lesson Plans</a></li> -->
            <li><a href="../news/wp-admin">News</a></li>
          </ul>
          <?php } ?>
        </nav>
      </div> <!-- /.site-width -->
    </header>

    <div class="subheader" style="background: var(--darkblue); height: 6em;">
      <div class="site-width programs-subheader">
        <?php if (isset($PageTitle)) echo $PageTitle; ?>
      </div> <!-- /.about-subheader -->
    </div> <!-- /.subheader -->
