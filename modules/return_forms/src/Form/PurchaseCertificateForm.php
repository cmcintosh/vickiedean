<?php
/**
 * @file
 * Contains \Drupal\amazing_forms\Form\ContributeForm.
 */

namespace Drupal\return_forms\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Contribute form.
 */
class PurchaseCertificateForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form-horizontal';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['#theme'] = 'gift_certificate';
    $form['recipientname'] = array (
      '#type' => 'textfield',
    );
    $form['recipientemail'] = array(
      '#type' => 'email',
    );
    $form['yourname'] = array (
      '#type' => 'textfield',
    );
    $form['youremail'] = array(
      '#type' => 'email',
    );
    $form['general'] = array(
      '#type' => 'radios',
      '#options' => array(
        'General' => ('General'),
      ),
    );
    $form['message'] = array(
      '#type' => 'textarea',
    );
    $form['amount'] = array (
      '#type' => 'address_field',
    );
    $form['address'] = array (
      '#type' => 'address',
    );
    $form['understand'] = array(
      '#title' => t('I understand that gift certificates are non-refundable.'),
      '#type' => 'checkbox',
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Continue'),
      '#button_type' => 'primary',
    );
    return $form;

  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }
}
?> 