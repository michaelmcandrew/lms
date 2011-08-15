<?php
// AT Biz
/**
 * Override or insert variables into the html template.
 */
function at_biz_preprocess_html(&$vars) {
  global $theme, $theme_key;
  drupal_add_css(path_to_theme() . '/css/ie-6.css', array(
    'group' => CSS_THEME,
    'browsers' => array(
      'IE' => 'IE 6',
      '!IE' => FALSE,
      ),
    'preprocess' => FALSE,
    )
  );
  drupal_add_css(path_to_theme() . '/css/ie-lte-7.css', array(
    'group' => CSS_THEME,
    'browsers' => array(
      'IE' => 'lte IE 7',
      '!IE' => FALSE,
      ),
    'preprocess' => FALSE,
    )
  );
  drupal_add_css(path_to_theme() . '/css/ie-8.css', array(
    'group' => CSS_THEME,
    'browsers' => array(
      'IE' => 'IE 8',
      '!IE' => FALSE,
      ),
    'preprocess' => FALSE,
    )
  );
  drupal_add_css(path_to_theme() . '/css/ie-lte-9.css', array(
    'group' => CSS_THEME,
    'browsers' => array(
      'IE' => 'lte IE 9',
      '!IE' => FALSE,
      ),
    'preprocess' => FALSE,
    )
  );
  if (theme_get_setting('ie_corners') == 1) {
    drupal_add_css(path_to_theme() . '/css/ie-htc.css', array(
      'group' => CSS_THEME,
      'browsers' => array(
        'IE' => 'lte IE 8',
        '!IE' => FALSE,
        ),
      'preprocess' => FALSE,
      )
    );
  }
  if (module_exists('color')) {
    $info = color_get_info($theme);
    $info['schemes'][''] = array('title' => t('Custom'), 'colors' => array());
    $schemes = array();
    foreach ($info['schemes'] as $key => $scheme) {
      $schemes[$key] = $scheme['colors'];
    }
    $current_scheme = variable_get('color_' . $theme . '_palette', array());
    foreach ($schemes as $key => $scheme) {
      if ($current_scheme == $scheme) {
        $scheme_name = $key;
        break;
      }
    }
    if (empty($scheme_name)) {
      if (empty($current_scheme)) {
        $scheme_name = 'default';
      }
      else {
        $scheme_name = 'custom';
      }
    }
   $vars['classes_array'][] = 'color-scheme-' . drupal_html_class($scheme_name);
  }
  $vars['classes_array'][] = drupal_html_class($theme_key);
  $vars['classes_array'][] = theme_get_setting('font_family');
  $vars['classes_array'][] = theme_get_setting('headings_font_family');
  $vars['classes_array'][] = theme_get_setting('font_size');
  $vars['classes_array'][] = theme_get_setting('box_shadows');
  $vars['classes_array'][] = theme_get_setting('body_background');
  $vars['classes_array'][] = theme_get_setting('menu_bullets');
  $vars['classes_array'][] = theme_get_setting('corner_radius');
  if (theme_get_setting('headings_styles_caps') == 1) {
    $vars['classes_array'][] = 'hs-caps';
  }
  if (theme_get_setting('headings_styles_weight') == 1) {
    $vars['classes_array'][] = 'hs-fwn';
  }
  if (theme_get_setting('headings_styles_shadow') == 1) {
    $vars['classes_array'][] = 'hs-ts';
  }
}

/**
 * Override or insert variables into the html template.
 */
function at_biz_process_html(&$vars) {
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}

/**
 * Override or insert variables into the page template.
 */
function at_biz_process_page(&$vars) {
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
}

/**
 * Override or insert variables into the block template.
 */
function at_biz_preprocess_block(&$vars) {
  if ($vars['block']->module == 'superfish' || $vars['block']->module == 'nice_menu') {
    $vars['content_attributes_array']['class'][] = 'clearfix';
  }
  if (!$vars['block']->subject) {
    $vars['content_attributes_array']['class'][] = 'no-title';
  }
  if ($vars['block']->region == 'menu_bar' || $vars['block']->region == 'menu_bar_top') {
    $vars['title_attributes_array']['class'][] = 'element-invisible';
  }
}
