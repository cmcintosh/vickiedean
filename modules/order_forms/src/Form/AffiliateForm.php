<?php
/**
 * @file
 * Contains \Drupal\Order_forms\Form\AffiliateForm.
 */

namespace Drupal\order_forms\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Affiliate form.
 */
class AffiliateForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'affiliate_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['#theme'] = 'affiliate_account';
     $form['email'] = array(
      '#type' => 'email',
      '#placeholder' => 'Affiliate E-Mail',
    );
    $form['pass'] = array (
      '#type' => 'password',
      '#placeholder' => 'Password',
    );
    $form['recovery'] = array (
      '#type' => 'label',
      '#title' => t('Forgotten Password'),
      '#value' => $this->t('Forgotten Password'),
    );
   
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Login'),
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