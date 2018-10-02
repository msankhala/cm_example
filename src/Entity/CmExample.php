<?php

namespace Drupal\cm_example\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the CmExample configuration entity.
 *
 * @ConfigEntityType(
 *   id = "cm_example",
 *   label = @Translation("CM Example"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\cm_example\Form\CmExampleForm",
 *       "edit" = "Drupal\cm_example\Form\CmExampleForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     },
 *     "list_builder" = "Drupal\cm_example\Controller\CmExampleListBuilder",
 *   },
 *  config_prefix = "cm_example",
 *  admin_permission = "administer site configuration",
 *  entity_keys = {
 *    "id" = "id",
 *    "label" = "label",
 *  },
 *  links = {
 *    "edit-form" = "/admin/structure/cm_example/{cm_example}",
 *    "delete-form" = "/admin/structure/cm_example/{cm_example}/delete",
 *    "collection" = "/admin/structure/cm_example",
 *   }
 * )
 */
class CmExample extends ConfigEntityBase implements CmExampleInterface  {
  /**
   * The machine name for the configuration entity.
   *
   * @var string
   */
  protected $id;
  /**
   * The human-readable name of the configuration entity.
   *
   * @var string
   */
  public $label;
}
