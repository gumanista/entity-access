<?php

namespace Drupal\entity_access;

use Drupal\user;

class PermissionHandler extends user\PermissionHandler {
  /**
   * {@inheritdoc}
   */
  protected function getYamlDiscovery() {
    if (!isset($this->yamlDiscovery)) {
      $this->yamlDiscovery = new YamlDiscovery(
        'entity_permissions',
        $this->moduleHandler->getModuleDirectories()
      );
    }

    return $this->yamlDiscovery;
  }

  /**
   * {@inheritdoc}
   */
  protected function buildPermissionsYaml() {
    return parent::buildPermissionsYaml();
  }
}
