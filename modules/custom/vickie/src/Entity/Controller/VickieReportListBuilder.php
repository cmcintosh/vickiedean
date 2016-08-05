<?php

namespace Drupal\vickie\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Routing\UrlGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a list controller for vickie entity.
 *
 * @ingroup vickie
 */
class VickieReportListBuilder extends EntityListBuilder {

  /**
   * The url generator.
   *
   * @var \Drupal\Core\Routing\UrlGeneratorInterface
   */
  protected $urlGenerator;


  /**
   * {@inheritdoc}
   */
  public static function createInstance(ContainerInterface $container, EntityTypeInterface $entity_type) {
    return new static(
      $entity_type,
      $container->get('entity.manager')->getStorage($entity_type->id()),
      $container->get('url_generator')
    );
  }

  /**
   * Constructs a new VickieReportListBuilder object.
   *
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \Drupal\Core\Entity\EntityStorageInterface $storage
   *   The entity storage class.
   * @param \Drupal\Core\Routing\UrlGeneratorInterface $url_generator
   *   The url generator.
   */
  public function __construct(EntityTypeInterface $entity_type, EntityStorageInterface $storage, UrlGeneratorInterface $url_generator) {
    parent::__construct($entity_type, $storage);
    $this->urlGenerator = $url_generator;
  }


  /**
   * {@inheritdoc}
   *
   * We override ::render() so that we can add our own content above the table.
   * parent::render() is where EntityListBuilder creates the table using our
   * buildHeader() and buildRow() implementations.
   */
  public function render() {
    $build['description'] = array(
      '#markup' => $this->t('Content Entity Example implements a Vickie Report model. These contacts are fieldable entities. You can manage the fields on the <a href="@adminlink">Vickie Report admin page</a>.', array(
        '@adminlink' => $this->urlGenerator->generateFromRoute('vickie.vickie_report_settings'),
      )),
    );
    $build['table'] = parent::render();
    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the report list.
   *
   * Calling the parent::buildHeader() adds a column for the possible actions
   * and inserts the 'edit' and 'delete' links as defined for the entity type.
   */
  public function buildHeader() {
    $header['id'] = $this->t('ReportID');
    $header['name'] = $this->t('Name');
    $header['bad_mic'] = $this->t('Bad Mic');
    $header['location'] = $this->t('Location');
    $header['phone'] = $this->t('Phone');
    $header['audio'] = $this->t('Audio');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\vickie\Entity\Report */
    $row['id'] = $entity->id();
    $row['name'] = $entity->link();
    $row['bad_mic'] = $entity->bad_mic->value;
    $row['location'] = $entity->location->value;
    $row['phone'] = $entity->phone->value;
    $row['audio'] = $entity->audio->value;
    return $row + parent::buildRow($entity);
  }

}
