<?php
/**
 * @file
 * Contains \Drupal\amazing_forms\Form\ContributeForm.
 */

namespace Drupal\order_forms\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Contribute form.
 */
class ContributeForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'order_forms_contribute_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['#theme'] = 'user_account';
     $form['email'] = array(
      '#type' => 'email',
      '#placeholder' => 'E-Mail Address',
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

    if (!UrlHelper::isValid($form_state->getValue('video'), TRUE)) {
      $form_state->setErrorByName('video', $this->t("The video url '%url' is invalid.", array('%url' => $form_state->getValue('video'))));
    }

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