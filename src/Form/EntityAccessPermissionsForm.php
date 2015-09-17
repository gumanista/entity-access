<?php

namespace Drupal\entity_access\Form;

use Drupal\user;

class EntityAccessPermissionsForm extends user\UserPermissionsForm {
  /**
   * {@inheritdoc}
   */
  public function __construct(
    PermissionHandlerInterface $permission_handler,
    RoleStorageInterface $role_storage,
    ModuleHandlerInterface $module_handler
  ) {
    $this->permissionHandler = $permission_handler;
    $this->roleStorage       = $role_storage;
    $this->moduleHandler     = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_access.permissions'),
      $container->get('entity.manager')->getStorage('entity_access_role'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'entity_access_admin_permissions';
  }

  /**
   * {@inheritdoc}
   */
  function submitForm(array &$form, FormStateInterface $form_state) {

  }
}
