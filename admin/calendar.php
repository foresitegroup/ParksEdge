<?php
include "login.php";

$PageTitle = "Calendar";
include "header.php";
?>

<div class="site-width content admin-cal">
  <div class="one-half">
    <h3>Add Event</h3>
    <form action="calendar-db.php?a=add" method="POST">
      <div>
        <input type="text" name="startdate" class="startdate" placeholder="Start Date" autocomplete="off">

        <input type="text" name="enddate" class="enddate" placeholder="End Date (optional)" autocomplete="off">

        <textarea name="event" placeholder="Event"></textarea>

        <input type="hidden" name="page" value="<?php if (!empty($_SERVER['QUERY_STRING'])) echo $_SERVER['QUERY_STRING']; ?>">

        <input type="submit" name="submit" value="SUBMIT" id="submit">

        <div style="clear: both;"></div>
      </div>
    </form>
  </div>
  
  <div class="one-half last cal-list">
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
    ?>

    <div class="cal cal-head">
      <a href="calendar.php?<?php echo date("Ym", $lastmonth); ?>" class="cal-nav-l">&lt;&lt; <?php echo date("F", $lastmonth); ?></a>
      <?php echo $title; ?>
      <a href="calendar.php?<?php echo date("Ym", $nextmonth); ?>" class="cal-nav-r"><?php echo date("F", $nextmonth); ?> &gt;&gt;</a>

      <div style="clear: both;"></div>
    </div>

    <?php
    $result = $mysqli->query("SELECT * FROM calendar WHERE startdate >= '$first_day' AND startdate < '$last_day' ORDER BY startdate ASC");

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo "<strong>" . date("n/j", $row['startdate']);
      if ($row['startdate'] != $row['enddate']) {
        echo ($row['enddate'] - $row['startdate'] == 86400) ? " & " : "-";
        echo date("n/j", $row['enddate']);
      }
      echo "</strong><br>";

      echo nl2br($row['event']) . "<br>";

      echo "<div class=\"controls\">";
        echo "<a href=\"calendar-edit.php?id=" . $row['id'] . "&loc=" . $loc . "\" title=\"Edit\" class=\"c-edit\"><i class=\"fa fa-pencil\"></i></a>";
        echo "<a href=\"calendar-db.php?a=delete&id=" . $row['id'] . "&loc=" . $loc . "\" onClick=\"return(confirm('Are you sure you want to delete this record?'));\" title=\"Delete\" class=\"c-delete\"><i class=\"fa fa-trash\"></i></a>";
      echo "</div><br>";
    }

    $result->close();
    ?>
  </div>
</div>

<?php include "footer.php"; ?>