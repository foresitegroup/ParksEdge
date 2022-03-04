    <!-- Begin MailChimp Signup Form -->
    <div id="mailchimp" style="display: none;">
      <script type="text/javascript">
        $(document).ready(function() {
          var form = $('#mailchimp-form');
          var formMessages = $('#mailchimp-form-messages');
          $(form).submit(function(event) {
            event.preventDefault();
            
            function formValidation() {
              if ($('#email').val() === '') { alert('Email address required.'); $('#email').focus(); return false; }
              return true;
            }
            
            if (formValidation()) {
              var formData = $(form).serialize();
              formData += '&src=ajax';

              $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
              })
              .done(function(response) {
                $(formMessages).html(response);
                $('#email').val('');
              })
              .fail(function(data) {
                if (data.responseText !== '') {
                  $(formMessages).html(data.responseText);
                } else {
                  $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
              });
            }
          });
        });
      </script>

      <?php
      // Settings for randomizing form field names
      $ip = $_SERVER['REMOTE_ADDR'];
      $timestamp = time();
      $salt = "ParksEdgeMailchimpForm";
      ?>

      <div id="mailchimp-form-messages"></div>

      Signup for our newsletter to receive news, events &amp; important dates.

      <form action="<?php echo $TopDir; ?>form-mailchimp.php" method="POST" id="mailchimp-form">
        <div>
          <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">
          <input type="submit" name="submit" value="SUBMIT">

          <input type="text" name="confirmationCAP" style="display: none;">
          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
        </div>
      </form>
    </div>
    <!--End MailChimp Signup Form -->

    <div class="pe-footer">
      <div class="site-width">
        <div class="one-fourth bigger">
          <h2>RESOURCES</h2>
          <a href="https://parksedgepreschool.smugmug.com">GALLERY</a><br>
          <a href="<?php echo $TopDir; ?>parents.php">MENU &amp; CALENDAR</a><br>
          <a href="<?php echo $TopDir; ?>parents.php#lesson-plans">LESSON PLANS</a><br>
          <a href="<?php echo $TopDir; ?>parents.php#forms">FORMS</a><br>
          <a href="<?php echo $TopDir; ?>donate.php">DONATE</a>
        </div>

        <div class="one-fourth bigger">
          <h2>FOLLOW US</h2>
          <a href="https://www.facebook.com/parksedgepreschool">FACEBOOK</a><br>
          <a href="https://www.youtube.com/channel/UCBdhjK84FV-T78vQiQa-4Hw">YOUTUBE</a><br>
          <a href="<?php echo $TopDir; ?>news">NEWS</a>
        </div>

        <div class="one-fourth">
          <h2>STAY INFORMED</h2>
          with our Monthly Newsletter to recieve details on news, events and important dates.<br>
          <a href="#mailchimp" class="button-border">SIGN-UP!</a>
        </div>

        <div class="one-fourth">
          <h2>LOCATION</h2>
          10627 W. Forest Home Avenue<br>
          Hales Corners, WI 53130<br>
          <strong style="display: block; margin: 0.5em 0;">(414) 427-9561</strong>
          <a href="<?php echo $TopDir; ?>contact.php">CONTACT US BY EMAIL</a>
        </div>
      </div>

      <div class="copyright">
        &copy; <?php echo date("Y"); ?> Park's Edge Preschool, Inc.<br>
        <a href="https://foresitegrp.com" style="font-size: 0.6875rem; color: #1A404F;">WEBSITE BY FORESITE</a>
      </div>
    </div>

  </body>
</html>