<?php
$PageTitle = "Donate";
include "header.php";
?>

<div class="banner" style="background-image: url(images/banner-donate.jpg);">
  <div class="site-width big">
    We greatly appreciate your donation to Park's Edge Preschool.
  </div>

  <div class="torn-header-white"></div>
</div>

<div class="site-width donate-page">
  <div class="centered">Please select how you wish to give.</div><br>
  <br>

  <script type="text/javascript">
    $(document).ready(function() {
      $('input[name="amount"]').on('change', function(){
        if ($('#other').is(':checked')) {
          $("#other-text").attr("name", "amount");
          $("#other-text").css("display", "block");
        } else {
          $("#other-text").attr("name", "");
          $("#other-text").css("display", "none");
          $('#other-text').val('');
        }
      });

      $('input[name="a3"]').on('change', function(){
        if ($('#rec-other').is(':checked')) {
          $("#rec-other-text").attr("name", "a3");
          $("#rec-other-text").css("display", "block");
        } else {
          $("#rec-other-text").attr("name", "");
          $("#rec-other-text").css("display", "none");
          $('#rec-other-text').val('');
        }
      });
    });
  </script>
  
  <div class="donate-left">
    <h2>ONE-TIME DONATION</h2>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <div>
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="francis@foresitegrp.com">
        <input type="hidden" name="item_name" value="Park's Edge Preschool donation">
        <input type="hidden" name="item_number" value="pepdonation">
        <input type="hidden" name="no_shipping" value="1">

        <div class="one-fourth"><input type="radio" name="amount" value="25">$25</div>
        <div class="one-fourth"><input type="radio" name="amount" value="50">$50</div>
        <div class="one-fourth"><input type="radio" name="amount" value="100">$100</div>
        <div class="one-fourth"><input type="radio" name="amount" value="500">$500</div>
        <input type="radio" name="amount" value="" id="other">Other Amount
        <input type="text" name="" id="other-text" placeholder="Amount $">
        
        <input type="submit" name="submit" value="DONATE">
      </div>
    </form>
  </div>
  
  <div class="donate-right">
    <h2>MONTHLY DONATION</h2>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <div>
        <input type="hidden" name="cmd" value="_xclick-subscriptions">
        <input type="hidden" name="business" value="francis@foresitegrp.com">
        <input type="hidden" name="item_name" value="Park's Edge Preschool monthly donation">
        <input type="hidden" name="item_number" value="pepmonthlydonation">
        <input type="hidden" name="no_shipping" value="1">
        <input type="hidden" name="src" value="1">
        <input type="hidden" name="p3" value="1">
        <input type="hidden" name="t3" value="M">
        
        <div class="one-fourth"><input type="radio" name="a3" value="10">$10</div>
        <div class="one-fourth"><input type="radio" name="a3" value="25">$25</div>
        <div class="one-fourth"><input type="radio" name="a3" value="50">$50</div>
        <div class="one-fourth"><input type="radio" name="a3" value="100">$100</div>
        <input type="radio" name="a3" value="" id="rec-other">Other Amount
        <input type="text" name="" id="rec-other-text" placeholder="Amount $">
        
        <input type="submit" name="submit" value="DONATE">
      </div>
    </form>
  </div>
</div>

<div class="contact-section green">
  <div class="site-width">
    For enrollment or to learn more about Park's Edge Preschool email or give us a call at <strong class="darkbluetext">414-427-9561</strong><br>
    <br>

    <a href="contact.php" class="button">CONTACT BY EMAIL</a>
  </div>

  <div class="torn-footer"></div>
</div>

<?php include "footer.php"; ?>