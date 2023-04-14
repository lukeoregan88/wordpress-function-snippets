<?php

/**
 * Display a custom message instead of the RSS feeds.
 * Please note: Replace "text-domain" with your theme or plugin text domain.
 */
function wp_snippet_disable_feed()
{
  wp_die(
    sprintf(
      esc_html__('No feed available, please visit our %1$shomepage%2$s!', 'text-domain'),
      '<a href="' . esc_url(home_url('/')) . '">',
      '</a>'
    )
  );
}

// Replace all feeds with the custom message.
add_action('do_feed', 'wp_snippet_disable_feed', 1);
// add_action('do_feed_rdf', 'wp_snippet_disable_feed', 1);
// add_action('do_feed_rss', 'wp_snippet_disable_feed', 1);
// add_action('do_feed_rss2', 'wp_snippet_disable_feed', 1);
// add_action('do_feed_atom', 'wp_snippet_disable_feed', 1);
// add_action('do_feed_rss2_comments', 'wp_snippet_disable_feed', 1);
// add_action('do_feed_atom_comments', 'wp_snippet_disable_feed', 1);

// Remove links to feeds from the header.
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
