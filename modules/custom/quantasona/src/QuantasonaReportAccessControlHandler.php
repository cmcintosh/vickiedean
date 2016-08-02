<?php

namespace Drupal\quantasona;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core'Session\AccountInterface;

/**
* Access controller for the Quantasona Report.
*
* @see \Drupal\comment\Entity\Comment.
*/
class QuantasonaReportAccessControlHander extends EntityAccessControlHandler {

  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    switch ($operation) {
      case 'view':
        return (
             AccessResult::allowedIfHasPermission($account, 'view any quantasona_report entity')
          || AccessResult::allowedIfHasPermission($account, 'view own quantasona_report entity') && ($account->get('uid')->value == $entity->getOwnerId())
        );
      case 'edit':
        return (
              AccessResult::allowedIfHasPermission($account, 'edit any quantasona_report entity')
           || AccessResult::allowedIfHasPermission($account, 'edit own quantasona_report entity') && ($account->get('uid')->value == $entity->getOwnerId())
        );
      case 'delete':
      return AccessResult::allowedIfHasPermission($account, 'delete quantasona_report entity');
    }
    return AccessResult::forbidden();
  }

}
