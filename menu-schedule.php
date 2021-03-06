<?php
include "inc/dbconfig.php";

if (!empty($_SERVER['QUERY_STRING'])) {
  $date = strtotime(substr($_SERVER['QUERY_STRING'],0,4) . "W" . substr($_SERVER['QUERY_STRING'],-2));
} else {
  $date = time();
  
  // If it's the weekend, show next week's schedule
  if (date("w", $date) == 0 || date("w", $date) == 6) $date = $date+(86400*2);
}

$year = date("o", $date);
$week = date("W", $date);

$lastweek = date("oW", strtotime($year . "W" . $week . " -7 day"));
$nextweek = date("oW", strtotime($year . "W" . $week . " +7 day"));

$monday = strtotime($year . "W" . $week);
$friday = $monday + (86400*4);

$title = date("F j", $monday) . "-";
$title .= (date("F", $monday) == date("F", $friday)) ? date("j", $friday) : date("F j", $friday);
?>

<div class="menu-schedule-header">
  <div class="site-width">
    <a href="menu-schedule.php?<?php echo $lastweek; ?>" class="msnav nav-l"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    <?php echo $title; ?>
    <a href="menu-schedule.php?<?php echo $nextweek; ?>" class="msnav nav-r"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
  </div>
</div>

<div class="menu-schedule-content">
  <div class="site-width">
    <?php
    $result = $mysqli->query("SELECT * FROM menu WHERE date >= '$monday' AND date <= '$friday' ORDER BY date ASC");

    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $MyDay = $row['date'];
      $array[$MyDay][] = $row;
    }
    $result->close();

    ?>
    <table>
      <tr>
        <?php
        for ($theday = $monday; $theday <= $friday; $theday+=86400) {
          echo "<td";
          if ($theday == strtotime('today midnight')) echo " class=\"mstoday\"";
          echo ">";
            echo "<div class=\"date-mobile\">";
              echo "<div class=\"date-num\">" . date("j", $theday) . "</div>";
              echo "<div class=\"date-day\">" . date("l", $theday) . "</div>";
            echo "</div>";
            echo "<div class=\"mscontent\">";
              if (isset($array[$theday])) {
                foreach($array[$theday] as $key => $value) {
                  if ($array[$theday][$key]['lunch'] != "") echo nl2br(stripslashes($array[$theday][$key]['lunch']));
                  if ($array[$theday][$key]['am_snack'] != "") echo "<div class=\"msheader\">SNACK AM</div>" . nl2br(stripslashes($array[$theday][$key]['am_snack']));
                  if ($array[$theday][$key]['pm_snack'] != "") echo "<div class=\"msheader\">SNACK PM</div>" . nl2br(stripslashes($array[$theday][$key]['pm_snack']));
                }
              }
            echo "</div>";
          echo "</td>";
        }
        ?>
      </tr>
    </table>
  </div>
</div>