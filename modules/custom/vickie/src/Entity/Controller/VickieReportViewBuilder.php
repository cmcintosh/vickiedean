<?php

namespace Drupal\vickie\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\EntityViewBuilder;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Routing\UrlGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class VickieReportViewBuilder extends EntityViewBuilder {

  /**
   * {@inheritdoc}
   */
  public function view(EntityInterface $entity, $view_mode = 'full', $langcode = NULL) {
    // Get the current user
    $user = \Drupal::currentUser();
    $build = array(
      '#markup' => 'Could not properly render report'
    );
    if ($user->hasPermission('administer report entity')) {
      $build = $this->adminView($entity, $view_mode, $langcode);
    }
    else {
      $build = $this->customerView($entity, $view_mode, $langcode);
    }

    return $build;
  }

  private function adminView(EntityInterface $entity, $view_mode = 'full', $langcode = NULL) {
    $build = array();
    $build['raw'] = array(
      '#type' => 'fieldset',
      '#title' => t('Raw Report Information')
    );

    $build['raw']['name'] = array(
      '#type' => 'item',
      '#title' => t('Client Name'),
      '#markup' => $entity->get('name')->value
    );

    $build['raw']['bad_mic'] = array(
      '#type' => 'item',
      '#title' => t('Microphone'),
      '#markup' => $entity->get('bad_mic')->value ? 'Bad' : 'Good'
    );

    $build['raw']['location'] = array(
      '#type' => 'item',
      '#title' => t('Location'),
      '#markup' => $entity->get('location')->value
    );

    $build['raw']['gender'] = array(
      '#type' => 'item',
      '#title' => t('Gender'),
      '#markup' => $entity->get('gender')->value
    );

    $build['raw']['age'] = array(
      '#type' => 'item',
      '#title' => t('Age'),
      '#markup' => $entity->get('age')->value
    );

    $build['raw']['phone'] = array(
      '#type' => 'item',
      '#title' => t('Phone'),
      '#markup' => $entity->get('phone')->value
    );

    $build['raw']['email'] = array(
      '#type' => 'item',
      '#title' => t('Email'),
      '#markup' => $entity->get('email')->value
    );

    $header = array(
      'c_file' => t('Short Name'),
      'n_file' => t('Description'),
      'audio' => t('Audio Recording'),
      'csv' => t('CSV Data')
    );

    $rows = array();
    foreach($entity->get('files') as $delta => $row) {
      $rows[] = array(
        'c_file' => $row->entity->get('c_file')->value,
        'n_file' => $row->entity->get('n_file')->value,
        'audio'  => array(
          'data' => array(
            '#theme' => 'file_link',
            '#description' => t('Right Click To Download'),
            '#file' => $row->entity->get('audio')->entity
          )
        ),
        'csv' => array(
            'data' => array(
              '#theme' => 'file_link',
              '#description' => t('Right Click To Download'),
              '#file' => $row->entity->get('csv')->entity
            )
          )
        );
    }

    $build['raw']['files'] = array(
      '#theme' => 'table',
      '#title' => t('Report Files'),
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => t('No Files have been uploaded for this report yet.')
    );

    $report_csv = $entity->get('field_report_results')->entity;

    if ($report_csv) {
      $build['raw']['field_report_results'] = array(
        '#theme' => 'file_link',
        '#description' => t('Processed CSV'),
        '#file' => $report_csv,
      );
    }
    else {
      $build['raw']['field_report_results'] = array(
        '#type' => 'item',
        '#title' => t('Processed CSV'),
        '#markup' => t('No File has been uploaded for this report.')
      );
    }

    $build['preview'] = array(
      '#type' => 'fieldset',
      '#title' => t('Preview'),
      '#description' => t('This is a preview of the reports available for purchase.'),
      '#suffix' => '<div style="min-height:1000px;"></div>'
    );

    return $build;
  }

  private function customerView(EntityInterface $entity, $view_mode = 'full', $langcode = NULL) {

    return $build;
  }

}
