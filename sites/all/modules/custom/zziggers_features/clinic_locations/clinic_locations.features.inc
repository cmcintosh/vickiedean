<?php
/**
 * @file
 * clinic_locations.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function clinic_locations_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function clinic_locations_node_info() {
  $items = array(
    'location' => array(
      'name' => t('Location'),
      'base' => 'node_content',
      'description' => t('Locations are sites that you visit and can be used to set up site-specific contacts for delivery of reports.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
