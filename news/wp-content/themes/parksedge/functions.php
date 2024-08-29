<?php
// Set length of blog index except
function wpdocs_custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Add "..." to end of excerpt
function change_excerpt_more() {
  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
}
add_action('after_setup_theme', 'change_excerpt_more');

// Embedded page blog excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// Allow Featured Images
add_theme_support( 'post-thumbnails' );

// Don't Featured Images
function my_thumbnail_size() {
  set_post_thumbnail_size();
}
add_action('after_setup_theme', 'my_thumbnail_size', 11);

function the_PEP_post_navigation() {
  $previous = get_previous_post_link('<div class="prev">%link</div>', "Previous");

  $blogindex = '<a href="'.home_url().'">News & Annoucements</a>';

  $next = get_next_post_link('<div class="next">%link</div>', "Next");

  if ($previous || $next) $navigation = _navigation_markup($previous . $blogindex . $next);

  return $navigation;
}
?>