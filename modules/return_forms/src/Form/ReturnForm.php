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
class ReturnForm extends FormBase {
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

    $form['#theme'] = 'product_return';
    $form['fname'] = array (
      '#type' => 'textfield',
      '#placeholder' => 'First Name',
    );
    $form['lname'] = array ( 
      '#type' => 'textfield',
      '#placeholder' => 'last Name',
    );
    $form['email'] = array(
      '#type' => 'email',
      '#placeholder' => 'E-Mail Address',
      '#id' => 'input- email',
    );
     $form['tel_num'] = array (
      '#type' => 'tel',
      '#placeholder' => 'Telephone',
    );
    $form['order_id'] = array(
      '#type' => 'textfield',
      '#placeholder' => 'Order ID',
    );
    $form['order_date'] = array(
      '#type' => 'textfield',
      '#placeholder' => 'Order Date',
      '#name' => 'date_ordered',
      '#value' => '',
      '#data-date-format' => 'YYYY-MM-DD',
      '#id' => 'input-date-ordered',
    );
    $form['product_name'] = array(
      '#type' => 'textfield',
      '#placeholder' => 'Product Name',
    );
    $form['product_code'] = array(
      '#type' => 'textfield',
      '#placeholder' => 'Product Code',
    );
    $form['quantity'] = array(
      '#type' => 'textfield',
      '#placeholder' => 'Quantity',
    );
    $form['reason'] = array(
      '#type' => 'radios',
      '#options' => array(
        'Dead On Arrival' =>t('Dead On Arrival'),
        'Faulty, please supply details' =>t('Faulty, please supply details'),
        'Order Error' =>t('Order Error'),
        'Other, please supply details'  =>t('Other, please supply details'),
        'Received Wrong Item' =>t('Received Wrong Item')
      ),
    );
    $form['open'] = array(
      '#type' => 'radios',
      '#class' => 'radio-inline',
      '#options' => array(
        'Yes' =>t('Yes'),
        'No' =>t('No'),
      ),
    );
    $form['details'] = array(
      '#type' => 'textarea',
      '#placeholder' => 'Faulty Or other Details',
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
     if (strlen($form_state->getValue('tel_num')) < 10) {
        $form_state->setErrorByName('tel_num', $this->t('Telephone number is to short.'));
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