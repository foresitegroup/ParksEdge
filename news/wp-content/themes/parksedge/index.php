<?php
get_header();
$TopDir = substr(home_url(), 0, strrpos(home_url(), '/')+1);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				echo '<div class="entry-content site-width';
				if (is_single()) echo " single";
				echo '">'."\n";

					if (is_single()) :
				  	the_content();
					else :
						echo '<div class="index-date">'.get_the_date()."</div>\n";
					  echo "<h2>".get_the_title()."</h2>\n";
						the_excerpt();
					  echo '<br><a href="'.get_permalink().'" class="readmore">Read More</a>'."\n";
					endif;

				echo "</div> <!-- .entry-content -->\n";
			endwhile;
      
      if (is_single()) :
      	echo the_PEP_post_navigation(array(
					'prev_text' => 'Previous',
					'next_text' => 'Next',
				));
			else :
				the_posts_pagination(array(
					'mid_size' => 3,
					'prev_text' => 'Prev',
					'next_text' => 'Next',
				));
			endif;
		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>