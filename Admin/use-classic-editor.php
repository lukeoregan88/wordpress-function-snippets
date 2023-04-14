<?php
// Disable Gutenberg Editor (use Classic Editor)

add_filter('gutenberg_can_edit_post', '__return_false', 5);
add_filter('use_block_editor_for_post', '__return_false', 5);
