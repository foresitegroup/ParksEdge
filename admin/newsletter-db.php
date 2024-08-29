<?php
$allowed = array("pdf");

if ($_FILES['newsletter']['tmp_name'] != "") {
  if (in_array(strtolower(pathinfo($_FILES['newsletter']['name'], PATHINFO_EXTENSION)), $allowed)) {

    move_uploaded_file($_FILES['newsletter']['tmp_name'], '../pdf/newsletters/'.$_FILES['newsletter']['name']);
  }
}


// if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
//   $target = '../pdf/newsletters/'.$_FILES['pdf']['name'];

//   move_uploaded_file($_FILES['pdf']['tmp_name'], $target);
// }

header("Location: newsletter.php");
?>