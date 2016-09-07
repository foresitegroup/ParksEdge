<?php
include("../inc/dbconfig.php");

$date = ($_POST['date'] != "") ? strtotime($_POST['date']) : "";

switch ($_GET['a']) {
  case "add":
    $mysqli->query("INSERT INTO menu (
                  date,
                  lunch,
                  am_snack,
                  pm_snack
                  ) VALUES(
                  '" . $date . "',
                  '" . $_POST['lunch'] . "',
                  '" . $_POST['am_snack'] . "',
                  '" . $_POST['pm_snack'] . "'
                  )");
    break;
  case "edit":
    $mysqli->query("UPDATE menu SET
                  date = '" . $date . "',
                  lunch = '" . $_POST['lunch'] . "',
                  am_snack = '" . $_POST['am_snack'] . "',
                  pm_snack = '" . $_POST['pm_snack'] . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $mysqli->query("DELETE FROM menu WHERE id = '" . $_GET['id'] . "'");
    break;
}

$mysqli->close();

header( "Location: menu.php" );
?>