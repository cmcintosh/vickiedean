<?php

namespace Drupal\vickie\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class VickieReportFileUploadSettingsForm.
 *
 * @package Drupal\vickie\Form
 *
 * @ingroup vickie
 */
class VickieReportFileUploadSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'vickie_report_file_upload_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['vickie_report_file_upload_settings']['#markup'] = 'Settings form for Vickie Report File Uploads Settings. Manage field settings here.';
    return $form;
  }

}
