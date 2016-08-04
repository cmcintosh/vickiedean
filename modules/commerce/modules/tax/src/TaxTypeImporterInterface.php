<?php

namespace Drupal\commerce_tax;

/**
 * Defines a tax type importer.
 */
interface TaxTypeImporterInterface {

  /**
   * Gets all importable tax types.
   *
   * @return \CommerceGuys\Tax\Model\TaxTypeInterface
   *   Array of importable tax types.
   */
  public function getImportableTaxTypes();

  /**
   * Creates a tax type entity from an ID.
   *
   * @param string $taxTypeId
   *   The id of a tax type.
   *
   * @return \CommerceGuys\Tax\Model\TaxTypeInterface
   *   The tax type entity.
   */
  public function createTaxType($taxTypeId);

}
