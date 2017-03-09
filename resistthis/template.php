<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function resistthis_preprocess_html(&$variables) {
  drupal_add_css('http://www.resistingthis.org/sites/all/themes/wedisrupt/css/for-compile.css?omi9xc', array('type' => 'external'));
}