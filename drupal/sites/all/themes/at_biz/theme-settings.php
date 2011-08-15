<?php
// AT Biz
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form['at']
 *   Nested array of form elements that comprise the form.
 * @param $form['at']_state
 *   A keyed array containing the current state of the form.
 */
function at_biz_form_system_theme_settings_alter(&$form, &$form_state)  {

  // Create the form using Forms API: http://api.drupal.org/api/7
  $form['at']['layout']['equal_heights'] = array(
    '#prefix' => '<div style="display: none">',
    '#suffix' => '</div>',
  );
  $form['at']['breadcrumb']['breadcrumb_separator'] = array(
    '#prefix' => '<div style="display: none">',
    '#suffix' => '</div>',
  );
  if (theme_get_setting('enable_styles') == 'on') {
    $form['at']['font'] = array(
      '#type' => 'fieldset',
      '#title' => t('Font settings'),
    );
    $form['at']['font'] = array(
      '#type' => 'fieldset',
      '#title' => t('Font and Headings settings'),
    );
    $form['at']['font']['font_family'] = array(
      '#type' => 'select',
      '#title' => t('Font family'),
      '#default_value' => theme_get_setting('font_family'),
      '#options' => array(
        'ff-sss' => t('Helvetica Nueue, Trebuchet MS, Arial, Nimbus Sans L, FreeSans, sans-serif'),
        'ff-ssl' => t('Verdana, Geneva, Arial, Helvetica, sans-serif'),
        'ff-a'   => t('Arial, Helvetica, sans-serif'),
        'ff-ss'  => t('Garamond, Perpetua, Nimbus Roman No9 L, Times New Roman, serif'),
        'ff-sl'  => t('Baskerville, Georgia, Palatino, Palatino Linotype, Book Antiqua, URW Palladio L, serif'),
        'ff-m'   => t('Myriad Pro, Myriad, Arial, Helvetica, sans-serif'),
        'ff-l'   => t('Lucida Sans, Lucida Grande, Lucida Sans Unicode, Verdana, Geneva, sans-serif'),
      ),
    );
    $form['at']['font']['headings_font_family'] = array(
      '#type' => 'select',
      '#title' => t('Headings Font family'),
      '#default_value' => theme_get_setting('headings_font_family'),
      '#options' => array(
        'hff-sss' => t('Helvetica Nueue, Trebuchet MS, Arial, Nimbus Sans L, FreeSans, sans-serif'),
        'hff-ssl' => t('Verdana, Geneva, Arial, Helvetica, sans-serif'),
        'hff-a'   => t('Arial, Helvetica, sans-serif'),
        'hff-ss'  => t('Garamond, Perpetua, Nimbus Roman No9 L, Times New Roman, serif'),
        'hff-sl'  => t('Baskerville, Georgia, Palatino, Palatino Linotype, Book Antiqua, URW Palladio L, serif'),
        'hff-m'   => t('Myriad Pro, Myriad, Arial, Helvetica, sans-serif'),
        'hff-l'   => t('Lucida Sans, Lucida Grande, Lucida Sans Unicode, Verdana, Geneva, sans-serif'),
      ),
    );
    $form['at']['font']['font_size'] = array(
      '#type' => 'select',
      '#title' => t('Base Font Size'),
      '#default_value' => theme_get_setting('font_size'),
      '#description' => t('This sets a base font-size on the body element - all text will scale relative to this value.'),
      '#options' => array(
        'fs-10' => t('0.833em'),
        'fs-11' => t('0.917em'),
        'fs-12' => t('1em'),
        'fs-13' => t('1.083em'),
        'fs-14' => t('1.167em'),
        'fs-15' => t('1.25em'),
        'fs-16' => t('1.333em'),
      ),
    );
    $form['at']['font']['headings_styles'] = array(
      '#type' => 'fieldset',
      '#title' => t('Heading Styles'),
      '#description' => t('Add extra styles to headings. Shadows only work for CSS3 capable browsers such as Firefox, Safari, IE9 etc.'),
    );
    $form['at']['font']['headings_styles']['headings_styles_caps'] = array(
      '#type' => 'checkbox',
      '#title' => t('All Caps'),
      '#default_value' => theme_get_setting('headings_styles_caps'),
    );
    $form['at']['font']['headings_styles']['headings_styles_weight'] = array(
      '#type' => 'checkbox',
      '#title' => t('Font weight normal'),
      '#default_value' => theme_get_setting('headings_styles_weight'),
    );
    $form['at']['font']['headings_styles']['headings_styles_shadow'] = array(
      '#type' => 'checkbox',
      '#title' => t('Text shadows'),
      '#default_value' => theme_get_setting('headings_styles_shadow'),
    );
    $form['at']['corners'] = array(
      '#type' => 'fieldset',
      '#title' => t('Rounded corners'),
    );
    $form['at']['corners']['corner_radius'] = array(
      '#type' => 'select',
      '#title' => t('Corner radius'),
      '#default_value' => theme_get_setting('corner_radius'),
      '#description' => t('Change the corner radius for main menu tabs, blocks, node teasers and comments.'),
      '#options' => array(
        'rc-0' => t('none'),
        'rc-4' => t('4px'),
        'rc-8' => t('8px'),
        'rc-12' => t('12px'),
      ),
    );
    $form['at']['corners']['htc'] = array(
      '#type' => 'fieldset',
      '#title' => t('IE corners'),
    );
    $form['at']['corners']['htc']['ie_corners'] = array(
      '#type' => 'checkbox',
      '#title' => t('Enable rounded corners for Internet Explorer 6, 7 and 8'),
      '#default_value' => theme_get_setting('ie_corners'),
      '#description' => t('<p>NOTE: For this to work you must download install the <a href="!link">CSS3PIE</a> library to <code>sites/all/libraries/PIE</code>.</p><p>The path should be like this: <code>sites/all/libraries/PIE/PIE.php</code></p><p>Usage is at your own risk. Elements such as text inside other JS items such as drop menus or slideshows may be degraded in Internet Explorer.</p>', array('!link' => 'http://css3pie.com/')),
    );
    $form['at']['pagestyles'] = array(
      '#type' => 'fieldset',
      '#title' => t('Page style'),
    );
    $form['at']['pagestyles']['body_background'] = array(
      '#type' => 'select',
      '#title' => t('Background overlay'),
      '#default_value' => theme_get_setting('body_background'),
      '#description' => t('This setting adds a texture or pattern over the main background color.'),
      '#options' => array(
        'bb-n'   => t('None'),
        'bb-b'   => t('Bubbles'),
        'bb-hs'  => t('Horizontal stripes'),
        'bb-dp'  => t('Diagonal pattern'),
        'bb-dll' => t('Diagonal lines - loose'),
        'bb-dlt' => t('Diagonal lines - tight'),
        'bb-sd'  => t('Small dots'),
        'bb-bd'  => t('Big dots'),
      ),
    );
    $form['at']['menu_styles'] = array(
      '#type' => 'fieldset',
      '#title' => t('Menu Styles'),
    );
    $form['at']['menu_styles']['menu_bullets'] = array(
      '#type' => 'select',
      '#title' => t('Menu Bullets'),
      '#default_value' => theme_get_setting('menu_bullets'),
      '#description' => t('Change the default menu bullets.'),
      '#options' => array(
        'mb-n' => t('None'),
        'mb-dd' => t('Drupal default'),
        'mb-ah' => t('Arrow head'),
        'mb-ad' => t('Double arrow head'),
        'mb-ca' => t('Circle arrow'),
        'mb-fa' => t('Fat arrow'),
        'mb-sa' => t('Skinny arrow'),
      ),
    );
  } // endif styles
  // Collapse all other forms.
  $form['theme_settings']['#collapsible'] = TRUE;
  $form['theme_settings']['#collapsed'] = TRUE;
  $form['logo']['#collapsible'] = TRUE;
  $form['logo']['#collapsed'] = TRUE;
  $form['favicon']['#collapsible'] = TRUE;
  $form['favicon']['#collapsed'] = TRUE;
}
