<?php

namespace Drupal\quaontasona\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\quantasona\QuantasonareportInterface;
use Drupal\user\UserInterface;
use Drupal\Core\Entity\EntityChangedTrait;

/**
* Defines the QuantasonaReport
*
* @ingroup quantasona_report
*
* @ContentEntityType(
*   id = "quantasona_report",
*   label = @Translation("Quantasona Report entity"),
*   handlers = {
*     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
*     "list_builder" = "Drupal\quantasona\Entity\Controller\QuantasonaReportListBuilder",
*     "form" = {
*       "add" = "Drupal\quantasona\Form\QuantasonaReportForm",
*       "edit" = "Drupal\quantasona\Form\QuantasonaReportForm",
*       "delete" = "Drupal\quantasona\Form\QuantasonaReportDeleteForm",
*     },
*     "access" = "Drupal\quantasona\QuantasonaReportAccessControlHandler",
*   },
*   list_cache_contexts = { "user" },
*   base_table = "quantasona_report",
*   admin_permission = "administer quantasona_report entity",
*   entity_keys = {
*     "id" = "id",
*     "label" = "name",
*     "uuid" = "uuid"
*   },
*   links = {
*     "canonical" = "/report/{quantasona_report}",
*     "edit-form" = "/report/{quantasona_report}/edit",
*     "delete-form" = "/report/{quantasona_report}/delete",
*     "collection" = "/admin/content/reports"
*   },
*   field_ui_base_route = "quantasona.quantasona_report_settings",
* )
*
*/
class QuantasonaReport extends ContentEntityBase implements QuantasonaReportInterface {

  use EntityChangedTrait;

  /**
  * {@inheritdoc}
  */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += array(
      'user_id' => \Drupal::currentUser()->id(),
    );
  }

  /**
  * {@inheritdoc}
  */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
  * {@inheritdoc}
  */
  public function getChangedTime() {
    return $this->get('changed')->value;
  }

  /**
  * {@inheritdoc}
  */
  public function getOwner() {
    return $this->get('user_id')->entity;
  }

  /**
  * {@inheritdoc}
  */
  public function getOwnerId() {
    return $this->get('user_id')->target_id;
  }

  /**
  * {@inheritdoc}
  */
  public function setOwnerId($uid) {
    $this->set('user_id', $uid);
    return $this;
  }

  /**
  * {@inheritdoc}
  */
  public function setOwner(UserInterface $account) {
    $this->set('user_id', $account->id());
    return $this;
  }

  /**
  * {@inheritdoc}
  */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields['id'] = BasefieldDefinitions::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the QuantonaReport entity.'))
      ->setReadOnly(TRUE);

    $fields['uuid'] = BaseFieldDefinitions::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the QuontaSonaReport entity.'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinitions::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the QuantasonaReport entity.'))
      ->setSettings(array(
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ))
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -6
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -6,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

      $fields['bad_mic'];
      $fields['email_address'];
      $fields['location'];
      $fields['phone'];
      $fields['session_gender'];
      $fields['session_age'];

      return $fields;
  }
}
