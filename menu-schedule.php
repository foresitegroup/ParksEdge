<?php
include "inc/dbconfig.php";

date_default_timezone_set('America/Chicago');

$mid = strtotime(date('Y-m-d 00:00:00', $_SERVER['QUERY_STRING']));

$monday = (date('w', $mid) == 1) ? $mid : $mid - (86400 * date('w', $mid));
// $friday = ($monday + (86400*5)) - 1;
$friday = $monday + (86400*5);

$days = $mysqli->execute_query("SELECT * FROM menu WHERE date >= '$monday' AND date <= '$friday' ORDER BY date ASC");

echo '<div class="site-width">'."\n";

  foreach ($days as $day) {
    echo "<div";
    if ($day['date'] == strtotime('today midnight')) echo ' class="today"';
    echo ">\n";

      echo '<div class="date">'."\n";
        echo '<div class="number">'.date("j", $day['date'])."</div>\n";
        echo '<div class="weekday">'.date("l", $day['date'])."</div>\n";
      echo "</div> <!-- /.date -->\n";

      echo '<div class="content">'."\n";
        if ($day['lunch'] != "") echo nl2br($day['lunch'])."\n";
        if ($day['am_snack'] != "") echo "<div>Snack AM</div>\n".nl2br($day['am_snack'])."\n";
        if ($day['pm_snack'] != "") echo "<div>Snack PM</div>\n".nl2br($day['pm_snack'])."\n";
      echo "</div> <!-- /.content -->\n";
      
    echo "</div>\n";
  }

echo "</div> <!-- /.site-width -->\n";
?>