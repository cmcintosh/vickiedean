<?php
/**
 * @file
 * zziggers_elements.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function zziggers_elements_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function zziggers_elements_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_default_profile2_type().
 */
function zziggers_elements_default_profile2_type() {
  $items = array();
  $items['physician'] = entity_import('profile2_type', '{
    "userCategory" : true,
    "userView" : true,
    "type" : "physician",
    "label" : "Physician",
    "weight" : "0",
    "data" : { "registration" : 1, "use_page" : 0 }
  }');
  return $items;
}
