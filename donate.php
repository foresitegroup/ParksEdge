<?php
$PageTitle = "Donate";
include "header.php";
?>

<div class="subheader" style="background-image: url(images/banner-donate.webp);">
  <div class="site-width programs-subheader">
    We greatly appreciate your donation to Park's Edge Preschool.
  </div> <!-- /.site-width -->
</div> <!-- /.subheader -->

<div id="donate" class="site-width donate-page">
  <div style="text-align: center;">Please select how you wish to give.</div><br>
  <br>

  <div class="columns">
    <div>
      <h1>One-Time Donation</h1>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="form" id="otd">
        <div>
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="upload" value="1">
          <input type="hidden" name="business" value="francis@foresitegrp.com">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="item_name_1" value="Park's Edge Preschool donation">

          <div class="radio">
            <label><input type="radio" name="amount_1" value="25">$25</label>
            <label><input type="radio" name="amount_1" value="50">$50</label>
            <label><input type="radio" name="amount_1" value="100">$100</label>
            <label><input type="radio" name="amount_1" value="500">$500</label>
            <label><input type="radio" name="amount_1" value="" id="otd_other">Other Amount</label>
          </div>

          <input type="text" name="" id="otd_other_text" placeholder="Amount $">
          
          <input type="submit" name="submit" value="Donate">
        </div>
      </form>
    </div>
    
    <div>
      <h1>Monthly Donation</h1>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="form" id="md">
        <div>
          <input type="hidden" name="cmd" value="_xclick-subscriptions">
          <input type="hidden" name="business" value="francis@foresitegrp.com">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="item_name" value="Park's Edge Preschool monthly donation">
          <input type="hidden" name="item_number" value="pepmonthlydonation">
          <input type="hidden" name="src" value="1">
          <input type="hidden" name="p3" value="1">
          <input type="hidden" name="t3" value="M">

          <div class="radio">
            <label><input type="radio" name="a3" value="10">$10</label>
            <label><input type="radio" name="a3" value="25">$25</label>
            <label><input type="radio" name="a3" value="50">$50</label>
            <label><input type="radio" name="a3" value="100">$100</label>
            <label><input type="radio" name="a3" value="" id="md_other">Other Amount</label>
          </div>

          <input type="text" name="" id="md_other_text" placeholder="Amount $">
          
          <input type="submit" name="submit" value="Donate">
        </div>
      </form>
    </div>
  </div> <!-- /.columns -->
</div> <!-- /#donate -->

<div class="contact-section green">
  <div class="site-width">
    For enrollment or to learn more about Park's Edge Preschool email or give us a call at <strong class="phone">414-427-9561</strong><br>
    <br>

    <a href="contact.php" class="button">Contact By Email</a>
  </div> <!-- /.site-width -->
</div> <!-- /.contact-section -->

<script>
  // One-Time Donation
  var otd_other = document.getElementById('otd_other');
  var otd_other_text = document.getElementById('otd_other_text');

  if (otd_other.checked) otd_other_text.style.display = 'block';
  otd_other.value = otd_other_text.value;

  document.querySelectorAll('#otd input[name="amount_1"]').forEach((input) => {
    input.addEventListener('change', function() {
      otd_other_text.style.display = (this.id == 'otd_other') ? 'block' : 'none';
    });
  });

  otd_other_text.addEventListener('input', function() {
    otd_other.value = otd_other_text.value;
  });
  
  //Monthly Donation
  var md_other = document.getElementById('md_other');
  var md_other_text = document.getElementById('md_other_text');

  if (md_other.checked) md_other_text.style.display = 'block';
  md_other.value = md_other_text.value;

  document.querySelectorAll('#md input[name="a3"]').forEach((input) => {
    input.addEventListener('change', function() {
      md_other_text.style.display = (this.id == 'md_other') ? 'block' : 'none';
    });
  });

  md_other_text.addEventListener('input', function() {
    md_other.value = md_other_text.value;
  });
</script>

<?php include "footer.php"; ?>