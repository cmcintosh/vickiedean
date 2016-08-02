<?php
/**
 * @file
 * report_type_product.features.inc
 */

/**
 * Implements hook_commerce_product_default_types().
 */
function report_type_product_commerce_product_default_types() {
  $items = array(
    'report_type' => array(
      'type' => 'report_type',
      'name' => 'Report Type',
      'description' => '',
      'help' => '',
      'revision' => 1,
    ),
  );
  return $items;
}

/**
 * Implements hook_ctools_plugin_api().
 */
function report_type_product_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "commerce_autosku" && $api == "autosku_pattern") {
    return array("version" => "1");
  }
}
