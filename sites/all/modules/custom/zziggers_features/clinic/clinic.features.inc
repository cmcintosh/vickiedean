<?php
/**
 * @file
 * clinic.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function clinic_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function clinic_node_info() {
  $items = array(
    'clinic' => array(
      'name' => t('Clinic'),
      'base' => 'node_content',
      'description' => t('Create a new Clinic for a customer.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implements hook_default_og_membership_type().
 */
function clinic_default_og_membership_type() {
  $items = array();
  $items['clinic_admin'] = entity_import('og_membership_type', '{
    "name" : "clinic_admin",
    "description" : "Clinic Admin",
    "language" : ""
  }');
  $items['physician'] = entity_import('og_membership_type', '{ "name" : "physician", "description" : "Physician", "language" : "" }');
  return $items;
}
