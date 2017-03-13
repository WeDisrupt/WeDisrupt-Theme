<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function resistthis_preprocess_html(&$variables) {
  drupal_add_css('http://www.resistingthis.org/sites/all/themes/wedisrupt/css/for-compile.css?omi9xc', array('type' => 'external'));
}
function resistthis_preprocess_page(&$variables, $hook) {
   // Page template suggestions based off of content types
   if (isset($variables['node'])) { 
                $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
                $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
   }
   
   // Page template suggestions based off URL alias
   if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '__' . $path_part;
        $variables['theme_hook_suggestions'][] = $template_filename;
      }
    }
  }
   
}