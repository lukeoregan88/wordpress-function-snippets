<?php

function wp_snippet_publish_later_on_feed($where)
{

  global $wpdb;

  if (is_feed()) {
    // Timestamp in WP-format.
    $now = gmdate('Y-m-d H:i:s');

    // Number of unit to wait
    $wait = '10'; // integer.

    // Choose time unit.
    $unit = 'MINUTE'; // MINUTE, HOUR, DAY, WEEK, MONTH, YEAR.

    // Add SQL-sytax to default $where. By default 10 minutes.
    $where .= " AND TIMESTAMPDIFF($unit, $wpdb->posts.post_date_gmt, '$now') > $wait ";
  }

  return $where;
}

add_filter('posts_where', 'wp_snippet_publish_later_on_feed');
