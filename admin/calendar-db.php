<?php
include("../inc/dbconfig.php");

$loc = (isset($_REQUEST['page'])) ? "?" . $_REQUEST['page'] : "";

if ($_REQUEST['a'] == "add" || $_REQUEST['a'] == "edit") {
  $startdate = (isset($_POST['startdate'])) ? strtotime($_POST['startdate']) : time();
  $enddate = (!empty($_POST['enddate'])) ? strtotime($_POST['enddate']) : $startdate;

  $array = [
    $startdate,
    $enddate,
    gremlins($_POST['event'])
  ];
}

switch ($_GET['a']) {
  case "add":
    $sql = "INSERT INTO calendar (startdate, enddate, event) VALUES (?,?,?)";
    $types = "iis";

    break;
  case "edit":
    $sql = "UPDATE calendar SET startdate = ?, enddate = ?, event = ? WHERE id = ?";
    $array[] = $_REQUEST['id'];
    $types = "iisi";

    break;
  case "delete":
    $sql = "DELETE FROM calendar WHERE id = ?";
    $array = [$_REQUEST['id']];
    $types = "i";

    break;
}

$stmt = $mysqli->prepare($sql);
$stmt->bind_param($types, ...$array);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("Location: calendar.php".$loc);
?>