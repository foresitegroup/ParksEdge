<?php
$PageTitle = "Parents";
include "header.php";

date_default_timezone_set('America/Chicago');
$date = time();
if (date("w", $date) == 6) $date = $date+(86400*2);
$prev = $date-604800;
$next = $date+604800;
?>

<div class="subheader simple" style="background-image: url(images/banner-parents.webp);">
  <h1>PEP Parent Section</h1>
</div> <!-- /.subheader -->

<div class="site-width parents-menu-header">
  Toddler &amp; Pre-School
  <h2>Lunch &amp; Snack Menu</h2>
</div> <!-- /.parents-menu-header -->

<div id="menu-schedule-header">
  <div class="site-width">
    <button id="prev" data-date="<?php echo $prev; ?>" aria-label="Previous week"></button>
    <div id="ms-title"></div>
    <button id="next" data-date="<?php echo $next; ?>" aria-label="Next week"></button>
  </div> <!-- /.site-width -->
</div> <!-- /#menu-schedule-header -->

<div id="menu-schedule"></div>

<div class="site-width parents-download">
  <a href="menu-pdf.php?lunch">Download Lunch Menu</a>
  
  <a href="menu-pdf.php?snack">Download Snack Menu</a>
  
  <a href="pdf/lunch-coupon.pdf">Free Lunch Coupon</a>
</div> <!-- /.parents-download -->

<div class="parents-news">
  <div class="site-width">
    <h2>Recent News</h2>

    <?php
    if (file_exists('news/wp-blog-header.php')) {
      require('news/wp-blog-header.php');
      $posts = get_posts('posts_per_page=3&order=DESC&orderby=date');

      foreach ($posts as $post) :
        setup_postdata( $post );
        ?>
        <div>
          <div class="date"><?php the_date(); ?></div>
          <h3><?php the_title(); ?></h3>
          <?php echo excerpt(24); ?><br>
          <br>

          <a href="<?php the_permalink(); ?>" class="link">Read More</a>
        </div>
      <?php
      endforeach;
    }
    ?>

    <a href="news" class="button blue">View All Posts</a>
  </div>
</div>

<div class="parents-newsletter-forms">
  <div class="site-width">
    <div class="newsletter">
      <h2>Newsletter</h2>

      Read, Download and <a href="" id="pmc">Signup</a> to the Parks Edge Preschool Newsletter to stay up to date on news, events &amp; important dates.<br>
      
      <div class="pdfs">
        <?php
        $dir = opendir("pdf/newsletters");
        $files = [];
        while (false != ($file = readdir($dir))) {
          if (($file != ".") and ($file != "..")) $files[] = $file;
        }
        closedir($dir);
        natcasesort($files);
        $files = array_reverse($files);
        $files = array_slice($files, 0, 5);
        
        foreach ($files as $file) {
          echo '<a href="pdf/newsletters/'.$file.'">'.date("F Y", strtotime(substr($file, 11, 4)."-".substr($file, 16, 2).'-01'))."</a><br>\n";
        }
        ?>
      </div> <!-- /.pdfs -->
    </div> <!-- /.newsletter -->

    <div id="forms">
      <h2>Documents &amp; Forms</h2>

      <a href="pdf/Authorization_To_Administer_Medication.pdf">Authorization to Administer Medication</a><br>

      <a href="pdf/Child_Health_Report.pdf">Child Health Report</a><br>

      <a href="pdf/Health_History_and_Emergency_Care_Plan.pdf">Health History and Emergency Care Plan</a><br>

      <a href="pdf/schedule_change_notice.pdf">Schedule Change Notice</a><br>

      <a href="pdf/Summer_Outdoor_Schedule-2020.pdf">2020 Summer Outdoor Schedule</a>
    </div> <!-- /#forms -->
  </div> <!-- /.site-width -->
</div> <!-- /.parents-newsletter-forms -->

<script>
  const ms = document.getElementById('menu-schedule');

  function MStitle(timestamp) {
    var monday = new Date(timestamp * 1000);
    monday.setDate(monday.getDate() - monday.getDay() + 1);

    var friday = new Date(monday);
    friday.setDate(friday.getDate() + 4);

    var title = monday.toLocaleString('default', { month: 'long', day: 'numeric' })+'-';
    if (monday.getMonth() != friday.getMonth()) title += friday.toLocaleString('default', { month: 'long' })+' ';
    title += friday.toLocaleString('default', { day: 'numeric' });

    document.getElementById('ms-title').innerHTML = title;
  }

  function load(ts, element) {
    fetch('menu-schedule.php?'+ts).then((response) => response.text()).then((html) => { element.innerHTML = html; });
  }
  
  const buttons = document.getElementById("menu-schedule-header").getElementsByTagName("button");

  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
      var newdate = parseInt(this.dataset.date, 10);
      document.getElementById('prev').dataset.date = newdate-604800;
      document.getElementById('next').dataset.date = newdate+604800;
      MStitle(newdate);
      load(newdate, ms);
    })
  }

  MStitle(<?php echo $date; ?>);
  load(<?php echo $date; ?>, ms);

  // Open Mailchimp modal
  document.getElementById('pmc').addEventListener('click', function(mcevent) {
    mcevent.preventDefault();
    mcmodal.style.display = 'block';
  });
</script>

<?php include "footer.php"; ?>