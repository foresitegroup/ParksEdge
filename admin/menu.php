<?php
include "login.php";

$PageTitle = "Menu";
include "header.php";
?>

<div class="site-width content admin-menu">
  <h1>Add Menu Date</h1>
  <form action="menu-db.php?a=add" method="POST" class="form">
    <div>
      <textarea name="lunch" placeholder="Lunch"></textarea>
      
      <textarea name="am_snack" placeholder="AM Snack"></textarea>
      
      <textarea name="pm_snack" placeholder="PM Snack"></textarea>

      <div style="width: 100%;"></div>

      <input type="date" name="date" id="date">

      <input type="hidden" name="page" value="<?php if (!empty($_SERVER['QUERY_STRING'])) echo $_SERVER['QUERY_STRING']; ?>">

      <input type="submit" name="submit" value="Submit" id="submit" disabled>
    </div>
  </form>

  <hr style="margin: 2em 0;">

  <?php
  if (!empty($_SERVER['QUERY_STRING'])) {
    $date = mktime(0,0,0,substr($_SERVER['QUERY_STRING'],-2), 1, substr($_SERVER['QUERY_STRING'],0,4));
    $lastmonth = mktime(0,0,0,substr($_SERVER['QUERY_STRING'],-2)-1, 1, substr($_SERVER['QUERY_STRING'],0,4));
    $nextmonth = mktime(0,0,0,substr($_SERVER['QUERY_STRING'],-2)+1, 1, substr($_SERVER['QUERY_STRING'],0,4));
    $title = date("F Y",$date);
    $loc = $_SERVER['QUERY_STRING'];
  } else {
    $date = time();
    $lastmonth = mktime(1, 1, 1, date('m')-1, 1, date('Y'));
    $nextmonth = mktime(1, 1, 1, date('m')+1, 1, date('Y'));
    $title = date("F Y");
    $loc = "";
  }

  $first_day = strtotime("First day of " . $title . " 00:00");
  $last_day = strtotime("First day of " . date("F Y", $nextmonth) . " 00:00");
  $days_in_month = date("j", $last_day-1);
  $blanks = date("w", $first_day);
  ?>

  <table class="cal">
    <tr class="cal-head">
      <td>&nbsp;</td>
      <td colspan="5">
        <a href="menu.php?<?php echo date("Ym", $lastmonth); ?>" class="cal-nav-l">&lt;&lt; <?php echo date("F", $lastmonth); ?></a>
        <?php echo $title; ?>
        <a href="menu.php?<?php echo date("Ym", $nextmonth); ?>" class="cal-nav-r"><?php echo date("F", $nextmonth); ?> &gt;&gt;</a>
        <div style="clear: both;"></div>
      </td>
      <td>&nbsp;</td>
    </tr>

    <tr class="weekdays">
      <td>Sun</td>
      <td>Monday</td>
      <td>Tuesday</td>
      <td>Wednesday</td>
      <td>Thursday</td>
      <td>Friday</td>
      <td>Sat</td>
    </tr>

    <tr>
      <?php
      // Display blank days before the month starts
      for ($day_count = 0; $day_count < $blanks; $day_count++) {
        echo "<td class=\"cal-day blank-start\"></td>\n";
      }
   
      // Get any shows for this month and put them in an array
      $result = $mysqli->query("SELECT * FROM menu WHERE date >= '$first_day' AND date < '$last_day' ORDER BY date ASC");
   
      $eventarr = array();
      while($row = $result->fetch_array(MYSQLI_BOTH)) {
        $MyDay = date("j", $row['date']);
        $eventarr[$MyDay][] = $row;
      }
      $result->close();
      // print_r($eventarr);
   
      $day_num = 1;
   
      // Create the calendar by counting up to the last day of the month
      while ($day_num <= $days_in_month) {
        echo "<td class=\"cal-day\">
          <div class=\"cal-date\">$day_num</div>
          ";
   
          // This day has a menu so display it
          if (isset($eventarr[$day_num])) {
            foreach($eventarr[$day_num] as $key => $value) {
              echo "<div class=\"cal-dayname\">" . date("l", $eventarr[$day_num][$key]['date']) . "</div>";

              if ($eventarr[$day_num][$key]['lunch'] != "") echo nl2br(stripslashes($eventarr[$day_num][$key]['lunch']));
              if ($eventarr[$day_num][$key]['am_snack'] != "") echo "<br><br><strong>AM SNACK</strong><br>" . nl2br(stripslashes($eventarr[$day_num][$key]['am_snack']));
              if ($eventarr[$day_num][$key]['pm_snack'] != "") echo "<br><br><strong>PM SNACK</strong><br>" . nl2br(stripslashes($eventarr[$day_num][$key]['pm_snack']));

              echo "<div class=\"controls\">
                <a href=\"menu-edit.php?a=edit&id=" . $eventarr[$day_num][$key]['id'] . "&loc=" . $loc . "\" title=\"Edit\" class=\"c-edit\"></a>
                <a href=\"menu-db.php?a=delete&id=" . $eventarr[$day_num][$key]['id'] . "&loc=" . $loc . "\" onClick=\"return(confirm('Are you sure you want to delete this record?'));\" title=\"Delete\" class=\"c-delete\"></a>
              </div>";
            }
          }
        echo "</td>\n";
   
        $day_num++;
        $day_count++;
   
        // Start a new row every week
        if ($day_count > 6) {
          echo "</tr>\n<tr>\n";
          $day_count = 0;
        }
      }
   
      // Finish out the table with some blank details if needed
      $blank_end_first = 1;
      while ($day_count > 0 && $day_count <= 6) {
        echo "<td class=\"cal-day blank-end";
        if ($blank_end_first == 1) echo " blank-end-first";
        echo "\"></td>\n";
        $day_count++;
        $blank_end_first++;
      }
      ?>
    </tr>
  </table>

  <br>
</div>

<script>
  // Disable submit button if no date is set
  document.getElementById('date').addEventListener('input', function() {
    if (document.getElementById('date').value.length != 0) {
      document.getElementById('submit').removeAttribute('disabled');
    } else {
      document.getElementById('submit').setAttribute('disabled', '');
    }
  });
</script>

<?php include "footer.php"; ?>