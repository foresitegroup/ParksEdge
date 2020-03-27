<?php
if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
  $target = '../pdf/lessonplans/'.$_FILES['pdf']['name'];

  move_uploaded_file($_FILES['pdf']['tmp_name'], $target);
}

header( "Location: lesson-plans.php" );
?>