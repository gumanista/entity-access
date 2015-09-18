<?php

namespace Drupal\entity_access;

interface EntityAccessManagerInterface {
  public function getUserRoles(EntityInterface $entity, AccountInterface $account = NULL);

  public function getUserPermissions(EntityInterface $entity, AccountInterface $account = NULL);

//  public function
}
