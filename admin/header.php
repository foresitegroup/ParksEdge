<?php include_once "../inc/dbconfig.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Park's Edge Preschool<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Bitter:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../inc/main.css">
    <link rel="stylesheet" href="inc/admin.css">
    <link rel="stylesheet" href="inc/jquery-ui.css" type="text/css">

    <script type="text/javascript" src="../inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery-ui.min.js"></script>
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

        $(".startdate, .enddate").datepicker();
        $(".menudate").datepicker({ beforeShowDay: $.datepicker.noWeekends });
        $("#submit").attr('disabled','disabled');
        $(".startdate").change(function(){
          if ($(".startdate").val().length !== 0) $("#submit").removeAttr('disabled');    
        });
        $(".menudate").change(function(){
          if ($(".menudate").val().length !== 0) $("#submit").removeAttr('disabled');    
        });
      });
    </script>
  </head>
  <body>

    <a href="#" id="return-to-top"><i class="fa fa-arrow-up"></i></a>

    <div class="pe-header">
      <div class="site-width">
        <a href="." id="logo"><img src="../images/logo.png" alt="Park's Edge Preschool"></a>
        <div class="arrow-right"></div>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="menu">
          <?php if ($PageTitle != "Login") { ?>
          <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="calendar.php">Calendar</a></li>
            <li><a href="../news/wp-admin">News</a></li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
    
    <div class="banner" style="background: #1A404F; height: 6em;">
      <div class="site-width big">
        <?php if (isset($PageTitle)) echo $PageTitle; ?>
      </div>

      <div class="torn-header-white"></div>
    </div>