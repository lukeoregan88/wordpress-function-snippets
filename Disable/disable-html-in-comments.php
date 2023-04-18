<?php

function wpb_comment_post($incoming_comment)
{
  $incoming_comment['comment_content'] = htmlspecialchars($incoming_comment['comment_content']);
  $incoming_comment['comment_content'] = str_replace("'", "\'", $incoming_comment['comment_content']);
  return ($incoming_comment);
}
function wpb_comment_display($comment_to_display)
{
  $comment_to_display = str_replace("'", "\'", $comment_to_display);
  return $comment_to_display;
}
add_filter('preprocess_comment', 'wpb_comment_post', 1);
add_filter('comment_text', 'wpb_comment_display', 1);
add_filter('comment_text_rss', 'wpb_comment_display', 1);
add_filter('comment_excerpt', 'wpb_comment_display', 1);
remove_filter('comment_text', 'make_clickable', 1);
