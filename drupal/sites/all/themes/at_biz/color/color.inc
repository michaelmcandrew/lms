<?php
// AT
$info = array(
  // Fields
  'fields' => array(
    'base'      => t('Base'),
    'pagebg'    => t('Page'),
    'link'      => t('Links'),
    'top'       => t('Featured top'),
    'bottom'    => t('Featured bottom'),
    'menubar'   => t('Main menu bar'),
    'text'      => t('Text'),
    'blockh'    => t('Block header'),
    'blockt'    => t('Block title'),
    'blockbg'   => t('Block background'),
    'blockl'    => t('Block links'),
    'borders'   => t('Borders'),
    'article'   => t('Article background'),
    'footertop' => t('Footer top'),
    'footerbot' => t('Footer bottom'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Biz Blue (default)'),
      'colors' => array(
        'base'      => '#ffffff',
        'pagebg'    => '#feffff',
        'link'      => '#2888c1',
        'top'       => '#2d97d3',
        'bottom'    => '#66b3df',
        'menubar'   => '#fefeff',
        'text'      => '#666666',
        'blockh'    => '#fefefe',
        'blockt'    => '#5d5d5d',
        'blockbg'   => '#fdfdff',
        'blockl'    => '#232323',
        'borders'   => '#ededed',
        'article'   => '#fafafa',
        'footertop' => '#292929',
        'footerbot' => '#343434',
      ),
    ),
    'bizgold' => array(
      'title' => t('Biz Gold'),
      'colors' => array(
        'base'      => '#ffffff',
        'pagebg'    => '#feffff',
        'link'      => '#315690',
        'top'       => '#fecb00',
        'bottom'    => '#fed534',
        'menubar'   => '#fefeff',
        'text'      => '#666666',
        'blockh'    => '#fefefe',
        'blockt'    => '#5d5d5d',
        'blockbg'   => '#fdfdff',
        'blockl'    => '#232323',
        'borders'   => '#ededed',
        'article'   => '#fafafa',
        'footertop' => '#292929',
        'footerbot' => '#343434',
      ),
    ),
    'bizfire' => array(
      'title' => t('Biz Fire'),
      'colors' => array(
        'base'      => '#ffffff',
        'pagebg'    => '#feffff',
        'link'      => '#d6121f',
        'top'       => '#cd2d2d',
        'bottom'    => '#df5353',
        'menubar'   => '#fefeff',
        'text'      => '#666666',
        'blockh'    => '#fefefe',
        'blockt'    => '#5d5d5d',
        'blockbg'   => '#fdfdff',
        'blockl'    => '#232323',
        'borders'   => '#ededed',
        'article'   => '#fafafa',
        'footertop' => '#292929',
        'footerbot' => '#343434',
      ),
    ),
    'bizblack' => array(
      'title' => t('Biz Black'),
      'colors' => array(
        'base'      => '#ffffff',
        'pagebg'    => '#feffff',
        'link'      => '#2888c1',
        'top'       => '#101010',
        'bottom'    => '#303030',
        'menubar'   => '#fefeff',
        'text'      => '#212121',
        'blockh'    => '#fefefe',
        'blockt'    => '#5d5d5d',
        'blockbg'   => '#fdfdff',
        'blockl'    => '#232323',
        'borders'   => '#ededed',
        'article'   => '#fafafa',
        'footertop' => '#292929',
        'footerbot' => '#343434',
      ),
    ),
  ),

  // CSS files
  'css' => array(
    'color/colors.css',
  ),

  // Images to copy over
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

  // Color areas to fill (x, y, width, height)
  'fill' => array(),

  // Coordinates of all the theme slices (x, y, width, height).
  'slices' => array(),

  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_image' => 'color/color-preview.png',
  'preview_css' => 'color/preview.css',

  // Base file for image generation
  'base_image' => 'color/base.png',
);