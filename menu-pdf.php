<?php
include_once "inc/dbconfig.php";

$first_day = strtotime(date("Y-m-01"));
$last_day = strtotime(date("Y-m-t 23:59:59"));
$days_in_month = date("t");
$blanks = date("w", $first_day);
 
$title = ($_SERVER['QUERY_STRING'] == "lunch") ? "Lunch" : "Snack";
$metatitle = $title . " Menu " . date("F Y");
$headertitle = $title . " - " . date("F Y");
$filename = $title . "_Menu_" . date("F_Y");

$html = '<style>
.cal {
  width: 100%;
  border-collapse: collapse;
}

.cal TD {
  border: 1px solid #000000;
  width: 20%;
  padding: 0.75em;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  line-height: 1.1em;
  font-size: 11px;
  text-align: center;
}

.cal .cal-head TD {
  border: 0;
  font-weight: bold;
  font-size: 20px;
  line-height: 1em;
}

.cal .weekdays TD {
  font-weight: bold;
  font-size: 14px;
  padding: 0.5em;
}

.cal TD.cal-day {
  height: 140px;
  position: relative;
}

.cal TD.cal-day .cal-date {
  font-size: 14px;
  font-weight: bold;
  text-align: left;
  position: absolute;
  top: 0.25em;
  left: 0.25em;
}

.cal TD.cal-day HR {
  border: 0;
  height: 1px;
  background: #AAAAAA;
}

.cal TD.blank-start,
.cal TD.blank-end {
  border-left: 0;
  border-right: 0;
}

.cal TD.blank-start:first-child {
  border-left: 1px solid #000000;
}

.cal TD.blank-end:last-child {
  border-right: 1px solid #000000;
}
</style>

<title>'.$metatitle.'</title>
<meta name="author" content="Park\'s Edge Preschool" />

<table class="cal">
  <tr class="cal-head">
    <td colspan="5">
      Toddler & Preschool '.$headertitle.'
    </td>
  </tr>

  <tr class="weekdays">
    <td>Monday</td>
    <td>Tuesday</td>
    <td>Wednesday</td>
    <td>Thursday</td>
    <td>Friday</td>
  </tr>

  <tr>
  ';

    // Display blank days before the month starts
    for ($day_count = 0; $day_count < $blanks; $day_count++) {
      if ($day_count > 0 && $day_count < 6) {
        $html .= "<td class=\"cal-day blank-start\"></td>\n";
      }
    }
 
    // Get any shows for this month and put them in an array
    $result = $mysqli->query("SELECT * FROM menu WHERE date >= '$first_day' AND date < '$last_day' ORDER BY date ASC");
 
    $eventarr = array();
    while($row = $result->fetch_array(MYSQLI_BOTH)) {
      $MyDay = date("j", $row['date']);
      $eventarr[$MyDay][] = $row;
    }
    $result->close();
 
    $day_num = 1;
 
    // Create the calendar by counting up to the last day of the month
    while ($day_num <= $days_in_month) {
      if ($day_count > 0 && $day_count < 6) {
        $html .= "<td class=\"cal-day\">
          <div class=\"cal-date\">$day_num</div>
          ";
   
          // This day has a menu so display it
          if (isset($eventarr[$day_num])) {
            foreach($eventarr[$day_num] as $key => $value) {
              if ($_SERVER['QUERY_STRING'] == "lunch") {
                if ($eventarr[$day_num][$key]['lunch'] != "") $html .= nl2br($eventarr[$day_num][$key]['lunch']);
              } else {
                if ($eventarr[$day_num][$key]['am_snack'] != "") $html .= "<strong>AM</strong><br>" . nl2br($eventarr[$day_num][$key]['am_snack']);
                if ($eventarr[$day_num][$key]['am_snack'] != "" && $eventarr[$day_num][$key]['pm_snack'] != "") $html .= "<hr>";
                if ($eventarr[$day_num][$key]['pm_snack'] != "") $html .= "<strong>PM</strong><br>" . nl2br($eventarr[$day_num][$key]['pm_snack']);
              }
            }
          }
        $html .= "</td>\n";
      }
 
      $day_num++;
      $day_count++;
 
      // Start a new row every week
      if ($day_count > 6) {
        $html .= "</tr>\n<tr>\n";
        $day_count = 0;
      }
    }
 
    // Finish out the table with some blank details if needed
    $blank_end_first = 1;
    while ($day_count > 0 && $day_count < 6) {
      $html .= "<td class=\"cal-day blank-end";
      if ($blank_end_first == 1) $html .= " blank-end-first";
      $html .= "\"></td>\n";
      $day_count++;
      $blank_end_first++;
    }

  $html .= "</tr>
  <tr><td colspan=\"5\" style=\"text-align: right; border: 0;\">note: fresh fruit and veggies are subject to occasional change based on availability</td></tr>
</table>";

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
$dompdf->stream($filename);
?>