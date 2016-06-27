<?php
/**
 * @file
 * clinic.features.og_features_role.inc
 */

/**
 * Implements hook_og_features_default_roles().
 */
function clinic_og_features_default_roles() {
  $roles = array();

  // Exported OG Role: 'node:clinic:Clinic Administrator'.
  $roles['node:clinic:Clinic Administrator'] = array(
    'gid' => 0,
    'group_type' => 'node',
    'group_bundle' => 'clinic',
    'name' => 'Clinic Administrator',
  );

  // Exported OG Role: 'node:clinic:Physician'.
  $roles['node:clinic:Physician'] = array(
    'gid' => 0,
    'group_type' => 'node',
    'group_bundle' => 'clinic',
    'name' => 'Physician',
  );

  return $roles;
}
