<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if ( !is_single() ) :
  $HeaderClass = "banner-blog-index";
  $HeaderBackground = "";
  $PageTitle = (is_home()) ? "News & Announcements" : get_the_title();
  $Description = "";
  $Keywords = "";
else :
  $HeaderClass = "banner-blog-single";
  $HeaderBackground = wp_get_attachment_url(get_post_thumbnail_id());
  $PageTitle = get_the_title();
  $TheDate = get_the_date();
endif;

if ( is_archive() ) { $PageTitle = "Archive"; }

include "../header.php";
?>

<div class="banner no-tear <?php echo $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo 'style="background-image: url(' . $HeaderBackground . ');"'; ?>>
  <?php if ($HeaderClass == "banner-blog-single") { ?><div class="overlay"></div><?php } ?>

	<div class="site-width">
		<?php echo $PageTitle; ?><br>

    <?php if ($PageTitle != "Archive" || is_archive()) { ?><a href="<?php echo home_url(); ?>/archive" class="archive">NEWS ARCHIVE</a><?php } ?>
    <span class="header-date"><?php if (isset($TheDate)) echo $TheDate; ?></span>
	</div>
</div>