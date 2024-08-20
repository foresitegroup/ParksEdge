    <footer>
      <div class="site-width">
        <div>
          <h2>Resources</h2>
          <a href="https://parksedgepreschool.smugmug.com">Gallery</a><br>
          <a href="<?php echo $TopDir; ?>parents.php">Menu &amp; Calendar</a><br>
          <a href="<?php echo $TopDir; ?>parents.php#forms">Forms</a><br>
          <a href="<?php echo $TopDir; ?>donate.php">Donate</a>
        </div>

        <div>
          <h2>Follow Us</h2>
          <a href="https://www.facebook.com/parksedgepreschool">Facebook</a><br>
          <a href="https://www.youtube.com/channel/UCBdhjK84FV-T78vQiQa-4Hw">YouTube</a><br>
          <a href="<?php echo $TopDir; ?>news">News</a>
        </div>

        <div>
          <h2>Stay Informed</h2>
          with our Monthly Newsletter to recieve details on news, events and important dates.<br>
          <button id="mcbutton">Sign-Up!</button>
        </div>

        <div>
          <h2>Location</h2>
          10627 W. Forest Home Avenue<br>
          Hales Corners, WI 53130<br>
          <strong style="display: block; margin: 0.5em 0;">(414) 427-9561</strong>
          <a href="<?php echo $TopDir; ?>contact.php">Contact Us By Email</a>
        </div>
      </div> <!-- /.site-width -->

      <div id="copyright">
        &copy; <?php echo date("Y"); ?> Park's Edge Preschool, Inc.<br>
        <a href="https://foresitegrp.com">Website By Foresite</a>
      </div>
    </footer>

    <button id="return-to-top" aria-label="Return to top"></button>
    
    <div id="mc-modal">
      <div class="modal-box">
        <div id="mc-modal-button"></div>
        <div class="modal-content">
          Signup for our newsletter to receive news, events &amp; important dates.

          <form action="<?php echo $TopDir; ?>form-mailchimp.php" method="POST" id="mailchimp-form" novalidate>
            <div>
              <input type="text" name="username" tabindex="-1" aria-hidden="true" autocomplete="new-password">
              <input type="email" name="email" id="email" placeholder="Email Address" aria-label="Email Address">
              <button type="submit" name="mcsubmit" id="mcsubmit" aria-label="Submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div id="modal">
      <div class="modal-box">
        <div id="modal-button"></div>
        <div id="modal-content" class="modal-content"></div>
      </div>
    </div>

    <script>
      // Open external links and PDFs in new tab
      [...document.links].forEach(link => {
        if (link.hostname != window.location.hostname || link.href.split('.').pop() == "pdf") {
          link.target = '_blank'; link.rel = 'noopener';
        }
      });
      
      // Show main menu submenus on tap
      const menus = document.querySelectorAll('#main-menu UL LI');
      menus.forEach((menu) => {
        menu.addEventListener('touchstart', () => { menu.classList.add('hover'); });
      });
      
      // Display return to top button on scroll
      var rtt = document.getElementById('return-to-top');
      rtt.style.opacity = 0;

      window.onscroll = function() {
        if (document.documentElement.scrollTop > 200) {
          rtt.style.opacity = 1;
        } else {
          rtt.style.opacity = 0;
        }
      };
      
      // Return to top when button is clicked
      rtt.addEventListener('click', function() {
        window.scroll({ top: 0, behavior: "smooth" });
      });
      
      // BEGIN Mailchimp form submit
      const mcform = document.getElementById('mailchimp-form');
      mcform.addEventListener('submit', submitMCForm);

      function submitMCForm(mce) {
        mce.preventDefault();

        document.getElementById("mcsubmit").classList.add("loader");

        const data = new FormData(mcform);

        fetch(mcform.action, {
          method: 'POST',
          body: data
        })
        .then((response) => response.text())
        .then((result) => {
          // Data sent, so display success message in modal
          // and clear all the form fields
          document.getElementById('modal-content').innerHTML = result;
          modal.style.display = "block";
          mcform.reset();

          document.getElementById("mcsubmit").classList.remove("loader");
          mcmodal.style.display = "none";
        });
      } // END submitMCForm

      const modal = document.getElementById("modal");
      const modalbutton = document.getElementById("modal-button");
      const mcmodal = document.getElementById("mc-modal");
      const mcmodalbutton = document.getElementById("mc-modal-button");
      
      // Open Mailchimp modal
      document.getElementById('mcbutton').addEventListener('click', function(mcevent) {
        mcevent.preventDefault();
        mcmodal.style.display = 'block';
      });

      // Close modals by background click
      window.onclick = function(event) {
        if (event.target == modal) modal.style.display = "none";
        if (event.target == mcmodal) mcmodal.style.display = "none";
      }

      // Close modals by button click
      modalbutton.onclick = function() { modal.style.display = "none"; }
      mcmodalbutton.onclick = function() { mcmodal.style.display = "none"; }
    </script>

  </body>
</html>