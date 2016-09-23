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
    if (hash != "") {
      $("#menu-schedule").load("menu-schedule.php", function() { location.href = hash; })
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

<div class="parents-news">
  <div class="site-width">
    <h1>RECENT NEWS</h1>

    <?php
    require('news/wp-blog-header.php');
    $posts = get_posts('posts_per_page=3&order=DESC&orderby=date');
    foreach ($posts as $post) :
      setup_postdata( $post );
      ?>
      <div class="one-third">
        <div class="blog-date"><?php the_date(); ?></div>
        <div class="blog-title"><?php the_title(); ?></div>
        <?php echo excerpt(24); ?><br>
        <br>

        <a href="<?php the_permalink(); ?>" class="blog-link">READ MORE</a>
      </div>
    <?php endforeach; ?>
    
    <div style="clear: both;"></div><br>
    <br>
    <br>

    <a href="news" class="button blue">VIEW ALL POSTS</a>
  </div>
</div>

<div class="parents-newsletter-forms">
  <div class="site-width">
    <div class="parents-newsletter cf">
      <h1>NEWSLETTER</h1>

      Read, Download and <a href="#mailchimp">Signup</a> to the Parks Edge Preschool Newsletter to stay up to date on news, events &amp; important dates.<br>

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
        echo "<div class=\"one-half\"><a href=\"" . $result . "\"><i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i> " . date("F Y", strtotime($pieces[2] . "/1/" . $pieces[1])) . "</a></div>";
      }
      ?>
    </div>

    <div class="parents-forms" id="forms">
      <h1>DOCUMENTS &amp; FORMS</h1>

      <a href="#">Immunization Form</a><br>

      <a href="#">Application Form</a><br>

      <a href="#">Permission Slip</a>
    </div>
  </div>

  <div class="torn-footer"></div>
</div>

<?php include "footer.php"; ?>