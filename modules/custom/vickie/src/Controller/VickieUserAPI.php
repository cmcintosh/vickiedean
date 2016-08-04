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

/**
 * Form controller for the vickie entity edit forms.
 *
 * @ingroup vickie report
 */

class VickieUserAPI extends ControllerBase {

	// For User vickie user login

  public function user_login() {

	$form_state = (new FormState())->setValues($_POST);
    \Drupal::formBuilder()->submitForm('\Drupal\user\Form\UserLoginForm', $form_state);

    // Check for errors from the from
    if ($errors = $form_state->getErrors()) {
      // Return errors to notify the client.
      return new JsonResponse( array( 'error' => $errors ) );
    }
    else {
      // Return new user session to client.
      $uid = \Drupal::service('user.auth')->authenticate($_POST['name'], $_POST['pass']);
      $session_manager = \Drupal::service('session_manager');
      $session_id = $session_manager->getId();
      return new JsonResponse( array( 'uid' => $uid, 'session_id' => $session_id ) );
    }

  }

  // For vickie User Registration

  public function user_register(){

 // Validate the e-mail address first.
    if (!\Drupal::service('email.validator')->isValid($_POST['mail'])) {
      return new JsonResponse( array( 'error' => 'Invalid e-mail address' ) );
    }

    // Create password if it was not provided.
    $password = $_POST['pass'] ? $_POST['pass'] : user_password();

    /** @var \Drupal\user\Entity\User $user */
    $user = entity_create('user', array(
      'name' => $_POST['name'],
      'mail' => $_POST['mail'],
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
      return new JsonResponse( array( 'user' => $user->toArray() ) );
    }
}
}