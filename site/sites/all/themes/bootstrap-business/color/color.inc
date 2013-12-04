<?php

// Put the logo path into JavaScript for the live preview.
drupal_add_js(array('color' => array('logo' => theme_get_setting('logo', 'bootstrap_business'))), 'setting');

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'bg' => t('Main background'),
    'highlight' => t('Highlight Background'),
    'link' => t('Link/Call-to-Action'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
    'title' => t('Default'),
    'colors' => array(
      'bg' => '#f5f5f5',
      'highlight' => '#222222',
      'link' => '#e74c3c',
    ),
    ),
    'blue' => array(
    'title' => t('Dark Gray/Blue'),
    'colors' => array(
      'bg' => '#f4f7fb',
      'highlight' => '#454e59',
      'link' => '#4484c7',
    ),
    ),
    'green' => array(
    'title' => t('Gray/Green'),
    'colors' => array(
      'bg' => '#f0f0f0',
      'highlight' => '#b0bdc9',
      'link' => '#5fb336',
    ),
    ),
  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'color/colors.css',
  ),

  // Files to copy.
  'copy' => array(
    'logo.png',
  ),

  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('top', 'bottom'),
    ),
  ),

  // Color areas to fill (x, y, width, height).
  'fill' => array(),

  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(),

  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_css' => 'color/preview.css',
  'preview_js' => 'color/preview.js',
  'preview_html' => 'color/preview.html',

  // Base file for image generation.
  'base_image' => 'color/base.png',
);
