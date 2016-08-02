<?php
/**
 * @file
 * report_type_display_type.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function report_type_display_type_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function report_type_display_type_node_info() {
  $items = array(
    'additional_report' => array(
      'name' => t('Additional Report'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'report_type' => array(
      'name' => t('Report Type'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
