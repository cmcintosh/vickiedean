<?php

namespace Drupal\vickie\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\vickie\VickieReportFileUploadInterface;
use Drupal\user\UserInterface;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Field\FieldStorageDefinitionInterface;

/**
 * Defines the VickieReportFileUpload entity.
 *
 * @ingroup vickie
 *
 * @ContentEntityType(
 *   id = "vickie_report_file_upload",
 *   label = @Translation("Report File Uploads"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vickie\Entity\Controller\VickieReportFileUploadListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vickie\Form\VickieReportFileUploadForm",
 *       "edit" = "Drupal\vickie\Form\VickieReportFileUploadForm",
 *       "delete" = "Drupal\vickie\Form\VickieReportFileUploadDeleteForm",
 *     },
 *     "access" = "Drupal\vickie\VickieReportFileUploadAccessControlHandler",
 *   },
 *   list_cache_contexts = { "user" },
 *   base_table = "vickie_report_file_upload",
 *   admin_permission = "administer report_file entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/file_upload_report/{vickie_report_file_upload}",
 *     "edit-form" = "/file_upload_report/{vickie_report_file_upload}/edit",
 *     "delete-form" = "/file_upload_report/{vickie_report_file_upload}/delete",
 *     "collection" = "/admin/content/vickie_report_file_upload/list"
 *   },
 *   field_ui_base_route = "vickie.vickie_report_file_upload_settings",
 * )
 *
 */

 class VickieReportFileUpload extends ContentEntityBase implements VickieReportFileUploadInterface {

   use EntityChangedTrait;

   /**
   * {@inheritdoc}
   */
   public static function preCreate(EntityStorageInterface $storage_controller, array &$values){
     parent::preCreate($storage_controller, $values);
     $values += array(
       'user_id' => \Drupal::currentUser()->id(),
     );
   }

   /**
   * {@inheritdoc}
   */
   public function getID() {
     return $this->get('id')->value;
   }

   /**
   * {@inheritdoc}
   */
    public function getLocation() {
      return $this->get('location')->value;
    }

   /**
   * {@inheritdoc}
   */
    public function setLocation($location) {
      $this->get('location')->value = $location;
      return $this;
    }

   /**
   * {@inheritdoc}
   */
    public function getPhone() {
      return $this->get('phone')->value;
    }

   /**
   * {@inheritdoc}
   */
    public function setPhone($phone) {
      $this->get('phone')->value = $phone;
      return $this;
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

     // Standard fields, used for a primary index

      $fields['id'] = BaseFieldDefinition::create('integer')
       ->setLabel(t('Report ID'))
       ->setDescription(t('The Unique ID for this report.'))
       ->setReadOnly(TRUE);

      $fields['uuid'] = BaseFieldDefinition::create('uuid')
        ->setLabel(t('UUID'))
        ->setDescription(t('The UUID of the Contact entity.'))
        ->setReadOnly(TRUE);

      $fields['c_file'] = BaseFieldDefinition::create('string')
        ->setLabel(t('C_File.'))
        ->setDescription(t('The short string indicating for the audio recordings.'))
        ->setSettings(array(
          'default_value' => '',
          'max_length' => 255,
          'text_processing' => 0,
        ))
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'string',
          'weight' => -4
        ))
        ->setDisplayOptions('form', array(
          'type' => 'string_textfield',
          'weight' => -4
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setdisplayConfigurable('view', TRUE);

      $fields['n_file'] = BaseFieldDefinition::create('string')
        ->setLabel(t('N_File.'))
        ->setDescription(t('The long description related to the audio recordings.'))
        ->setSettings(array(
          'default_value' => '',
          'max_length' => 255,
          'text_processing' => 0,
        ))
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'string',
          'weight' => -4
        ))
        ->setDisplayOptions('form', array(
          'type' => 'string_textfield',
          'weight' => -4
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setdisplayConfigurable('view', TRUE);

      $fields['audio'] = BaseFieldDefinition::create('file')
          ->setLabel(t('Audio Files'))
          ->setDescription(t('Report audio files uploaded for this report.'))
          ->setSetting('file_extensions', 'mp3 wav')
          ->setDefaultValue('')
          ->setDisplayOptions('view', array(
            'label' => 'above',
            'type' => 'file',
            'weight' => -4,
          ))
          ->setDisplayOptions('form', array(
            'type' => 'file',
            'weight' => -4,
          ))
          ->setDisplayConfigurable('form', TRUE)
          ->setDisplayConfigurable('view', TRUE)
          ->setCardinality(FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED);

      $fields['csv'] = BaseFieldDefinition::create('file')
        ->setLabel(t('CSV File'))
        ->setDescription(t('Report CSV files uploaded for this report.'))
        ->setSetting('file_extensions', 'csv')
        ->setDefaultValue('')
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'file',
          'weight' => -4,
        ))
        ->setDisplayOptions('form', array(
          'type' => 'file',
          'weight' => -4,
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE)
        ->setCardinality(FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED);

      return $fields;
   }

 }
