<?php
include "login.php";

$PageTitle = "Newsletter";
include "header.php";
?>

<div class="site-width content admin-cal">
  <div class="one-half">
    <h3>Add Newsletter</h3>

    <strong>IMPORTANT!</strong> The file MUST be named using the format "Newsletter_[4 digit year]_[2 digit month].pdf"<br>
    For example, <strong>Newsletter_2018_05.pdf</strong><br>
    <br>

    <form action="newsletter-db.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="pdf">
      <input type="submit" name="submit" value="UPLOAD">
    </form>
  </div>
  
  <div class="one-half last cal-list">
    <h3>Newsletters</h3>
    <?php
    $main_dir = "../pdf/newsletters";

    $files = scandir($main_dir);
    foreach($files as $file) {
      // Ignore non-files
      if ($file == "." || $file == "..") continue;

      // Put results into an array
      $results[] = $main_dir . "/" . $file;
    }

    natcasesort($results);
    $results = array_reverse($results);

    foreach($results as $result) {
      $filename = basename($result, ".pdf");
      $pieces = explode("_", $filename);
      echo "<div class=\"one-half\"><a href=\"" . $result . "\"> " . date("F Y", strtotime($pieces[2] . "/1/" . $pieces[1])) . "</a></div>";
    }
    ?>
  </div>
</div>

<?php include "footer.php"; ?>