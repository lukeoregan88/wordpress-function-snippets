<?php

// Wordpress Disable Automatic Updates and Emails

// # CORE

// Disable core auto-updates
add_filter('auto_update_core', '__return_false');
// Disable auto-updates for plugins.
add_filter('auto_update_plugin', '__return_false');
// Disable auto-updates for themes.
add_filter('auto_update_theme', '__return_false');

// # EMAILS

// Disable auto-update emails.
add_filter('auto_core_update_send_email', '__return_false');

// Disable auto-update emails for plugins.
add_filter('auto_plugin_update_send_email', '__return_false');

// Disable auto-update emails for themes.
add_filter('auto_theme_update_send_email', '__return_false');
