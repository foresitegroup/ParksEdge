<?php
include "login.php";

$PageTitle = "Edit Menu Schedule";
include "header.php";

$result = $mysqli->query("SELECT * FROM menu WHERE id = '" . $_GET['id'] . "'");
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<div class="site-width content admin-menu">
  <form action="menu-db.php?a=edit" method="POST" class="form">
    <div>
      <textarea name="lunch" placeholder="Lunch"><?php if ($row['lunch'] != "") echo stripslashes($row['lunch']); ?></textarea>
      
      <textarea name="am_snack" placeholder="AM Snack"><?php if ($row['am_snack'] != "") echo stripslashes($row['am_snack']); ?></textarea>
      
      <textarea name="pm_snack" placeholder="PM Snack"><?php if ($row['pm_snack'] != "") echo stripslashes($row['pm_snack']); ?></textarea>

      <div style="width: 100%;"></div>

      <input type="date" name="date" id="date" value="<?php if ($row['date'] != "") echo date("m/d/Y", $row['date']); ?>">

      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <input type="hidden" name="loc" value="<?php echo $_GET['loc']; ?>">

      <input type="submit" name="submit" value="Update" id="submit">
    </div>
  </form>
</div>

<?php include "footer.php"; ?>