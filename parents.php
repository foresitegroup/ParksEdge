<?php
$PageTitle = "Parents";
include "header.php";
?>

<div class="banner no-tear" style="background-image: url(images/banner-parents.jpg);">
  <div class="site-width centered">
    PEP PARENT SECTION
  </div>
</div>

<div class="site-width parents-menu-header">
  TODDLER &amp; PRE-SCHOOL
  <h1>LUNCH &amp; SNACK MENU</h1>
</div>

<script>
  $(document).ready(function() {
    $("#menu-schedule").load("menu-schedule.php");

    $("#menu-schedule").on("click", "a", function (e) {
      $("#menu-schedule").load($(this).attr("href"));
      e.preventDefault();
    });
  });
</script>
<div id="menu-schedule"></div>

<div class="contact-section">
  <div class="site-width">
    NEWSLETTER STUFF HERE
  </div>

  <div class="torn-footer"></div>
</div>

<?php include "footer.php"; ?>