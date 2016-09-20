<?php
$PageTitle = "Parents";
include "header.php";

date_default_timezone_set('America/Chicago');
include_once "inc/dbconfig.php";
?>

<div class="banner no-tear" style="background-image: url(images/banner-parents.jpg);">
  <div class="site-width parents">
    PEP PARENT SECTION
  </div>
</div>

<div class="site-width parents-menu-header" id="menus">
  TODDLER &amp; PRE-SCHOOL
  <h1>LUNCH &amp; SNACK MENU</h1>
</div>

<script>
  $(document).ready(function() {
    var hash = window.location.hash;
    if (hash == "#calendar") {
      $("#menu-schedule").load("menu-schedule.php", function() { location.href = '#calendar'; });
    } else {
      $("#menu-schedule").load("menu-schedule.php");
    }

    $("#menu-schedule").on("click", "a", function (e) {
      $("#menu-schedule").load($(this).attr("href"));
      e.preventDefault();
    });
  });
</script>
<div id="menu-schedule"></div>

<div class="site-width parents-download">
  <div class="one-third">
    <a href="menu-pdf.php?lunch">DOWNLOAD LUNCH MENU <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
  </div>

  <div class="one-third">
    <a href="menu-pdf.php?snack">DOWNLOAD SNACK MENU <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
  </div>

  <div class="one-third last">
    <a href="pdf/lunch-coupon.pdf">FREE LUNCH COUPON <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
  </div>
</div>

<div class="parents-calendar" id="calendar">
  <div class="site-width">
    <h1>IMPORTANT DATES</h1>

    <a href="calendar-pdf.php" class="download-cal">DOWNLOAD CALENDAR <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>

    <?php
    $prevstartdate = "";
    $today = strtotime("Today 00:00");

    $result = $mysqli->query("SELECT * FROM calendar WHERE enddate >= $today ORDER BY startdate ASC");

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      if ($row['startdate'] != $prevstartdate) {
        echo "<div class=\"date\">" . date("F j", $row['startdate']);
        if ($row['startdate'] != $row['enddate']) {
          echo ($row['enddate'] - $row['startdate'] == 86400) ? " & " : "-";
          echo (date("F", $row['startdate']) == date("F", $row['enddate'])) ? date("j", $row['enddate']) : date("F j", $row['enddate']);
        }
        echo "</div>";
      }

      echo nl2br($row['event']) . "<br><br>";

      $prevstartdate = $row['startdate'];
    }
    ?>
  </div>
</div>

<div class="parents-newsletter">
  <div class="site-width">
    <h1>NEWSLETTER</h1>

    Read, Download and <a href="#mailchimp">Signup</a> to the Parks Edge Pre-School Newsletter to stay up to date on news, events &amp; important dates.<br>
    <br>
    <br>

    <?php
    $main_dir = "pdf/newsletters";

    $files = scandir($main_dir);
    foreach($files as $file) {
      // Ignore non-files
      if ($file == "." || $file == "..") continue;

      // Put results into an array
      $results[] = $main_dir . "/" . $file;
    }

    natcasesort($results);
    $results = array_reverse($results);
    $results = array_slice($results, 0, 5);

    foreach($results as $result) {
      $filename = basename($result, ".pdf");
      $pieces = explode("_", $filename);
      echo "<a href=\"" . $result . "\" class=\"newsletters\"><i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i> " . date("F Y", strtotime($pieces[2] . "/1/" . $pieces[1])) . "</a>";
    }
    ?>
  </div>

  <div class="torn-footer"></div>
</div>

<?php include "footer.php"; ?>