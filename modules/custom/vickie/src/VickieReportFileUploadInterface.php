<?php

namespace Drupal\vickie;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a VickieReportFileUpload entity.
 *
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup vickie
 */
interface VickieReportFileUploadInterface extends ContentEntityInterface, EntityOwnerInterface
/*, EntityChangedInterface */
{

}
