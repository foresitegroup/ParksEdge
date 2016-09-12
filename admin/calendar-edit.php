<?php
include "login.php";

$PageTitle = "Edit Event";
include "header.php";

$result = $mysqli->query("SELECT * FROM calendar WHERE id = '" . $_GET['id'] . "'");
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<div class="site-width content edit-cal">
  <form action="calendar-db.php?a=edit" method="POST">
    <div>
      <input type="text" name="startdate" class="startdate" placeholder="Start Date" value="<?php echo date("m/d/Y", $row['startdate']); ?>">

      <input type="text" name="enddate" class="enddate" placeholder="End Date (optional)" value="<?php if ($row['enddate'] != $row['startdate']) echo date("m/d/Y", $row['enddate']); ?>">

      <textarea name="event" placeholder="Event"><?php if ($row['event'] != "") echo $row['event']; ?></textarea>

      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <input type="hidden" name="loc" value="<?php echo $_GET['loc']; ?>">

      <input type="submit" name="submit" value="UPDATE" style="width: 40%;">

      <div style="clear: both;"></div>
    </div>
  </form>
</div>

<?php include "footer.php"; ?>