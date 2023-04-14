<?php
// Add slug to body class

function wordpress_snippet_add_slug_body_class($classes)
{
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }

  return $classes;
}

add_filter('body_class', 'wordpress_snippet_add_slug_body_class');
