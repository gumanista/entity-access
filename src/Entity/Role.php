<?php

/**
 * @file
 * Contains \Drupal\user\Entity\Role.
 */

namespace Drupal\entity_access\Entity;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\user\RoleInterface;

/**
 * Defines the user role entity class.
 *
 * @ConfigEntityType(
 *   id = "entity_access_role",
 *   label = @Translation("Entity Access Roles"),
 *   handlers = {
 *     "storage" = "Drupal\user\RoleStorage",
 *     "access" = "Drupal\user\RoleAccessControlHandler",
 *     "list_builder" = "Drupal\user\RoleListBuilder",
 *     "form" = {
 *       "default" = "Drupal\user\RoleForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     }
 *   },
 *   admin_permission = "administer entity roles",
 *   config_prefix = "entity_role",
 *   static_cache = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "weight" = "weight",
 *     "label" = "label"
 *   },
 *   links = {
 *     "delete-form" = "/admin/people/entity-roles/manage/{entity_access_role}/delete",
 *     "edit-form" = "/admin/people/entity-roles/manage/{entity_access_role}",
// *     "edit-permissions-form" = "/admin/people/permissions/{entity_access_role}",
 *     "collection" = "/admin/people/entity-roles",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "weight",
 *     "is_admin",
 *     "permissions",
 *   }
 * )
 */
class Role extends Drupal\user\Entity\Role {

}
