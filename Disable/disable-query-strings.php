<?php

// Disable query strings from static resources.

function wp_snippet_remove_query_strings_split($src)
{
  $output = preg_split("/(&ver|\?ver)/", $src);

  return $output ? $output[0] : '';
}

add_action('init', function () {
  if (!is_admin()) {
    add_filter('script_loader_src', 'wp_snippet_remove_query_strings_split', 15);
    add_filter('style_loader_src', 'wp_snippet_remove_query_strings_split', 15);
  }
});
