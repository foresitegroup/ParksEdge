<?php
include("../inc/dbconfig.php");

$date = (isset($_POST['date'])) ? strtotime($_POST['date']) : "";
$loc = "";

switch ($_GET['a']) {
  case "add":
    $loc = (isset($_POST['page'])) ? "?" . $_POST['page'] : "";

    $mysqli->query("INSERT INTO menu (
                  date,
                  lunch,
                  am_snack,
                  pm_snack
                  ) VALUES(
                  '" . $date . "',
                  '" . $mysqli->real_escape_string($_POST['lunch']) . "',
                  '" . $mysqli->real_escape_string($_POST['am_snack']) . "',
                  '" . $mysqli->real_escape_string($_POST['pm_snack']) . "'
                  )");
    break;
  case "edit":
    $loc = (isset($_POST['loc'])) ? "?" . $_POST['loc'] : "";

    $mysqli->query("UPDATE menu SET
                  date = '" . $date . "',
                  lunch = '" . $mysqli->real_escape_string($_POST['lunch']) . "',
                  am_snack = '" . $mysqli->real_escape_string($_POST['am_snack']) . "',
                  pm_snack = '" . $mysqli->real_escape_string($_POST['pm_snack']) . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $loc = (isset($_GET['loc'])) ? "?" . $_GET['loc'] : "";

    $mysqli->query("DELETE FROM menu WHERE id = '" . $_GET['id'] . "'");
    break;
}

$mysqli->close();

header( "Location: menu.php" . $loc );
?>