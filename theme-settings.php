<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 * Done as THEMENAME_form_system_theme_settings_alter(), reference http://drupal.org/node/177868
 */
function unl_five_form_system_theme_settings_alter(&$form, &$form_state) {
  global $user;

  // Add checkboxes to the Toggle Display form to hide UNL template items on an affiliate site
  $form['theme_settings'] += array(
    'toggle_unl_banner' => array(
      '#type' => 'checkbox',
      '#title' => t('UNL affiliate banner'),
      '#default_value' => theme_get_setting('toggle_unl_banner'),
      '#access' => theme_get_setting('unl_affiliate'),
    ),
    'toggle_unl_branding' => array(
      '#type' => 'checkbox',
      '#title' => t('UNL branding elements'),
      '#default_value' => theme_get_setting('toggle_unl_branding'),
      '#access' => theme_get_setting('unl_affiliate'),
    ),
    'toggle_unl_breadcrumb' => array(
      '#type' => 'checkbox',
      '#title' => t('UNL breadcrumb'),
      '#default_value' => theme_get_setting('toggle_unl_breadcrumb'),
      '#access' => theme_get_setting('unl_affiliate'),
    ),
    'toggle_unl_search' => array(
      '#type' => 'checkbox',
      '#title' => t('UNL search box'),
      '#default_value' => theme_get_setting('toggle_unl_search'),
      '#access' => theme_get_setting('unl_affiliate'),
    ),
    'toggle_unl_tools' => array(
      '#type' => 'checkbox',
      '#title' => t('UNL tools'),
      '#default_value' => theme_get_setting('toggle_unl_tools'),
      '#access' => theme_get_setting('unl_affiliate'),
    ),
  );

  $form['intermediate_breadcrumbs'] = array(
    '#type' => 'fieldset',
    '#title' => t('Intermediate breadcrumbs'),
    '#description' => t('Breadcrumbs that are displayed between the UNL breadcrumb and this site\'s breadcrumb'),
    'site_name_abbreviation' => array(
      '#type' => 'textfield',
      '#title' => t('Site name abbreviation'),
      '#default_value' => theme_get_setting('site_name_abbreviation'),
      '#description' => t('An abbreviated version of your site\'s name to use in breadcrumbs.'),
      '#weight' => 10,
    ),
  );
  $intermediate_breadcrumbs = theme_get_setting('intermediate_breadcrumbs');
  for ($i = 0; $i < 5; $i++) {
    $form['intermediate_breadcrumbs'][] = array(
      'text' => array(
        '#type' => 'textfield',
        '#field_prefix' => t('Text ' . ($i + 1)),
        '#default_value' => isset($intermediate_breadcrumbs[$i]) ? $intermediate_breadcrumbs[$i]['text'] : '',
        '#parents' => array('intermediate_breadcrumbs' , $i, 'text'),
      ),
      'href' => array(
        '#type' => 'textfield',
        '#field_prefix' => t('&nbsp;URL ' . ($i + 1)),
        '#default_value' => isset($intermediate_breadcrumbs[$i]) ? $intermediate_breadcrumbs[$i]['href'] : '',
        '#parents' => array('intermediate_breadcrumbs' , $i, 'href'),
      ),
    );
  }

  $form['unl_head'] = array(
    '#type' => 'fieldset',
    '#title' => t('Site specific CSS and JavaScript'),
    '#weight' => -45,
    'unl_css' => array(
      '#title' => t('CSS'),
      '#description' => t('Custom CSS rules for this site. Do not include @style tags.', array('@style' => '<style>')),
      '#type' => 'textarea',
      '#rows' => 16,
      '#default_value' => theme_get_setting('unl_css'),
    ),
    'unl_js' => array(
      '#title' => t('JavaScript'),
      '#description' => t('Custom Javascript for this site. Do not include @script tags.', array('@script' => '<script>')),
      '#type' => 'textarea',
      '#rows' => 16,
      '#default_value' => theme_get_setting('unl_js'),
    ),
    'head_html' => array(
      '#title' => t('Head HTML'),
      '#description' => t('HTML to be added inside the @head tags.', array('@head' => '<head>')),
      '#type' => 'textarea',
      '#rows' => 3,
      '#default_value' => theme_get_setting('head_html'),
    ),
  );

  $grid_class_sidebar_first = theme_get_setting('grid_class_sidebar_first');
  $grid_class_sidebar_second = theme_get_setting('grid_class_sidebar_second');
  $grid_class_content_one_sidebar = theme_get_setting('grid_class_content_one_sidebar');
  $grid_class_content_two_sidebars = theme_get_setting('grid_class_content_two_sidebars');

  $form['advanced_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Advanced settings'),
    'grid_class_sidebar_first' => array(
      '#type' => 'textfield',
      '#title' => t('Sidebar first grid class'),
      '#default_value' => !empty($grid_class_sidebar_first) ? theme_get_setting('grid_class_sidebar_first') : 'bp768-wdn-col-one-fourth',
      '#description' => t('Refer to http://wdn.unl.edu/resources/grid'),
    ),
    'grid_class_sidebar_second' => array(
      '#type' => 'textfield',
      '#title' => t('Sidebar second grid class'),
      '#default_value' => !empty($grid_class_sidebar_second) ? theme_get_setting('grid_class_sidebar_second') : 'bp768-wdn-col-one-fourth',
    ),
    'grid_class_content_one_sidebar' => array(
      '#type' => 'textfield',
      '#title' => t('Content grid class when one sidebar is present'),
      '#default_value' => !empty($grid_class_content_one_sidebar) ? theme_get_setting('grid_class_content_one_sidebar') : 'bp768-wdn-col-three-fourths',
    ),
    'grid_class_content_two_sidebars' => array(
      '#type' => 'textfield',
      '#title' => t('Content grid class when both sidebars are present'),
      '#default_value' => !empty($grid_class_content_two_sidebars) ? theme_get_setting('grid_class_content_two_sidebars') : 'bp768-wdn-col-two-fourths',
    ),
    'disable_drill_down' => array(
      '#type' => 'checkbox',
      '#title' => t('Disable drill-down menus'),
      '#default_value' => theme_get_setting('disable_drill_down'),
      '#description' => t('Turns off changing the navigation if you are 2+ levels deep with even deeper enabled menu links.'),
    ),
    'wdn_beta' => array(
      '#type' => 'checkbox',
      '#title' => t('Use WDN beta/development CSS and JavaScript'),
      '#default_value' => theme_get_setting('wdn_beta'),
      '#description' => t('Replaces the links in &lt;head&gt; to the stable /wdn directory with the latest development versions.'),
      '#access' => _unl_five_use_wdn_beta(),
    ),
    'unl_affiliate' => array(
      '#type' => 'checkbox',
      '#title' => t('Affiliate site'),
      '#default_value' => theme_get_setting('unl_affiliate'),
      '#description' => t('Grants access to the Color scheme picker, Logo image settings, Shortcut icon settings on this page for customizing the UNL template.'),
      '#access' => !!count(array_intersect(array('administrator'), array_values($GLOBALS['user']->roles))),
    ),
    'unl_rso' => array(
      '#type' => 'checkbox',
      '#title' => t('RSO site'),
      '#default_value' => theme_get_setting('unl_rso'),
      '#description' => t('Adds text to the header and footer that designates the site as belonging to a Registered Student Organization.'),
      '#access' => !!count(array_intersect(array('administrator'), array_values($GLOBALS['user']->roles))),
    ),
    'unl_speedy' => array(
      '#type' => 'checkbox',
      '#title' => t('Speedy template'),
      '#default_value' => theme_get_setting('unl_speedy'),
      '#description' => t('Use the Speedy version of the Fixed template.'),
      '#access' => !!count(array_intersect(array('administrator'), array_values($GLOBALS['user']->roles))),
    ),
  );
  $form['#submit'][] = 'unl_five_form_system_theme_settings_submit';
  _unl_five_attach_syntax_highlighting($form['unl_head']);
}

/**
 * Form submit callback.
 */
function unl_five_form_system_theme_settings_submit($form, &$form_state) {
  // Delete existing files, then save them.
  foreach (array('css', 'js') as $type) {
    _unl_five_delete_file('custom_unl_five.' . $type);
    if (drupal_strlen(trim($form_state['values']['unl_' . $type])) !== 0) {
      _unl_five_save_file($form_state['values']['unl_' . $type], 'custom_unl_five.' . $type);
      drupal_set_message('File saved to custom/custom_unl_five.' . $type . ' and will be automatically included on all pages.');
    }
  }
  drupal_flush_all_caches();
}

/**
 * Saves CSS & Javascript in the file system (but only if not empty).
 */
function _unl_five_save_file($data, $filename) {
  $path = variable_get('unl_custom_code_path', 'public://custom');
  file_prepare_directory($path, FILE_CREATE_DIRECTORY);
  return file_unmanaged_save_data($data, $path . '/' . $filename, FILE_EXISTS_REPLACE);
}

/**
 * Deletes CSS & Javascript from the file system (but only if it exists).
 */
function _unl_five_delete_file($filename) {
  $path = variable_get('unl_custom_code_path', 'public://custom') . '/' . $filename;
  if (file_exists($path)) {
    return file_unmanaged_delete($path);
  }
  return FALSE;
}

/**
 * Attaches syntax highlighting to a form element.
 */
function _unl_five_attach_syntax_highlighting(&$form, $css = TRUE, $js = TRUE) {
  $form['#attached']['js'][] = 'sites/all/libraries/codemirror/lib/codemirror.js';
  $form['#attached']['css'][] = 'sites/all/libraries/codemirror/lib/codemirror.css';
  if ($css) {
    $form['#attached']['js'][] = 'sites/all/libraries/codemirror/mode/css/css.js';
  }
  if ($js) {
    $form['#attached']['js'][] = 'sites/all/libraries/codemirror/mode/javascript/javascript.js';
  }
  $form['#attached']['css'][] = 'sites/all/libraries/codemirror/theme/default.css';
  $form['#attached']['js'][] = drupal_get_path('theme', 'unl_five') . '/codemirror/unl.js';
  $form['#attached']['css'][] = drupal_get_path('theme', 'unl_five') . '/codemirror/unl.css';
}

/**
 * Custom access function to determine if it is staging or live since the live site should not allow WDN dev code to be used.
 * @TODO: Make this better using something other than site_name.
 */
function _unl_five_use_wdn_beta() {
  $site_name = variable_get('site_name');
  if (strpos($site_name, 'STAGING') === 0) {
    return TRUE;
  }
  return FALSE;
}