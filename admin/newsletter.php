<?php
include "login.php";

$PageTitle = "Newsletter";
include "header.php";
?>

<div class="site-width content newsletter">
  <div>
    <h1>Add Newsletter</h1>

    <strong>IMPORTANT!</strong> The file MUST be named using the format "Newsletter_[4 digit year]_[2 digit month].pdf"<br>
    For example, <strong>Newsletter_2018_05.pdf</strong><br>
    <br>

    <form action="newsletter-db.php" method="POST" enctype="multipart/form-data" class="form">
      <input type="file" name="newsletter" accept=".pdf" id="newsletter">
      <label for="newsletter">Select File</label>
      <br><br>
      <input type="submit" name="submit" value="Upload">
    </form>
  </div>
  
  <div>
    <h1>Newsletters</h1>
    <?php
    $dir = opendir("../pdf/newsletters");
    $files = [];
    while (false != ($file = readdir($dir))) {
      if (($file != ".") and ($file != "..")) $files[] = $file;
    }
    closedir($dir);
    natcasesort($files);
    $files = array_reverse($files);
    
    foreach ($files as $file) {
      echo '<a href="../pdf/newsletters/'.$file.'">'.date("F Y", strtotime(substr($file, 11, 4)."-".substr($file, 16, 2).'-01'))."</a><br>\n";
    }
    ?>
  </div>
</div>

<script>
  // Add file name after upload button
  document.querySelector('input[name="newsletter"]').addEventListener('change', function() {
    document.querySelector('#newsletter + LABEL').dataset.content = this.value.split('\\').pop();
  });
</script>

<?php include "footer.php"; ?>