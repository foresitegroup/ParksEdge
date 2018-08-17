<?php
$PageTitle = "Contact";
include "header.php";
?>

<div class="banner banner-contact" style="background-image: url(images/banner-contact.jpg);">
  <div class="site-width big">
    CONTACT US
  </div>

  <div class="torn-header-white"></div>
</div>

<div class="contact-section contact">
  <div class="site-width">
    For enrollment or to learn more about Park's Edge Preschool message or give us a call at <strong class="darkbluetext">414-427-9561</strong><br>
    <br>

    <div class="bluetext">Monday through Friday, 6am - 6pm.</div>
  </div>
</div>

<div class="site-width">
  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#contact-form');
      var formMessages = $('#contact-form-messages');
      $(form).submit(function(event) {
        event.preventDefault();
        
        function formValidation() {
          if ($('#name').val() === '') { alert('Full name required.'); $('#name').focus(); return false; }
          if ($('#email').val() === '') { alert('Email address required.'); $('#email').focus(); return false; }
          if ($('#phone').val() === '') { alert('Phone number required.'); $('#phone').focus(); return false; }
          if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
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

            $(form).find('input:text, textarea').val('');
            $('#email').val(''); // Grrr!
            $(form).find('input:radio, input:checked').removeAttr('checked').removeAttr('selected');
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
  $salt = "ParksEdgeContactForm";
  ?>

  <noscript>
  <?php
  $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
  unset($_SESSION['feedback']);
  ?>
  </noscript>

  <form action="form-contact.php" method="POST" id="contact-form">
    <div>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Full Name">

      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">

      <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number">

      <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="How can we help?"></textarea>

      <input type="checkbox" name="subscribe" value="yes" id="c-subscribe" checked> <label for="c-subscribe"><span></span>Subscribe to our newsletter</label><br>
      <br>

      <script src='https://www.google.com/recaptcha/api.js'></script>
      <div class="g-recaptcha" data-sitekey="6LeKcGMUAAAAALyjirxPVQl8OdEF1xyHNRexIQhp"></div>
      <br>
      <br>

      <input type="hidden" name="referrer" value="contact.php">

      <input type="text" name="confirmationCAP" style="display: none;">

      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="SEND MESSAGE">

      <div id="contact-form-messages"><?php echo $feedback; ?></div>
    </div>
  </form>

  <br><br><br><br>
</div>

<div class="contact-footer">
  <div class="site-width">
    <div class="bluetext">WE ARE LOCATED AT</div>
    10627 W. Forest Home Avenue, Hales Corners, WI 53130
  </div>
</div>

<div class="contact-map">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7SqJJrR758kSg2iEyOi3SiXCBc_HiJ8U"></script>
  <script>
    function ViewLargerMap(VLMa, map) {
      var VLMui = document.createElement('a');
      VLMui.style.cursor = 'pointer';
      VLMui.href = "https://www.google.com/maps/place/Park's+Edge+Pre-School+Center/@42.9366536,-88.0484482,17z/data=!3m1!4b1!4m5!3m4!1s0x88050e647f09d797:0xcc40f8a7913978f1!8m2!3d42.9366536!4d-88.0462595";
      VLMui.target = 'new';
      VLMui.innerHTML = 'View larger map';
      VLMui.style.marginLeft = '7px';
      VLMa.appendChild(VLMui);
    }

    function initialize() {
      var MyLatLng = new google.maps.LatLng(42.9366536,-88.0462690);
      var mapCanvas = document.getElementById('map-canvas');
      var mapOptions = {
        center: MyLatLng,
        zoom: 15,
        disableDefaultUI: true,
        scrollwheel: false,
        zoomControl: true,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.SMALL,
          position: google.maps.ControlPosition.RIGHT_BOTTOM
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }

      var map = new google.maps.Map(mapCanvas, mapOptions)
      map.set('styles', [
       {
          "featureType": "landscape",
          "stylers": [
            { "color": "#48B3DD" }
          ]
        },{
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            { "color": "#3d97ba" }
          ]
        },{
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
            { "color": "#41a0c6" }
          ]
        },{
          "featureType": "water",
          "elementType": "labels.text",
          "stylers": [
            { "color": "#2b6b84" }
          ]
        },{
          "featureType": "road",
          "elementType": "geometry.fill",
          "stylers": [
            { "color": "#4fc3f1" }
          ]
        },{
          "featureType": "road",
          "elementType": "geometry.stroke",
          "stylers": [
            { "visibility": "off" }
          ]
        },{
          "featureType": "road",
          "elementType": "labels.text.fill",
          "stylers": [
            { "color": "#255b70" }
          ]
        },{
          "featureType": "road",
          "elementType": "labels.text.stroke",
          "stylers": [
            { "color": "#4fc3f1" }
          ]
        },{
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
            { "color": "#44a7cf" }
          ]
        },{
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
            { "color": "#388bac" }
          ]
        },{
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [
            { "invert_lightness": true },
            { "saturation": -100 }
          ]
        },{
          "featureType": "poi",
          "elementType": "labels.text",
          "stylers": [
            { "visibility": "simplified" },
            { "color": "#255c71" }
          ]
        },{
          "featureType": "poi",
          "elementType": "labels.icon",
          "stylers": [
            { "invert_lightness": true },
            { "saturation": -100 }
          ]
        },{
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [
            { "color": "#75aeac" }
          ]
        },{
          "featureType": "administrative",
          "elementType": "labels.text",
          "stylers": [
            { "visibility": "simplified" },
            { "color": "#255c71" }
          ]
        },{
          "featureType": "landscape",
          "elementType": "labels",
          "stylers": [
            { "visibility": "simplified" },
            { "color": "#2e4542" }
          ]
        }
      ]);

      var marker = new google.maps.Marker({
        position: MyLatLng,
        map: map,
        icon: "images/map-pin.png"
      });

      var infowindow = new google.maps.InfoWindow({
        content: "<div id=\"content\"><div id=\"bodyContent\"><strong>Park's Edge Preschool</strong><br>10627 W. Forest Home Avenue<br>Hales Corners, WI 53130<br><a href=\"https://www.google.com/maps/place/Park's+Edge+Pre-School+Center/@42.9366536,-88.0484482,17z/data=!3m1!4b1!4m5!3m4!1s0x88050e647f09d797:0xcc40f8a7913978f1!8m2!3d42.9366536!4d-88.0462595\" target=\"new\">View larger map</a></div></div>"
      });

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });

      var vlmDiv = document.createElement('div');
      var vlm = new ViewLargerMap(vlmDiv, map);
      vlmDiv.index = 1;
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(vlmDiv);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <div id="map-canvas"></div>

  <div class="torn-footer"></div>
</div>

<?php include "footer.php"; ?>