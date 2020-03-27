<?php
include "login.php";

$PageTitle = "Lesson Plans";
include "header.php";
?>

<div class="site-width content admin-cal">
  <div class="one-half">
    <h3>Add Lesson Plan</h3>

    <strong>IMPORTANT!</strong> The file MUST be named using the format "Lesson_Plan_[month]-[day]-[month]-[day].pdf"<br>
    For example, <strong>Lesson_Plan_3-29-4-4.pdf</strong><br>
    <strong>NO SLASHES IN THE FILE NAME!!!!!!</strong><br>
    <br>

    <form action="lesson-plans-db.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="pdf">
      <input type="submit" name="submit" value="UPLOAD">
    </form>
  </div>
  
  <div class="one-half last cal-list">
    <h3>Lesson Plans</h3>
    <?php
    $main_dir = "../pdf/lessonplans";

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
      $week = explode("-", $pieces[2]);
      echo '<a href="'.$result.'">Lesson Plans for '.$week[0]."/".$week[1]." - ".$week[2]."/".$week[3]."</a><br>\n";
    }
    ?>
  </div>
</div>

<?php include "footer.php"; ?>