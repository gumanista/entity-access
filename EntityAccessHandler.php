<?php

namespace Drupal\entity_access;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityHandlerInterface;
use Drupal\Core\Entity\EntityTypeInterface;

class EntityAccessAccessControlHandler extends EntityAccessControlHandler implements EntityHandlerInterface {
  /**
   * {@inheritdoc}
   */
  public static function createInstance(ContainerInterface $container, EntityTypeInterface $entity_type) {
    return new static(
      $entity_type,
      $container->get('entity_access.manager')
    );
  }


}
