<?php
/**
 * @file
 * report_content_type.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function report_content_type_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function report_content_type_node_info() {
  $items = array(
    'report' => array(
      'name' => t('Report'),
      'base' => 'node_content',
      'description' => t('Create a new Report for a Client.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
