<?php
/**
 * @file
 * Contains \Drupal\vickie\Controller\VickieUserAPI.
 * Represents entities as resources.
 *
 * @RestResource(
 *   id = "entity",
 *   label = @Translation("Entity"),
 *   serialization_class = "Drupal\Core\Entity\Entity",
 *   deriver = "Drupal\rest\Plugin\Deriver\EntityDeriver",
 *   uri_paths = {
 *     "canonical" = "/entity/{entity_type}/{entity}",
 *     "https://www.drupal.org/link-relations/create" = "/entity/{entity_type}"
 *   }
 * )
 *
 * @see \Drupal\rest\Plugin\Derivative\EntityDerivative
 */

namespace Drupal\vickie\Controller;

 use Drupal\Core\Controller\ControllerBase;
 use Drupal\Core\Form\FormState;
 use Drupal\Core\Entity;
 use Drupal\user\Controller;
 use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Request;

/**
 * Form controller for the vickie entity edit forms.
 *
 * @ingroup vickie report
 */

class VickieUserAPI extends ControllerBase {

	// For vickie user login

  public function user_login(Request $request = null) {

    $data = $request->request->all();

    if ($data['name'] == '' || $data['pass'] == '') {
      	return new JsonResponse( array( 'error' => t('You Must send the name and pass fields when logging in.') ) );
    }
	$form_state = (new FormState())->setValues($data);
    \Drupal::formBuilder()->submitForm('\Drupal\user\Form\UserLoginForm', $form_state);

    	// Check for errors 
    if ($errors = $form_state->getErrors()) {
      	// Return errors to notify the client.
      	return new JsonResponse( array( 'error' => $errors ) );
    }
    else {
      	// Return 200 if sucessful login.
      	return new JsonResponse( array( 'Success' => t('Successfully login Response 200') ) );
    }
  }
 // For vickie User Registration
 public function user_register(Request $request = null) {

   // gets all the data from the POST.
   $data = $request->request->all();

   // Validate the e-mail address first.
   if (!\Drupal::service('email.validator')->isValid($data['mail'])) {
     return new JsonResponse( array( 'error' => 'Invalid e-mail address' ) );
   }

   // Create password if it was not provided.
   $password = $data['pass'] ? $data['pass'] : user_password();

   /** @var \Drupal\user\Entity\User $user */
   $user = entity_create('user', array(
     'name' => $data['name'],
     'mail' => $data['mail'],
     'pass' => $password,
   ));

   // Validate the object.
   $errors = $user->validate();
   if ($errors->count() > 0) {
     // Return errors to notify the client.
     return new JsonResponse( array( 'error' => $errors->__toString() ) );
   } else {
     // Save new user
     $user->save();
     // Return new user credentials
     return new JsonResponse( array( 'Sucess' => t('You have successfully created the account') ) );
   }
 }
}