<?php

/**
 * Display a custom logo on the login page.
 */
function wp_snippet_custom_login_logo()
{
  // Update the line below with the URL to your own logo.
  // Adjust the Width & Height accordingly.
  $custom_logo_url = 'https://upload.wikimedia.org/wikipedia/commons/0/09/Wordpress-Logo.svg';
  $logo_width  = 84;
  $logo_height = 84;

  printf(
    '<style>
      .login h1 a {
        background-image:url(%1$s);
        background-size: cover;
        width: %2$spx;
        height: %3$spx;
        display: block;
        margin: 0 auto 25px;
      }
    </style>',
    esc_url($custom_logo_url),
    esc_attr($logo_width),
    esc_attr($logo_height)
  );
}

add_action('login_head', 'wp_snippet_custom_login_logo');
