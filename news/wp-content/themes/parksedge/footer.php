<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);
?>

<div class="contact-section blue">
  <div class="site-width">
    For enrollment or to learn more about Park's Edge Preschool email or give us a call at <strong class="darkbluetext">414-427-9561</strong><br>
    <br>

    <a href="<?php echo $TopDir; ?>contact.php" class="button">CONTACT BY EMAIL</a>
  </div>

  <div class="torn-footer"></div>
</div>

<?php
include "../footer.php";
?>