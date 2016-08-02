<?php
/**
 * @file
 * additional_report.features.inc
 */

/**
 * Implements hook_commerce_product_default_types().
 */
function additional_report_commerce_product_default_types() {
  $items = array(
    'additional_report' => array(
      'type' => 'additional_report',
      'name' => 'Additional Report',
      'description' => '',
      'help' => '',
      'revision' => 0,
    ),
  );
  return $items;
}

/**
 * Implements hook_ctools_plugin_api().
 */
function additional_report_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "commerce_autosku" && $api == "autosku_pattern") {
    return array("version" => "1");
  }
}
