<?php
$TopDir = substr(home_url(), 0, strrpos(home_url(), '/')+1);

if (!is_single()) :
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

if (is_archive()) { $PageTitle = "Archive"; }

include "../header.php";
?>

<div class="subheader simple <?php echo $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo ' style="background-image: url('.$HeaderBackground.');"'; ?>>
  <h1><?php echo $PageTitle; ?></h1>

  <?php if (isset($TheDate)) echo '<div class="header-date">'.$TheDate."</div>\n"; ?>
</div> <!-- /.subheader -->