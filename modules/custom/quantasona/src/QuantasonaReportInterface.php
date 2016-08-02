<?php

namespace Drupal\quantasona;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core'Entity\EntityChangedInterface;

interface QuantasonaReportInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface { }
