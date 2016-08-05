<?php
/**
 * @file
 * zziggers_elements.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function zziggers_elements_user_default_roles() {
  $roles = array();

  // Exported role: Client.
  $roles['Client'] = array(
    'name' => 'Client',
    'weight' => 3,
  );

  // Exported role: Clinic Admin.
  $roles['Clinic Admin'] = array(
    'name' => 'Clinic Admin',
    'weight' => 5,
  );

  // Exported role: Patient.
  $roles['Patient'] = array(
    'name' => 'Patient',
    'weight' => 6,
  );

  // Exported role: Physician.
  $roles['Physician'] = array(
    'name' => 'Physician',
    'weight' => 4,
  );

  return $roles;
}
