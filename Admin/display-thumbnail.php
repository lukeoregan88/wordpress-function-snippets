<?php
//Add Featured Thumbnail to Admin Post Columns
//Please note this snipet is not compatible without changing your theme's text domain. 
// Search for 'theme_name' and replace with your theme's text domain.

function wp_snippet_posts_thumb_columns($columns)
{
  $post_new_columns = array(
    // Replace 'theme_name' with your theme's text domain
    'post_thumbs' => esc_html__('Thumbs', 'theme_name'),
  );
  // Change priority value to 5 to execute before the 'Title' column
  return array_merge($post_new_columns, array_slice($columns, 0, 2), array_slice($columns, 2));
}
add_filter('manage_posts_columns', 'wp_snippet_posts_thumb_columns', 5);

function wp_snippet_posts_custom_columns($column_name, $id)
{
  if ('post_thumbs' === $column_name) {
    the_post_thumbnail(array(75, 75));
  }
}
add_action('manage_posts_custom_column', 'wp_snippet_posts_custom_columns', 5, 2);
