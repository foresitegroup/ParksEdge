<?php
include("../inc/dbconfig.php");

$loc = (isset($_REQUEST['page'])) ? "?" . $_REQUEST['page'] : "";

if ($_REQUEST['a'] == "add" || $_REQUEST['a'] == "edit") {
  $date = (isset($_POST['date'])) ? strtotime($_POST['date']) : "";

  $array = [
    $date,
    gremlins($_POST['lunch']),
    gremlins($_POST['am_snack']),
    gremlins($_POST['pm_snack'])
  ];
}

switch ($_REQUEST['a']) {
  case "add":
    $sql = "INSERT INTO menu (date, lunch, am_snack, pm_snack) VALUES (?,?,?,?)";
    $types = "isss";

    break;
  case "edit":
    $sql = "UPDATE menu SET date = ?, lunch = ?, am_snack = ?, pm_snack = ? WHERE id = ?";
    $array[] = $_REQUEST['id'];
    $types = "isssi";

    break;
  case "delete":
    $sql = "DELETE FROM menu WHERE id = ?";
    $array = [$_REQUEST['id']];
    $types = "i";
    
    break;
}

$stmt = $mysqli->prepare($sql);
$stmt->bind_param($types, ...$array);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("Location: menu.php".$loc);
?>