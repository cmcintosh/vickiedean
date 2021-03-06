<?php

namespace Drupal\vickie\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\vickie\VickieReportInterface;
use Drupal\user\UserInterface;
use Drupal\Core\Entity\EntityChangedTrait;

/**
 * Defines the ContentEntityExample entity.
 *
 * @ingroup vicke_report
 *
 * @ContentEntityType(
 *   id = "vickie_report",
 *   label = @Translation("Report"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vickie\Entity\Controller\VickieReportListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vickie\Form\VickieReportForm",
 *       "edit" = "Drupal\vickie\Form\VickieReportForm",
 *       "delete" = "Drupal\vickie\Form\VickieReportDeleteForm",
 *     },
 *     "access" = "Drupal\vickie\VickieReportAccessControlHandler",
 *   },
 *   list_cache_contexts = { "user" },
 *   base_table = "vickie_report",
 *   admin_permission = "administer vickie_report entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/report/{vickie_report}",
 *     "edit-form" = "/report/{vickie_report}/edit",
 *     "delete-form" = "/report/{vickie_report}/delete",
 *     "collection" = "/admin/content/vickie_report/list"
 *   },
 *   field_ui_base_route = "vickie_report.vickie_report_settings",
 * )
 *
 */

 class VickieReport extends ContentEntityBase implements VickieReportInterface {

   use EntityChangeTrait;

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
   public static function baseFielddefinitions(EntityTypeInterface $entity_type) {

     // Standard fields, used for a primary index
     $fields['id'] = BaseFieldDefinition::create('integer')
       ->setLabel(t('ID'))
       ->setDescription(t('The Unique ID for this report.'))
       ->setReadOnly(TRUE);

      $fields['uuid'] = BaseFieldDefinition::create('uuid')
        ->setLabel(t('UUID'))
        ->setDescription(t('The UUID of the Contact entity.'))
        ->setReadOnly(TRUE);

      $fields['name'] = BaseFieldDefinition::create('string')
        ->setLabel(t('name'))
        ->setDescription(t('The name of the Report entity.'))
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
          'weight' => -6
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setdisplayConfigurable('view', TRUE);

        $fields['bad_mic'] = BaseFieldDefinition::create('boolean')
          ->setLabel(t('Bad Mic'))
          ->setDescription('t('Stores the status of a bad mic.')')
          ->setSettings(array( 'default_value' => 0))
          ->setDisplayOptions('view', array(
            'label' => 'above',
            'type' => 'string',
            'weight' => -5
          ))
          ->setdisplayOptions('form', array(
            'type' => 'boolean_checkbox',
            'weight' => -5
          ))
          ->setDisplayConfigurable('form', TRUE)
          ->setdisplayConfigurable('view', TRUE);

        $fields['location'] = BaseFieldDefinition::create('string')
          ->setLabel(t('Location'))
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

          $fields['phone'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Phone'))
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

        /*
        * @todo: Below set limitation on the File Type to wav or mp3 Files for the audio field.
        * Make sure to enable display / editing of the file fields, see the File module's
        * FieldType and FieldFormatter classes for details
        */

        $fields['audio'] = BaseFieldDefinition::create('file')
          ->setLabel(t('Audio Files'))
          ->setDescription(t('Report audio files uploaded for this report.'))
          ->setCardinality(FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED)
          ->setSettings(

          )
          ->setDisplayOptions('view', array())
          ->setDisplayOptions('form', array());
      return $fields;
   }

 }
