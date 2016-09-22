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

// Format the index page pagination
function the_PEP_posts_pagination($args = [], $class = 'pagination') {
  if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

  $args = wp_parse_args( $args, [
    'mid_size'           => 2,
    'prev_next'          => false,
    'prev_text'          => __('Older posts', 'textdomain'),
    'next_text'          => __('Newer posts', 'textdomain'),
    'screen_reader_text' => __('Posts navigation', 'textdomain'),
  ]);

  $links     = paginate_links($args);
  $next_link = get_next_posts_link($args['next_text']);
  $prev_link = get_previous_posts_link($args['prev_text']);
  $template  = apply_filters( 'the_PEP_navigation_markup_template', '
  <nav class="navigation %1$s" role="navigation">
    <h2 class="screen-reader-text">%2$s</h2>
    <div class="nav-links">%3$s<div class="page-numbers-container">%4$s</div>%5$s</div>
  </nav>', $args, $class);

  echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);
}

add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
function posts_link_attributes_prev() { return 'class="prev"'; }
function posts_link_attributes_next() { return 'class="next"'; }

// Format the single post pagination
function the_PEP_post_navigation( $args = array() ) {
  echo get_the_PEP_post_navigation( $args );
}
function get_the_PEP_post_navigation( $args = array() ) {
  $args = wp_parse_args( $args, array(
    'prev_text'          => '%title',
    'next_text'          => '%title',
    'in_same_term'       => false,
    'excluded_terms'     => '',
    'taxonomy'           => 'category',
    'screen_reader_text' => __( 'Post navigation' ),
  ) );

  $navigation = '';

  $previous = get_previous_post_link(
    '<div class="prev">%link</div>',
    $args['prev_text'],
    $args['in_same_term'],
    $args['excluded_terms'],
    $args['taxonomy']
  );

  $blogindex = '<a href="' . home_url() . '">NEWS & ANNOUCEMENTS</a>';

  $next = get_next_post_link(
    '<div class="next">%link</div>',
    $args['next_text'],
    $args['in_same_term'],
    $args['excluded_terms'],
    $args['taxonomy']
  );

  // Only add markup if there's somewhere to navigate to.
  if ( $previous || $next ) {
    $navigation = _navigation_markup( $previous . $blogindex . $next, 'post-navigation', $args['screen_reader_text'] );
  }

  return $navigation;
}
?>