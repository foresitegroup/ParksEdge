<?php
include("../inc/dbconfig.php");

function stripslashes_nested($v) {
  if (is_array($v)) {
    return array_map('stripslashes_nested', $v);
  } else {
    return stripslashes($v);
  }
}
if (get_magic_quotes_gpc()) {
  $_GET = stripslashes_nested($_GET);
  $_POST = stripslashes_nested($_POST);
  $_COOKIES = stripslashes_nested($_COOKIES);
}

$startdate = (isset($_POST['startdate'])) ? strtotime($_POST['startdate']) : time();
$enddate = (!empty($_POST['enddate'])) ? strtotime($_POST['enddate']) : $startdate;

$loc = "";

switch ($_GET['a']) {
  case "add":
    $loc = (isset($_POST['page'])) ? "?" . $_POST['page'] : "";

    $mysqli->query("INSERT INTO calendar (
                  startdate,
                  enddate,
                  event
                  ) VALUES(
                  '" . $startdate . "',
                  '" . $enddate . "',
                  '" . $mysqli->real_escape_string($_POST['event']) . "'
                  )");
    break;
  case "edit":
    $loc = (isset($_POST['loc'])) ? "?" . $_POST['loc'] : "";

    $mysqli->query("UPDATE calendar SET
                  startdate = '" . $startdate . "',
                  enddate = '" . $enddate . "',
                  event = '" . $mysqli->real_escape_string($_POST['event']) . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $loc = (isset($_GET['loc'])) ? "?" . $_GET['loc'] : "";

    $mysqli->query("DELETE FROM calendar WHERE id = '" . $_GET['id'] . "'");
    break;
}

$mysqli->close();

header( "Location: calendar.php" . $loc );
?>