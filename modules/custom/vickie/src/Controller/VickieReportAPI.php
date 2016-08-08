<?php
/**
* @file
* Contains \Drupal\vickie\Controller\VickieReportAPI.
* Represents entities as resources.
*
* @RestResource(
*   id = "vickie_report_rest,
*   label = @Translation("Vickie Report Rest"),
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
use Drupal\Core\DrupalKernel;
use Drupal\Core\Entity;
use Drupal\vickie\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\file\Entity\File;

/**
* Form controller for the vickie entity edit forms.
*
* @ingroup vickie
*/

class VickieReportAPI extends ControllerBase {


	// For uploading files in vickie report entity.
 	public function upload_file(Request $request = null) {
    $data = $request->request->all();

    if(!($this->authorizeAccess($data))) {
      // user validation failed, and is not set as a new user.
      return new JsonResponse (array( 'error' => t('Could not authorize the account.') ) );
    }

    // Get the information for the audio file.
    $audioFile = $request->files->get('file');
    $handle = fopen($audioFile, 'r');
    $audio = file_save_data($handle, 'public://' .$audioFile->getClientOriginalName() );
    fclose($handle);

    // Get the information for the csv file.
    $csvFile = $request->files->get('csv');
    $handle = fopen($csvFile, 'r');
    $csv = file_save_data($handle, 'public://' .$csvFile->getClientOriginalName() );
    $csv_id = ($csv) ? array($csv->ID()) : array(0);
    fclose($handle);

    /**
    * Programmatically Create the VickieReportFileUpload Entity.
    */
    $values = array(
      'report_id' => $data['r'],
      'c_file' => $data['c_file'],
      'n_file' => $data['n_file'],
      'audio' => array($audio->ID()),
      'csv' => $csv_id
    );
    // If Error
    // return new JsonResponse (array('error' => t('There was an issue saving the uploaded files.')));

    //return new JsonResponse (array( $values ) );
    try {
        $entity = entity_create('vickie_report_file_upload', $values);
  	    $entity->save();

        $upload_id = $entity->ID();

        // We need to programmatically load the VickieReport entity, and update it with the new file.
        $report = \Drupal::entityManager()->getStorage('vickie_report')->load($values['report_id']);
        $report->files[] = $upload_id;
        $report->save();
      }
      catch(Exception $e) {
        watchdog_exception('vickie_report_api', $e);
        return new JsonResponse (array('error' => $e->getMessage()));
      }

      if ($report) {
        return new JsonResponse( array( 'success' => array('report_id' => $report->getID() ) ) );
      }
      else {
        return new JsonResponse (array( 'error' => t('There was an issue Uploading files.') ) );
      }

 	}

 	// Creates new report for the Vickie Site.
 	public function report_create(Request $request = null) {

 		// gets all the data from the POST.
    	$data = $request->request->all();

    // Validate the user information here, if we cannot validate the user return an error.
    if(!($this->authorizeAccess($data))) {
      // user validatioin failed, and is not set as a new user.
      return new JsonResponse (array( 'error' => t('Could not authorize the account.') ) );
    }


      $values = array(
        'bad_mic'  => $data['bad_mic'],
        'email'    => $data['email_address'],
        'location' => $data['location'],
        'phone'    => $data['phone'],
        'name'     => $data['session_name'],
        'gender'   => $data['session_gender'],
        'age'      => $data['session_age'],
        'audio'    => array(0),
        'csv'      => array(0),
      );

      foreach($values as $id => $value) {
        if ($value == '') {
          return new JsonResponse (array( 'error' => t('There was an issue saving the report. You were missing the !field_name field.', array('!field_name' => $id)) ) );
        }
      }

      try {
        $report = entity_create('vickie_report', $values);
  	    $report->save();
      }
      catch(Exception $e) {
        watchdog_exception('vickie_report_api', $e);
        return new JsonResponse (array('error' => $e->getMessage()));
      }

      if ($report) {
        return new JsonResponse( array( 'success' => array('report_id' => $report->getID() ) ) );
      }
      else {
        return new JsonResponse (array( 'error' => t('There was an issue saving the report.') ) );
      }
 	}

  public function authorizeAccess($data) {
    // Return new user session to client.
    $uid = \Drupal::service('user.auth')->authenticate($data['username'], $data['password']);
    $session_manager = \Drupal::service('session_manager');
    return $uid;
  }
}
