<?php
include "login.php";

$PageTitle = "Edit Menu Schedule";
include "header.php";

$result = $mysqli->query("SELECT * FROM menu WHERE id = '" . $_GET['id'] . "'");
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<div class="site-width content admin-menu">
  <form action="menu-db.php?a=edit" method="POST">
    <div>
      <div class="one-third">
        <textarea name="lunch" placeholder="Lunch"><?php if ($row['lunch'] != "") echo stripslashes($row['lunch']); ?></textarea>
      </div>

      <div class="one-third">
        <textarea name="am_snack" placeholder="AM Snack"><?php if ($row['am_snack'] != "") echo stripslashes($row['am_snack']); ?></textarea>
      </div>

      <div class="one-third last">
        <textarea name="pm_snack" placeholder="PM Snack"><?php if ($row['pm_snack'] != "") echo stripslashes($row['pm_snack']); ?></textarea>
      </div>

      <div style="clear: both;"></div>

      <input type="text" name="date" class="menudate" placeholder="Date" value="<?php if ($row['date'] != "") echo date("m/d/Y", $row['date']); ?>" autocomplete="off">

      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <input type="hidden" name="loc" value="<?php echo $_GET['loc']; ?>">

      <input type="submit" name="submit" value="UPDATE" class="submit">

      <div style="clear: both;"></div>
    </div>
  </form>
</div>

<?php include "footer.php"; ?>