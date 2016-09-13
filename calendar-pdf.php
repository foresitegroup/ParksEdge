<?php
include_once "inc/dbconfig.php";

$title = "PEP Event Calendar";
$filename = "PEP_Event_Calendar";

$html = '<style>
.header {
  font-weight: bold;
  font-size: 24px;
  text-align: center;
}
.date {
  font-weight: bold;
}
</style>

<title>'.$title.'</title>
<meta name="author" content="Park\'s Edge Preschool" />

<div class="header">'.$title.'</div><br>
';

$prevstartdate = "";
$today = strtotime("Today 00:00");

$result = $mysqli->query("SELECT * FROM calendar WHERE enddate >= $today ORDER BY startdate ASC");

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($row['startdate'] != $prevstartdate) {
    $html .= "<div class=\"date\">" . date("F j", $row['startdate']);
    if ($row['startdate'] != $row['enddate']) {
      $html .= ($row['enddate'] - $row['startdate'] == 86400) ? " & " : "-";
      $html .= (date("F", $row['startdate']) == date("F", $row['enddate'])) ? date("j", $row['enddate']) : date("F j", $row['enddate']);
    }
    $html .= "</div>";
  }

  $html .= nl2br($row['event']) . "<br><br>";

  $prevstartdate = $row['startdate'];
}


require_once 'inc/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'Helvetica');

$dompdf->loadHtml($html);

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
// $dompdf->stream($filename,array('Attachment'=>0));
$dompdf->stream($filename);
?>