<?php

/**
 * @file
 * Contains \Drupal\search_api\Tests\ExampleContentTrait.
 */

namespace Drupal\search_api\Tests;

use Drupal\search_api\Entity\Index;
use Drupal\search_api\Utility;

/**
 * Contains helpers to create data that can be used by tests.
 */
trait ExampleContentTrait {

  /**
   * The generated test entities, keyed by ID.
   *
   * @var \Drupal\entity_test\Entity\EntityTest[]
   */
  protected $entities = array();

  /**
   * Sets up the necessary bundles on the test entity type.
   */
  protected function setUpExampleStructure() {
    entity_test_create_bundle('item');
    entity_test_create_bundle('article');
  }

  /**
   * Creates several test entities.
   */
  protected function insertExampleContent() {
    $count = \Drupal::entityQuery('entity_test')->count()->execute();

    $this->entities[1] = entity_create('entity_test', array(
        'id' => 1,
        'name' => 'foo bar baz',
        'body' => 'test test',
        'type' => 'item',
        'keywords' => array('orange'),
      ));
    $this->entities[1]->save();
    $this->entities[2] = entity_create('entity_test', array(
        'id' => 2,
        'name' => 'foo test',
        'body' => 'bar test',
        'type' => 'item',
        'keywords' => array('orange', 'apple', 'grape'),
      ));
    $this->entities[2]->save();
    $this->entities[3] = entity_create('entity_test', array(
        'id' => 3,
        'name' => 'bar',
        'body' => 'test foobar',
        'type' => 'item',
      ));
    $this->entities[3]->save();
    $this->entities[4] = entity_create('entity_test', array(
        'id' => 4,
        'name' => 'foo baz',
        'body' => 'test test test',
        'type' => 'article',
        'keywords' => array('apple', 'strawberry', 'grape'),
      ));
    $this->entities[4]->save();
    $this->entities[5] = entity_create('entity_test', array(
        'id' => 5,
        'name' => 'bar baz',
        'body' => 'foo',
        'type' => 'article',
        'keywords' => array('orange', 'strawberry', 'grape', 'banana'),
      ));
    $this->entities[5]->save();
    $count = \Drupal::entityQuery('entity_test')->count()->execute() - $count;
    $this->assertEqual($count, 5, "$count items inserted.");
  }

  /**
   * Indexes all (unindexed) items on the specified index.
   *
   * @param string $index_id
   *   The ID of the index on which items should be indexed.
   *
   * @return int
   *   The number of successfully indexed items.
   */
  protected function indexItems($index_id) {
    $index = Index::load($index_id);
    return $index->index();
  }

  /**
   * Returns the internal field ID for the given entity field name.
   *
   * @param string $field_name
   *   The field name.
   *
   * @return string
   *   The internal field ID.
   */
  protected function getFieldId($field_name) {
    return Utility::createCombinedId('entity:entity_test', $field_name);
  }

  /**
   * Returns the item IDs for the given entity IDs.
   *
   * @param array $entity_ids
   *   An array of entity IDs.
   *
   * @return string[]
   *   An array of item IDs.
   */
  protected function getItemIds(array $entity_ids) {
    $translate_ids = function ($entity_id) {
      return Utility::createCombinedId('entity:entity_test', $entity_id . ':en');
    };
    return array_map($translate_ids, $entity_ids);
  }

}
