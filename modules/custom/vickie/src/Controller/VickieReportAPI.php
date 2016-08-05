<?php
/**
* @file
* Contains \Drupal\vickie\Controller\VickieUserAPI.
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

/**
* Form controller for the vickie entity edit forms.
*
* @ingroup vickie
*/

class VickieReportAPI extends ControllerBase {


	// For uploading files in vickie report entity.
 	public function upload_file(Request $request = null) {
 		
 	}

 	// Creates new report for the Vickie Site.
 	public function report_create(Request $request = null) {

 		// gets all the data from the POST.
    	$data = $request->request->all();

	    /** @var \Drupal\vickie\Entity\VickieReport $report */
	    $report = entity_create('vickie_report', array(
	      'location' => $data['location'],
	      'phone' => $data['phone'],
	    ));

	    $report->save();
      	// Return new report credentials
      	return new JsonResponse( array( 'Sucess' => t('You have successfully created the report') ) );

      	
      	//return new JsonResponse( array( 'location' => $data['location'] ) );
 	}

}