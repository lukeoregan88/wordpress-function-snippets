<?php

/**
 * Change the excerpt length.
 */

add_filter(
  'excerpt_length',
  function ($length) {
    // Number of words to display in the excerpt.
    return 40;
  },
  500
);
