<?php
/**
 * @file
 * Contains \Drupal\vickie\Controller\VickieUserAPI.
 */

namespace Drupal\vickie\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

/**
 * Form controller for the vickie entity edit forms.
 *
 * @ingroup vickie report
 */

class VickieUserAPI extends ControllerBase {

	// For User vickie user login

  public function user_login(Request $request = null) {

    $autoloader = require_once 'autoload.php';

	$kernel = new DrupalKernel('prod', $autoloader);

	$request = Request::createFromGlobals();
	$response = $kernel->handle($request);

	// ID of the user.
	$uid = 1;
	$user = Drupal\user\Entity\User::load($uid);
	user_login_finalize($user);

	$response->send();

	$kernel->terminate($request, $response);

  }

  // For vickie User Registration

  public function user_register(Request $request = nulls){

	$language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $user = \Drupal\user\Entity\User::create();

	//Mandatory settings
    $user->setPassword('password');
    $user->enforceIsNew();
    $user->setEmail('email');
    $user->setUsername('user_name');//This username must be unique and accept only a-Z,0-9, - _ @ .

	//Optional settings
    $user->set("init", 'email');
    $user->set("langcode", $language);
    $user->set("preferred_langcode", $language);
    $user->set("preferred_admin_langcode", $language);
    //$user->set("setting_name", 'setting_value');
    $user->activate();

	//Save user
    $res = $user->save();
  }

}