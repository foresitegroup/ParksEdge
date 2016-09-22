<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="entry-content site-width<?php if ( is_single() ) : echo " single"; endif; ?>">
	<?php
	  if ( is_single() ) :
	  	the_content();
		else :
			if (get_the_title() == "Archive") :
				echo '<ul style="text-align: left;">';
		      wp_get_archives('type=monthly');
		    echo "</ul>";
		  else :
				echo "<div class=\"index-date\">" . get_the_date() . "</div>";
			  echo "<h2>" . get_the_title() . "</h2>";
				the_excerpt();
			  echo "<br><a href=\"" . get_permalink() . "\" class=\"readmore\">READ MORE</a>";
		  endif;
		endif;

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
	?>
</div><!-- .entry-content -->

<?php
if ( is_single() ) :
	// Previous/next post navigation.
	the_PEP_post_navigation( array(
		'next_text' => __( 'NEXT', 'twentysixteen' ),
		'prev_text' => __( 'PREVIOUS', 'twentysixteen' ),
	) );
endif;
?>