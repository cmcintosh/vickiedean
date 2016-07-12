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
    return 'return_forms_contribute_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['#theme'] = 'product_return';
    $form['fname'] = array (
      '#type' => 'text',
      '#placeholder' => 'First Name',
    );
    $form['lname'] = array (
      '#type' => 'text',
      '#placeholder' => 'last Name',
    );
    $form['email'] = array(
      '#type' => 'email',
      '#placeholder' => 'E-Mail Address',
    );
     $form['tel_num'] = array (
      '#type' => 'tel',
      '#placeholder' => 'Telephone',
    );
    $form['order_id'] = array(
      '#type' => 'text',
      '#placeholder' => 'Order ID',
    );
    $form['order_date'] = array(
      '#type' => 'date',
    );
    $form['product_name'] = array(
      '#type' => 'text',
      '#placeholder' => 'Product Name',
    );
    $form['product_code'] = array(
      '#type' => 'text',
      '#placeholder' => 'Product Code',
    );
    $form['quantity'] = array(
      '#type' => 'text',
      '#placeholder' => 'Quantity',
    );
    $form['reason'] = array(
      '#type' => 'radios',
      '#options' => array(
          t('Dead On Arrival'),
          t('Faulty, please supply details'),
          t('Order Error'),
          t('Other, please supply details'),
          t('Received Wrong Item'),
      )
    );
    $form['open'] = array(
      '#type' => 'radios',
      '#options' => array(
          t('Yes'),
          t('No'),
      )
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['back'] = array(
      '#type' => 'button',
      '#value' => $this->t('Back'),
      '#button_type' => 'primary',
    );
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
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