<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/cmb-fields.php', // Custom Meta Box fields
  'lib/count.php',    // Count votes
  'lib/custom-post-types.php', // Custom post types
  'lib/customizer.php',// Theme customizer
  'lib/extras.php',    // Custom functions
  'lib/forms.php',      // Caldera Forms actions
  'lib/nav-walker.php',// Nav walker
  'lib/setup.php',     // Theme setup
  'lib/shortcodes.php', // Shortcodes
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'vendor/cmb2/init.php', // Init CMB2 plugin
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
