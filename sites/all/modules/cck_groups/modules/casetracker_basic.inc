<?php

/**
 * Implementation of hook_cck_groups().
 */
function casetracker_basic_cck_groups() {

  return array(
    // Name of parent node type.
    'parent_type' => 'casetracker_basic_project',
    // Name of child node type.
    'child_types' => array(
      'casetracker_basic_case' => array(
        'name' => 'casetracker_basic_case',
        // Callback function to feed a node to and return the group it's
        // assigned to. We use this to avoid having to do an extra db_query,
        // as generally the data will be already loaded in the node.
        'parent_callback' => 'casetracker_basic_cck_groups_get_group',
        // Form element that identifies user on child node editing form.
        // An array is given to allow for nested form elements.
        'user_field' => array('casetracker_case_information', 'assign_to'),
      ),
    ),
  );
}

/**
 * Callback, return the ID of the group (project) that a case belongs to.
 */
function casetracker_basic_cck_groups_get_group($node) {
  // Commented out because brittle. Won't be set if module weights are altered.
  // return isset($node->pid) ? $node->pid : FALSE;
  return db_result(db_query('SELECT pid FROM {casetracker_case} WHERE vid = %d', $node->vid));
}